<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{URL::asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>
    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            
            <a class="navbar-brand text-font-b" href="#">Arisato Accoustic</a>

            <a class="navbar-brand" href="#"><i class="fa-solid fa-cart-shopping"></i></a>
        </div>
    </nav>
    {{-- navbar --}}

    {{-- hero banner --}}
    <div class="container mb-5">
        <div class="row">
            <div class="col mt-3">
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
    {{-- hero banner --}}

    {{-- produk --}}
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
    {{-- produk --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>