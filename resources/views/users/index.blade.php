<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Resume - Ogmous Travels</title>

    <!-- Bootstrap core CSS -->
    <link href="{{URL::to('/')}}/vendor/templates/resume/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="{{URL::to('/')}}/vendor/templates/resume/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/vendor/templates/resume/vendor/devicons/css/devicons.min.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/vendor/templates/resume/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{URL::to('/')}}/vendor/templates/resume/css/resume.min.css" rel="stylesheet">

    <!--Add ons-->


  </head>

  <body id="page-top">


    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <span class="d-block d-lg-none">Ogmous Travels</span>
        <span class="d-none d-lg-block">
          <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="{{URL::to('/')}}/vendor/templates/imgs/jnr/01.jpg" alt="">
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#experience">Travel Status</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#education">Edit profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#skills">Notification</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#interests">Partners</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#awards"> <span class="fa fa-home fa-lg"></span>&nbsp;Home</a>
          </li>
                                                          
                                                  <!-- Authentication Links -->
                                                  @guest
                                                  <li class="nav-item">
                                                      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                                  </li>
                                                  <li class="nav-item">
                                                      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                                  </li>
                                              @else
                                                  <li class="nav-item dropdown">
                                                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                          {{ Auth::user()->name }}
                                                      </a>
                      
                                                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                        <a class="dropdown-item" href="/"
                                                            >
                                                             Home
                                                         </a>
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
      </div>
    </nav>

    <div class="container-fluid p-0">

      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">
          <h1 class="mb-0">{{ Auth::user()->name}}
            <span class="text-primary"> {{Auth::user()->lastname }}</span>
          </h1>
          <div class="subheading mb-5">3542 Kironde Road · Muyenga Kampala, Ogmous e&s · (+256) (779) 579-1619 ·
            <a href="{{Auth::user()->email }}">{{Auth::user()->email }}</a>
          </div>
          <p class="mb-5">About Me</p>
          <ul class="list-inline list-social-icons mb-0">
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
        </div>
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="experience">
        <div class="my-auto">
          <h2 class="mb-5">Travel Status</h2>

          <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
              <h3 class="mb-0">Current Travel Status</h3>
              <div class="subheading mb-3">Kampala to Kigali</div>
              <p>You travelled <strong style="font-size:1.5em">357<small>KM</small></strong> in <strong  style="font-size:1.5em">10<small>HRS</small></strong>&nbsp;<strong style="font-size:1.5em">15<small>MINS</small></strong>.</p>
            </div>
            <div class="resume-date text-md-right">
              <span class="text-primary">June 2018 - Present</span>
            </div>
          </div>

          <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
              <h3 class="mb-0">Recent Travel Status</h3>
              <div class="subheading mb-3">Kampala to Kigali</div>
              <p>You travelled <strong style="font-size:1.5em">357<small>KM</small></strong> in <strong  style="font-size:1.5em">10<small>HRS</small></strong>&nbsp;<strong style="font-size:1.5em">15<small>MINS</small></strong>.</p>
            </div>
            <div class="resume-date text-md-right">
              <span class="text-primary">December 2017 - March 2018</span>
            </div>
          </div>

          <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
              <h3 class="mb-0">Previous Travel Status</h3>
              <div class="subheading mb-3">Kampala to Kigali</div>
              <p>You travelled <strong style="font-size:1.5em">357<small>KM</small></strong> in <strong  style="font-size:1.5em">10<small>HRS</small></strong>&nbsp;<strong style="font-size:1.5em">15<small>MINS</small></strong>.</p>
            </div>
            <div class="resume-date text-md-right">
              <span class="text-primary">July 2017 - December 2017</span>
            </div>
          </div>

          <div class="resume-item d-flex flex-column flex-md-row">
            <div class="resume-content mr-auto">
              <h3 class="mb-0">Last Travel Status</h3>
              <div class="subheading mb-3">Kampala to Kigali</div>
              <p>You travelled <strong style="font-size:1.5em">357<small>KM</small></strong> in <strong  style="font-size:1.5em">10<small>HRS</small></strong>&nbsp;<strong style="font-size:1.5em">15<small>MINS</small></strong>.</p>
            </div>
            <div class="resume-date text-md-right">
              <span class="text-primary">September 2006 - June 2017</span>
            </div>
          </div>

        </div>

      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="education">
        <div class="my-auto">
          <h2 class="mb-5">Education</h2>

          <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
              <h3 class="mb-0">University of Colorado Boulder</h3>
              <div class="subheading mb-3">Bachelor of Science</div>
              <div>Computer Science - Web Development Track</div>
              <p>GPA: 3.23</p>
            </div>
            <div class="resume-date text-md-right">
              <span class="text-primary">August 2006 - May 2010</span>
            </div>
          </div>

          <div class="resume-item d-flex flex-column flex-md-row">
            <div class="resume-content mr-auto">
              <h3 class="mb-0">James Buchanan High School</h3>
              <div class="subheading mb-3">Technology Magnet Program</div>
              <p>GPA: 3.56</p>
            </div>
            <div class="resume-date text-md-right">
              <span class="text-primary">August 2002 - May 2006</span>
            </div>
          </div>

        </div>
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="skills">
        <div class="my-auto">
          <h2 class="mb-5">Skills</h2>

          <div class="subheading mb-3">Programming Languages &amp; Tools</div>
          <ul class="list-inline list-icons">
            <li class="list-inline-item">
              <i class="devicons devicons-html5"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-css3"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-javascript"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-jquery"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-sass"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-less"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-bootstrap"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-wordpress"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-grunt"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-gulp"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-npm"></i>
            </li>
          </ul>

          <div class="subheading mb-3">Workflow</div>
          <ul class="fa-ul mb-0">
            <li>
              <i class="fa-li fa fa-check"></i>
              Mobile-First, Responsive Design</li>
            <li>
              <i class="fa-li fa fa-check"></i>
              Cross Browser Testing &amp; Debugging</li>
            <li>
              <i class="fa-li fa fa-check"></i>
              Cross Functional Teams</li>
            <li>
              <i class="fa-li fa fa-check"></i>
              Agile Development &amp; Scrum</li>
          </ul>
        </div>
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="interests">
        <div class="my-auto">
          <h2 class="mb-5">Interests</h2>
          <p>Apart from being a web developer, I enjoy most of my time being outdoors. In the winter, I am an avid skiier and novice ice climber. During the warmer months here in Colorado, I enjoy mountain biking, free climbing, and kayaking.</p>
          <p class="mb-0">When forced indoors, I follow a number of sci-fi and fantasy genre movies and television shows, I am an aspiring chef, and I spend a large amount of my free time exploring the latest technolgy advancements in the front-end web development world.</p>
        </div>
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="awards">
        <div class="my-auto">
          <h2 class="mb-5">Awards &amp; Certifications</h2>
          <ul class="fa-ul mb-0">
            <li>
              <i class="fa-li fa fa-trophy text-warning"></i>
              Google Analytics Certified Developer</li>
            <li>
              <i class="fa-li fa fa-trophy text-warning"></i>
              Mobile Web Specialist - Google Certification</li>
            <li>
              <i class="fa-li fa fa-trophy text-warning"></i>
              1<sup>st</sup>
              Place - University of Colorado Boulder - Emerging Tech Competition 2009</li>
            <li>
              <i class="fa-li fa fa-trophy text-warning"></i>
              1<sup>st</sup>
              Place - University of Colorado Boulder - Adobe Creative Jam 2008 (UI Design Category)</li>
            <li>
              <i class="fa-li fa fa-trophy text-warning"></i>
              2<sup>nd</sup>
              Place - University of Colorado Boulder - Emerging Tech Competition 2008</li>
            <li>
            <li>
              <i class="fa-li fa fa-trophy text-warning"></i>
              1<sup>st</sup>
              Place - James Buchanan High School - Hackathon 2006</li>
            <li>
              <i class="fa-li fa fa-trophy text-warning"></i>
              3<sup>rd</sup>
              Place - James Buchanan High School - Hackathon 2005</li>
          </ul>
        </div>
      </section>

    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="{{URL::to('/')}}/vendor/templates/resume/vendor/jquery/jquery.min.js"></script>
    <script src="{{URL::to('/')}}/vendor/templates/resume/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="{{URL::to('/')}}/vendor/templates/resume/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="{{URL::to('/')}}/vendor/templates/resume/js/resume.min.js"></script>

    <!--Add ons-->

  </body>

</html>
