<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use App\Models\Category;
use Livewire\Attributes\Validate;

class CreateArticle extends Component
{
    #[Validate('required|string|min:3|max:100')]
    public $title;
    #[Validate('required|string|min:3|max:100')]
    public $description;
    #[Validate('required|string|min:3|max:100')]
    public $price;
    // #[Validate('required|string|min:3|max:100')]
    public $category;


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
        Article::create([
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price.'€',
            'category_id' => $this->category,
            'user_id' => auth()->user()->id,
        ]);
        session()->flash('message', 'Articolo creato con successo!');
        $this->reset();


    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.create-article', compact('categories'));
    }
}
