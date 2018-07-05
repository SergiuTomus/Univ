@extends('main')
@section('title','Teacher Page')

@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="css/teacher.css">
	<link rel="stylesheet" type="text/css" href="{{asset('css/navbar-black.css')}}">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="stylesheet/teacher/animate.min.css" rel="stylesheet">
<link href="stylesheet/teacher/magnific-popup.css" rel="stylesheet">
<link href="stylesheet/teacher/swiper.min.css" rel="stylesheet">
<link href="stylesheet/teacher/materialize.css" rel="stylesheet">
<link href="stylesheet/teacher/bootstrap.min.css" rel="stylesheet">
<link href="stylesheet/teacher.css" id="switch_style" rel="stylesheet">
<link href="toggle/toggle.css" rel="stylesheet">
	@endsection

@yield('background_pic')

@include('partials.teacherPage_partials._teacher_partials')

@section('scripts')
    <script src="{{asset('js/index/flip.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/index/owl.carousel.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/index/index.js')}}"></script>
	

	<script src="javascript/teacher/jquery-2.1.3.min.js"></script>
<script src="javascript/teacher/bootstrap.min.js"></script>
<script src="javascript/teacher/materialize.min.js"></script>
<script src="javascript/teacher/markerwithlabel.min.js"></script>
<script src="javascript/teacher/retina.min.js"></script>
<script src="javascript/teacher/scrollreveal.min.js"></script>
<script src="javascript/teacher/swiper.jquery.min.js"></script>
<script src="javascript/teacher/jquery.magnific-popup.min.js"></script>
<script src="javascript/teacher.js"></script>
<script src="toggle/js.js"></script>
@endsection