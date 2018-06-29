<div class="custom-container">
<h3 class="title text-center"> Courses </h3>
<hr>

<div class="container">


    <div class="row">
        <div class="col-md-3 prof_picker">
            <h4 class="sub_title text-center"> Professors </h4>
            <hr>
            <ul class="text-justify">
            @foreach($teachers as $teacher)
                <li><a href="#">{{$teacher->name}}</a></li>
                @endforeach
               <!-- <li><a href="#">Prof. 1</a></li>
                <li><a href="#">Prof. 2</a></li>
                <li><a href="#">Prof. 3</a></li>
                <li><a href="#">Prof. 4</a></li>
                <li><a href="#">Prof. 5</a></li>
                <li><a href="#">Prof. 6</a></li>
                <li><a href="#">Prof. 7</a></li> -->

            </ul>
        </div>
        <div class="col-md-8 col-md-offset-1 courses">
            @foreach($courses as $course)
                <h4 class="course_name"> {{$course->name}}</h4>
                <hr>
           <!-- <h4 class="course_name"> Course name </h4>
            <hr>
            <h4 class="course_name"> Course name </h4>
            <hr>
            <h4 class="course_name"> Course name </h4>
            <hr>
            <h4 class="course_name"> Course name </h4>
            <hr>
            <h4 class="course_name"> Course name </h4>
            <hr>
            <h4 class="course_name"> Course name </h4>
            <hr>
                -->
                @endforeach

        </div>
    </div>




</div>
</div>
