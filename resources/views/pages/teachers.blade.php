@extends('main')

@section('title','Teachers')

@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="{{asset('css/teachers.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/navbar-black.css')}}">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
	@endsection


@section('content')
@include('partials.teachers_partials._teachers_partials')
    @endsection
