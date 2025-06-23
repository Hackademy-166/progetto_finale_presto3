<?php

namespace App\Livewire;

use Livewire\Component;

class CreateArticle extends Component
{
    #[Validate('required|string|min:3|max:100')]
    public $title;
    #[Validate('required|string|min:3|max:100')]
    public $description;
    #[Validate('required|string|min:3|max:100')]
    public $price;

    
    public function render()
    {
        return view('livewire.create-article');
    }
}
