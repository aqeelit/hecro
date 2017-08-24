
@extends('layouts.app')

@section('content')


  <div class="container">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Edit you CV : Basic Info</div>

                
                
                @foreach($jobs as $job)

                <form action="/job/{{$job->id}}/update" method="POST" class="form-group">
                 
                 {{ csrf_field() }}


                 <input type="hidden" name="_token" value="{{ csrf_token() }}"></br>
                 <input type="hidden" name="_method" value="PUT">

                

                <div class="row">

                <div class="col-sm-4"><label>Position : </label></br> <input type="text" name="position" value="{{$job->position}}"></br></div>

                <div class="col-sm-4"><label>Category : </label></br><input type="text" name="category" value="{{$job->category}}"></br></div>

                <div class="col-sm-4"><label>Salary : </label></br> <input type="number" name="salary" value="{{$job->salary}}"></br></div>
                </div>


                
                <div class="row">               

                <div class="col-sm-4"><label>Experience : </label></br> <input type="text" name="experience" value="{{$job->experience}}"></br></div>

                <div class="col-sm-4"><label>Employment Type : </label></br><input type="text" name="employment_type" value="{{$job->employment_type}}"></br></div>

                <div class="col-sm-4"><label>City : </label></br><SELECT name="city" class="form-control" ><option>Baghdad</option><option>Basra</option><option>Babil</option><option>Najaf</option></SELECT></br></div></div>


                <div class="row">
                <div class="col-sm-6"><label>description : </label></br><textarea name="description" rows="8" cols="100" >{{$job->description}}</textarea></br></div></div></div>


                <input type="submit" name="submit" value="Update!">
                
                  
                @endforeach

                </form>

               
            </div>
      </div>
</div>                


@endsection