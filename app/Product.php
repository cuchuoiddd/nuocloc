<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['sku', 'title', 'slug', 'content', 'category_id', 'description', 'the_tich', 'images', 'publish', 'metatitle', 'metadescription'];
    public function category() {
        return $this->belongsTo('App\Category');
    }
}

