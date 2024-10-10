<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;

class Greeter extends Component
{
    #[Validate('required|min:2')] 
    public $name = '';


    public $greeting = "";
    public $greetingMessage = "";

    // public function changeName($newName) {
    //     $this->name = $newName;
    // }
    public function changeGreeting() {  
        $this->reset('greetingMessage');
        //validation
        $this->validate();
        $this->greetingMessage = "{$this->greeting}, {$this->name}!";
    }

    // public function rules() {
    //     return [
    //         'name' => 'required|min:2',
    //     ];
    // }
    
    public function render()
    {
        return view('livewire.greeter');
    }
}
