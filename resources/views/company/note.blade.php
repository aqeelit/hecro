@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Note : create a company first</div>

                <h1> You Have To Create Your Company First</h1>

                <a href="/company/{{$id}}/index" class="btn btn-info" role="button">Create the Company</a>

            </div>
        </div>
    </div>
</div>

@endsection