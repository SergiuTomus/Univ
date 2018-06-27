<!doctype html>
<html>
<head>
    <title> UK | Home</title>


    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Arapey|Cinzel|Encode+Sans+Condensed|Prata|Raleway|Source+Sans+Pro" rel="stylesheet">

    <!-- css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/index.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/header.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/index/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/index/owl.theme.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/index/owl.transitions.css')}}">
</head>
<body>
<header>
    <div>
        <img src="{{asset('uploads/index/homepage_bg.jpg')}}" class="home_bg">
    </div>
    <div>
        <div class="uni_descr">
            <h1 class="name text-center"> University of Kattegat </h1>
            <p class="descr text-center"> Some description about our university  </p>
        </div>
    </div>

    <nav class="navbar navbar-default navbar-fixed-top" id="sticky">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#">
                    <div class="logo_">
                        <img src="{{asset('uploads/index/logo_nav.png')}}" id="logo">
                        <p class="text-center">University of <br> Kattegat</p>
                    </div>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#"> Home <span class="sr-only">(current)</span></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Faculties + </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Economics</a></li>
                            <li><a href="#">Science</a></li>
                            <li><a href="#">Arts</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Literature</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">All faculties available</a></li>
                        </ul>
                    </li>
                    <li><a href="#"> Courses </a></li>
                    <li><a href="#"> Our professors </a></li>
                    <li><a href="#"> Halls </a></li>
                    <li><a href="#"> Contact</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Log in <img src="{{asset('uploads/index/login.png')}}"></a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

</header>
<div class="container">

    <!-- WHAT MAKES US DIFFERENT -->
    <div>
        <div class="row">
            <div class="col-md-12">
                <p class="why_us"> What makes us different ? </p>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 text-center">
                <img src="{{asset('uploads/index/graduates.png')}}" class="why_us_img">
                <p class="why_us_text"> All of our students gratuate, the rate of abandon is null.</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="{{asset('uploads/index/certificate.png')}}" class="why_us_img">
                <p class="why_us_text"> Your diploma will be recognized everywhere on Earth.</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="{{asset('uploads/index/id-card.png')}}" class="why_us_img">
                <p class="why_us_text"> By the time you finish your studies, you will already have work experience and a career granted.</p>
            </div>
        </div>
        <hr>
    </div>

    <!-- / WHAT MAKES US DIFFERENT -->

    <!-- POPULAR COURSES -->
    <div>
        <p class="text-center pop_c"> Popular courses</p>
        <hr>
        <div class="row">
            <div class="col-md-4">
                <div class="flip">
                    <div class="front">
                        <img src="{{asset('uploads/index/nd008.jpg')}}">
                        <p> Predictive Analitics For Business</p>
                    </div>
                    <div class="back">
                        <p>Learn to apply predictive analytics and business intelligence to solve real-world business problems</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="flip">
                    <div class="front">
                        <img src="{{asset('uploads/index/nd003.jpg')}}">
                        <p>Become an iOS developer</p>
                    </div>
                    <div class="back">
                        <p>Master the Swift programming language and create a portfolio of iOS apps for iPhone and iPad to showcase your skills</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="flip">
                    <div class="front">
                        <img src="{{asset('uploads/index/nd019.jpg')}}">
                        <p>React</p>
                    </div>
                    <div class="back">
                        <p>React is completely transforming Front-End Development. Master this powerful UI library  and gain skills to become a React developer.</p>
                    </div>
                </div>
            </div>
        </div>
        <hr>



    </div>
</div>
<!-- / POPULAR COURSES -->

<!-- STUDENT OPPINIONS -->
<p id="what_people_say"> WHAT PEOPLE SAY</p>
<div class="demo">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div id="testimonial-slider" class="owl-carousel">
                    <div class="testimonial">
                        <div class="pic">
                            <img src="{{asset('uploads/index/stud3.jpg')}}">
                        </div>
                        <h3 class="title">William</h3>
                        <span class="post">Economist</span>
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium ad asperiores at atque culpa dolores eaque fugiat hic illo ipsam ipsum minima modi necessitatibus nemo officia, omnis perferendis placeat sit vitae, consectetur adipisicing elit ipsam.
                        </p>
                    </div>
                    <div class="testimonial">
                        <div class="pic">
                            <img src="{{asset('uploads/index/stud1.jpg')}}">
                        </div>
                        <h3 class="title">Christina</h3>
                        <span class="post">Web Developer</span>
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium ad asperiores at atque culpa dolores eaque fugiat hic illo ipsam ipsum minima modi necessitatibus nemo officia, omnis perferendis placeat sit vitae, consectetur adipisicing elit ipsam.
                        </p>
                    </div>
                    <div class="testimonial">
                        <div class="pic">
                            <img src="{{asset('uploads/index/stud2.jpg')}}">
                        </div>
                        <h3 class="title">Josh</h3>
                        <span class="post">Web Designer</span>
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium ad asperiores at atque culpa dolores eaque fugiat hic illo ipsam ipsum minima modi necessitatibus nemo officia, omnis perferendis placeat sit vitae, consectetur adipisicing elit ipsam.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<!-- / STUDENT OPPINIONS -->




<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-6" id="footer_column1">
                <h3> About University of Kattegat</h3>
                <hr class="hr">
                <p> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum

                    nulla facilisis at vero eros et accumsan et iusto odio dignissimblandit</p>
                <hr class="hr">
                <span class="glyphicon glyphicon-map-marker"> Somewhere in Norway</span>
                <br>
                <span class="glyphicon glyphicon-earphone"> Call us 0800 12345</span>
                <br>
                <span class="glyphicon glyphicon-envelope"> university@kattegat.info</span>
            </div>
            <div class="col-md-6" id="footer_column2">
                <h3> Find us on  </h3>
                <hr class="hr">

                <a href="#">
                    <img src="{{asset('uploads/index/facebook-logo-button.png')}}" id="facebook_footer">
                </a>
                <a href="#" >
                    <img src="{{asset('uploads/index/instagram-logo.png')}}" id="instagram_footer">
                </a>
                <a href="#" >
                    <img src="{{asset('uploads/index/twitter-logo-button.png')}}" id="twitter_footer">
                </a>

            </div>
        </div>
    </div>

</footer>


<!-- Scripts -->
<!--<script type="text/javascript" src="js/jquery.js"></script>-->
<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
<script src="{{asset('js/index/flip.min.js')}}"></script>

<script type="text/javascript" src="{{asset('js/index/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/index.js')}}"></script>
</body>
</html>
