<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class team_member extends Model
{
    protected $fillable = [
        'name', 'designation', 'image','linkedin','facebook','sort_number','status',
    ];
}
