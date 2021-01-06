<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Store;
use Illuminate\Contracts\View\View;

class ProductController extends Controller
{
    public function show(Store $store, Product $product): View
    {
        return view('store.themes.default.products.show_new', [
            'store' => $store,
            'product' => $product,
            'related_products' => $product->relatedProducts()
        ]);
    }
}
