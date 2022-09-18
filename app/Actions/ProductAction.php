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
        if($request->has("sort")){
            $products = $products->orderBy($request->sort, $request->sort_type ?? "asc");
        }
        return $products->paginate(12);
    }

}