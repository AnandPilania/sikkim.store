<?php

namespace App\Http\Livewire\Store;

use App\Models\Store;
use Livewire\Component;
use App\Models\Invitation;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Support\Renderable;

class Register extends Component
{
    public ?string $name = '';
    public ?string $email = '';
    public ?string $password = '';
    public ?string $slug = '';
    public ?string $passwordConfirmation = '';
    public ?string $invitationCode = '';
    public bool $invitationVerified = false;

    public function verifyInvitation()
    {
        $this->validate($this->codeValidationRules(), $this->codeValidationMessages());
        $this->invitationVerified = true;
    }

    public function updatedName($value): void
    {
        $this->slug = Str::slug($value);
    }

    public function register()
    {
        $this->validate($this->registrationRules());

        $store = Store::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'slug' => $this->slug
        ]);

        //TODO Send Welcome Template

        $this->deleteInvitation($this->invitationCode);

        session()->flash('registered', 'Registered, please log in.');

        return redirect()->intended(route('store.profile', $store->slug));
    }

    public function render(): Renderable
    {
        return view('livewire.store.register')->layout('layout.auth', ['title' => 'Store Registration']);
    }

    protected function deleteInvitation(string $code): void
    {
        Invitation::query()->where('code', $code)->delete();
    }

    protected function codeValidationRules(): array
    {
        return [
            'invitationCode' => ['required', 'exists:invitations,code'],
            'email' => ['required', 'unique:stores', 'email:rfc,dns,strict,spoof', 'exists:invitations',
                Rule::exists('invitations')->where(function ($query) {
                    $query->where('code', $this->invitationCode);
                })],
        ];
    }

    protected function codeValidationMessages(): array
    {
        return [
            'invitationCode.exists' => 'Invalid Invitation Code or Already redeemed.',
            'email.unique' => trans('auth.failed'),
            'email.exists' => trans('auth.failed')
        ];
    }

    protected function registrationRules(): array
    {
        return [
            'name' => ['required'],
            'slug' => ['required', 'unique:stores,slug'],
            'password' => ['required', 'min:8', 'same:passwordConfirmation'],
        ];
    }
}
