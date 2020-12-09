<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class PaymentController extends Controller
{
    public function giftCards()
    {
        return view('users.payments.gift_cards');
    }


    public function savedCards()
    {
        return view('users.payments.saved_cards');
    }

    public function refunds()
    {
        return view('users.payments.refunds');
    }
}
