<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Store;

class ProductController extends Controller
{
    public function show(Store $store, Product $product)
    {
        return view('store.products.show', [
            'store' => $store,
            'product' => $product,
            'products' => Product::query()->where('store_id', $store->id)->latest()->take(8)->get(),
            'categories' => Category::query()->latest()->take(5)->get(),
        ]);
    }
}
