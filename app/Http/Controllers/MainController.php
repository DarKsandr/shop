<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('index');
    }

    public function about(){
        return view('about');
    }

    public function faq(){
        return view('faq');
    }

    public function coming_soon(){
        return view('coming-soon');
    }

    public function compare(){
        return view('compare');
    }

    public function contact(){
        return view('contact');
    }

    public function cart(){
        return view('cart');
    }

    public function wishlist(){
        return view('wishlist');
    }

    public function thank_you_page(){
        return view('thank-you-page');
    }

    public function order_tracking(){
        return view('order-tracking');
    }

    public function shop(){
        return view('shop.shop-left-sidebar');
    }

    public function product($id){
        return view('product.single-product', compact('id'));
    }
    
    public function blog(){
        return view('blog.blog-grid-left-sidebar');
    }

    public function blog_single($id){
        return view('blog.blog-single', compact('id'));
    }

    public function checkout(){
        return view('checkout');
    }

    public function my_account(){
        return view('my-account');
    }
}