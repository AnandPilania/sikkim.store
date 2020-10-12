<?php

namespace App\Http\Livewire\Store;

use Livewire\Component;
use Illuminate\Support\Facades\Password;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\Auth\PasswordBroker;

class Email extends Component
{
    public $message;
    public string $email = '';
    public bool $emailSent = false;

    public function sendResetPasswordLink()
    {
        $this->validate([
            'email' => ['required', 'email'],
        ]);

        $response = $this->broker()->sendResetLink(['email' => $this->email]);

        if ($response == Password::RESET_LINK_SENT) {
            $this->message = trans($response);
            $this->emailSent = true;
            return;
        }

        $this->addError('email', trans($response));
    }


    public function broker(): PasswordBroker
    {
        return Password::broker('stores');
    }

    public function render(): Renderable
    {
        return view('livewire.store.passwords.email')->layout('layout.auth', ['title' => 'Password Reset']);
    }
}
