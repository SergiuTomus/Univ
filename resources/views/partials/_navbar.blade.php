
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
            <a href="/">
                <div class="logo_">
                    <img src="{{asset('uploads/index/logo_nav.png')}}" id="logo">
                    <p class="text-center">University of <br> Kattegat</p>
                </div>
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/"> Home <span class="sr-only">(current)</span></a></li>
                <li class="dropdown">
                    <a href="/faculties" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Faculties + </a>
                    <ul class="dropdown-menu">
                        <li><a href="/faculties/economics">Economics</a></li>
                        <li><a href="/faculties/science">Science</a></li>
                        <li><a href="/faculties/arts">Arts</a></li>
                        <li><a href="faculties/design">Design</a></li>
                        <li><a href="/faculties/literature">Literature</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="/faculties">All faculties available</a></li>
                    </ul>
                </li>
                <li><a href="/courses"> Courses </a></li>
                <li><a href="/teachers"> Our professors </a></li>
                <li><a href="/halls"> Halls </a></li>
                <li><a href="/contact"> Contact</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="/auth">Log in <img src="{{asset('uploads/index/login.png')}}"></a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
