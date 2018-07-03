@extends('main')
<!DOCTYPE html>
<html>
<head>	
	<link rel="stylesheet" type="text/css" href="{{asset('css/teacher.css')}}">
	<title>UK | Teacher page</title>
</head>
<body>
	<!-- Begin Hall Background Image -->
	<div > 
<img class="teacher_img" src="/uploads/teachers{{$teacher->path}}" alt="{{$teacher->path}}">
    	<div class="layer"></div>
    		<div class="teacger_description">

     			<h1 class="name text-center"> {$teacher->first_name . ' ' . $teacher->last_name}}</h1>
     			<p class="descr text-center">Courses: {{$teacher->name}}</p>
			</div>
	</div> <!-- End Hall Background Image -->
</body>
</html>