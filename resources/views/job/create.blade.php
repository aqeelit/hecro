       
@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Create a Job</div>

                @foreach($companies as $company)
                
                <form action="/job/{{$company->id}}" method="POST" class="form-group" >
                 
                 {{ csrf_field() }}

                 <input type="hidden" name="_token" value="{{ csrf_token() }}"></br>

                <div class="row">

                <div class="col-sm-4"><label>Position : </label></br> <input type="text" name="position"></br></div>

                <div class="col-sm-4"><label>Category : </label></br><input type="text" name="category"></br></div>

                <div class="col-sm-4"><label>Salary : </label></br> <input type="number" name="salary"></br></div>
                </div>

                
                <div class="row">               

                  <div class="col-sm-4"><label>Experience : </label></br> <input type="text" name="experience"></br></div>

                   <div class="col-sm-4"><label>Employment Type : </label></br><input type="text" name="employment_type"></br></div>

                   <div class="col-sm-4"><label>City : </label></br><SELECT name="city" class="form-control"><option>Baghdad</option><option>Basra</option><option>Babil</option><option>Najaf</option></SELECT></br></div>
              
                


                <div class="row">
                <div class="col-sm-6"><label>description : </label></br><textarea name="description" rows="8" cols="100" placeholder="Enter The Description Here ...."></textarea></br></div>
                </div>


                <div class="row">
                   <div class="col-sm-6">
                     <input type="submit" name="submit" value="Create a job">
                   </div>
                </div>
                </form>

                @endforeach

              </div>
        </div>
    </div>
</div>
                 

@endsection








    