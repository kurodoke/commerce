@extends('layouts.main')

@section('herobanner')
    <div class="container mb-5">
        <div class="row">
            <div class="col mt-4">
                <div class="hero-banner">
                    <div class="hero-container row">
                        <div class="col-6">
                            <div class="container hero-text">
                                <h5 class="text-font-l m-0">Plimsolls MK.II</h5>
                                <h3 class="text-font-r m-0" style="font-size: 2rem">Flash Sale</h3>
                                <h1 class="text-font-b m-0" style="font-size: 7rem; color: #ffffff">SUPERB</h1>
                                <button type="button" class="btn btn-danger text-font-b">Shop Now</button>
                            </div>
                        </div>
                        <div class="col-6 d-flex justify-content-center">
                            <img class="hero-image" src="{{ URL::asset('image/assets/hetset pon blutut.webp') }}" alt="">
                            <div class="hero-detail">
                                <p class="text-font-b" style="font-size: 2rem; color: #a8a8a8"">Plimsolls MK.II</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('container')
    <div class="container">
        <div class="row d-flex product-header">
            <h4 class="text-center text-font-b">Product</h4>
            <p class="text-center text-font-r">Non esse eiusmod irure aliqua nisi incididunt irure cupidatat veniam in est dolor officia.</p>
        </div>
        <div class="row">
            <div class="col-2">
                <h6 class="text-font-sb">Category</h6>
                <a class="text-decoration-none text-dark" href=""><p class="text-font-r m-0">Gaming</p></a>
                <a class="text-decoration-none text-dark" href=""><p class="text-font-r m-0">Simple</p></a>
                <a class="text-decoration-none text-dark" href=""><p class="text-font-r m-0">Speaker</p></a>
                <a class="text-decoration-none text-dark" href=""><p class="text-font-r m-0">TWS</p></a>
                <a class="text-decoration-none text-dark" href=""><p class="text-font-r m-0">Etc.</p></a>
            </div>
            <div class="col-10">
                <div class="row g-4">
                    <div class="col-4">
                        <a href="product/1" class="text-decoration-none text-dark">
                            <div class="content d-flex justify-content-center align-items-center">
                                <img class="content-img" src="{{ URL::asset('image/assets/hetset pon blutut.webp') }}" alt="">
                                <div class="content-main">
                                    <p class="content-text m-0 text-font-sb">Plimsolls MK.II</p>
                                    <p class="m-0"><span class="text-font-r content-price">Rp400k</span></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-4">
                        <div class="content d-flex justify-content-center align-items-center">
                            <img class="content-img" src="{{ URL::asset('image/assets/hetset pon blutut.webp') }}" alt="">
                            <div class="content-main">
                                <p class="content-text m-0 text-font-sb">Plimsolls MK.II</p>
                                <p class="m-0"><span class="text-font-r content-price">Rp400k</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="content d-flex justify-content-center align-items-center">
                            <img class="content-img" src="{{ URL::asset('image/assets/hetset pon blutut.webp') }}" alt="">
                            <div class="content-main">
                                <p class="content-text m-0 text-font-sb">Plimsolls MK.II</p>
                                <p class="m-0"><span class="text-font-r content-price">Rp400k</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="content d-flex justify-content-center align-items-center">
                            <img class="content-img" src="{{ URL::asset('image/assets/hetset pon blutut.webp') }}" alt="">
                            <div class="content-main">
                                <p class="content-text m-0 text-font-sb">Plimsolls MK.II</p>
                                <p class="m-0"><span class="text-font-r content-price">Rp400k</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection