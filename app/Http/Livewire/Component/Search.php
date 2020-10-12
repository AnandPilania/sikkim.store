<?php

namespace App\Http\Livewire\Component;

use Livewire\Component;
use Illuminate\Contracts\Support\Renderable;

class Search extends Component
{
    public function render(): Renderable
    {
        return view('livewire.component.search');
    }
}
