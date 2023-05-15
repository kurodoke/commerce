@extends('layouts.main')

@section('container')
<div class="container">

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show d-flex justify-content-between" role="alert">
            <p class="text-font-sb m-auto">{{ session('success') }}</p>
            <button type="button" class="btn" data-bs-dismiss="alert" aria-label="Close"><i class="fa-solid fa-xmark fa-lg" style="color: #0d0d0d;"></i></button>
        </div>
    @endif
    
    <div class="d-flex justify-content-between">
        <h4 class="text-font-sb">My Cart</h4>
        <a href="/"><i class="fa-solid fa-angle-left fa-xl" style="color: #292929;"></i></a>
    </div>

    <div class="row">
        <div class="col-8">
            {{-- product --}}
            @foreach ($carts as $cart)
                {{-- @if ($cart->user_id == session('user_id')) --}}
                <form action="delcart" method="post">
                    @csrf
                    <div class="cart-product text-font-r text-white mb-5">
                        <div class="row">
                            <div class="col-4 position-relative">
                                <img src="{{ URL::asset('image/assets/'. $cart->product->image) }}"  style="background-color: #7928ca;" alt="" class="position-absolute end-0 cart-img">
                            </div>
                            <div class="col-8 ps-0">
                                <div class="cart-detail d-flex justify-content-between">
                                    <div class="cart-product-title">
                                        <h5><span style="background-color: black" class="ps-3 pe-3 pb-2">{{ $cart->product->name }}</span></h5>
                                        <h6><span style="background-color: black"  class="ps-3 pe-3 pb-3">Rp{{ $cart->product->price }}k</span></h6>
                                        <h6><span style="background-color: black"  class="ps-3 pe-3 pb-4 pt-1">{{ $cart->quantity }} {{ ($cart->quantity == 1) ? 'Item' : 'Items' }}</span></h6>
                                        <h6 class="mt-4"><span style="background-color: black"  class="ps-3 pe-3 pb-2 pt-1">Total price Rp{{ $cart->product->price * $cart->quantity}}k</span></h6>
                                    </div>
                                    <div class="cart-product-del">
                                        <input type="text" name="cart_id" value="{{ $cart->id }}" hidden>
                                        <button type="submit" class="btn" title="delete your cart"><i class="fa-solid fa-xmark fa-lg" style="color: #0d0d0d;"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form> 
                {{-- @endif --}}
            @endforeach
            
            {{-- product --}}
        </div>
        <div class="col-4">
            <div class="text-font-r cart-detail mt-2 pt-2 border-top">
                <div class="d-flex justify-content-between">
                    <p>Subtotal</p>
                    <p>Rp{{ $subtotal }}k</p>
                </div>
                <div class="d-flex justify-content-between">
                    <p>Taxes</p>
                    <p>Rp10k</p>
                </div>
                <div class="d-flex justify-content-between">
                    <p>Shipping</p>
                    <p>Rp40k</p>
                </div>
            </div>
            <div class="cart-total pt-2 border-top">
                <div class="text-font-b d-flex justify-content-between">
                    <p>Total</p>
                    <p>Rp{{ $total }}k</p>
                </div>
            </div>
            <div class="cart-submit mt-2">
                <button type="submit" class="btn btn-dark w-100" data-bs-toggle="modal" data-bs-target="#payment">Pay your Stuff</button>
            </div>
        </div>
    </div>
</div>

{{-- modal --}}
<div class="modal fade" id="payment" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row mt-3">
                    <div class="col">
                        <a href="/pay/dana" class="payments d-flex justify-content-center">
                            <img src="{{ URL::asset('image/payments/dana.webp') }}" alt="" class="logo-payments">
                        </a>
                    </div>
                    <div class="col">
                        <a href="/pay/ovo" class="payments d-flex justify-content-center">
                            <img src="{{ URL::asset('image/payments/ovo.png') }}" alt="" class="logo-payments">
                        </a>
                    </div>
                    <div class="col">
                        <a href="/pay/shopee" class="payments d-flex justify-content-center">
                            <img src="{{ URL::asset('image/payments/shopeepay.png') }}" alt="" class="logo-payments">
                        </a>
                    </div>
                    <div class="separator mt-2">
                        <hr class="line">
                        <p>your information</p>
                        <hr class="line">
                    </div>

                    <div class="m-3 payment-detail text-font-r">
                        <div class="input_container">
                            <label for="username" class="text-font-sb">Username</label>
                            <input type="text" class="input_field" id="username" value="{{ $user->username }}" readonly>
                        </div>
                        <div class="input_container">
                            <label for="address" class="text-font-sb">Address</label>
                            <textarea id="address" class="input_field textarea-scroll" readonly>{{ $user->address }}</textarea>
                        </div>
                        <div class="input_container">
                            <label for="phone" class="text-font-sb">Phone Number</label>
                            <input type="text" class="input_field" id="phone" value="{{ $user->phone_number }}" readonly>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- modal --}}
@endsection