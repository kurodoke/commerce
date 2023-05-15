<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', [DashboardController::class, 'index']);


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);


Route::get('/cart', [CartController::class, 'index'])->middleware('auth');
Route::post('/delcart', [CartController::class, 'destroy'])->middleware('auth');

Route::get('/pay/{provider}', [PaymentController::class, 'pay'])->middleware('auth');

Route::get('/shipping', [OrderController::class, 'index'])->middleware('auth');


Route::get('/product/{id}', [ProductController::class, 'index']);
Route::post('/addcart', [ProductController::class, 'addcart'])->middleware('auth');