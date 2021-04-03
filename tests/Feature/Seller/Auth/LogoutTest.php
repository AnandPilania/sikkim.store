<?php

namespace Tests\Feature\Seller\Auth;

use Tests\TestCase;
use App\Models\Store;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LogoutTest extends TestCase
{
    use RefreshDatabase;

    public function test_authenticated_seller_can_logout()
    {
        $seller = Store::factory()->create();
        Auth::guard('store')->login($seller);

        $this->post(route('seller.logout'))
            ->assertRedirect(route('home'));

        $this->assertFalse(Auth::guard('store')->check());
        $this->assertGuest();
    }

    public function test_an_unauthenticated_user_can_not_log_out()
    {
        $this->post(route('seller.logout'))
            ->assertRedirect(route('seller.login'));

        $this->assertFalse(Auth::guard('store')->check());
        $this->assertGuest();
    }
}
