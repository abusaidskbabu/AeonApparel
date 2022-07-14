<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_category extends Model
{
    protected $fillable = [
        'category_name','image',
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'category');
    }
}
