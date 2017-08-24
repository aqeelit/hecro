<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use App\Job ;

use DB ;

use App\Company ;

use App\city ;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Job::orderBy('id', 'desc')->get();

        $companies = Company::all();

        return view('home', compact('jobs','companies'));
    }


    //get city in live search 

    public function getCity($search = null)
    {
       // $name = Input::get('e10_2');
       //  return city::select(array('id', DB::raw('concat(name) as text')))->where(DB::raw('concat(name)'),'like', "%$name%")->get(); 
        // return json_encode(array($input));

        $search_text = $search;
    if ($search_text==NULL) {
        $data= city::all();
    } else {
        $data=city::where('name','LIKE', '%'.$search_text.'%')->get();
    }

       return response()->json(array($data));


     // return view('home')->with('results',$data);

    }



    public function jober($id)
    {

    }

    public function firm($id)
    {

    }
}
