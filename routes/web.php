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
    return view('index');
})->name("index");

Route::get('/about', function () {
    return view('about');
})->name("about");

Route::get('/my-account', function () {
    return view('my-account');
})->name("my-account");

Route::get('/faq', function () {
    return view('faq');
})->name("faq");

Route::get('/coming-soon', function () {
    return view('coming-soon');
})->name("coming-soon");

Route::get('/compare', function () {
    return view('compare');
})->name("compare");

Route::get('/contact', function () {
    return view('contact');
})->name("contact");

Route::get('/cart', function () {
    return view('cart.cart');
})->name("cart");

Route::get('/wishlist', function () {
    return view('wishlist');
})->name("wishlist");

Route::get('/thank-you-page', function () {
    return view('thank-you-page');
})->name("thank-you-page");

Route::get('/order-tracking', function () {
    return view('order-tracking');
})->name("order-tracking");

require __DIR__.'/auth.php';