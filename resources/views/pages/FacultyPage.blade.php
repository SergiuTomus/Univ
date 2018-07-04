   @extends('main')

@section('title','Halls')

@section('stylesheets')
	
   <link rel="stylesheet" type="text/css" href="{{asset('css/facultyPage.css')}}">

   <link rel="stylesheet" type="text/css" href="{{asset('css/navbar-black.css')}}">
@endsection



@section('content')
    @include('partials.facultyPage_partials._facultyPage')
@endsection

