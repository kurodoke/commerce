@extends('layouts.main')

@section('container')
<div class="container">
    <div class="d-flex justify-content-between">
        <h4 class="text-font-sb">My Cart</h4>
        <a href="/"><i class="fa-solid fa-angle-left fa-xl" style="color: #292929;"></i></a>
    </div>

    <div class="row">
        <div class="col-8">
            {{-- product --}}
            <form action="" method="post">
                <div class="cart-product text-font-r text-white mb-5">
                    <div class="row">
                        <div class="col-4 position-relative">
                            <img src="{{ URL::asset('image/assets/hetset pon blutut.webp') }}"  style="background-color: #7928ca;" alt="" class="position-absolute end-0 cart-img">
                        </div>
                        <div class="col-8 ps-0">
                            <div class="cart-detail d-flex justify-content-between">
                                <div class="cart-product-title">
                                    <h5><span style="background-color: black" class="ps-3 pe-3 pb-2">Plimsolls MK.II</span></h5>
                                    <h6><span style="background-color: black"  class="ps-3 pe-3 pb-3">Rp400k</span></h6>
                                    <h6><span style="background-color: black"  class="ps-3 pe-3 pb-4 pt-1">2 Items</span></h6>
                                    <h6 class="mt-4"><span style="background-color: black"  class="ps-3 pe-3 pb-2 pt-1">Total price Rp800k</span></h6>
                                </div>
                                <div class="cart-product-del">
                                    <button type="submit" class="btn" title="delete your cart"><i class="fa-solid fa-xmark fa-lg" style="color: #0d0d0d;"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <form action="" method="post">
                <div class="cart-product text-font-r text-white mb-5">
                    <div class="row">
                        <div class="col-4 position-relative">
                            <img src="{{ URL::asset('image/assets/hetset pon blutut.webp') }}"  style="background-color: #7928ca;" alt="" class="position-absolute end-0 cart-img">
                        </div>
                        <div class="col-8 ps-0">
                            <div class="cart-detail d-flex justify-content-between">
                                <div class="cart-product-title">
                                    <h5><span style="background-color: black" class="ps-3 pe-3 pb-2">Plimsolls MK.II</span></h5>
                                    <h6><span style="background-color: black"  class="ps-3 pe-3 pb-3">Rp400k</span></h6>
                                    <h6><span style="background-color: black"  class="ps-3 pe-3 pb-4 pt-1">2 Items</span></h6>
                                    <h6 class="mt-4"><span style="background-color: black"  class="ps-3 pe-3 pb-2 pt-1">Total price Rp800k</span></h6>
                                </div>
                                <div class="cart-product-del">
                                    <button type="submit" class="btn" title="delete your cart"><i class="fa-solid fa-xmark fa-lg" style="color: #0d0d0d;"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            {{-- product --}}
        </div>
        <div class="col-4">
            <div class="text-font-r cart-detail mt-2 pt-2 border-top">
                <div class="d-flex justify-content-between">
                    <p>Subtotal</p>
                    <p>Rp400k</p>
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
                    <p>Rp450k</p>
                </div>
            </div>
            <div class="cart-submit mt-2">
                <button type="submit" class="btn btn-dark w-100" data-bs-toggle="modal" data-bs-target="#payment">Pay your Stuff</button>
            </div>
        </div>
    </div>
</div>

{{-- modal --}}
<form action="/payment" method="post">
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
                                <input type="text" class="input_field" id="username" value="Arief098" readonly>
                            </div>
                            <div class="input_container">
                                <label for="address" class="text-font-sb">Address</label>
                                <textarea id="address" class="input_field textarea-scroll" readonly>Deserunt ex aute Lorem dolor cillum commodo pariatur consequat ex exercitation enim.</textarea>
                            </div>
                            <div class="input_container">
                                <label for="phone" class="text-font-sb">Phone Number</label>
                                <input type="text" class="input_field" id="phone" value="08956151515" readonly>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
{{-- modal --}}
@endsection