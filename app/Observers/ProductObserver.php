<?php

namespace App\Observers;

use App\Models\Product;

class ProductObserver
{
    public function saving(Product $product){
        if (request()->has('tags')) {
            $tags = request()->get("tags");
            $product->tags()->detach();
            if(!empty($tags)){
                $product->tags()->attach($tags);
            }
        }

        if($product->isDirty(["price", "discount"])){
            $product->real_price = $product->price + ($product->discount / 100) * $product->price;
        }
    }
}
