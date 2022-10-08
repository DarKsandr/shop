<?php

namespace App\Services;

use App\Models\Product;
use App\Events\ProductTags;
use Illuminate\Http\Request;

class ProductService{
    public function storeOrUpdate(Request $request, Product $product){
        if ($request->has('tags')) {
            ProductTags::dispatch($product, $request->tags);
        }
    }
}