<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;





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
    
    public function editArticle(){
        $this->validate();
        $this->article->update([
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price.'€',
            'category_id' => $this->category_id,
            'user_id' => auth()->user()->id,
        ]);
    
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

    public function mount(){
        $this->title = $this->article->title;
        $this->description = $this->article->description;
        $this->price = $this->article->price;
        $this->category_id = $this->article->category_id;
        // $this->existing_images = $this->article->images->map(fn($images)=> ['id'   => $images->id,'path' => $images->path,])->toArray();
        
    }

    public function render()
    {
        return view('livewire.edit-article');
    }
}
