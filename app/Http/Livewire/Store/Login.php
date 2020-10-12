<?php

namespace App\Http\Livewire\Store;

use App\Models\Store;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\StatefulGuard;
use Illuminate\Contracts\Support\Renderable;

class Login extends Component
{
    public string $email = '';
    public string $password = '';
    public bool $remember = false;
    protected array $rules = ['email' => ['email', 'required'], 'password' => ['required']];

    public function authenticate()
    {
        if (!$this->guard()->attempt($this->validate(), $this->remember)) {
            $this->addError('email', trans('auth.failed'));
            return;
        }

        return redirect()->intended(route('store.admin.dashboard', $this->store()->slug));
    }

    public function render(): Renderable
    {
        return view('livewire.store.login')->layout('layout.auth', ['title' => 'Seller Login']);
    }

    protected function guard(): StatefulGuard
    {
        return Auth::guard('store');
    }

    protected function store(): Store
    {
        return $this->guard()->user();
    }
}
