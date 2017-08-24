@extends('layouts.app')

@section('content')
<div class="container">
    
       <!--  <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">ARE YOU ?</div>

                <div class="panel-body">
                    
                   <div class="col-sm-6">
                       <a href="#" class="btn btn-info" role="button">Jobseeker</a>
                   </div>
                   <div class="col-sm-6">
                       <a href="#" class="btn btn-info" role="button">Company</a>
                </div>

                </div>
            </div>
        </div> -->


    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Job search</div>

                <div class="panel-body">
                    
                <form class="form-inline" action="/action_page.php">
                   <div class="form-group">
                   <label for="text">Job Title</label>
                    <input type="text" class="form-control" id="jobTitle" placeholder="Job Title" name="jobTitle">
                    </div>
                   <div class="form-group">
                   <label for="text">City</label>
                   <input type="text" id="search" class="form-control" name="city">
                   <div id="update"></div>
                   </div>
                   <button type="submit" class="btn btn-default">SEARCH</button>
                </form>
                </div>

                </div>
            </div>
          </div>

          <br><br>

           <div>
           
             @foreach ($companies as $company)
             @foreach ( $jobs as $job )

             @if($company->id == $job->company_id)
             <div class="col-sm-4">
             <div class="well">
             <a href="/job/{{$job->id}}/show">
             <img src="{{ asset('images/companies/' . $company->logo) }}" class="img-responsive" style="width:100%" alt="Image"> </a>
             <h4>{{$company->title}}</h3>
             <h3>{{$job->position}}</h2>
             <p>{{ $job->city }} | {{ $job->experience }}</p>
            
             </div>
             </div>

             @endif
             @endforeach
             @endforeach

           </div>

        </div>


@endsection