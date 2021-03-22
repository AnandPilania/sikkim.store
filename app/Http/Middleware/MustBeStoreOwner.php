<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Store;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MustBeStoreOwner
{
    public function handle(Request $request, Closure $next)
    {
        return $this->store() == $request->store
            ? $next($request)
            : redirect()->route('store.home', $request->store);
    }

    protected function store(): Authenticatable
    {
        return Auth::guard('store')->user();
    }
}
