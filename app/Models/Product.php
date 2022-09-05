<?php

namespace App\Models;

use App\Models\Category;
use App\Models\TagRelation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ["name", "sku", "description", "category_id"];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function tag_relation(){
        return $this->hasMany(TagRelation::class);
    }

    public function tags_view(){
        $tags = [];
        foreach($this->tag_relation as $tag_relation){
            $tags[] = $tag_relation->tag->name;
        }
        return implode(", ", $tags);
    }
}
