<?php

use App\Http\Controllers\ProfileController;
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
Route::get('/about', function () {
    return view('about');
});

Route::get('/bird', function () {
    return view('bird');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/cat', function () {
    return view('cat');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/daycare', function () {
    return view('daycare');
});
Route::get('/dog', function () {
    return view('dog');
});
Route::get('/orderconfirm', function () {
    return view('orderconfirm');
});
Route::get('/products', function () {
    return view('products');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/shopnow', function () {
    return view('shopnow');
});
Route::get('/smallpets', function () {
    return view('smallpets');
});
Route::get('/spaandgrooming', function () {
    return view('spaandgrooming');
});
Route::get('/veterinarycare', function () {
    return view('veterinarycare');
});
Route::get('/wishlist', function () {
    return view('wishlist');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/', function () {
    return view('homepage');
});

Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/bookings', function () {
    return view('bookings');
});

Route::get('/orders', function () {
    return view('orders');
});
Route::get('/landing', function () {//not important
    return view('landing');
});
Route::get('/payment', function () {//not important
    return view('payment');
});
Route::get('/confirmation', function () {//not important
    return view('confirmation');
});
Route::get('/pethealth', function () {
    return view('pethealth');
});
Route::get('/settings', function () {//settings
    return view('settings');
});
Route::get('/message', function () {//settings
    return view('message');
});
Route::get('/orderconfirm', function () {//settings
    return view('orderconfirm');
});

Route::get('/backend.admindashboard', function () {
    return view('backend.admindashboard');
});

Route::get('/shipping', function () {
    return view('shipping');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
