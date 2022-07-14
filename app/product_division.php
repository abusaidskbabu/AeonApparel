<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_division extends Model
{
    protected $fillable = [
        'division_name', 'image'
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'gender');
    }
}
