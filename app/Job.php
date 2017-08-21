<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
     protected $fillable = ['position','category','salary','experience','employment_type','description','city','company_id'];


     public static $create_job_rules = [

             'position'=> 'required',
             'category'=> 'required',
             'salary' => 'required',
             'experience' => 'required',
             'employment_type' => 'required',
             'description' => 'required',
             'city' => 'required'

     ];



     public function companies()
     {
     	return $this->belongTo('App\Company','id');
     }


}
