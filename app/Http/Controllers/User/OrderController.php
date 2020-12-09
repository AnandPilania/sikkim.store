<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function current()
    {
        return view('users.orders.current');
    }

    public function completed()
    {
        return view('users.orders.completed');
    }

    public function cancelled()
    {
        return view('users.orders.cancelled');
    }
}
