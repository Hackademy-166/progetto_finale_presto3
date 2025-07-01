<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\File;

class CreateArticle extends Component
{
    use WithFileUploads;
    public $article;
    #[Validate('required|string|min:3|max:100')]
    public $title;
    #[Validate('required|string|min:3|max:100')]
    public $description;
    #[Validate('required|string|min:3|max:100')]
    public $price;
    public $category;
    public $images = [];
    public $temporary_images;
    


    public function rules(){
        return [
            'title' => 'required|string|min:3|max:100',
            'description' => 'required|string|min:3|max:100',
            'price' => 'required|string|min:3|max:100',
        ];
    }

        public function messages(){
            return [
                'required' => 'Il campo :attribute è richiesto obbligatoriamente.',
                'min' => 'Il campo :attribute deve contenere almeno :min caratteri.',
                'max' => 'Il campo :attribute non può superare :max caratteri.',
                'string' => 'Il campo :attribute deve essere un testo.',
            ];
    }

    public function store(){
        $this->validate();
        $this->article= Article::create([
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price.'€',
            'category_id' => $this->category,
            'user_id' => auth()->user()->id,
        ]);
        if (count($this->images) > 0) {
            foreach ($this->images as $image) {
                $newFileName = "articles/{$this->article->id}";
                $newImage = $this->article->images()->create([
                    'path' => $image->store($newFileName, 'public')
                ]);
                dispatch(new ResizeImage($newImage->path, 300, 300));
            }
        File::deleteDirectory(storage_path('/app/livewire-tmp'));
        }
        session()->flash('message', 'Articolo creato con successo!');
        $this->reset();
    }

    protected function cleanForm(){
        $this->title = '';
        $this->description = '';
        $this->category = '';
        $this->price = '';
        $this->images = [];
    }

    public function updatedTemporaryImages (){
        if ($this->validate([
            'temporary_images.*' => 'image|max:2048',
            'temporary_images'=> 'max:10'
        ])) {
        foreach ($this->temporary_images as $image) {
        $this->images[] = $image;
        }
            }
    }

    public function removeImage($key){
        if (in_array($key, array_keys($this->images))) {
        unset ($this->images [$key]);
        }
    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.create-article', compact('categories'));
    }

    // public function showMessage()
    // {
    //     session()->flash('message', 'Articolo inserito con successo!');
    //     // dispatch evento JS dopo 3 secondi
    //     $this->dispatchBrowserEvent('hide-alert', [], 3000);
    // }

}
