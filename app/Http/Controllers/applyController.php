<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User ;

use App\Profile ;

use App\apply ;

class applyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function setApply($userId,$jobId)
    {
        $profile = Profile::where('user_id',$userId)->get();

             foreach ($profile as $value) {
             $profile_id = $value->id ;
             }

        if (!empty($profile)){

            $app = apply::where('job_id', $jobId)
            ->where('profile_id', $profile_id)
            ->first();


            if (is_null($app)) {
        
              
               $apply = new apply ;

               $apply->profile_id = $profile_id ;

               $apply->job_id = $jobId ;

               $apply->save();


               $msg = "YOUR Apply Is Done !!";
               return response()->json(array('msg'=> $msg), 200);
            }else{

               $msg = "This job has been applied" ;
               return response()->json(array('msg'=> $msg), 200);
            }

            
        }else{

            return view('profile.note');

        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
