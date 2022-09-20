<?php

namespace App\Filter;

use App\Filter\FilterInterface;

class NewFilter implements FilterInterface{
    public function template(){
        return view("filter.new");
    }

    public function script(){
        return <<<HTML
            <script>
                document.querySelector(".new-filter").addEventListener('change', getProducts);
            </script>
HTML;
    }

    public function filter($search, $query){
        if(isset($search["new"])){
            $query->new();
        }
        return $query;
    }
}