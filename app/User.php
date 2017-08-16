<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


     public function profiles()
    {
       return $this->hasOne('App\Profile','user_id');

    }

    public function companies()
    {
        return $this->hasOne('App\company','user_id');
    }

    public function roles()
    {
        return $this->belongsToMany('App\Role','role_user');
    }

}
