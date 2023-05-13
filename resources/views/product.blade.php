@extends('layouts.main')


@section('container')
<form action="/addcart" method="get">
    <div class="container-fluid base m-0 position-relative">
        <div class="row">
            <div class="col-8 content-product d-flex justify-content-center">
                <img class="product-img" src="{{ URL::asset('image/assets/hetset pon blutut.webp') }}" alt="">
                <div class="content-main">
                    <p class="content-text m-0 text-font-sb font-big">Plimsolls MK.II</p>
                    <p class="m-0"><span class="text-font-r content-price font-semi-big">Rp400k</span></p>
                </div>
            </div>
            <div class="col-4 text-black text-font-r r-half-top">
                <a href="/"><i class="fa-solid fa-angle-left fa-xl" style="color: #292929;"></i></a>
                <div class="a-half-top">
                    <div class="detail">
                        <h6 class="text-font-b">Details</h6>
                        <p>Ut consectetur ad dolore nostrud magna ullamco ex Lorem minim laborum dolore est fugiat.</p>
                    </div>
                    <div class="quantity me-4 mb-5">
                        <label for="quantity" class="text-font-sb">Quantity</label>
                        <input type="number" class="form-control text-font-l" name="quantity" id="quantity" min="1" required>
                    </div>
                    <div class="cart-submit me-4">
                        <input type="text" name="id" value="1" hidden>
                        <input type="text" name="price" value="400000" hidden>
                        <button type="submit" class="btn btn-dark w-100">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection