@extends('main')

@section('title','Halls')

@section('stylesheets')
   <link rel="stylesheet" type="text/css" href="{{asset('css/halls.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('css/navbar-black.css')}}">
@endsection



@section('content')
    @include('partials.halls_partials._halls')
@endsection

