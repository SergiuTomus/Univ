@extends('main')

@section('title','Contact')

@section('stylesheets')
	<link rel="stylesheet" type="text/css" href="{{asset('css/contact.css')}}">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
@endsection

@section('background_pic')
    <div>
        <img src="{{asset('resources/index/homepage_bg.jpg')}}" class="home_bg">
    </div>
    <div>
        <div class="uni_descr">
            <h1 class="name text-center"> University of Kattegat </h1>
            <p class="descr text-center"> Some description about our university  </p>
        </div>
    </div>
@endsection

@section('content')
    @include('partials.contact_partials._contact_partials')
@endsection




