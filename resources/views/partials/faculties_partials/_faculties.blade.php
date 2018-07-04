<section>
<div class="container">

      <!-- Jumbotron Header -->
      <div class="jumbotron my-4">
        <img class="imag" src="/uploads/banner/banner.jpg">
      </div>

      <!-- Page Features -->
      <div class="row text-center">

      	@foreach($faculties as $faculty)

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="/uploads/halls/{{$faculty->path}}" alt="card image">
            <div class="card-body">
              <h4 class="card-title">{{$faculty->name}}</h4>
              <p class="card-text">{{$faculty->description}}</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Go To..</a>
            </div>
          </div>
        </div>  

        @endforeach

         </div>
      <!-- /.row -->

    </div>
   </section>