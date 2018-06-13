<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonials extends Model
{
    protected $fillable = ['name','designations','image','description','status','email'];
}
