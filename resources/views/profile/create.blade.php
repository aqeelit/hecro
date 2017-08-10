       
@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Edit you CV : Basic Info</div>

                
                
                <form action="/profile/{{$id}}" method="POST" class="form-group">
                 
                 {{ csrf_field() }}

                 <input type="hidden" name="_token" value="{{ csrf_token() }}"></br>

                <div class="row">

                <div class="col-sm-4"><label>Objective : </label></br> <input type="text" name="objective"></br></div>

                <div class="col-sm-4"><label>Salary : </label></br><input type="number" name="salary"></br></div>

                <div class="col-sm-4"><label>Employment type : </label></br> <input type="text" name="employment_type"></br></div></div>

                
                <div class="row">               

               <div class="col-sm-4"><label>first name : </label></br> <input type="text" name="first_name"></br></div>

                <div class="col-sm-4"><label>last name : </label></br><input type="text" name="last_name"></br></div>

               <div class="col-sm-4"><label>Active email : </label></br><input type="text" name="contact_email"></br></div></div>


                 <div class="row">

                <div class="col-sm-4"><label>Image : </label></br><input type="file" name="photo"></br></div>

                <div class="col-sm-4"><label>Birth : </label></br><input type="dateTime" name="birth"></br></div>

                <div class="col-sm-2"><label>Sex : </label></br><SELECT name="sex" class="form-control"><option>Male</option><option>female</option></SELECT></br></div>

                <div class="col-sm-4"><label>Phone Number : </label></br><input type="text" name="phone"></br></div></div>

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
                  

                </form>
                </div>
            </div>
      </div>
</div>                

</div>
                 

@endsection

