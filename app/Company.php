<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['title','category','website','email','phone','description','logo'];

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
    	return $this->belongsToMany('App\User','user_company');
    }
}
