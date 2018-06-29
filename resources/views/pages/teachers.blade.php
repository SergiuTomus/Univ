<!doctype html>
<html lang="en">
<head>
    <title> UK | Home</title>


    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Arapey|Cinzel|Encode+Sans+Condensed|Prata|Raleway|Source+Sans+Pro" rel="stylesheet">

    <!-- css -->
    <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet" type="text/css" href="css/contact.css">
    <link rel="stylesheet" type="text/css" href="css/teachers.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="contact.css" />

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<header>
    <div>
        <img src="resources/homepage_bg.jpg" class="home_bg">
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
                        <img src="resources/logo_nav.png" id="logo">
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
                    <li><a href="contact.html"> Contact</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Log in <img src="resources/login.png"></a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

</header>

<section id="team" class="pb-5">
    <div class="container">
        <h5 class="section-title h1">Our Teachers</h5>
        <div class="row">
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="img/prof1.jpg" alt="card image"></p>
                                    <h4 class="card-title">Popescu Ioana</h4>
                                    <p class="card-text">Porf. Univ. Dr. - Computer Science</p>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Educational activities</h4>
                                    <p class="card-text">Linear Algebra, Mathematical Analysis, Mathematics Applied in Economics, Financial and Actuarial Mathematics, Mathematical Basics of Computers, Operational Research, Numeric and Symbolic Calculus, Differential and Computational Calculus, Arithmetic, Arithmetic teaching methodology</p>
                                    <h4 class="card-title">Fields of interest</h4>
                                    <p class="card-text">Geometric theory of functions, univalent functions, integral operators, mathematical analysis.</p>
                                   
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
                                    <a href="#" class="btn btn-primary btn-sm"><i>Teacher Page</i></a>                        
                                </div>                           
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="img/prof3.jpg" alt="card image"></p>
                                    <h4 class="card-title">Marcel Pavel</h4>
                                    <p class="card-text">Prof. Univ. - Numerical and Statistical Calculation</p>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                <h4 class="card-title">Educational activities</h4>
                                    <p class="card-text">Applied Mathematics in Economics, Operational Research, Optimization Techniques, Probability and Mathematical Statistics</p>
                                    <h4 class="card-title">Fields of interest</h4>
                                    <p class="card-text">Mathematics - Numerical and Statistical Calculation</p>
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
                                    <a href="#" class="btn btn-primary btn-sm"><i>Teacher Page</i></a>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="img/prof2.jpg" alt="card image"></p>
                                    <h4 class="card-title">Barbu Daniela</h4>
                                    <p class="card-text">Letc. Univ. Dr. - Computer programming</p>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                <h4 class="card-title">Educational activities</h4>
                                    <p class="card-text">Algorithms and data structures, Computer programming, Object Oriented Programming, Intelligent Calculation, Advanced Object Oriented Programming Techniques</p>
                                    <h4 class="card-title">Fields of interest</h4>
                                    <p class="card-text">Evolutionary calculation, Evolutionary optimization techniques, Natural Paradigms in Artificial Intelligence</p><ul class="list-inline">
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
                                    <a href="#" class="btn btn-primary btn-sm"><i>Teacher Page</i></a>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="img/prof6.jpg" alt="card image"></p>
                                    <h4 class="card-title">Ionescu Mihai</h4>
                                    <p class="card-text">Lect. Conf. Dr.</p>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                <h4 class="card-title">Educational activities</h4>
                                    <p class="card-text">Algorithms and data structures, Computer programming, Object Oriented Programming, Intelligent Calculation, Advanced Object Oriented Programming Techniques</p>
                                    <h4 class="card-title">Fields of interest</h4>
                                    <p class="card-text">Evolutionary calculation, Evolutionary optimization techniques, Natural Paradigms in Artificial Intelligence</p><ul class="list-inline">
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
                                    <a href="#" class="btn btn-primary btn-sm"><i>Teacher Page</i></a>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="img/prof5.jpg" alt="card image"></p>
                                    <h4 class="card-title">Martin Marin</h4>
                                    <p class="card-text">Assist. Univ.</p>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                <h4 class="card-title">Educational activities</h4>
                                    <p class="card-text">Algorithms and data structures, Computer programming, Object Oriented Programming, Intelligent Calculation, Advanced Object Oriented Programming Techniques</p>
                                    <h4 class="card-title">Fields of interest</h4>
                                    <p class="card-text">Evolutionary calculation, Evolutionary optimization techniques, Natural Paradigms in Artificial Intelligence</p><ul class="list-inline">
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
                                    <a href="#" class="btn btn-primary btn-sm"><i>Teacher Page</i></a>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="img/prof4.jpg" alt="card image"></p>
                                    <h4 class="card-title">Barcelo Marinela</h4>
                                    <p class="card-text">Prof. Univ. Dr.</p>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                <h4 class="card-title">Educational activities</h4>
                                    <p class="card-text">Algorithms and data structures, Computer programming, Object Oriented Programming, Intelligent Calculation, Advanced Object Oriented Programming Techniques</p>
                                    <h4 class="card-title">Fields of interest</h4>
                                    <p class="card-text">Evolutionary calculation, Evolutionary optimization techniques, Natural Paradigms in Artificial Intelligence</p><ul class="list-inline">
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
                                    <a href="#" class="btn btn-primary btn-sm"><i>Teacher Page</i></a>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->

        </div>
    </div>
</section>

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
                        <img src="resources/facebook-logo-button.png" id="facebook_footer">
                    </a>
                    <a href="#" >
                        <img src="resources/instagram-logo.png" id="instagram_footer">
                    </a>
                    <a href="#" >
                        <img src="resources/twitter-logo-button.png" id="twitter_footer">
                    </a>

            </div>
        </div>
    </div>

</footer>
<!-- Scripts -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="bootstrap/bootstrap.js"></script>
<script type="text/javascript" src="js/homepage_js.js"></script>
</body>
</html>