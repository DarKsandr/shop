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
        return $this->tags->pluck("name")->join(', ');
    }

    protected function getPriceViewAttribute(){
        return "$".number_format($this->price, 2, '.', ' ');
    }

    public function getRealPriceViewAttribute(){
        return "$".number_format($this->real_price, 2, '.', ' ');
    }

    public function discount_view(){
        return round($this->discount)."%";
    }

    public function scopeNew($query){
        $query->where("new", 1);
    }
}
