<?php

namespace App\Actions;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductAction{

    public function product(){
        return Product::with(["category"]);
    }

    public function product_items(Request $request){
        $products = $this->product();
        $search = $request->search ?? [];
        
        foreach(config("filter.items") as $item){
            app($item)->filter($search, $products);
        }

        if(isset($search["sort"])){
            $products->orderBy($search["sort"], $search["sort_type"] ?? "asc");
        }
        
        return $products->paginate(12);
    }

}