<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    public function parent(){
        return $this->belongsTo(product_category::class,'parent_category');
    }

    public function subcategory(){
        return $this->belongsTo(product_category::class,'category');
    }
}
