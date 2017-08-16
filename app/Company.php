<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['user_id','title','category','website','email','phone','description','logo'];

    public static $create_rules = [

          'title'=> 'required',
          'category' => 'required',
          'website'=> 'required',
          'email'=> 'required|email',
          'phone' => 'required',
          'description' => 'required',


    ];

    public function jobs()
    {
    	return $this->hasMany('App\Job','company_id');
    } 


    public function cities()
    {
    	return $this->belongsToMany('App\city');
    }

    public function users()
    {
    	return $this->belongsTo('App\User','id');
    }
}
