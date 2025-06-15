<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/bird', function () {
    return view('bird');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/dog', function () {
    return view('dog');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/orderconfirm', function () {
    return view('orderconfirm');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/smallpets', function () {
    return view('smallpets');
});

Route::get('/wishlist', function () {
    return view('wishlist');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});




