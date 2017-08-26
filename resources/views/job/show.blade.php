@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">the Job Details</div>

                @foreach($companies as $company)
               
                <div class="row">
                    <div class="col-sm-6">
                       <img src="{{ asset('images/companies/' . $company->logo) }}" height="200px" >
                   </div> 
                </div>


               <div class="row">
                  
                   <div class="col-sm-12">
                       <h1>{{ $company->title }}</h1>
                   </div>

                </div>

                
                

                @foreach($jobs as $job)


                <div class="row">
                   <div class="col-sm-2">
                       <label for='text' >Position :</label>
                   </div>
                   <div class="col-sm-4">
                       <h5>{{ $job->position }}</h5>
                   </div>
                </div>

                <div class="row">
                   <div class="col-sm-2">
                       <label for='text' >City :</label>
                   </div>
                   <div class="col-sm-4">
                       <h4>{{ $job->city }}</h4>
                   </div>
                </div>


                <div class="row"> 
                   <div class="col-sm-2">
                       <label for='text' >Category :</label>
                   </div>
                   <div class="col-sm-4">
                       <h4>{{ $job->category }}</h4>
                   </div>
                </div>

                <div class="row">
                   <div class="col-sm-2">
                       <label for='text' >Salary :</label>
                   </div>
                   <div class="col-sm-4">
                       <h4>{{ $job->salary }}</h4>
                   </div>
                </div>

                <div class="row">
                   <div class="col-sm-2">
                       <label for='text' >Employment Type :</label>
                   </div>
                   <div class="col-sm-4">
                       <h4>{{ $job->employment_type }}</h4>
                   </div>
                </div>

                
                   
                    <div class="row"> 
                    <div class="col-sm-12">
                       <label for='text' >Description :</label>
                    </div>
                    </div>

                    <div class="row">
                       <div class="col-sm-12"><h4>{{ $job->description }}</h4></div>
                    </div>

 
                    @if( Auth::id() == $company->user_id )

                    <div class="row">
                       <div class="col-sm-4">
                       <a href="/job/{{$job->id}}/edit" class="btn btn-info" role="button" >Edit the Content</a>
                       </div>

                    
                       <div class="col-sm-4">
                       <a href="/job/{{$job->id}}/destroy" class="btn btn-info" role="button" >Delete This Job</a>
                       </div>
                    </div>

                    @else

                    <div id="field1" data-field1-id="{{Auth::id()}}" ></div>
                    <div id="field2" data-field2-id="{{$job->id}}" ></div>

                    <div class="row">
                       <div class="col-sm-6">
                       <button  onclick="getApply()" class="btn btn-info" role="button" >Appy Now</button>

                       <!-- <a href="/job/{{Auth::id()}}/apply/{{$job->id}}" class="btn btn-info" role="button" >Apply Now</a> -->

                       </div>

                       <div class="col-sm-6">
                          <div id="msg"> </div>
                       </div>
                    </div>


                    @endif


                @endforeach
                @endforeach 

                 </div>
                </div>

               

        </div>
    </div>
</div>
@endsection

