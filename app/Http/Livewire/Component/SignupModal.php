<?php

namespace App\Http\Livewire\Component;

use Livewire\Component;
use Illuminate\Contracts\Support\Renderable;

class SignupModal extends Component
{
    public string $name = '';
    public string $subtext = '';

    public function render(): Renderable
    {
        return view('livewire.component.signup-modal');
    }
}
