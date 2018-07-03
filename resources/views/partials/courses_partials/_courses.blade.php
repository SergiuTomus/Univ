
<h3 class="page_title text-center"> Courses </h3>



    <div class="container">

    <div class="row">
        <div class="col-md-3 col-md-offset-1 prof_picker">
            <h4 class="sub_title text-center"> Professors </h4>
            <hr>
            <ul class="list">
            @foreach($teachers as $teacher)
                <li><a href="{{route('courses.show',$teacher->id)}}">{{$teacher->first_name . ' ' . $teacher->last_name}}</a></li>
            @endforeach
            </ul>
        </div>

        <div class="col-md-7 col-md-offset-1 courses">
            <h4 class="sub_title text-center"> Courses </h4>
            <hr>
            <ul class="list">
            @foreach($courses as $course)
                <li><p> {{$course->name}}</p></li>
                <hr>
             @endforeach
            </ul>
        </div>
    </div>
</div>

