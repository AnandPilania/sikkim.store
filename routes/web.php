<?php

use App\Http\Livewire\Store\Email;
use App\Http\Livewire\Store\Login;
use App\Http\Livewire\Store\Register;
use App\Http\Livewire\Store\Reset;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Store\StoreController;
use App\Http\Controllers\Store\Admin\OrderController;
use App\Http\Controllers\Store\Admin\AccountController;
use App\Http\Controllers\Store\Admin\AnalyticsController;
use App\Http\Controllers\Store\Admin\AttributeController;
use App\Http\Controllers\Store\Admin\CategoryController;
use App\Http\Controllers\Store\Admin\DashboardController;
use App\Http\Controllers\Store\Admin\InvoiceController;
use App\Http\Controllers\Store\Admin\ProductController;
use App\Http\Controllers\Store\Admin\ProfileController;
use App\Http\Controllers\Store\Admin\RefundController;
use App\Http\Controllers\Store\Admin\SecurityController;
use App\Http\Controllers\Store\Admin\ShipmentController;
use App\Http\Controllers\Store\Admin\Auth\LogoutController;

//Base Domain Routes
Route::domain(config('services.domain.base'))->group(function () {
    // Home
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('shops', [HomeController::class, 'shops'])->name('shops');

    // User Routes
    Route::prefix('user')->middleware(['auth:user', 'verified'])->name('user.')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('home');
        Route::get('{user}', [UserController::class, 'show'])->name('profile');
        Route::get('{user}/settings', [UserController::class, 'edit'])->name('settings');
    });
});

Route::domain('seller.' . config('services.domain.base'))->name('seller.')->group(function () {
    Route::middleware('guest:store')->group(function () {
        Route::get('login', Login::class)->name('login');
        Route::get('register', Register::class)->name('register');
        Route::get('password/reset', Email::class)->name('password.request');
        Route::get('password/reset/{token}', Reset::class)->name('password.reset');
    });
    Route::post('logout', LogoutController::class)->middleware('auth:store')->name('logout');
});

// Store Specific Routes
Route::domain('{store}.' . config('services.domain.base'))->name('store.')->group(function () {
    //Store Home
    Route::get('/', [StoreController::class, 'show'])->name('home');
    //Store Dashboard
    Route::prefix('admin')->middleware(['auth:store', 'store.owner'])->name('admin.')->group(function () {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('analytics', [AnalyticsController::class, 'index'])->name('analytics');
        Route::get('orders', [OrderController::class, 'index'])->name('orders');
        Route::get('shipments', [ShipmentController::class, 'index'])->name('shipments');
        Route::get('invoices', [InvoiceController::class, 'index'])->name('invoices');
        Route::get('refunds', [RefundController::class, 'index'])->name('refunds');
        Route::resource('products', ProductController::class);
        Route::resource('categories', CategoryController::class);
        Route::resource('attributes', AttributeController::class);
        Route::get('profile', [ProfileController::class, 'index'])->name('profile');
        Route::get('account', [AccountController::class, 'index'])->name('account');
        Route::get('security', [SecurityController::class, 'index'])->name('security');
    });
});


