@extends('main')
    @section('title', 'Home')
    @section('stylesheets')
    <link rel="stylesheet" href="{{asset('css/index/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/index/owl.theme.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/index/owl.transitions.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/index/index.css')}}">
    @endsection

    @section('background_pic')
    <div>
        <img src="{{asset('resources/index/homepage_bg.jpg')}}" class="home_bg">
    </div>
    <div>
        <div class="uni_descr">
            <h1 class="name text-center"> University of Kattegat </h1>
            <p class="descr text-center"> Some description about our university  </p>
        </div>
    </div>
    @endsection

@section('content')
<div class="container">

    @include('partials.index_partials._what_makes_us_different')

    @include('partials.index_partials._popular_courses')

    @include('partials.index_partials._student_oppinions')
</div>
@endsection

@section('scripts')
    <script src="{{asset('js/index/flip.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/index/owl.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/index/index.js')}}"></script>
@endsection
