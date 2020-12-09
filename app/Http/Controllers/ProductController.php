<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Store;

class ProductController extends Controller
{
    public function show(Store $store, Product $product)
    {
        return view('store.products.show_new', [
            'store' => $store,
            'product' => $product,
            'related_products' => $product->relatedProducts()
        ]);
    }
}
