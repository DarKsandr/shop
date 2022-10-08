<?php

namespace App\Observers;

use App\Models\Product;

class ProductObserver
{
    public function saving(Product $product){
        if($product->isDirty(["price", "discount"])){
            $product->real_price = $product->price + ($product->discount / 100) * $product->price;
        }
    }
}
