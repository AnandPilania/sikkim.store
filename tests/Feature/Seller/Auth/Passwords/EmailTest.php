<?php

namespace Tests\Feature\Seller\Auth\Passwords;

use App\Models\Store;
use App\Notifications\StorePasswordResetNotification;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Queue;
use Livewire\Livewire;
use Tests\TestCase;

class EmailTest extends TestCase
{
    use RefreshDatabase;

    public function test_password_reset_request_page_is_rendered()
    {
        $this->get(route('seller.password.request'))
            ->assertSuccessful()
            ->assertSeeLivewire('store.email');
    }

    public function test_it_requires_an_email_address()
    {
        Livewire::test('store.email')
            ->call('sendResetPasswordLink')
            ->assertHasErrors(['email' => 'required']);
    }

    public function test_it_requires_a_valid_email_address()
    {
        Livewire::test('store.email')
            ->set(['email' => 'invalidEmail'])
            ->call('sendResetPasswordLink')
            ->assertHasErrors(['email' => 'email']);
    }

    public function test_it_sends_password_reset_email_upon_valid_email_address()
    {
        Notification::fake();

        $seller = Store::factory()->create();

        Livewire::test('store.email')
            ->set(['email' => $seller->email])
            ->call('sendResetPasswordLink')
            ->assertHasNoErrors()->assertSet('emailSent', true);

        Notification::assertSentTo($seller, StorePasswordResetNotification::class);

        $this->assertDatabaseHas('password_resets', [
            'email' => $seller->email,
        ]);
    }
}
