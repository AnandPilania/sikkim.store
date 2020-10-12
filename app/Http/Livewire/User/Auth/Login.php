<?php

namespace App\Http\Livewire\User\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Support\Renderable;

class Login extends Component
{
    public string $email = '';
    public string $password = '';
    public bool $remember = false;

    protected array $rules = ['email' => ['required', 'email'], 'password' => ['required'],];

    public function authenticate()
    {
//        sleep(5);
        $this->validate();
        if (!Auth::guard('user')->attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            $this->addError('email', trans('auth.failed'));
            return;
        }
        return redirect()->intended(route('user.home'));
    }

    public function render(): Renderable
    {
        return view('livewire.user.auth.login')->layout('layout.auth', ['title'=>'User Login']);
    }
}
