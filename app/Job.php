<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
     protected $fillable = ['position','category','salary','education','experience','employment_type','description'];


     public function companies()
     {
     	return $this->belongTo('App\Company','id');
     }


     public function cities()
     {
     	return $this->belongTo('App\City','id');
     }
}
