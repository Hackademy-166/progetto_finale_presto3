<?php

namespace App\Livewire;


use App\Models\Profile;
use Livewire\Component;
use Livewire\Attributes\Validate;

class CreateProfile extends Component
{
        public $user_id;
        #[Validate('required|string|min:3|max:100')]
        public $name;
        #[Validate('required|string|min:3|max:100')]
        public $surname;
        #[Validate('required|string|min:3|max:100')]
        public $birthdate;
        #[Validate('required|string|min:3|max:100')]
        public $phone_number;
        #[Validate('required|string|min:3|max:100')]
        public $address;
        #[Validate('required|string|min:3|max:100')]
        public $city;
        #[Validate('required|string|min:3|max:100')]
        public $country;
        #[Validate('required|string|min:3|max:100')]
        public $postal_code;

    public function rules(){
        return [
            'name' => 'required|string|min:2|max:50',
            'surname' => 'required|string|min:2|max:50',
            'birthdate' => 'required|date|before:today',
            'phone_number' => 'required|string|min:10|max:15',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:100',
            'country' => 'required|string|max:100',
            'postal_code' => 'required|string|max:10',  
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

    public function createProfile(){
        $this->validate();
        Profile::create([
        'user_id'=>auth()->user()->id,
        'name'=>$this->name,
        'surname'=>$this->surname,  
        'birthdate'=>$this->birthdate,
        'phone_number'=>$this->phone_number,
        'address'=>$this->address,
        'city'=>$this->city,
        'country'=>$this->country,
        'postal_code'=>$this->postal_code
        ]);
            
        session()->flash('message', 'Profilo creato con successo!');
        $this->reset();
    }
    public function render()
    {
        return view('livewire.create-profile');
    }
}
