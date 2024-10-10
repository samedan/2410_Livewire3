<?php

namespace App\Livewire;

use Livewire\Component;

class Greeter extends Component
{
    public $name = 'Dan';

    public function changeName() {
        $this->name = 'Jefrey';
    }
    
    public function render()
    {
        return view('livewire.greeter');
    }
}
