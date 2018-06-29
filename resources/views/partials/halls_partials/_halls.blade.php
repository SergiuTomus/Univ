<section id="team" class="pb-5">

    <div class="container col">



        <h5 class="section-title h1">OUR HALLS</h5>
        <div class="row">
            <!-- Team member -->
            @foreach($halls as $hall)

            
                

                 <div class="col-xs-12 col-sm-6 col-md-3">
           
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="{{$hall->path}}" alt="card image"> </p>
                                    <h4 class="card-title"> {{$hall->name}}<br> No.Seats: {{$hall->no_seats}} <br> Building: {{$hall->building}}</h4>

                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                   
                                    <h4 class="card-title">{{$hall->name}}</h4>                      
                                   
                                    <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                    
                                    <a href="#"; class="btn btn-primary btn-sm" ><i>View</i></a>

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