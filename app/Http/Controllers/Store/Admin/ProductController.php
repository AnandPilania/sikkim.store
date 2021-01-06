<?php

namespace App\Http\Controllers\Store\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Store;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Store $store): View
    {
        return view('store.admin.products.index', [
            'store' => $store,
            'products' => $store->products()->latest()->paginate(40),
        ]);
    }

    public function create(Store $store): View
    {
        return view('store.admin.products.create', [
            'store' => $store,
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        //
    }

    public function show(Product $product): View
    {
        return $product;
    }

    public function edit(Store $store, Product $product): View
    {
        return view('store.admin.products.edit', [
            'store' => $store,
            'product' => $product
        ]);
    }

    public function update(Request $request, Product $product): RedirectResponse
    {
        //
    }

    public function destroy(Product $product): RedirectResponse
    {
        //
    }
}
