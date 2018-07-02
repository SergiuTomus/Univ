@extends('main')

@section('title','teachers')
   
@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="css/teachers.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
	@endsection


@yield('background_pic')

@include('partials.teachers_partials._teachers_partials')