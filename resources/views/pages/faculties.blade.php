@extends('main')

@section('title','Faculties')

@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="{{asset('css/faculties.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('css/navbar-black.css')}}">
@endsection



@section('content')
    @include('partials.faculties_partials._faculties')
@endsection








