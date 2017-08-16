<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use App\Profile;

use Validator ;


class profileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $user = User::find($id);

        $profiles = Profile::where('user_id' , $id )->get();


        if (!$profiles->isEmpty()){
 
           return view('profile.index',compact('profiles'));

           // return view('profile.create', compact('id'));

            
 

        }else{

             $user = User::findOrfail($id);

             $users = Profile::create(array('user_id' => $user->id ));

             
             return view('profile.create', compact('id'));

           
        }

        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request , $id )
    {

        $this->Validate($request,Profile::$validation_rules);

        $pro = $request->only('objective','salary','employment_type','first_name','last_name',
                             'contact_email','birth','sex','phone');


        $data = Profile::where('user_id', $id)->update($pro);

        $profiles = profile::where('user_id', $id)->get();
        
         if($data)
        {
          return view('profile.index', compact('profiles'));
        }
        else {
          return back()->withInput();
        }
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
        $profiles = Profile::where('user_id',$id)->get();

        return view('profile.edit', compact('profiles'));
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
        

        $this->Validate($request, Profile::$update_validation_rules);

        $data = $request->only('objective','salary','employment_type','first_name','last_name',
                             'contact_email','birth','sex','phone');

        $update = Profile::where('user_id', $id)->update($data);

        $profiles = Profile::where('user_id', $id)->get();

        if ($update) {
             return view('profile.index', compact('profiles'));
         }else{
             return back()->withInput();
         } 


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
