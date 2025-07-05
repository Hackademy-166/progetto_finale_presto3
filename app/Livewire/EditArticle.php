<?php

namespace App\Livewire;

use App\Models\Image;
use App\Models\Article;
use Livewire\Component;
use App\Models\Category;
use App\Jobs\RemoveFaces;
use App\Jobs\ResizeImage;
use Livewire\Attributes\Validate;
use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use Illuminate\Support\Facades\File;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class EditArticle extends Component
{
    use WithFileUploads;
    public $article;
    #[Validate('required|string|min:3|max:100')]
    public $title;
    #[Validate('required|string|min:3|max:255')]
    public $description;
    #[Validate('required|string|min:3|max:100')]
    public $price;
    public $category_id;
    public $user_id;
    public $is_accepted;
    public $images= [];
    public $existingImages= [];
    public $temporary_images;
    
    public function mount(){
        $this->title = $this->article->title;
        $this->description = $this->article->description;
        $this->price = $this->article->price;
        $this->category_id = $this->article->category_id;
        $this->images = $this->article->images;
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
        
        public function editArticle(Image $images){
            $this->validate();
            $this->article->update([
                'title' => $this->title,
                'description' => $this->description,
                'price' => $this->price.'€',
                'category_id' => $this->category_id,
                'user_id' => auth()->user()->id,
            ]);
            
            if (count($this->images) > 0) {
                foreach ($this->images as $image) {
                    $this->article->images()->create([
                        'path' => $image->store('images', 'public'),
                    ]);
                }
            };
            $this->article->setAccepted(null);
            return redirect(route('article.index'))->with('success', 'Articolo modificato con successo! Il nostro staff revisionerà il tuo articolo!');
            
            if (count($this->images) > 0) {
                foreach ($this->images as $image) {
                    $newFileName = "articles/{$this->article->id}";
                    $newImage = $this->article->images()->create([
                        'path' => $image->store($newFileName, 'public')]);
                        // dispatch(new ResizeImage($newImage->path, 300, 300));
                        // dispatch(new GoogleVisionSafeSearch($newImage->id));
                        // dispatch(new GoogleVisionLabelImage($newImage->id));
                        
                        RemoveFaces::withChain([
                            new ResizeImage($newImage->path, 300, 300),
                            new GoogleVisionSafeSearch($newImage->id),
                            new GoogleVisionLabelImage($newImage->id),
                            ])->dispatch($newImage->id);
                        }
                        File::deleteDirectory(storage_path('/app/livewire-tmp'));
                    }
                    
                    session()->reflash('message_modify', 'Articolo modificato con successo');  
                    $this->reset();
                }
                
                public function rules(){
                    return[
                        'title' => 'required|string|min:3|max:100',
                        'description' => 'required|string|min:3|max:255',
                        'price' => 'required|string|min:3|max:100',
                    ];
                }
                public function messages(){
                    return [
                        'required' => 'Il campo :attribute è richiesto obbligatoriamente.',
                        'between' => 'Il campo :attribute deve essere compreso tra :min e :max.',
                        'date' => 'Il campo :attribute deve essere una data.',
                        'before' => 'Il campo :attribute deve essere una data precedente alla data di oggi.',
                        'string' => 'Il campo :attribute deve essere un testo.',
                    ];
                }
                
                protected function cleanForm(){
                    $this->title = '';
                    $this->description = '';
                    $this->category_id = '';
                    $this->price = '';
                    $this->images = [];
                }
                
                public function render()
                {
                    $categories= Category::all();
                    return view('livewire.edit-article', compact('categories'));
                }
            }
            