<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Http\Requests\StorePaymentRequest;
use App\Http\Requests\UpdatePaymentRequest;
use App\Models\Cart;
use App\Models\Order;

class PaymentController extends Controller
{

    public function pay($provider){
        //filder cart kkhusus satu user
        $carts = Cart::where('user_id', session('user_id'));

        //cari total price dari filter tdi
        $subtotal = 0;
        foreach ($carts->get() as $cart) {
            $subtotal += $cart->product->price * $cart->quantity;
        };

        //buat 1 record payment 
        $paymentid = Payment::create([
            'total_price' => $subtotal + 50,
            'provider' => $provider
        ])->id;
        
        //pindah cart ke order
        foreach ($carts->get() as $cart) {
            Order::create([
                'user_id' => $cart->user_id,
                'product_id' => $cart->product_id,
                'quantity' => $cart->quantity,
                'payment_id' => $paymentid
            ]);
        };

        //cart dihapus udah dipindah 
        $carts->delete();

        return redirect('/shipping');
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StorePaymentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePaymentRequest $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
