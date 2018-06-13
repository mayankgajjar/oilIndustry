<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = ['emp_name','emp_designation','emp_facebook_link','emp_twitter_link','emp_rss_link','emp_photo','emp_status','emp_show_status'];
}
