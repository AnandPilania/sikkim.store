<?php

namespace App\Http\Controllers\Preorder;

use App\Models\Preorder;
use App\Http\Controllers\Controller;
use App\Notifications\Preorder\WelcomeNotification;

class VerificationController extends Controller
{
    public function store(Preorder $preorder)
    {
        !$preorder->hasVerifiedEmail() ?: abort(404);
        !$preorder->markEmailAsVerified() ?: $preorder->notify(new  WelcomeNotification());
        return response(['message' => 'success', 'data' => 'Email verification successful']);
    }
}
