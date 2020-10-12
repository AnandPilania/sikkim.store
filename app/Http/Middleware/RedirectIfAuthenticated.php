<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function handle(Request $request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {

            if ($guard == "store") {
                return redirect()->route('store.admin.dashboard', Auth::guard('store')->user()->slug);
            } else {
                return redirect()->route('user.home');
            }

        }

        return $next($request);
    }
}
