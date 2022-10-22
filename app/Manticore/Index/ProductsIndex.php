<?php

namespace App\Manticore\Index;

use App\Models\Product;
use Manticoresearch\Index;

class ProductsIndex extends Index{
    protected function getPrepareData(Product $product){
        return [
            "id" => $product->id,
            "name" => $product->name,
            "sku" => $product->sku,
            "description" => $product->description,
            "real_price" => $product->real_price,
        ];
    }

    public function prepareData(Product $product){
        return $this->getPrepareData($product);
    }

    public function prepareDataWithoutId(Product $product){
        $data = $this->getPrepareData($product);
        unset($data['id']);
        return $data;
    }
}