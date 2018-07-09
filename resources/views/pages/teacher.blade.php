@extends('main')
@section('title','Teacher Page')

@section('stylesheets')
<link rel="icon" href="{{asset('favicon.ico')}}" type="image/x-icon"/>
<link rel="icon" href="{{asset('images/site/fav-icon.png')}}">
<link rel="apple-touch-icon" href="{{asset('images/site/apple-touch-icon.png')}}">

<link href='https://fonts.googleapis.com/css?family=Raleway:500' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Muli' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type='text/css'>

<link href="{{asset('css/teacher/font-awesome.min.css')}}" rel="stylesheet" type='text/css'>
<link href="{{asset('css/teacher/animate.min.css')}}" rel="stylesheet" type='text/css'>
<link href="{{asset('css/teacher/magnific-popup.css')}}" rel="stylesheet" type='text/css'>
<link href="{{asset('css/teacher/swiper.min.css')}}" rel="stylesheet" type='text/css'>
<link href="{{asset('css/teacher/materialize.css')}}" rel="stylesheet" type='text/css'>
<link href="{{asset('css/teacher/bootstrap.min.css')}}" rel="stylesheet" type='text/css'>
<link href="{{asset('css/teacher/toggle.css')}}" rel="stylesheet" type='text/css'>
<link href="{{asset('css/teacher.css')}}" rel="stylesheet" type='text/css' id="switch_style">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

@endsection

@yield('background_pic')

@include('partials.teacherPage_partials._teacher_partials')

@section('scripts')
<script type="text/javascript" src="{{asset('js/index/flip.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/index/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/index/index.js')}}"></script>
	
<script type="text/javascript" src="{{asset('js/teacher/jquery-2.1.3.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/teacher/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/teacher/materialize.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/teacher/markerwithlabel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/teacher/retina.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/teacher/scrollreveal.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/teacher/swiper.jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/teacher/jquery.magnific-popup.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/teacher/js.js')}}"></script>
<script type="text/javascript" src="{{asset('js/teacher/teacher.js')}}"></script>

@endsection