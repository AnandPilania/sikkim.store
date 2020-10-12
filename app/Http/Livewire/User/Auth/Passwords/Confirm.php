<?php

namespace App\Http\Livewire\User\Auth\Passwords;

use Livewire\Component;

class Confirm extends Component
{
    public $password = '';

    public function confirm()
    {
        $this->validate([
            'password' => 'required|password',
        ]);

        session()->put('auth.password_confirmed_at', time());

        return redirect()->intended(route('home'));
    }

    public function render()
    {
        return view('livewire.user.auth.passwords.confirm')->layout('layout.auth');
    }
}
