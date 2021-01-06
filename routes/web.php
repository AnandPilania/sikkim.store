<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\Preorder\VerificationController;
use App\Http\Controllers\Store\StoreController;
use App\Http\Controllers\User\AddressController;
use App\Http\Livewire\Store\Email;
use App\Http\Livewire\Store\Login;
use App\Http\Livewire\Store\Register;
use App\Http\Livewire\Store\Reset;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\UserController;
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

//Home Routes
Route::domain(config('services.domain.base'))->group(function () {
    // Home
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('shops', [HomeController::class, 'shops'])->name('shops');

    // User Routes
    Route::prefix('user')->middleware(['auth:user', 'verified'])->name('user.')->group(function () {
        Route::get('/', UserController::class)->name('home');
        Route::get('profile', [\App\Http\Controllers\User\ProfileController::class, 'show'])->name('profile');
        Route::get('orders/current', [\App\Http\Controllers\User\OrderController::class, 'current'])->name('orders.current');
        Route::get('orders/completed', [\App\Http\Controllers\User\OrderController::class, 'completed'])->name('orders.completed');
        Route::get('orders/cancelled', [\App\Http\Controllers\User\OrderController::class, 'cancelled'])->name('orders.cancelled');
        Route::get('notifications/all', [\App\Http\Controllers\User\NotificationController::class, 'index'])->name('notifications.all');
        Route::get('notifications/unread', [\App\Http\Controllers\User\NotificationController::class, 'unread'])->name('notifications.unread');
        Route::get('payments/gift_cards', [\App\Http\Controllers\User\PaymentController::class, 'giftCards'])->name('payments.gift_cards');
        Route::get('payments/saved_cards', [\App\Http\Controllers\User\PaymentController::class, 'savedCards'])->name('payments.saved_cards');
        Route::get('payments/refunds', [\App\Http\Controllers\User\PaymentController::class, 'refunds'])->name('payments.refunds');
        Route::get('addresses', [AddressController::class, 'index'])->name('addresses');
    });

    // Preorder Routes
    Route::middleware('signed')->get('/preorder/verify/{preorder}', [VerificationController::class, 'store'])->name('preorder.verify');
});

//Seller Specific Routes
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

    //Store
    Route::middleware('cart.make')->group(function () {
        Route::get('/', [StoreController::class, 'show'])->name('home');
        Route::resource('products', \App\Http\Controllers\ProductController::class);
        Route::middleware('auth:user')->group(function () {
            Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
            Route::get('/cart/{product}', [CartController::class, 'store'])->name('cart.store');
        });
    });

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


