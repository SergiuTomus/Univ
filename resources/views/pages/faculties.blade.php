@extends('main')

@section('title','Halls')

@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="{{asset('css/facultyes.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('css/navbar-black.css')}}">
@endsection



@section('content')
    @include('partials.faculties_partials._faculties')
@endsection


  





