<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Company;

use App\User;

use App\city;

use App\Profile ;

use App\Job ;

class jobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    



    public function index($id)
    {
        $companies = Company::where('user_id',$id)->get();
          

        if (!$companies->isEmpty()) {
           
           return view('job.create', compact('companies'));
        }else{
           return view('company.note' , compact('id'));
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
        $this->Validate($request , Job::$create_job_rules);


       // put the request in array 

        $job = new Job;

        $job = array(

            'position' => $request->get('position') ,
            'category' => $request->get('category') ,
            'salary'   => $request->get('salary'),
            'experience' => $request->get('experience'),
            'employment_type' => $request->get('employment_type'),
            'description' => $request->get('description'),
            'city' => $request->get('city'),
            'company_id'=> $id 

             );

        

        $job_id = Job::create($job)->id ;

        $jobs = Job::where('id', $job_id)->get();
        
         $job = Job::find($job_id);

        $companies = Company::where('id', $job->company_id)->get();

       
        if ($job_id) {
            return view('job.show', compact('companies','jobs'));
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
        $jobs = Job::where('id', $id)->get();

        $job = Job::find($id);


        $companies = Company::where('id',$job->company_id)->get();

        
        return view('job.show', compact('jobs','companies'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jobs = Job::where('id',$id)->get();

        return view('job.edit',compact('jobs'));

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
        $this->Validate($request, Job::$create_job_rules);

        $data = $request->only('position','salary','employment_type','category','experience',
                             'city','description');

        $job = Job::where('id', $id)->update($data);

        $company_id = Job::findOrFail($id)->company_id;

        $jobs = Job::findOrFail($id)->get();

        $companies = Company::findOrFail($company_id)->get();

        if ($job){
            return view('job.show' , compact('jobs','companies'));
        }else{
           return back()->withData();
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
        

        $jobs = Job::all();

        $delete = Job::find($id)->delete();

        if ($delete) {
            return view('welcome');
        }
    }
}
