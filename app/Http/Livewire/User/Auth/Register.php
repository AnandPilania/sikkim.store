<?php

namespace App\Http\Livewire\User\Auth;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Livewire\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

class Register extends Component
{
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $username = '';
    public string $passwordConfirmation = '';

    public function register(): RedirectResponse
    {
        $this->validate();

        $user = User::create([
            'email' => $this->email,
            'name' => $this->name,
            'username' => $this->username,
            'password' => Hash::make($this->password),
        ]);

        event(new Registered($user));

        session()->flash('registered', 'Registered, please log in.');

        return redirect()->intended(route('login'));
    }

    protected function getRules(): array
    {
        return [
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'min:8', 'same:passwordConfirmation'],
            'username' => ['unique:users', 'required', 'alpha_dash']
        ];
    }

    protected function getMessages(): array
    {
        return [
            'email.unique' => 'Email already registered.'
        ];
    }

    public function render(): View
    {
        return view('livewire.user.auth.register')
            ->layout('layout.auth', ['title' => 'User Registration']);
    }

}
