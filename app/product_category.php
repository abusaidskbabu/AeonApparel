<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_category extends Model
{
    protected $fillable = [
        'category_name','parent_id','image',
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'category');
    }

    public function parent(){
        return $this->belongsTo(product_category::class,'parent_id');
    }

    public function categories(){
        return $this->hasMany(product_category::class, 'parent_id')->orderBy('id', 'ASC');
    }
}
