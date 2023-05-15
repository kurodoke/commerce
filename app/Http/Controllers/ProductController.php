<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id){
        if (Product::find($id) == null){
            return redirect('/');
        }

        return view('product', [
            'product' => Product::find($id)
        ]);
    }

    public function addcart(Request $request){
        $cart = Cart::where('user_id', session('user_id'))->where('product_id', $request->id)->first();
        if( $cart ) {
            $cart->update([
                'quantity' => $cart->quantity + $request->quantity
            ]);
            
        } else {
            Cart::create([
                'user_id' => session('user_id'),
                'product_id' => $request->id,
                'quantity' => $request->quantity
            ]);
        }
        return redirect('/cart')->with('success', 'We added an item on your cart');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
