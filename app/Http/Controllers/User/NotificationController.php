<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class NotificationController extends Controller
{
    public function index()
    {
        return view('users.notifications.index');
    }

    public function unread()
    {
        return view('users.notifications.unread');
    }
}
