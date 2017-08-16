@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Your Company Details</div>

                
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


                <div class="row">
                   <div class="col-sm-2">
                       <label for='text' >Category :</label>
                   </div>
                   <div class="col-sm-4">
                       <h5>{{ $company->category }}</h5>
                   </div>
                </div>


                <div class="row"> 
                   <div class="col-sm-2">
                       <label for='text' > Company URL :</label>
                   </div>
                   <div class="col-sm-4">
                       <h4>{{ $company->website }}</h4>
                   </div>
                </div>

                <div class="row">
                   <div class="col-sm-2">
                       <label for='text' >Active Email :</label>
                   </div>
                   <div class="col-sm-4">
                       <h4>{{ $company->email }}</h4>
                   </div>
                </div>

                <div class="row">
                   <div class="col-sm-2">
                       <label for='text' >Phone Number :</label>
                   </div>
                   <div class="col-sm-4">
                       <h4>{{ $company->phone }}</h4>
                   </div>
                </div>

                
                   
                    <div class="row"> 
                    <div class="col-sm-12">
                       <label for='text' >Description :</label>
                    </div>
                    </div>

                    <div class="row">
                       <div class="col-sm-12"><h4>{{ $company->description }}</h4></div>
                    </div>

                    <div class="row">
                       <div class="col-sm-6">
                       <a href="/company/{{$company->user_id}}/edit" class="btn btn-info" role="button" >Edit the Content</a>
                       </div>
                    </div>
                @endforeach



                 </div>
                </div>

               

        </div>
    </div>
</div>
@endsection

