@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="d-flex justify-content-between">
            <h4 class="text-font-sb">Shipping</h4>
            <a href="/"><i class="fa-solid fa-angle-left fa-xl" style="color: #292929;"></i></a>
        </div>
        {{-- product --}}
        <div class="cart-product text-font-r text-white mb-5">
            <div class="row">
                <div class="col position-relative"  style="background-color: #7928ca;">
                    <div class="d-flex">
                        <h1>Shipping</h1>
                        <img src="{{ URL::asset('image/assets/hetset pon blutut.webp') }}" style="background-color: #7928ca;" alt="" class="position-absolute end-0 cart-img">
                    </div>
                </div>
                <div class="col ps-0">
                    <div class="cart-detail d-flex justify-content-between">
                        <div class="cart-product-title">
                            <h5><span style="background-color: black" class="ps-3 pe-3 pb-2">Plimsolls MK.II</span></h5>
                            <h6><span style="background-color: black"  class="ps-3 pe-3 pb-5 pt-1">2 Items</span></h6>
                            <br>
                            <h6><span style="background-color: black"  class="ps-3 pe-3 pb-4 pt-1">On Shipping</span></h6>
                            <h6><span style="background-color: black"  class="ps-3 pe-3 pb-3 pt-1">Est. 2 days</span></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cart-product text-font-r text-white mb-5">
            <div class="row">
                <div class="col position-relative"  style="background-color: #7928ca;">
                    <div class="d-flex">
                        <h1>Shipping</h1>
                        <img src="{{ URL::asset('image/assets/hetset pon blutut.webp') }}" style="background-color: #7928ca;" alt="" class="position-absolute end-0 cart-img">
                    </div>
                </div>
                <div class="col ps-0">
                    <div class="cart-detail d-flex justify-content-between">
                        <div class="cart-product-title">
                            <h5><span style="background-color: black" class="ps-3 pe-3 pb-2">Plimsolls MK.II</span></h5>
                            <h6><span style="background-color: black"  class="ps-3 pe-3 pb-5 pt-1">2 Items</span></h6>
                            <br>
                            <h6><span style="background-color: black"  class="ps-3 pe-3 pb-4 pt-1">On Shipping</span></h6>
                            <h6><span style="background-color: black"  class="ps-3 pe-3 pb-3 pt-1">Est. 2 days</span></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- product --}}
    </div>
@endsection