@extends('main')

@section('title','contact')

@section('stylesheets')
	<link rel="stylesheet" type="text/css" href="{{asset('css/contact.css')}}">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
@endsection

@yield('background_pic')

@include('partials.contact_partials._contact_partials')




