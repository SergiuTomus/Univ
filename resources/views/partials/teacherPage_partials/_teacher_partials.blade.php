<section id="team" class="pb-5">
    <div class="container">
        
        <div class="row">

<div > 
<img class="teacher_img" src="/uploads/teachers/{{$teacher->path}}" alt="{{$teacher->path}}">
    	<div class="layer"></div>
    		<div class="teacher_description">

     			<h1 class="name text-center"> {$teacher->first_name . ' ' . $teacher->last_name}}</h1>
     			<p class="descr text-center">Courses: {{$teacher->name}}}</p>
			</div>
	</div> 
	</div>
    </div>
</section>