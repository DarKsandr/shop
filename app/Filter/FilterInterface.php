<?php

namespace App\Filter;

interface FilterInterface{
    
    public function template();

    public function script();

    public function filter($search, $query);

}