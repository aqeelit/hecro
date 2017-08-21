       
@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Basic Info</div>

                
                
                <form action="/company/{{$id}}" method="POST" class="form-group" enctype="multipart/form-data">
                 
                 {{ csrf_field() }}

                 <input type="hidden" name="_token" value="{{ csrf_token() }}"></br>

                <div class="row">

                <div class="col-sm-4"><label>Company Name : </label></br> <input type="text" name="title"></br></div>

                <div class="col-sm-4"><label>Category : </label></br><input type="text" name="category"></br></div>

                <div class="col-sm-4"><label>Website : </label></br> <input type="text" name="website"></br></div>
                </div>

                
                <div class="row">               

                  <div class="col-sm-4"><label>Company's Phone Number : </label></br> <input type="text" name="phone"></br></div>

                   <div class="col-sm-4"><label>Company's Email : </label></br><input type="text" name="email"></br></div>
              
                <div class="col-sm-4"><label>Image : </label></br><input type="file" name="logo"></br></div>
                </div>


                <div class="row">
                <div class="col-sm-12"><label>description : </label></br><textarea name="description" rows="8" cols="100" placeholder="Enter The Description Here ...."></textarea></br></div>
                </div>


                <div class="row">
                   <div class="col-sm-6">
                     <input type="submit" name="submit" value="Update!">
                   </div>
                </div>
                </form>
              </div>
        </div>
    </div>
</div>
                 

@endsection

