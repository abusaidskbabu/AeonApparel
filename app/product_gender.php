<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_gender extends Model
{
    protected $fillable = [
        'gender_name',
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'gender');
    }
}
