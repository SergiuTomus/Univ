<!doctype html>
<html>
<head>
    <title> UK | @yield('title')</title>

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Arapey|Cinzel|Encode+Sans+Condensed|Prata|Raleway|Source+Sans+Pro" rel="stylesheet">

    <!-- css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/index/header.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/navbar.css')}}">

    @yield('stylesheets')

</head>
<body>

<header>
    @yield('index_background_pic')

    @include('partials._navbar')

</header>

@yield('index_content')

@include('partials._footer')


<!-- Scripts -->
<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{asset('js/navbar.js')}}"></script>

@yield('scripts')

</body>
</html>
