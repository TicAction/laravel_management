<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schoolboard extends Model
{
    protected $fillable = [
        'schoolboard_name',
        'schoolboard_region',
        'schoolboard_adress',
        'schoolboard_city',
        'schoolboard_phone',
        'schoolboard_email',
        'schoolboard_url',
    ];
}
