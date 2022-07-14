<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'title','icon_2', 'icon', 'overview','status',
    ];
}
