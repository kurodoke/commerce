<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/product/{id}', function($id) {
    return view('product', [
        "id" => $id
    ]);
});

Route::get('/addcart?quantity={quantity}&id={id}&price={price}', function($quantity, $id, $price){
    return view('cart', [
        "quantity" => $quantity, 
        "id" => $id, 
        "price" => $price]);
});