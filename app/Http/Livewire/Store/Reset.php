<?php

namespace App\Http\Livewire\Store;

use App\Models\Store;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Contracts\Auth\StatefulGuard;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\Auth\PasswordBroker;

class Reset extends Component
{
    public string $token = '';
    public string $email = '';
    public string $password = '';
    public string $passwordConfirmation = '';

    public function mount(string $token): void
    {
        $this->token = $token;
    }

    public function resetPassword()
    {
        $this->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|same:passwordConfirmation',
        ]);

        $response = $this->broker()->reset(
            [
                'token' => $this->token,
                'email' => $this->email,
                'password' => $this->password
            ],
            function ($seller, $password) {
                $seller->password = Hash::make($password);
                $seller->setRememberToken(Str::random(60));
                $seller->save();
                event(new PasswordReset($seller));
                $this->guard()->login($seller);
            }
        );

        if ($response == Password::PASSWORD_RESET) {
            session()->flash(trans($response));
            return redirect(route('store.admin.dashboard', $this->store()->slug));
        }

        $this->addError('email', trans($response));
    }

    public function render(): Renderable
    {
        return view('livewire.store.passwords.reset')->layout('layout.auth', ['title' => 'Reset Password']);
    }

    protected function broker(): PasswordBroker
    {
        return Password::broker('stores');
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
