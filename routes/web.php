<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MainController;
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

Route::get('/', [MainController::class, 'index'])->name("index");
Route::get('/about', [MainController::class, 'about'])->name("about");
Route::get('/faq', [MainController::class, 'faq'])->name("faq");
Route::get('/coming-soon', [MainController::class, 'coming_soon'])->name("coming-soon");
Route::get('/compare', [MainController::class, 'compare'])->name("compare");
Route::get('/contact', [MainController::class, 'contact'])->name("contact");
Route::get('/cart', [MainController::class, 'cart'])->name("cart");
Route::get('/wishlist', [MainController::class, 'wishlist'])->name("wishlist");
Route::get('/thank-you-page', [MainController::class, 'thank_you_page'])->name("thank-you-page");
Route::get('/order-tracking', [MainController::class, 'order_tracking'])->name("order-tracking");
Route::get('/shop', [MainController::class, 'shop'])->name("shop");
Route::get('/product/{id}', [MainController::class, 'product'])->name("product");
Route::get('/blog', [MainController::class, 'blog'])->name("blog");
Route::get('/blog/{id}', [MainController::class, 'blog_single'])->name("blog-single");
Route::get('/checkout', [MainController::class, 'checkout'])->name("checkout");

Route::middleware(['auth'])->group(function () {
    Route::get('/my-account', [MainController::class, 'my_account'])->name("my-account");

    Route::middleware(['role:admin'])->name("admin.")->prefix("admin")->group(function(){
        Route::get('/', [AdminController::class, 'index'])->name("index");
    });
});

require __DIR__.'/auth.php';