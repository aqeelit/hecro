<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class city extends Model
{


    public function companies()
    {
    	return $this->belongsToMany('App\Company','city_company');
    }

    
}
