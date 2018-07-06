<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
	<div class="row">
		<div class="col-lg-3 col-sm-6">

            <div class="card hovercard">
                <div class="cardheader">

                </div>
                <div class="avatar">
                   <p> <img alt="profile photo" src="/uploads/teachers/{{$teacher->path}}"></p>
                </div>
                <div class="info">
                   <h3> <div class="title">{{$teacher->first_name . ' ' . $teacher->last_name}}</h3>
                    </div>
					<h4 class="card-title">Educational activities</h4>
                                    <p class="card-text">{{$teacher->name}}</p>
                    <div class="desc">Curious developer</div>
                    <div class="desc">Tech geek</div>
                </div>
                <div class="bottom">
                    <a class="btn btn-primary btn-twitter btn-sm" href=#>
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a class="btn btn-danger btn-sm" rel="2"
                       href=#>
                        <i class="fa fa-google-plus"></i>
                    </a>
                    <a class="btn btn-primary btn-sm" rel="2"
                       href=#>
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a class="btn btn-warning btn-sm" rel="2" href=#>
                        <i class="fa fa-behance"></i>
                    </a>
                </div>
            </div>

        </div>

	</div>
</div>