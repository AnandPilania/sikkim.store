<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Store\StoreController;


Route::get('/', [StoreController::class, 'show'])
    ->name('home');

Route::resource('products', ProductController::class);

Route::middleware('auth:user')->group(function () {
    Route::get('/cart', [CartController::class, 'index'])
        ->name('cart.index');

    Route::get('/cart/{product}', [CartController::class, 'store'])
        ->name('cart.store');
});
