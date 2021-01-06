<?php

namespace App\Http\Middleware;

use App\Models\Cart;
use Closure;
use Illuminate\Http\Request;

class FindOrCreateCart
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth('user')->check()) {
            $cart = $request->user('user')->carts()->where('store_id', $request->store->id);

            $cart->exists()
                ? $cart = $cart->first()
                : $cart = $request->user('user')->carts()->create(['store_id' => $request->store->id]);

            $request->merge(['cart' => $cart]);
        }
        return $next($request);
    }
}
