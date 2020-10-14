<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function __invoke()
    {
        return redirect()->route('user.profile');
    }
}
