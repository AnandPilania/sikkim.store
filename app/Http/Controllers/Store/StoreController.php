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
        return view('store.index', [
            'store' => $store,
            'products' => Product::query()->where('store_id', $store->id)->latest()->paginate(20),
            'categories' => Category::query()->latest()->take(5)->get(),
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
