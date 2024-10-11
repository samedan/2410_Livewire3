<?php

namespace App\Livewire;

use Livewire\Attributes\Reactive;
use Livewire\Component;

class SearchResults extends Component
{
    #[Reactive]
    public $results = [];
    #[Reactive]
    public $show = []; // used in 'search.blade.php' and 'search-results.blade.php'
    public function render()
    {
            return view('livewire.search-results');
    }

    // // X button event to clear the results box
    // public function clear() {
    //     $this->dispatch('search:clear-results');
    // }
}
