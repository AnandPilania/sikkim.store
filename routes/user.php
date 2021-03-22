<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\OrderController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\PaymentController;
use App\Http\Controllers\User\AddressController;
use App\Http\Controllers\User\NotificationController;

Route::get('/', UserController::class)
    ->name('home');

Route::get('profile', [ProfileController::class, 'show'])
    ->name('profile');

Route::get('orders/current', [OrderController::class, 'current'])
    ->name('orders.current');

Route::get('orders/completed', [OrderController::class, 'completed'])
    ->name('orders.completed');

Route::get('orders/cancelled', [OrderController::class, 'cancelled'])
    ->name('orders.cancelled');

Route::get('notifications/all', [NotificationController::class, 'index'])
    ->name('notifications.all');

Route::get('notifications/unread', [NotificationController::class, 'unread'])
    ->name('notifications.unread');

Route::get('payments/gift_cards', [PaymentController::class, 'giftCards'])
    ->name('payments.gift_cards');

Route::get('payments/saved_cards', [PaymentController::class, 'savedCards'])
    ->name('payments.saved_cards');

Route::get('payments/refunds', [PaymentController::class, 'refunds'])
    ->name('payments.refunds');

Route::get('addresses', [AddressController::class, 'index'])
    ->name('addresses');


