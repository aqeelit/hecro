<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Profile extends Model
{
    
    protected $fillable = [
    
    'user_id',
    'objective',
    'salary',
    'employment_type',

    'first_name',
    'last_name',
    'contact_email',
    'photo',
    'birth',
    'sex',
    'phone',

    'education_qualification',
    'education_occupation',
    'education_university',
    'education_from_month',
    'education_from_year',
    'education_to_month',
    'education_to_year',

    'exp1_title',
    'exp1_company',
    'exp1_description',
    'exp1_from_month',
    'exp1_from_year',
    'exp1_to_month',
    'exp1_to_year',

    'exp1_title',
    'exp2_company',
    'exp2_description',
    'exp2_from_month',
    'exp2_from_year',
    'exp2_to_month',
    'exp2_to_year',

    'exp3_title',
    'exp3_company',
    'exp3_description',
    'exp3_from_month',
    'exp3_from_year',
    'exp3_to_month',
    'exp3_to_year',


    'exp4_title',
    'exp4_company',
    'exp4_description',
    'exp4_from_month',
    'exp4_from_year',
    'exp4_to_month',
    'exp4_to_year',

    'exp5_title',
    'exp5_company',
    'exp5_description',
    'exp5_from_month',
    'exp5_from_year',
    'exp5_to_month',
    'exp5_to_year',

    'description',



    ];



    public static $validation_rules = [

              'objective' => 'required' ,
              'salary'=> 'required',
              'employment_type'=> 'required',
              'first_name'=> 'required',
              'last_name'=> 'required',
              'contact_email'=> 'required|email',
              'birth'=> 'required',
              'sex'=> 'required',
              'phone'=> 'required|min:7',
           ];
 


    public static $update_validation_rules = [

              'objective' => 'required' ,
              'salary'=> 'required',
              'employment_type'=> 'required',
              'first_name'=> 'required',
              'last_name'=> 'required',
              'contact_email'=> 'required|email',
              'birth'=> 'required',
              'sex'=> 'required',
              'phone'=> 'required|min:7',
           ];

    public function users()
    {
    	return $this->belongTo('App\User','id');
    }


}
