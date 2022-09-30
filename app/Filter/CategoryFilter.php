<?php

namespace App\Filter;

use App\Models\Category;
use App\Filter\FilterInterface;

class CategoryFilter implements FilterInterface{
    public function template(){
        $categories = Category::withCount("products")->get();
        return view("filter.category", compact('categories'));
    }

    public function script(){
        return <<<HTML
            <script>
                document.querySelectorAll(".category-filter").forEach(item => {
                    item.addEventListener('change', getProducts);
                });
            </script>
HTML;
    }

    public function filter($search, $query){
        if(isset($search["category"]) && is_array($search["category"])){
            $query->whereIn("category_id", $search["category"]);
        }
        return $query;
    }
}