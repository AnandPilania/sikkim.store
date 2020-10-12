<?php

namespace App\Http\Livewire\Component;

use Livewire\Component;
use Illuminate\Contracts\Support\Renderable;

class SignupModal extends Component
{
    public string $name;
    public string $actionName;
    public string $subtext = '';
    public string $business = '';
    public string $phone = '';

    public function render(): Renderable
    {
        return view('livewire.component.signup-modal');
    }
}
