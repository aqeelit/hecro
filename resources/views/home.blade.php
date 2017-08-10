@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
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
                   <input type="text" class="form-control" id="city" placeholder="City" name="city">
                   </div>
                   <button type="submit" class="btn btn-default">SEARCH</button>
                </form>
                </div>

                </div>
            </div>
        </div>


    </div>
</div>
@endsection
