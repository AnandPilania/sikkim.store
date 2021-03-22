<?php

use App\Http\Livewire\Store\Email;
use App\Http\Livewire\Store\Login;
use App\Http\Livewire\Store\Reset;
use App\Http\Livewire\Store\Register;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Store\Admin\Auth\LogoutController;

Route::middleware('guest:store')->group(function () {
    Route::get('login', Login::class)
        ->name('login');

    Route::get('register', Register::class)
        ->name('register');

    Route::get('password/reset', Email::class)
        ->name('password.request');

    Route::get('password/reset/{token}', Reset::class)
        ->name('password.reset');
});

Route::post('logout', LogoutController::class)
    ->middleware('auth:store')
    ->name('logout');
