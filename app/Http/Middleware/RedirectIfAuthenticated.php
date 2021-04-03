<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @param string|null $guard
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $guard = null): mixed
    {
        if (auth($guard)->check()) {
            if ($guard === 'user') return redirect()->route('user.profile');
            if ($guard === 'store') return redirect()->route('store.admin.dashboard', auth()->guard($guard)->user());
        }
        return $next($request);
    }
}
