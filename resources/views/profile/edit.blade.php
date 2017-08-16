@extends('layouts.app')

@section('content')


  <div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Edit you CV : Basic Info</div>

                
                
                @foreach($profiles as $profile)

                <form action="/profile/{{$profile->user_id}}/update" method="POST" class="form-group">
                 
                 {{ csrf_field() }}


                 <input type="hidden" name="_token" value="{{ csrf_token() }}"></br>
                 <input type="hidden" name="_method" value="PUT">

                <div class="row">

                <div class="col-sm-4"><label>Objective : </label></br> <input type="text" name="objective" value="{{$profile->objective}}"></br></div>

                <div class="col-sm-4"><label>Salary : </label></br><input type="number" name="salary" value="{{$profile->salary}}"></br></div>

                <div class="col-sm-4"><label>Employment type : </label></br> <input type="text" name="employment_type" value="{{$profile->employment_type}}"></br></div></div>

                
                <div class="row">               

               <div class="col-sm-4"><label>first name : </label></br> <input type="text" name="first_name" value="{{$profile->first_name}}"></br></div>

                <div class="col-sm-4"><label>last name : </label></br><input type="text" name="last_name" value="{{$profile->last_name}}"></br></div>

               <div class="col-sm-4"><label>Active email : </label></br><input type="text" name="contact_email" value="{{$profile->contact_email}}"></br></div></div>


                 <div class="row">

                <div class="col-sm-4"><label>Image : </label></br><input type="file" name="photo"></br></div>

                <div class="col-sm-4"><label>Birth : </label></br><input type="dateTime" name="birth" value="{{$profile->birth}}"></br></div>

                <div class="col-sm-2"><label>Sex : </label></br><SELECT name="sex" class="form-control"><option>Male</option><option>female</option></SELECT></br></div>

                <div class="col-sm-4"><label>Phone Number : </label></br><input type="text" name="phone" value="{{$profile->phone}}"></br></div></div>

              </div>
        </div>
    </div>

<div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Other Information</div>

                 <div class="row">

                <div class="col-sm-4"><label>education qualification : </label></br> <input type="text" name="education_qualification"></br></div>

                <div class="col-sm-4"><label>education occupation : </label></br><input type="text" name="education_occupation"></br></div>

                <div class="col-sm-4"><label> education university : </label></br> <input type="text" name="education_university"></br></div></div>
                

                 <div class="row">
                 <div class="col-sm-4"><label>education from month : </label></br> <input type="date" name="education_from_month"></br></div>

                <div class="col-sm-4"><label>education from year : </label></br><input type="date" name="education_from_year"></br></div>

                <div class="col-sm-4"><label> education to month : </label></br> <input type="dtae" name="education_to_month"></br></div>

                <div class="col-sm-4"><label> education to year: </label></br> <input type="date" name="education_to_month"></br></div></div>

                <input type="submit" name="submit" value="Update!">
                  
                @endforeach
                </form>
                </div>
            </div>
      </div>
</div>                

</div>





@endsection