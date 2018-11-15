<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Behavior extends Model
{
    protected $fillable =[
      'behave_date',
      'behave_reason',
      'behave_consequence',
      'behave_gravity',

    ];
    protected $dates =['behave_date','created_at','updated_at'];
}
