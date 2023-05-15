<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Http\Requests\StoreCartRequest;
use App\Http\Requests\UpdateCartRequest;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $subtotal = 0;
        foreach (Cart::where('user_id', session('user_id'))->get() as $cart) {
            $subtotal += $cart->product->price * $cart->quantity;
        };
        
        return view('cart', [
            'carts' => Cart::where('user_id', session('user_id'))->get(),
            'subtotal' => $subtotal,
            'total' => $subtotal + 50,
            'user' => User::find(session('user_id'))
        ]);
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
    public function store(StoreCartRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCartRequest $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request){
        Cart::where('user_id', session('user_id'))->find($request->cart_id)->delete();
        return redirect('/cart')->with('success', 'We deleted your cart');
    }
}
