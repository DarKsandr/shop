<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ["name", "sku", "description", "new", "price", "discount", "category_id"];

    protected $casts = [
        'new' => 'boolean',
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    public function tags_view(){
        $tags = [];
        foreach($this->tags as $tag){
            $tags[] = $tag->name;
        }
        return implode(", ", $tags);
    }

    public function price_view($discount = false){
        $price = $this->price;
        if($discount) $price += ($this->discount / 100) * $price;
        return "$".number_format($price, 2, '.', ' ');
    }

    public function discount_view(){
        return round($this->discount)."%";
    }

    public function scopeNew($query){
        $query->where("new", 1);
    }
}
