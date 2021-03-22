<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\User\Auth\Login;
use App\Http\Livewire\User\Auth\Verify;
use App\Http\Livewire\User\Auth\Register;
use App\Http\Livewire\User\Auth\Passwords\Email;
use App\Http\Livewire\User\Auth\Passwords\Reset;
use App\Http\Livewire\User\Auth\Passwords\Confirm;
use App\Http\Controllers\User\Auth\LogoutController;
use App\Http\Controllers\User\Auth\EmailVerificationController;

Route::domain(config('services.domain.base'))->group(function () {
    Route::middleware(['guest:user'])->group(function () {
        Route::get('login', Login::class)->name('login');
        Route::get('register', Register::class)->name('register');
        Route::get('password/reset', Email::class)->name('password.request');
        Route::get('password/reset/{token}', Reset::class)->name('password.reset');
    });

    Route::middleware('auth:user')->group(function () {
        Route::get('email/verify', Verify::class)->middleware(['throttle:6,1', 'unverified.email'])->name('verification.notice');
        Route::get('password/confirm', Confirm::class)->name('password.confirm');
        Route::post('logout', LogoutController::class)->name('logout');
        Route::get('email/verify/{id}/{hash}', EmailVerificationController::class)->middleware('signed', 'unverified.email')->name('verification.verify');
    });
});

