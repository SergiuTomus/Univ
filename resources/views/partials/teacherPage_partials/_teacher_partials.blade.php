

<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="box-holder animated bounceInDown">
                <span class="load-box"><span class="box-inner"></span></span>
            </div>
            <!-- NAME & STATUS -->
            <div class="text-holder text-center">
                <h2>{{$teacher->first_name . ' ' . $teacher->last_name}}</h2>
                <h6>Software Engineer</h6>
            </div>
        </div>
    </div>
</div>

<header id="home">
    <nav id="theMenu" class="menu">

        <div id="menu-options" class="menu-wrap">

            <div class="logo-flat">
                <img alt="personal-logo" class="img-responsive" src="/uploads/teachers/{{$teacher->path}}">
            </div>
            <br>

            <a href="#home"><i class="title-icon fa fa-user"></i>Home</a>
            <a href="#about"><i class="title-icon fa fa-dashboard"></i>About</a>
            <a href="#education"><i class="title-icon fa fa-graduation-cap"></i>Education</a>
            <a href="#skills"><i class="title-icon fa fa-sliders"></i>Skills</a>
            <a href="#experience"><i class="title-icon fa fa-suitcase"></i>Experience</a>
            <a href="#portfolios"><i class="title-icon fa fa-archive"></i>Portfolios</a>
            <a href="#interest"><i class="title-icon fa fa-heart"></i>Interest</a>
           
        </div>

      
        <div id="menuToggle">
            <div class="toggle-normal">
                <i class="material-icons top-bar">remove</i>
                <i class="material-icons middle-bar">remove</i>
                <i class="material-icons bottom-bar">remove</i>
            </div>
        </div>
    </nav>


    <div class="header-background section"></div>

</header>


<div id="v-card-holder" class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div id="v-card" class="card">

                    <div id="profile" class="right">
                    <p><img class="img-fluid" src="/uploads/teachers/{{$teacher->path}}" alt="profile image"> </p>
                        <div class="slant"></div>

                        <!--EMPTY PLUS BUTTON-->
                        <div class="btn-floating btn-large add-btn"><i class="material-icons">add</i></div>

                        <!--VIDEO PLAY BUTTON-->
                        <!--<div id="button-holder" class="btn-holder">
                            <div id="play-btn" class="btn-floating btn-large btn-play">
                                <i id="icon-play" class="material-icons">play_arrow</i>
                            </div>
                        </div>-->
                    </div>
                    <!--VIDEO CLOSE BUTTON-->
                    <!--<div id="close-btn" class="btn-floating icon-close">
                        <i class="fa fa-close"></i>
                    </div>-->

                    <div class="card-content">

                        <!-- NAME & STATUS -->
                        <div class="info-headings">
                            <h4 class="text-uppercase left">{{$teacher->first_name . ' ' . $teacher->last_name}}</h4>
                            <h6 class="text-capitalize left">Software Engineer</h6>
                        </div>

                        <!-- CONTACT INFO -->
                        <div class="infos">
                            <ul class="profile-list">
                                <li class="clearfix">
                                    <span class="title"><i class="material-icons">email</i></span>
                                    <span class="content">{{$teacher->email}}</span>
                                </li>
                                <li class="clearfix">
                                    <span class="title"><i class="material-icons">language</i></span>
                                    <span class="content">univ.com</span>
                                </li>
                                <li class="clearfix">
                                    <span class="title"><i class="fa fa-skype" aria-hidden="true"></i></span>
                                    <span class="content">m.popescu@skype.com</span>
                                </li>
                                <li class="clearfix">
                                    <span class="title"><i class="material-icons">phone</i></span>
                                    <span class="content">+40724242424</span>
                                </li>
                                <li class="clearfix">
                                    <span class="title"><i class="material-icons">place</i></span>
                                    <span class="content">Revolutiei Str., Alba Iulia, RO</span>
                                </li>

                            </ul>
                        </div>

                        <!--LINKS-->
                        <div class="links">
                            <!-- FACEBOOK-->
                            <a href="#" id="first_one"
                               class="social btn-floating indigo"><i
                                    class="fa fa-facebook"></i></a>
                            <!-- TWITTER-->
                            <a href="#" class="social  btn-floating blue"><i
                                    class="fa fa-twitter"></i></a>
                            <!-- GOOGLE+-->
                            <a href="#" class="social  btn-floating red"><i
                                    class="fa fa-google-plus"></i></a>
                            <!-- LINKEDIN-->
                            <a href="#" class="social  btn-floating blue darken-3"><i
                                    class="fa fa-linkedin"></i></a>
                            <!-- RSS-->
                            <a href="#" class="social  btn-floating orange darken-3"><i
                                    class="fa fa-rss"></i></a>
                        </div>
                    </div>
                    <!--HTML 5 VIDEO-->
                    <!-- <video id="html-video" class="video" poster="images/poster/poster.jpg" controls>
                        <source src="videos/b.webm" type="video/webm">
                        <source src="videos/a.mp4" type="video/mp4">
                    </video>-->

                </div>
            </div>
        </div>
    </div>
</div>


<div id="about" class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- DETAILS -->
                <div id="about-card" class="card">
                    <div class="card-content">
                        <!-- ABOUT PARAGRAPH -->
                        <p>
                            Hello! I’m Mihaela Popescu. Senior Web Developer with over 13 years of experience
                            specializing in front end development. Experienced with all stages of the
                            development cycle for dynamic web projects.Having an in-depth knowledge
                            including advanced HTML5, CSS, CSS3, SASS, LESS, JSON, XML, Java, JavaScript,
                            JQuery, Angular JS. Strong background in management and leadership.
                        </p>
                    </div>

                    <!-- BUTTONS -->
                    <div id="about-btn" class="card-action">
                        <div class="about-btn">
                            <!-- DOWNLOAD CV BUTTON -->
                            <a href="#" class="btn waves-effect">Download CV</a>
                            <!-- CONTACT BUTTON -->
                            <a href="#contact" class="btn waves-effect">Contact Me</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<section id="education" class="section">
    <div class="container">
        <!-- SECTION TITLE -->
        <div class="section-title">
            <h4 class="text-center"><img src="{{asset('uploads/teacher/educatie.png')}}" alt="education">Education</h4>
        </div>

        <div id="timeline-education">

            <!-- FIRST TIMELINE -->
            <div class="timeline-block">
                <!-- DOT -->
                <div class="timeline-dot"><h6>P</h6></div>
                <!-- TIMELINE CONTENT -->
                <div class="card timeline-content">
                    <div class="card-content">
                        <!-- TIMELINE TITLE -->
                        <h6 class="timeline-title">Preparatory Education</h6>
                        <!-- TIMELINE TITLE INFO -->
                        <div class="timeline-info">
                            <h6>
                                <small>Fedrick School</small>
                            </h6>
                            <h6>
                                <small>Jan 1997 - Mar 2000</small>
                            </h6>
                        </div>
                        <!-- TIMELINE PARAGRAPH -->
                        <p>
                            I completed my preparatory education from this prestigious institution.
                            I successful completed all the credits without any fallout and got A grade overall.
                        </p>
                        <!-- BUTTON TRIGGER MODAL -->
                        <a href="#" class="modal-dot" data-toggle="modal" data-target="#myModal-1">
                            <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- SECOND TIMELINE -->
            <div class="timeline-block">
                <!-- DOT -->
                <div class="timeline-dot"><h6>H</h6></div>
                <!-- TIMELINE CONTENT -->
                <div class="card timeline-content">
                    <div class="card-content">
                        <!-- TIMELINE TITLE -->
                        <h6 class="timeline-title">High School</h6>
                        <!-- TIMELINE TITLE INFO -->
                        <div class="timeline-info">
                            <h6>
                                <small>RedStreet College</small>
                            </h6>
                            <h6>
                                <small>Jan 2000 - Mar 2005</small>
                            </h6>
                        </div>
                        <!-- TIMELINE PARAGRAPH -->
                        <p>
                            I completed my high school degree from this prestigious institution.
                            I successful completed all the credits without any fallout and got A grade overall.
                        </p>
                    </div>
                </div>
            </div>

            <!-- THIRD TIMELINE -->
            <div class="timeline-block">
                <!-- DOT -->
                <div class="timeline-dot"><h6>C</h6></div>
                <!-- TIMELINE CONTENT -->
                <div class="card timeline-content">
                    <div class="card-content">
                        <!-- TIMELINE TITLE -->
                        <h6 class="timeline-title">Computer Science</h6>
                        <!-- TIMELINE TITLE INFO -->
                        <div class="timeline-info">
                            <h6>
                                <small>Down Street College</small>
                            </h6>
                            <h6>
                                <small>Jan 2006 - Mar 2008</small>
                            </h6>
                        </div>
                        <!-- TIMELINE PARAGRAPH -->
                        <p>
                            I completed my computer science degree from this prestigious institution.
                            I successful completed all the credits without any fallout and got A grade overall.
                        </p>

                    </div>
                </div>
            </div>

            <!-- FOURTH TIMELINE -->
            <div class="timeline-block">
                <!-- DOT -->
                <div class="timeline-dot"><i class="fa fa-graduation-cap"></i></div>
                <!-- TIMELINE CONTENT -->
                <div class="card timeline-content">
                    <div class="card-content">
                        <!-- TIMELINE TITLE -->
                        <h6 class="timeline-title">Software Engineering</h6>
                        <!-- TIMELINE TITLE INFO -->
                        <div class="timeline-info">
                            <h6>
                                <small>Oxford University</small>
                            </h6>
                            <h6>
                                <small>Jan 2009 - Mar 2010</small>
                            </h6>
                        </div>
                        <!-- TIMELINE PARAGRAPH -->
                        <p>
                            I completed this degree from this prestigious institution.
                            I successful completed all the credits without any fallout and got A grade overall.
                        </p>

                    </div>
                </div>
            </div>
            <!-- FIFTH TIMELINE -->
            <div class="timeline-block">
                <!-- DOT -->
                <div class="timeline-dot"><h6>U</h6></div>
                <!-- TIMELINE CONTENT -->
                <div class="card timeline-content">
                    <div class="card-content">
                        <!-- TIMELINE TITLE -->
                        <h6 class="timeline-title">UI/UX Workshop</h6>
                        <!-- TIMELINE TITLE INFO -->
                        <div class="timeline-info">
                            <h6>
                                <small>IT Next Academy</small>
                            </h6>
                            <h6>
                                <small>Jan 2010 - Mar 2011</small>
                            </h6>
                        </div>
                        <!-- TIMELINE PARAGRAPH -->
                        <p>
                            I completed this course from this prestigious institution.
                            I successful completed all the credits without any fallout and got A grade overall.
                        </p>
                        <!-- BUTTON TRIGGER MODAL -->
                        <a href="#" class="modal-dot" data-toggle="modal" data-target="#myModal-2">
                            <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- SIXTH TIMELINE -->
            <div class="timeline-block">
                <!-- DOT -->
                <div class="timeline-dot"><i class="fa fa-globe"></i></div>
                <!-- TIMELINE CONTENT -->
                <div class="card timeline-content">
                    <div class="card-content">
                        <!-- TIMELINE TITLE -->
                        <h6 class="timeline-title">Web Development</h6>
                        <!-- TIMELINE TITLE INFO -->
                        <div class="timeline-info">
                            <h6>
                                <small>Lipro University</small>
                            </h6>
                            <h6>
                                <small>Jan 2011 - Mar 2012</small>
                            </h6>
                        </div>
                        <!-- TIMELINE PARAGRAPH -->
                        <p>
                            I completed this course from this prestigious institution.
                            I successful completed all the credits without any fallout and got A grade overall.
                        </p>
                        <!-- BUTTON TRIGGER MODAL -->
                        <a href="#" class="modal-dot" data-toggle="modal" data-target="#myModal-3">
                            <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<section id="skills" class="section">
    <div class="container">
        <!-- SECTION TITLE -->
        <div class="section-title">
            <h4 class="text-center"><img src="{{asset('uploads/teacher/skills.png')}}" alt="demo">Skills</h4>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div id="skills-card" class="card">
                    <div class="card-content">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <!-- FIRST SKILL SECTION -->
                                <div class="skills-title">
                                    <h6 class="text-center">Professional</h6>
                                </div>
                                <!-- FIRST SKILL BAR -->
                                <div class="skillbar" data-percent="90%">
                                    <div class="skillbar-title"><span>HTML5</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">90%</div>
                                </div>
                                <!-- SECOND SKILL BAR  -->
                                <div class="skillbar" data-percent="90%">
                                    <div class="skillbar-title"><span>CSS3</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">90%</div>
                                </div>
                                <!-- THIRD SKILL BAR  -->
                                <div class="skillbar" data-percent="70%">
                                    <div class="skillbar-title"><span>jQuery</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">70%</div>
                                </div>
                                <!-- FOURTH SKILL BAR  -->
                                <div class="skillbar" data-percent="68%">
                                    <div class="skillbar-title"><span>PHP</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">68%</div>
                                </div>
                            </div>


                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <!-- SECOND SKILL SECTION -->
                                <div class="skills-title">
                                    <h6 class="text-center">Personal</h6>
                                </div>
                                <!-- FIRST SKILL BAR -->
                                <div class="skillbar" data-percent="80%">
                                    <div class="skillbar-title"><span>Communication</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">80%</div>
                                </div>
                                <!-- SECOND SKILL BAR  -->
                                <div class="skillbar" data-percent="60%">
                                    <div class="skillbar-title"><span>Teamwork</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">60%</div>
                                </div>
                                <!-- THIRD SKILL BAR  -->
                                <div class="skillbar" data-percent="70%">
                                    <div class="skillbar-title"><span>Creativity</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">70%</div>
                                </div>
                                <!-- FOURTH SKILL BAR  -->
                                <div class="skillbar" data-percent="70%">
                                    <div class="skillbar-title"><span>Dedication</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">70%</div>
                                </div>
                            </div>


                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <!-- THIRD SKILL SECTION -->
                                <div class="skills-title">
                                    <h6 class="text-center">Software</h6>
                                </div>
                                <!-- FIRST SKILL BAR -->
                                <div class="skillbar" data-percent="80%">
                                    <div class="skillbar-title"><span>Adobe Illustrator</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">80%</div>
                                </div>
                                <!-- SECOND SKILL BAR  -->
                                <div class="skillbar" data-percent="70%">
                                    <div class="skillbar-title"><span>Adobe InDesign</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">70%</div>
                                </div>
                                <!-- THIRD SKILL BAR  -->
                                <div class="skillbar" data-percent="60%">
                                    <div class="skillbar-title"><span>PHP Storm</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">60%</div>
                                </div>
                                <!-- FOURTH SKILL BAR  -->
                                <div class="skillbar" data-percent="80%">
                                    <div class="skillbar-title"><span>Dev Console</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">80%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="experience" class="section">
    <div class="container">
        <!-- SECTION TITLE -->
        <div class="section-title">
            <h4 class="text-uppercase text-center"><img src="{{asset('uploads/teacher/experience.png')}}" alt="demo">Experience</h4>
        </div>

        <div id="timeline-experience">

            <!-- FIRST TIMELINE -->
            <div class="timeline-block">
                <!-- DOT -->
                <div class="timeline-dot"><h6>D</h6></div>
                <!-- TIMELINE CONTENT -->
                <div class="card timeline-content">
                    <div class="card-content">
                        <!-- TIMELINE TITLE -->
                        <h6 class="timeline-title">Designer</h6>
                        <!-- TIMELINE TITLE INFO -->
                        <div class="timeline-info">
                            <h6>
                                <small>RulerSoft</small>
                            </h6>
                            <h6>
                                <small>Jan 2010 - Mar 2012</small>
                            </h6>
                        </div>
                        <!-- TIMELINE PARAGRAPH -->
                        <p>
                            I started my designing carrier here, spent tow years learning and working
                            in various designing aspects..
                        </p>
                        <!-- BUTTON TRIGGER MODAL -->
                        <a href="#" class="modal-dot" data-toggle="modal" data-target="#myModal-4">
                            <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- SECOND TIMELINE -->
            <div class="timeline-block">
                <!-- DOT -->
                <div class="timeline-dot"><h6>F</h6></div>
                <!-- TIMELINE CONTENT -->
                <div class="card timeline-content">
                    <div class="card-content">
                        <!-- TIMELINE TITLE -->
                        <h6 class="timeline-title">Frontend Developer</h6>
                        <!-- TIMELINE TITLE INFO -->
                        <div class="timeline-info">
                            <h6>
                                <small>Micro IT</small>
                            </h6>
                            <h6>
                                <small>Jan 2012 - Mar 2014</small>
                            </h6>
                        </div>
                        <!-- TIMELINE PARAGRAPH -->
                        <p>
                            I started my frontend carrier here, spent tow years learning and working
                            in various frontend aspects. I worked on about 40+ projects local and online.
                        </p>

                    </div>
                </div>
            </div>

            <!-- THIRD TIMELINE -->
            <div class="timeline-block">
                <!-- DOT -->
                <div class="timeline-dot"><h6>U</h6></div>
                <!-- TIMELINE CONTENT -->
                <div class="card timeline-content">
                    <div class="card-content">
                        <!-- TIMELINE TITLE -->
                        <h6 class="timeline-title">UI/UX Expert</h6>
                        <!-- TIMELINE TITLE INFO -->
                        <div class="timeline-info">
                            <h6>
                                <small>Libra IT Solutions</small>
                            </h6>
                            <h6>
                                <small>Jan 2014 - Mar 2015</small>
                            </h6>
                        </div>
                        <!-- TIMELINE PARAGRAPH -->
                        <p>
                            I started my expertise carrier here, spent tow years learning and working
                            in various UX/UI aspects. I worked on about 70+ projects local and online.
                        </p>

                    </div>
                </div>
            </div>

            <!-- FOURTH TIMELINE -->
            <div class="timeline-block">
                <!-- DOT -->
                <div class="timeline-dot"><h6>S</h6></div>
                <!-- TIMELINE CONTENT -->
                <div class="card timeline-content">
                    <div class="card-content">
                        <!-- TIMELINE TITLE -->
                        <h6 class="timeline-title">Senior Developer</h6>
                        <!-- TIMELINE TITLE INFO -->
                        <div class="timeline-info">
                            <h6>
                                <small>WebStyle Technologies</small>
                            </h6>
                            <h6>
                                <small>Jan 2016 - Continue..</small>
                            </h6>
                        </div>
                        <!-- TIMELINE PARAGRAPH -->
                        <p>
                            I recently joined here, currently working on various development
                            aspects. I already worked on about..
                        </p>
                        <!-- BUTTON TRIGGER MODAL -->
                        <a href="#" class="modal-dot" data-toggle="modal" data-target="#myModal-5">
                            <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section>
    <!--MODAL ONE-->
    <div class="modal fade" id="myModal-1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel-1">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <!--MODAL HEADER-->
                <div class="modal-header  text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"><i class="fa fa-close"></i></span></button>
                    <h4 class="modal-title" id="myModalLabel-1">GRADUATION AT ASHTON UNI</h4>
                    <h6>
                        <small>Jan 2014 - Mar 2015</small>
                    </h6>
                </div>
                <!--MODAL BODY-->
                <div class="modal-body">
                    <img class="img-responsive" alt="graduation" src="images/timeline/demo-gra.jpg">
                    <p>
                        I have learned a great many things from participating in varsity football.
                        It has changed my entire outlook on and attitude toward life. Before my
                        freshman year at [high-school], I was shy, had low self-esteem and turned
                        away from seemingly impossible challenges. Football has altered all of these
                        qualities. On the first day of freshman practice, the team warmed up with a
                        game of touch football. The players were split up and the game began. However,
                        during the game, I noticed that I didn't run as hard as I could, nor did I try
                        to evade my defender and get open. The fact of the matter is that I really did
                        not want to be thrown the ball. I didn't want to be the one at fault if I dropped
                        the ball and the play didn't succeed. I did not want the responsibility of helping
                        the team because I was too afraid of making a mistake. That aspect of my character
                        led the first years of my high school life. All the while, I went to practice.
                    </p>
                </div>
                <!--MODAL FOOTER-->
                <div class="modal-footer">
                    <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                </div>
            </div>
        </div>
    </div>

    <!--MODAL TWO-->
    <div class="modal fade" id="myModal-2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel-2">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <!--MODAL HEADER-->
                <div class="modal-header  text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"><i class="fa fa-close"></i></span></button>
                    <h4 class="modal-title" id="myModalLabel-2">EDUCATION AT Y</h4>
                    <h6>
                        <small>Jan 2014 - Mar 2015</small>
                    </h6>
                </div>
                <!--MODAL BODY-->
                <div class="modal-body">
                    <p>
                        I have learned a great many things from participating in varsity football.
                        It has changed my entire outlook on and attitude toward life. Before my
                        freshman year at [high-school], I was shy, had low self-esteem and turned
                        away from seemingly impossible challenges. Football has altered all of these
                        qualities. On the first day of freshman practice, the team warmed up with a
                        game of touch football. The players were split up and the game began. However,
                    </p>
                </div>
                <!--MODAL FOOTER-->
                <div class="modal-footer">
                    <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                </div>
            </div>
        </div>
    </div>

    <!--MODAL THREE-->
    <div class="modal fade" id="myModal-3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel-3">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <!--MODAL HEADER-->
                <div class="modal-header  text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"><i class="fa fa-close"></i></span></button>
                    <h4 class="modal-title" id="myModalLabel-3">EDUCATION AT Z</h4>
                    <h6>
                        <small>Jan 2014 - Mar 2015</small>
                    </h6>
                </div>
                <!--MODAL BODY-->
                <div class="modal-body">
                    <img class="img-responsive" alt="graduation" src="images/timeline/demo-gra.jpg">
                    <p>
                        I have learned a great many things from participating in varsity football.
                        It has changed my entire outlook on and attitude toward life. Before my
                        freshman year at [high-school], I was shy, had low self-esteem and turned
                        away from seemingly impossible challenges. Football has altered all of these
                        qualities. On the first day of freshman practice, the team warmed up with a
                        game of touch football. The players were split up and the game began. However,
                    </p>
                </div>
                <!--MODAL FOOTER-->
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                </div>
            </div>
        </div>
    </div>

    <!--MODAL FOUR-->
    <div class="modal fade" id="myModal-4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel-4">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <!--MODAL HEADER-->
                <div class="modal-header  text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"><i class="fa fa-close"></i></span></button>
                    <h4 class="modal-title" id="myModalLabel-4">EXPERIENCE AT Z</h4>
                    <h6>
                        <small>Jan 2014 - Mar 2015</small>
                    </h6>
                </div>
                <!--MODAL BODY-->
                <div class="modal-body">
                    <p>
                        I have learned a great many things from participating in varsity football.
                        It has changed my entire outlook on and attitude toward life. Before my
                        freshman year at [high-school], I was shy, had low self-esteem and turned
                        away from seemingly impossible challenges. Football has altered all of these
                        qualities. On the first day of freshman practice, the team warmed up with a
                        game of touch football. The players were split up and the game began. However,
                    </p>
                </div>
                <!--MODAL FOOTER-->
                <div class="modal-footer">
                    <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                </div>
            </div>
        </div>
    </div>

    <!--MODAL FIVE-->
    <div class="modal fade" id="myModal-5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel-5">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <!--MODAL HEADER-->
                <div class="modal-header  text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"><i class="fa fa-close"></i></span></button>
                    <h4 class="modal-title" id="myModalLabel-5">EXPERIENCE AT M</h4>
                    <h6>
                        <small>Jan 2014 - Mar 2015</small>
                    </h6>
                </div>
                <!--MODAL BODY-->
                <div class="modal-body">
                    <p>
                        I have learned a great many things from participating in varsity football.
                        It has changed my entire outlook on and attitude toward life. Before my
                        freshman year at [high-school], I was shy, had low self-esteem and turned
                        away from seemingly impossible challenges. Football has altered all of these
                        qualities. On the first day of freshman practice, the team warmed up with a
                        game of touch football. The players were split up and the game began. However,
                    </p>
                </div>
                <!--MODAL FOOTER-->
                <div class="modal-footer">
                    <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                </div>
            </div>
        </div>
    </div>
</section>


<section id="portfolios" class="section">
    <div class="container">
        <!-- SECTION TITLE -->
        <div class="section-title">
            <h4 class="text-center"><img src="{{asset('uploads/teacher/portfolio.png')}}" alt="demo">Portfolios</h4>
        </div>
        <div id="portfolios-card" class="row">

            <!--OPTIONS-->
            <ul class="nav nav-tabs">
                <!--ALL CATEGORIES-->
                <li class="active waves-effect list-shuffle"><a id="all-sample" class="active" href="#all"
                                                                data-toggle="tab">ALL</a>
                    <!--CATEGORIES-->
                <li class="waves-effect list-shuffle"><a class="cate" href="#a" data-toggle="tab">LOGO</a></li>
                <li class="waves-effect list-shuffle"><a class="cate" href="#b" data-toggle="tab">DRIBBLE</a></li>
                <li class="waves-effect list-shuffle"><a class="cate" href="#c" data-toggle="tab">WEBSITES</a></li>
            </ul>

            <!--CATEGORIES CONTENT-->
            <div class="tab-content">

                <!--All CATEGORIES-->
                <div id="all"></div>

                <!--CATEGORY 1-->
                <div id="a">

                    <!--CATEGORY CONTENT ONE BIG-->
                    <div class="col-md-4 col-sm-12 col-xs-12 grid big inLeft">
                        <figure class="port-effect-scale">
                            <img src="{{asset('uploads/teacher/port1.jpg')}}" class="img-responsive" alt="portfolio-demo"/>
                            <figcaption>
                                <h2>Lightbox <span> IMAGE</span></h2>
                                <p>Two Hover Effect For Portfolio Grid Blocks. Its Scale</p>
                                <a href="{{asset('uploads/teacher/port1.jpg')}}" class="popup-image" data-effect="mfp-3d-unfold">View
                                    more</a>
                            </figcaption>
                        </figure>
                    </div>

                    <!--CATEGORY CONTENT TWO SMALL-->
                    <div class="col-md-4 col-sm-6 col-xs-12 grid inRight">
                        <figure class="port-effect-scale">
                            <img src="{{asset('uploads/teacher/port2.jpg')}}" class="img-responsive" alt="portfolio-demo"/>
                            <figcaption>
                                <h2><i class="fa fa-play-circle" aria-hidden="true"></i>Lightbox <span> Video</span>
                                </h2>
                                <p>I designed this for a client for his cafe.</p>
                                <a class="popup-youtube" href="https://www.youtube.com/watch?v=36MLtd3BPu4">View more</a>
                            </figcaption>
                        </figure>
                    </div>

                    <!--CATEGORY CONTENT THREE SMALL-->
                    <div class="col-md-4 col-sm-6 col-xs-12 grid inRight">
                        <figure class="port-effect-up">
                            <img src="{{asset('uploads/teacher/port3.jpg')}}" class="img-responsive" alt="portfolio-demo"/>
                            <figcaption>
                                <h2>Lightbox <span> IMAGE</span></h2>
                                <p>Two Hover Effect For Portfolio Grid Blocks. Its Up</p>
                                <a href="{{asset('uploads/teacher/port3.jpg')}}" class="popup-image"
                                   data-effect="mfp-move-horizontal">View more</a>
                            </figcaption>
                        </figure>
                    </div>

                </div>

                <!--CATEGORY 2-->
                <div id="b">

                    <!--CATEGORY CONTENT ONE BIG-->
                    <div class="col-md-4 col-sm-12 col-xs-12 grid big inRight">
                        <figure class="port-effect-up">
                            <img src="{{asset('uploads/teacher/port4.jpg')}}" class="img-responsive" alt="portfolio-demo"/>
                            <figcaption>
                                <h2>Lightbox <span> IMAGE</span></h2>
                                <p>Effect also available for Lightbox Image Check The Doc</p>
                                <a href="{{asset('uploads/teacher/port4.jpg')}}" class="popup-image"
                                   data-effect="mfp-move-from-top">View more</a>
                            </figcaption>
                        </figure>
                    </div>

                    <!--CATEGORY CONTENT TWO SMALL-->
                    <div class="col-md-4 col-sm-6 col-xs-12 grid inLeft">
                        <figure class="port-effect-scale">
                            <img src="{{asset('uploads/teacher/port5.jpg')}}" class="img-responsive" alt="portfolio-demo"/>
                            <figcaption>
                                <h2>Lightbox <span> IMAGE</span></h2>
                                <p>Used latest material design to make this sample</p>
                                <a href="{{asset('uploads/teacher/port5.jpg')}}" class="popup-image"
                                   data-effect="mfp-3d-unfold">View more</a>
                            </figcaption>
                        </figure>
                    </div>


                    <!--CATEGORY CONTENT THREE SMALL-->
                    <div class="col-md-4 col-sm-6 col-xs-12 grid inLeft">
                        <figure class="port-effect-up">
                            <img src="images/portfolios/portfolio-4.jpg" class="img-responsive" alt="portfolio-demo"/>
                            <figcaption>
                                <h2>Lightbox <span> IMAGE</span></h2>
                                <p>I designed this for a client for his cafe.</p>
                                <a href="images/portfolios/portfolio-4.jpg" class="popup-image"
                                   data-effect="mfp-with-fade">View more</a>
                            </figcaption>
                        </figure>
                    </div>

                </div>

                <!--CATEGORY 3-->
                <div id="c">
                    <!--CATEGORY CONTENT ONE SMALL-->
                    <div class="col-md-4 col-sm-6 col-xs-12 grid inLeft">
                        <figure class="port-effect-up">
                            <img src="images/portfolios/big-1.jpg" class="img-responsive" alt="portfolio-demo"/>
                            <figcaption>
                                <h2>Single <span> PAGE</span></h2>
                                <p>Showcase Your Portfolio in Details on a Single Page</p>
                                <a href="single-portfolio.html">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                    <!--CATEGORY CONTENT TWO SMALL-->
                    <div class="col-md-4 col-sm-6 col-xs-12 grid inRight">
                        <figure class="port-effect-up">
                            <img src="images/portfolios/big-2.jpg" class="img-responsive" alt="portfolio-demo"/>
                            <figcaption>
                                <h2>Single <span> PAGE</span></h2>
                                <p>Showcase Your Portfolio in Details on a Single Page</p>
                                <a href="single-portfolio.html">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                    <!--CATEGORY CONTENT THREE SMALL-->
                    <div class="col-md-4 col-sm-6 col-xs-12 grid inRight">
                        <figure class="port-effect-up">
                            <img src="images/portfolios/portfolio-1.jpg" class="img-responsive" alt="portfolio-demo"/>
                            <figcaption>
                                <h2>Single <span> PAGE</span></h2>
                                <p>Showcase Your Portfolio in Details on a Single Page</p>
                                <a href="single-portfolio.html">View more</a>
                            </figcaption>
                        </figure>
                    </div>

                    <!--CATEGORY CONTENT FOUR SMALL-->
                    <div class="col-md-4 col-sm-6 col-xs-12 grid inLeft">
                        <figure class="port-effect-up">
                            <img src="images/portfolios/portfolio-2.jpg" class="img-responsive" alt="portfolio-demo"/>
                            <figcaption>
                                <h2>Single <span> PAGE</span></h2>
                                <p>Showcase Your Portfolio in Details on a Single Page</p>
                                <a href="single-portfolio.html">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                    <!--CATEGORY CONTENT FIVE SMALL-->
                    <div class="col-md-4 col-sm-6 col-xs-12 grid inRight">
                        <figure class="port-effect-up">
                            <img src="images/portfolios/portfolio-3.jpg" class="img-responsive" alt="portfolio-demo"/>
                            <figcaption>
                                <h2>Single <span> PAGE</span></h2>
                                <p>Showcase Your Portfolio in Details on a Single Page</p>
                                <a href="single-portfolio.html">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                    <!--CATEGORY CONTENT SIX SMALL-->
                    <div class="col-md-4 col-sm-6 col-xs-12 grid inLeft">
                        <figure class="port-effect-up">
                            <img src="images/portfolios/portfolio-4.jpg" class="img-responsive" alt="portfolio-demo"/>
                            <figcaption>
                                <h2>Single <span> PAGE</span></h2>
                                <p>Showcase Your Portfolio in Details on a Single Page</p>
                                <a href="single-portfolio.html">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
            <!--PORTFOLIOS ADD GALLERY BUTTON-->
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <button id="add-more" class="center-block btn-large waves-effect"><i id="port-add-icon"
                                                                                         class="fa fa-plus"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="interest" class="section">
    <div class="container">
        <!-- SECTION TITLE -->
        <div class="section-title">
            <h4 class="text-center"><img src="{{asset('uploads/teacher/interest.png')}}" alt="demo">Interest</h4>
        </div>

        <div id="interest-card" class="card">
            <!--INTEREST TEXT-->
            <div class="card-content">
                <p>
                    First of all I love music, country music is my favorite. Love watching
                    football, movies and playing games with my buddies. I spend quite a lot of time
                    in traveling and photography, these keeps me fresh for working environment.
                    I also spend time volunteering at the Red Cross in London, UK each month.
                </p>
            </div>

            <!--INTEREST ICONS-->
            <div class="row no-gutters">

                <!--INTEREST ICON ONE-->
                <div class="col-md-2 col-sm-4 col-xs-6  box text-center">
                    <div class="interest-icon">
                        <i class="fa fa-music"></i>
                        <span>Music</span>
                    </div>
                </div>
                <!--INTEREST ICON TWO-->
                <div class="col-md-2 col-sm-4 col-xs-6 box text-center">
                    <div class="interest-icon-even">
                        <i class="fa fa-gamepad"></i>
                        <span>Gaming</span>
                    </div>
                </div>
                <!--INTEREST ICON THREE-->
                <div class="col-md-2 col-sm-4 col-xs-6 box text-center">
                    <div class="interest-icon">
                        <i class="fa fa-camera"></i>
                        <span>Photography</span>
                    </div>
                </div>
                <!--INTEREST ICON FOUR-->
                <div class="col-md-2 col-sm-4 col-xs-6 box text-center">
                    <div class="interest-icon-even">
                        <i class="fa fa-futbol-o"></i>
                        <span>Football</span>
                    </div>
                </div>
                <!--INTEREST ICON FIVE-->
                <div class="col-md-2 col-sm-4 col-xs-6 box text-center">
                    <div class="interest-icon">
                        <i class="fa fa-plane"></i>
                        <span>Traveling</span>
                    </div>
                </div>
                <!--INTEREST ICON SIX-->
                <div class="col-md-2 col-sm-4 col-xs-6 box text-center">
                    <div class="interest-icon-even">
                        <i class="fa fa-film"></i>
                        <span>Movies</span>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<div id="scroll-top">
    <div id="scrollup"><i class="fa fa-angle-up"></i></div>
</div>






