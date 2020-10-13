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
            'products' => Product::query()->where('store_id', $store->id)->latest()->paginate(15),
        ]);
    }

    public function create(): View
    {
        //
    }

    public function store(Request $request): RedirectResponse
    {
        //
    }

    public function show(Product $product): View
    {
        return $product;
    }

    public function edit(Product $product): View
    {
        //
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
