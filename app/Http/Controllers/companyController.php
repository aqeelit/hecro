<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Validator ;

use App\User;

use App\Company;

class companyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $companies = Company::where('user_id',$id)->get();

        if(!$companies->isEmpty()){

            return view('company.index', compact('companies'));
        }else{

            $user_id = Company::create(array('user_id' => $id));

            return view('company.create', compact('id'));
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
    public function store(Request $request , $id)
    {

        $rules = $this->Validate($request , Company::$create_rules);

        if (!$rules) {
            

         $logo = $request->file('logo')->getClientOriginalName();

         $request->file('logo')->move(public_path() .'/images/companies', $logo);
         
         
            $req = new Company ;

            $req = array(

            'title' => $request->get('title') ,
            'category' =>  $request->get('category'),
            'website' => $request->get('website') ,
            'email'=> $request->get('email') ,
            'phone' => $request->get('phone') ,
            'description' => $request->get('description') ,
            'logo' => $logo
            );  

            

        $company = Company::where('user_id',$id)->update($req);
         
        }
        

        $companies = Company::where('user_id',$id)->get();


        if (!$companies->isEmpty()) {
            
            return view('company.index',compact('companies'));
        }else{
            return back()->withData();
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
        $companies = Company::where('user_id',$id)->get();

        return view('company.edit', compact('companies'));
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
        $this->Validate($request , Company::$create_rules);

        $company = Company::where('user_id',$id)->first();

        if ($request->hasFile('logo')) {
            
            $logo = $request->file('logo')->getClientOriginalName();

            $request->file('logo')->move(public_path() .'/images/companies', $logo);

        $com = new Company ;

        $com = array(
            'title' => $request->get('title') ,
            'category' =>  $request->get('category'),
            'website' => $request->get('website') ,
            'email'=> $request->get('email') ,
            'phone' => $request->get('phone') ,
            'description' => $request->get('description') ,
            'logo' => $logo

            );

        $company = Company::where('user_id',$id)->update($com);

        $companies = Company::where('user_id',$id)->get();

        return view('company.index', compact('companies'));

         }else{

         $data = $request->only('title','category','website','email','phone',
                             'description');
          
        $company = Company::where('user_id',$id)->update($data);

        $companies = Company::where('user_id',$id)->get();

        return view('company.index', compact('companies'));

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
