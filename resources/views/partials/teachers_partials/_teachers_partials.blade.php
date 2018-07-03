<section id="team" class="pb-5">
    <div class="container">
        <h5 class="section-title h1">Our Teachers</h5>
        <div class="row">
            <!-- Team member -->

            @foreach($teachers as $teacher)

            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="/uploads/teachers/{{$teacher->path}}" alt="card image"></p>
                                    <h4 class="card-title">{{$teacher->first_name . ' ' . $teacher->last_name}}</h4>
                                    <p class="card-text">Porf. Univ. Dr. - Computer Science</p>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Educational activities</h4>
                                    <p class="card-text">{{$teacher->name}}</p>
                                    <h4 class="card-title">Fields of interest</h4>
                                    <p class="card-text">{{$teacher->interest}}</p>
                                   
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul> 
                                    <a href="{{route('teacher.show',$teacher->slug)}}" class="btn btn-primary btn-sm"><i>Teacher Page</i></a>                        
                                </div>                           
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>