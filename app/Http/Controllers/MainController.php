<?php

namespace App\Http\Controllers;

use App\Actions\ProductAction;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{

    public function index(ProductAction $action){
        $new_products = $action->product()->new()->inRandomOrder()->limit(8)->get();
        return view('index', compact('new_products'));
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

    public function shop(Request $request, ProductAction $action){
        $products = $action->product_items($request);
        $categories = Category::all();
        $price_filter = (object)[
            "min" => 0,
            "max" => Product::max("real_price"),
        ];
        return view('shop.shop-left-sidebar', compact('products', 'categories', 'price_filter'));
    }

    public function product(Product $product, ProductAction $action){
        $related_products = $action->product()->where("category_id", $product->category_id)->inRandomOrder()->limit(16)->get();
        return view('product.single-product', compact('product', 'related_products'));
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

    public function product_list(Request $request, ProductAction $action){
        $products = $action->product_items($request);
        return view('shop.products', compact('products'));
    }
}
