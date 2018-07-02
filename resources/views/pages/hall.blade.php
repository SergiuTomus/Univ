@extends('main')
<!DOCTYPE html>
<html>
<head>	
	<link rel="stylesheet" type="text/css" href="{{asset('css/hall.css')}}">
	<title>UK | Hall page</title>
</head>
<body>
	<!-- Begin Hall Background Image -->
	<div > 
````````<img class="hall_img" src="{{$hall['path']}}" alt="{{$hall['path']}}">
    	<div class="layer"></div>
    		<div class="hall_description">

     			<h1 class="name text-center"> {{$hall['name']}}<br>  Building: {{$hall['building']}}</h1>
     			<p class="descr text-center">No.Seats: {{$hall['no_seats']}}</p>
			</div>
	</div> <!-- End Hall Background Image -->
</body>
</html>