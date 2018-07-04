<section>
<div class="container my-4">

      <!-- Jumbotron Header -->
     

      <!-- Page Features -->
      <div class="row text-center">

      	@foreach($faculties as $faculty)

        <div class="col-lg-3 col-md-6 mb-4 " style="  padding: 60px 0; 
">
          <div class="card">
            <img class="card-img-top" src="/uploads/faculties/{{$faculty->path}}" alt="{{$faculty->path}}">
            <div class="card-body">
              <h4 class="card-title">{{$faculty->name}}</h4>
              <p class="card-text">{{$faculty->description}}</p>
            </div>
            <div class="card-footer">
              <a href="{{route('faculty.show',$faculty->slug)}}" class="btn btn-primary btn-lg">Go To..</a>
            </div>
          </div>
        </div>  

        @endforeach

         </div>
      <!-- /.row -->

    </div>
   </section>