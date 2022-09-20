<?php

namespace App\Filter;

use App\Models\Product;
use App\Filter\FilterInterface;

class PriceFilter implements FilterInterface
{
    public function template()
    {
        $price_filter = (object)[
            "min" => 0,
            "max" => Product::max("real_price"),
        ];
        return view("filter.price", compact('price_filter'));
    }

    public function script()
    {
        return <<<HTML
            <script>
                $(document).ready(function(){
                    const slider = $( "#slider-range" );
                    const price_min = $("#price_min");
                    const price_max = $("#price_max");
                    slider.slider({
                      range: true,
                      min: slider.data("min"),
                      max: slider.data("max"),
                      values: [ price_min.val(), price_max.val() ],
                      slide: function( event, ui ) {
                        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
                        price_min.val(ui.values[ 0 ]);
                        price_max.val(ui.values[ 1 ]);
                      },
                      change: getProducts,
                    });
                    $( "#amount" ).val( "$" + slider.slider( "values", 0 ) +
                      " - $" + slider.slider( "values", 1 ) );
                });
            </script>
HTML;
    }

    public function filter($search, $query)
    {
        if(isset($search["price:min"])){
            $query->where("real_price", ">=", $search["price:min"]);
        }
        if(isset($search["price:max"])){
            $query->where("real_price", "<=", $search["price:max"]);
        }
        return $query;
    }
}
