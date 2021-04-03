<?php

namespace App\Http\Livewire\Store;

use Livewire\Component;
use Livewire\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\Auth\StatefulGuard;
use Illuminate\Contracts\Auth\Authenticatable;

class Login extends Component
{
    public string $email = '';
    public string $password = '';
    public bool $remember = false;

    protected array $rules = [
        'email' => ['email', 'required'],
        'password' => ['required', 'min:8']
    ];

    public function authenticate(): Redirector|RedirectResponse|null
    {
        if (!$this->guard()->attempt($this->validate(), $this->remember)) {
            $this->addError('email', trans('auth.failed'));
            return null;
        }

        return redirect()->intended()
            ->route('store.admin.dashboard', $this->store()->slug);
    }

    public function render(): Renderable
    {
        return view('livewire.store.login')
            ->layout('layout.auth', ['title' => 'Seller Login']);
    }

    private function guard(): StatefulGuard
    {
        return Auth::guard('store');
    }

    private function store(): Authenticatable
    {
        return $this->guard()->user();
    }
}
