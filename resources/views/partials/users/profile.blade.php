@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{$user['first_name']}}  {{$user['last_name']}}</h1>
                <hr>
            </div>

        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="/uploads/teachers/{{$user['path']}}" class="img-responsive" style="width: 300px; height: 300px;">

            </div>
            <div class="col-md-6">
                <h3> Details : </h3>
                <h5><b> First name : </b><p> {{$user['first_name']}}</p></h5>
                <h5><b> Last name : </b><p> {{$user['last_name']}}</p></h5>
                <h5><b> E-mail : </b><p> {{$user['email']}}</p></h5>
                <br>
                
            </div>
        </div>
    </div>

@endsection
