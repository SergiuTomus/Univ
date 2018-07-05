
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
                    <img src="{{asset('resources/index/logo_nav.png')}}" id="logo">
                    <p class="text-center">University of <br> Kattegat</p>
                </div>
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                @guest
                <li class="active"><a href="/"> Home <span class="sr-only">(current)</span></a></li>
                <li class="dropdown">
                    <a href="/faculties/all" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Faculties + </a>
                    <ul class="dropdown-menu" id="dropdown-sticky">
                        <li><a href="/faculties/economics">Economics</a></li>
                        <li><a href="/faculties/science">Science</a></li>
                        <li><a href="/faculties/arts">Arts</a></li>
                        <li><a href="faculties/design">Design</a></li>
                        <li><a href="/faculties/literature">Literature</a></li>
                    </ul>
                </li>
                <li><a href="/courses/all"> Courses </a></li>
                <li><a href="/teachers"> Our professors </a></li>
                <li><a href="/halls"> Halls </a></li>
                <li><a href="/contact"> Contact</a></li>
                @else
                    <li class="active"><a href="/"> Home <span class="sr-only">(current)</span></a></li>
                    <li class="dropdown">
                        <a href="/faculties/all" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Faculties + </a>
                        <ul class="dropdown-menu" id="dropdown-sticky">
                            <li><a href="/faculties/economics">Economics</a></li>
                            <li><a href="/faculties/science">Science</a></li>
                            <li><a href="/faculties/arts">Arts</a></li>
                            <li><a href="faculties/design">Design</a></li>
                            <li><a href="/faculties/literature">Literature</a></li>
                        </ul>
                    </li>
                    <li><a href="/courses/all"> Courses </a></li>
                    <li><a href="/teachers"> Our professors </a></li>
                    <li><a href="/halls"> Halls </a></li>
                    <li><a href="/contact"> Contact</a></li>
                    <li><a href="/appointment"> Calendar </a></li>
                    @endguest

            </ul>

            <ul class="nav navbar-nav navbar-right">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @else
                    <li class="nav-item"><a href="{{route('users.show',Auth::user()->slug)}}" class="nav-link"> {{Auth::user()->first_name}}  {{Auth::user()->last_name}}</a></li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
