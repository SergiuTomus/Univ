@extends('main')
    @section('title','Hall page')

@section('stylesheets')
	<link rel="stylesheet" type="text/css" href="{{asset('css/hall.css')}}">
@endsection

@section('content')
	@include('partials.hallPage_partials._hall')
@endsection
