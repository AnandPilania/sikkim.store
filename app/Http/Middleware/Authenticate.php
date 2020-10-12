<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param Request $request
     * @return string|null
     */
    protected function redirectTo(Request $request)
    {
        if (!$request->expectsJson()) {

            if ($request->route()->named('seller.*')) {
                return route('seller.login');
            }

            if ($request->route()->named('store.*')) {
                return route('seller.login');
            }

            return route('login');

        }
    }
}
