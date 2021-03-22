<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Store\Admin\OrderController;
use App\Http\Controllers\Store\Admin\RefundController;
use App\Http\Controllers\Store\Admin\AccountController;
use App\Http\Controllers\Store\Admin\InvoiceController;
use App\Http\Controllers\Store\Admin\ProductController;
use App\Http\Controllers\Store\Admin\ProfileController;
use App\Http\Controllers\Store\Admin\CategoryController;
use App\Http\Controllers\Store\Admin\SecurityController;
use App\Http\Controllers\Store\Admin\ShipmentController;
use App\Http\Controllers\Store\Admin\AnalyticsController;
use App\Http\Controllers\Store\Admin\AttributeController;
use App\Http\Controllers\Store\Admin\DashboardController;

Route::get('dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');

Route::get('analytics', [AnalyticsController::class, 'index'])
    ->name('analytics');

Route::get('orders', [OrderController::class, 'index'])
    ->name('orders');

Route::get('shipments', [ShipmentController::class, 'index'])
    ->name('shipments');

Route::get('invoices', [InvoiceController::class, 'index'])
    ->name('invoices');

Route::get('refunds', [RefundController::class, 'index'])
    ->name('refunds');

Route::resource('products', ProductController::class);

Route::resource('categories', CategoryController::class);

Route::resource('attributes', AttributeController::class);

Route::get('profile', [ProfileController::class, 'index'])
    ->name('profile');

Route::get('account', [AccountController::class, 'index'])
    ->name('account');

Route::get('security', [SecurityController::class, 'index'])
    ->name('security');
