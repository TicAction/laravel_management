<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $fillable = [
        'school_name',
        'school_region',
        'school_adress',
        'school_city',
        'school_phone',
        'school_email',
        'school_url',
    ];

    protected $dates =['created_at','updated_at'];
}
