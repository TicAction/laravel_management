<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable =['student_firstname','student_lastname','student_birthday'];
    protected $dates = ['student_birthday','created_at','updated_at'];
}
