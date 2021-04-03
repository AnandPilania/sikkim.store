<?php

namespace Tests\Feature\Seller\Auth\Passwords;

use Tests\TestCase;
use App\Models\Store;
use Livewire\Livewire;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ResetTest extends TestCase
{
    use RefreshDatabase;

    public function test_password_reset_page_is_rendered()
    {
        $this->withoutExceptionHandling();

        $this->get(route('seller.password.reset', ['token' => $this->token()]))
            ->assertOk()
            ->assertSeeLivewire('store.reset');
    }

    public function test_it_requires_a_valid_token()
    {
        Livewire::test('store.reset', ['token' => ''])
            ->call('resetPassword')
            ->assertHasErrors(['token' => 'required']);
    }

    public function test_it_requires_an_email()
    {
        Livewire::test('store.reset', ['token' => $this->token()])
            ->set('email', '')
            ->call('resetPassword')
            ->assertHasErrors(['email' => 'required']);
    }

    public function test_it_requires_a_valid_email()
    {
        Livewire::test('store.reset', ['token' => $this->token()])
            ->set('email', 'wrongEmail')
            ->call('resetPassword')
            ->assertHasErrors(['email' => 'email']);
    }

    public function test_it_requires_a_password()
    {
        Livewire::test('store.reset', ['token' => $this->token()])
            ->set('email', 'valid@emal.com')
            ->set('password', '')
            ->call('resetPassword')
            ->assertHasErrors(['password' => 'required']);
    }

    public function test_password_must_be_min_8_characters_long()
    {
        Livewire::test('store.reset', ['token' => $this->token()])
            ->set('email', 'valid@emal.com')
            ->set('password', 'short')
            ->call('resetPassword')
            ->assertHasErrors(['password' => 'min']);
    }

    public function test_password_and_passwordConfirmation_should_match()
    {
        Livewire::test('user.auth.passwords.reset', ['token' => $this->token()])
            ->set('password', 'new-password')
            ->set('passwordConfirmation', 'not-new-password')
            ->call('resetPassword')
            ->assertHasErrors(['password' => 'same']);
    }

    public function test_seller_can_reset_password()
    {
        $seller = Store::factory()->create();

        $token = Str::random();

        DB::table('password_resets')->insert(
            [
                'email' => $seller->email,
                'token' => Hash::make($token),
                'created_at' => Carbon::now(),
            ]
        );

        Livewire::test('store.reset', [
            'token' => $token,
        ])
            ->set('email', $seller->email)
            ->set('password', 'new-password')
            ->set('passwordConfirmation', 'new-password')
            ->call('resetPassword');

        $this->assertTrue(Auth::guard('store')->attempt([
            'email' => $seller->email,
            'password' => 'new-password',
        ]));
    }

    private function token(): string
    {
        return Str::random();
    }
}
