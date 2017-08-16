@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Your Profile</div>

                
               @foreach($profiles as $profile)
               
               <div class="panel-body">
                    
                   <div class="col-sm-4">
                       <label for='text' >objective :</label>
                   </div>
                   <div class="col-sm-8">
                       <h2>{{ $profile->objective }}</h2>
                </div>

                </div>


                <div class="panel-body">
                   <div class="col-sm-4">
                       <label for='text' >Salary Expacted :</label>
                   </div>
                   <div class="col-sm-8">
                       <h4>{{ $profile->salary }}</h4>
                   </div>
                </div>


                <div class="panel-body"> 
                   <div class="col-sm-4">
                       <label for='text' >Employment Type :</label>
                   </div>
                   <div class="col-sm-8">
                       <h4>{{ $profile->employment_type }}</h4>
                   </div>
                </div>

                <div class="panel-body">
                  <div class="col-sm-4">
                       <img src="/public/images/"{{$profile->photo}} >
                   </div> 
                   <div class="col-sm-4">
                       <label for='text' >The Name :</label>
                   </div>
                   <div class="col-sm-4">
                       <h4>{{ $profile->first_name }} {{ $profile->last_name }}</h4>
                   </div>
                </div>

                <div class="panel-body"> 
                   <div class="col-sm-4">
                       <label for='text' >Your Email :</label><h4>{{ $profile->contact_email }}</h4>
                   </div>
                   <div class="col-sm-4">
                       <label for='text' >Birthday :</label><h4>{{ $profile->birthday }}</h4>
                   </div>
                    <div class="col-sm-4">
                       <label for='text' >Sex :</label><h4>{{ $profile->sex }}</h4>

                       <a href="/profile/{{$profile->user_id}}/edit" class="btn btn-info" role="button" >Edit the Content</a>

                @endforeach



                 </div>
                </div>

               

        </div>
    </div>
</div>
@endsection

