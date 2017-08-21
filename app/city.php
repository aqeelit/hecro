<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class city extends Model
{



    public function companies()
    {
    	return $this->belongsToMany('App\Company','city_company');
    }

    public function jobs()
    {
    	return $this->hasMany('App\Job','city_id');
    }

    
}
