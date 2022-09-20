<?php

use App\Filter\CategoryFilter;
use App\Filter\NewFilter;
use App\Filter\PriceFilter;

return [
    "items" => [
        CategoryFilter::class,
        PriceFilter::class,
        NewFilter::class,
    ],
];