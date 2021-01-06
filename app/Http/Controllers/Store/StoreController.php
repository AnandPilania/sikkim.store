<?php

namespace App\Http\Controllers\Store;

use App\Models\Store;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class StoreController extends Controller
{
    public function show(Store $store): View
    {
        return view('store.themes.default.index', [
            'store' => $store,
            'latest_products' => Product::query()->where('store_id', $store->id)
                ->latest()->take(8)->get(),
            'featured_products' => Product::query()->where('store_id', $store->id)
                ->inRandomOrder()->take(4)->get(),
        ]);
    }

    public function edit(Store $store): View
    {
        //TODO
    }

    public function update(Request $request, Store $store): View
    {
        //TODO
    }

    public function destroy(Store $store): RedirectResponse
    {
        //TODO
    }
}
