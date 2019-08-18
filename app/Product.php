<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['sku', 'title', 'slug', 'content', 'category_id', 'description', 'price', 'images', 'publish', 'views', 'metatitle', 'metadescription'];
    public function category() {
        return $this->belongsTo('App\Category');
    }
}

