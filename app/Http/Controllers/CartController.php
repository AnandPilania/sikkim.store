<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Store;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return array
     */
    public function index(Request $request, Store $store)
    {
        $cart = $request->get('cart');
        $cartProducts = [];
        foreach ($cart->products as $product) {
            $cartProducts[] = [
                'name' => $product->name,
                'price' => $product->price,
            ];
        }
        return $cart;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Store $store, Product $product, Request $request)
    {
        $cart = $request->get('cart');

        if ($cart->products->contains($product->id)) {
            $quantity = $cart->products->where('id', $product->id)->first()->pivot->quantity;
            $cart->products()->updateExistingPivot($product->id, ['quantity' => $quantity + 1]);
            return $cart;
        }

        if (!$cart->products->contains($product->id)) {
            $cart->products()->attach($product->id, ['price_per_product' => $product->raw_original_price]);
            return redirect()->back();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
