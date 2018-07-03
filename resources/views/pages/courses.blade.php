@extends('main')
@section('title','Courses')

@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="{{asset('css/courses/courses.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/navbar-black.css')}}">
@endsection

@section('content')
    @include('partials.courses_partials._courses')
@endsection







