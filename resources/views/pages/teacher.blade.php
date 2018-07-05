@extends('main')
@section('title','Teacher Page')

@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="css/teacher.css">
	<link rel="stylesheet" type="text/css" href="{{asset('css/navbar-black.css')}}">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
	@endsection

@yield('background_pic')

@include('partials.teacherPage_partials._teacher_partials')