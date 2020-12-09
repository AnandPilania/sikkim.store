<?php

namespace App\Http\Livewire\Component;

use App\Models\Preorder;
use Livewire\Component;
use Illuminate\Contracts\Support\Renderable;

class SignupModal extends Component
{
    public string $email = '', $name = '', $phone = '', $business = '';

    public function submit(): void
    {
        $this->register($this->validate(), new Preorder());
        $this->reset();
        session()->flash('success', 'Thank you for signing up, we will get back to you soon.');
    }

    private function register(array $data, Preorder $preorder): void
    {
        $preorder->create($data);
    }

    public function render(): Renderable
    {
        return view('livewire.component.signup-modal');
    }

    protected function getRules(): array
    {
        return [
            'email' => ['required', 'email', 'email:rfc,dns', 'unique:preorders'],
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['digits:10', 'required', 'numeric', 'unique:preorders'],
            'business' => ['required', 'string']
        ];
    }

    protected function getMessages(): array
    {
        return [
            'email.unique' => 'Invalid email address.',
            'phone.unique' => 'Invalid phone number.',
        ];
    }
}
