<?php

namespace App\Observers;

use App\Manticore\Index\ProductsIndex;
use App\Models\Product;

class ProductObserver
{
    protected $index;

    public function __construct(ProductsIndex $index)
    {
        $this->index = $index;
    }

    public function saving(Product $product){
        if($product->isDirty(["price", "discount"])){
            $product->real_price = $product->price + ($product->discount / 100) * $product->price;
        }
    }

    public function created(Product $product){
        $this->index->addDocument($this->index->prepareDataWithoutId($product), $product->id);
    }
    public function updated(Product $product){
        $this->index->updateDocument($this->index->prepareDataWithoutId($product), $product->id);
    }
    public function deleted(Product $product){
        $this->index->deleteDocument($product->id);
    }
}
