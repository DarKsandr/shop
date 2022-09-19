<?php

namespace App\Actions;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductAction{

    public function product(){
        return Product::with(["category", "tags"]);
    }

    public function product_items(Request $request){
        $products = $this->product();
        if($request->has("category") && is_array($request->category)){
            $products->whereIn("category_id", $request->category);
        }
        if($request->has("price_min")){
            $products->where("real_price", ">=", $request->price_min);
        }
        if($request->has("price_max")){
            $products->where("real_price", "<=", $request->price_max);
        }
        if($request->has("sort")){
            $products->orderBy($request->sort, $request->sort_type ?? "asc");
        }
        return $products->paginate(12);
    }

}