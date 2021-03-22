<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Preorder\VerificationController;

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::get('shops', [HomeController::class, 'shops'])
    ->name('shops');

Route::get('/preorder/verify/{preorder}', [VerificationController::class, 'store'])
    ->middleware('signed')
    ->name('preorder.verify');


