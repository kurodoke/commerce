@extends('layouts.main')


@section('container')
<form action="/addcart" method="post">
    @csrf
    <div class="container-fluid base m-0 position-relative">
        <div class="row">
            <div class="col-8 content-product d-flex justify-content-center">
                <img class="product-img" src="{{ URL::asset('image/assets/' . $product->image ) }}" alt="">
                <div class="content-main">
                    <p class="content-text m-0 text-font-sb font-big">{{ $product->name }}</p>
                    <p class="m-0"><span class="text-font-r content-price font-semi-big">Rp{{ $product->price }}k</span></p>
                </div>
            </div>
            <div class="col-4 text-black text-font-r r-half-top">
                <a href="/"><i class="fa-solid fa-angle-left fa-xl" style="color: #292929;"></i></a>
                <div class="a-half-top row">
                    <div class="detail col">
                        <h6 class="text-font-b">Details</h6>
                        <p>{{ $product->description }}</p>
                    </div>
                    <div class="quantity me-4 mb-5">
                        <label for="quantity" class="text-font-sb">Quantity</label>
                        <input type="number" class="form-control text-font-l" name="quantity" id="quantity" min="1" required>
                    </div>
                    <div class="cart-submit me-4">
                        <input type="text" name="id" value="{{ $product->id }}" hidden>
                        <input type="text" name="price" value="{{ $product->price }}" hidden>
                        <button type="submit" class="btn btn-dark w-100">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection