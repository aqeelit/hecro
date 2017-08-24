@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Note : You have to Edit your profile first</div>

                <h1> You Have to Edit your profile first</h1>

                <a href="/profile/{{Auth::id()}}/index" class="btn btn-info" role="button">Edit My profile</a>

            </div>
        </div>
    </div>
</div>

@endsection