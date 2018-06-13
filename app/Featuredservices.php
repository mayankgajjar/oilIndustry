<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Featuredservices extends Model
{
    protected $fillable = ['title','description','icon','show_status','status','image'];
}
