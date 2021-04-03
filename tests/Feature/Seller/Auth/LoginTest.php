<?php

namespace Tests\Feature\Seller\Auth;

use Tests\TestCase;
use App\Models\Store;
use Livewire\Livewire;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function login_page_is_rendered()
    {
        $response = $this->get(route('seller.login'));

        $response->assertStatus(200);
    }

    public function test_auto_redirect_from_base_route()
    {
        $this->get(route('seller.home'))
            ->assertRedirect(route('seller.login'));
    }

    public function test_it_redirects_to_store_dashboard_if_already_logged_in()
    {
        $seller = Store::factory()->create();
        Auth::guard('store')->login($seller);
        $this->get(route('seller.login'))
            ->assertRedirect(route('store.admin.dashboard', $seller));
    }

    public function test_a_seller_can_log_in()
    {
        $seller = Store::factory()->create();

        Livewire::test('store.login')
            ->set('email', $seller->email)
            ->set('password', 'password')
            ->call('authenticate');

        $this->assertAuthenticatedAs($seller, 'store');
        $this->assertFalse(Auth::guard('user')->check());
        $this->assertTrue(Auth::guard('store')->check());
    }

    public function test_it_redirects_to_store_admin_dashboard_upon_successful_login()
    {
        $seller = Store::factory()->create();

        Livewire::test('store.login')
            ->set('email', $seller->email)
            ->set('password', 'password')
            ->call('authenticate')
        ->assertRedirect(route('store.admin.dashboard', $seller));

        $this->assertTrue(Auth::guard('store')->check());
    }

    public function test_it_requires_an_email()
    {
        Livewire::test('store.login')
            ->set('password', 'password')
            ->call('authenticate')
            ->assertHasErrors(['email' => 'required']);

        $this->assertFalse(Auth::guard('store')->check());
    }

    public function test_it_requires_a_password()
    {
        $seller = Store::factory()->create();

        Livewire::test('store.login')
            ->set('email', $seller->email)
            ->call('authenticate')
            ->assertHasErrors(['password' => 'required']);

        $this->assertFalse(Auth::guard('store')->check());
    }

    public function test_it_requires_a_valid_email_address()
    {
        Livewire::test('store.login')
            ->set('email', 'invalidEmail')
            ->set('password', 'password')
            ->call('authenticate')
            ->assertHasErrors(['email' => 'email']);

        $this->assertFalse(Auth::guard('store')->check());
    }

    public function test_it_requires_a_min_8_char_password()
    {
        $seller = Store::factory()->create();

        Livewire::test('store.login')
            ->set('email', $seller->email)
            ->set('password', 'short')
            ->call('authenticate')
            ->assertHasErrors(['password' => 'min']);

        $this->assertFalse(Auth::guard('store')->check());
    }

    public function test_it_fails_to_authenticate_with_wrong_credentials()
    {
        $seller = Store::factory()->create();

        Livewire::test('store.login')
            ->set('email', $seller->email)
            ->set('password', 'bad-password')
            ->call('authenticate')
            ->assertHasErrors('email');

        Livewire::test('store.login')
            ->set('email', 'wrong@email.com')
            ->set('password', 'password')
            ->call('authenticate')
            ->assertHasErrors('email');

        $this->assertFalse(Auth::guard('store')->check());
    }

    public function test_it_authenticates_seller_with_proper_credentials()
    {
        $seller = Store::factory()->create();

        Livewire::test('store.login')
            ->set('email', $seller->email)
            ->set('password', 'password')
            ->call('authenticate')
            ->assertHasNoErrors();

        $this->assertAuthenticatedAs($seller, 'store');
        $this->assertTrue(Auth::guard('store')->check());
    }
}
