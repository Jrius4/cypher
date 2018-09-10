<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ogmous Travels</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{URL::to('/')}}/vendor/templates/unapp/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{URL::to('/')}}/vendor/templates/unapp/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{URL::to('/')}}/vendor/templates/unapp/css/bootstrap.css">
<!--fonts-->
<link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/vendor/templates/style.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{URL::to('/')}}/vendor/templates/unapp/css/magnific-popup.css">
	<!--Autocomplete-->
	<link rel="stylesheet" type="text/css"  href="{{URL::to('/')}}/vendor/templates/Autocomplete-Typeahead-Plugin-jQuery-Aircomplete/css/jquery.aircomplete.css"/>
<!--AdminITe-->
		<link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/vendor/templates/adminlte/dist/css/AdminLTE.min.css">
		<link href="{{asset('vendor/templates/startbootstrap/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    

	<link href="{{URL::to('/')}}/vendor/templates/vendor/fonts.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/vendor/templates/vendor/Datepicker/dist/datepicker.min.css" >
	<script src="{{URL::to('/')}}/vendor/templates/vendor/jquery1111.min.js"></script>
	<script  src="{{URL::to('/')}}/vendor/templates/vendor/Datepicker/dist/datepicker.min.js"></script>




	<!-- Owl Carousel -->
	<link rel="stylesheet"  href="{{URL::to('/')}}/vendor/templates/unapp/css/owl.carousel.min.css">
	<link rel="stylesheet" href="{{URL::to('/')}}/vendor/templates/unapp/css/owl.theme.default.min.css">
	<!--<link href="{{asset('vendor/templates/edx/css/form.css')}}" type="text/css" rel="stylesheet"/>-->

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{URL::to('/')}}/vendor/templates/unapp/css/style.css">

	<!-- Modernizr JS -->
	<script src="{{URL::to('/')}}/vendor/templates/unapp/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	<!---->
	<link rel="stylesheet" href="{{URL::to('/')}}/vendor/templates/edx/css/bk.css">
	<script src="{{URL::to('/')}}/vendor/templates/edx/js/bk.js"></script>
	<!---->
	<link rel="stylesheet" href="{{URL::to('/')}}/vendor/templates/vendor/circlebars/assets/circle.css">
	<script src="{{URL::to('/')}}/vendor/templates/vendor/circlebars/assets/jquery.min.js"></script>
	<link href="{{asset('vendor/templates/startbootstrap/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="{{URL::to('/')}}/vendor/templates/Step-Progress-Bar-jQuery-Stepbar/style.css" type="text/css">
	<script src="{{URL::to('/')}}/vendor/templates/vendor/circlebars/assets/circle.js"></script>
	<link rel="stylesheet" href="{{URL::to('/')}}/vendor/templates/vendor/circlebars/assets/skins/yellowcircle.css">
	<link rel="stylesheet" href="{{URL::to('/')}}/vendor/templates/vendor/circlebars/assets/skins/purplecircle.css">
	<link rel="stylesheet" href="{{URL::to('/')}}/vendor/templates/vendor/circlebars/assets/skins/firecircle.css">
	<link rel="stylesheet" href="{{URL::to('/')}}/vendor/templates/vendor/circlebars/assets/skins/whitecircle.css">
	<link rel="stylesheet" href="{{URL::to('/')}}/vendor/templates/vendor/circlebars/assets/skins/simplecircle.css">
<!---->
	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						
						<div class="col-md-12 text-right menu-1">
							<ul>
									<li class="has-dropdown">
											<a href="#">Choose Language</a>
											<ul class="dropdown">
												<li><a href="#">English</a></li>
												<li><a href="#">French</a></li>
												<li><a href="#">Swahili</a></li>
												<li><a href="#">Luganda</a></li>
											</ul>
									</li>
								<li class="active"><a href="/">Home</a></li>
								<li>
									<a href="#">Explorer</a></li>
								<li><a href="/booking">Book Ticket</a></li>
								<li><a href="#">Services</a></li>
								<li><a href="#">Blog</a></li>
								<li><a href="#">About</a></li>
								<li><a href="#">Contact</a></li>
								
											  <!-- Authentication Links -->
											  @guest
											  <li class="nav-item">
												  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
											  </li>
											  <li class="nav-item">
												  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
											  </li>
										  @else

										  <li class="has-dropdown">
												<a href="#">{{ Auth::user()->name.' '.Auth::user()->lastname }} <span class="caret"></span></a>
												<ul class="dropdown">
														<li><a href="/resume">Profile</a></li>
														<li><a href="/booking">Booking</a></li>
													<li><a href="{{ route('logout') }}"
														onclick="event.preventDefault();
																	  document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
																	  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
																			@csrf
																		</form>
																	</li>
													
												</ul>
											</li>
							
										  @endguest
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>

		<section id="home" class="video-hero" style="height: 700px; background-image: url({{URL::to('/')}}/vendor/templates/imgs/40.jpeg);  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">
				<div class="overlay"></div>
				<!--
						<a class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=vqqt5p0q-eU',containment:'#home', showControls:false, autoPlay:true, loop:true, mute:true, startAt:0, opacity:1, quality:'default'}"></a> 
		-->		
						<div class="display-t text-center">
							<div class="display-tc">
								<div class="container">
									<div class="col-md-12 col-md-offset-0">
										<div class="animate-box">
											<h2>Welcome to <span class="log">Ogmous</span> Travel</h2>
											<!--Starting Tab layers-->
											<div class="container-fluid  col-md-offset-2" style="color:#0e0101;font-weight:100000;background-color:#ffffff06; margin: 20px;">
												
												<!-- Nav tabs -->
													<ul class="nav nav-tabs" style="background-color:#ffffffe0" role="tablist">
														<li role="presentation" class="active"><a href="#oneway" aria-controls="oneway" role="tab" data-toggle="tab">One Way</a></li>
												
														<li role="presentation"><a href="#Explore" aria-controls="Explorer">Explore</a></li>
													
													</ul>
											
																		<!-- Tab panes -->
																		<div class="tab-content">
																				<!--First section-->
																				<section role="tabpanel" class="tab-pane fade in active" id="oneway">
																					<form class="form-inline">
																					<div class="form-row" style="padding: 10px 10px;">
																						
																						<div class="form-group label-floating col-lg-3 col-md-3 col-sm-3 col-xs-8" style="text-align:left;">
																						<label class="control-label" for="from" style="font-size:20px;font-weight:600em;color:#ffffff;" >From:</label>
																						<input type="text" class="form-control" style="color:#fff;"  aircomplete id="place">
																						</div>
																						<div class="form-group label-floating col-lg-3 col-md-3 col-sm-3 col-xs-8" style="text-align:left;">
																						<label class="control-label" for="to" style="font-size:20px;font-weight:600em;color:#ffffff;">To:</label>
																						<input type="text" class="form-control" style="color:#fff;"  aircomplete id="place2">
																						</div>
																						<div class="form-group label-floating col-lg-3 col-md-3 col-sm-3 col-xs-8" style="text-align:left;">
																						<label class="control-label label-floating" style="font-size:20px;font-weight:600em;color:#ffffff;"> Date of Travel:</label>
																						<input  type="text" class="form-control" style="color:#fff;" data-format='dd/mm/yyyy' data-toggle="datepicker">
																						</div>
																					
																						<div class="form-group label-floating col-lg-3 col-md-5 col-sm-5 col-xs-5" style="text-align:left;">
					
																						<a type="submit" value="search" href="/booking" class="btn btn-danger btn-md  btn-block btn-signin">Book</a>
																						</div>
																
																					</div>
																					
																					</form>
																				</section>
																				<!--End of first section-->
											
																			
																		
																		</div>
											
											</div>
																			<!--Ended Tab layers-->
																			<!--clearfix-->
											
										</div>
									</div>
								</div>
							</div>
					</div>
		</section>


	



	<section class="colorlib-intro" id="Explore">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
						<h2>Explore</h2>
						<p>We thankful for all of you legit support, as a travel agency tourism is a great pillar to our operation. Yes even you our beloved traveller your not forggotten</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 animate-box">
						<span class="play"><a href="https://vimeo.com/channels/staffpicks/93951774" class="pulse popup-vimeo"><i class="icon-play3"></i></a></span>
					</div>
				</div>
			</div>
		

		<div class="colorlib-work-featured colorlib-bg-white">
			<div class="container">
				<div class="row mobile-wrap">
	
					<div class="col-md-5 animate-box">
						<article class="mobile-img">
							<div class="row">
									<div class="col-md-4"   style="margin:15px;">
										<img src="{{URL::to('/')}}/vendor/templates/imgs/jnr/01.jpg" height="60px" width="60px" style="margin:5px;border-radius:100px">
									</div>
									<div  class="col-md-5">
								<h3><small>From</small> <strong>Kampala</strong> <small>to</small> <strong>Kigali</strong></h3>
									</div>
							</div>
							<div style="margin-top:15px;">
							<h2>Hello  <a href="#" class="author two">Julius Junior</a></h2>
							<p class="admin"><span>May 12, 2018</span></p>
							<p>This is your current travel status to your destination</p>
									<div class="row">
										<div class="col-md-4">
																	
											<div class="circlebar yellow" data-circle-startTime=0 data-circle-maxValue=36000 data-circle-fontSize="10px" data-circle-counter=1000
											data-circle-dialWidth=5 data-circle-size="70px" data-circle-type="timer" style="margin:5px">
												<div class="loader-bg">
												<div class="text">00:00:00</div>
												</div>
											
											</div>
											<h6>Time Covered</h6>
											<h6><small>&nbsp;/ </small><strong>3<small>hrs </small></strong><strong>15<small>mins</small></strong></h6>
										</div>
										<div class="col-md-1"></div>
										<div class="col-md-5">
												<div class="loader-bg" style="margin:8px;height:70px;width:70px;border-radius:100px; background-color:skyblue;" ><span class="fa fa-map-marker"></span></div>
											  
												<h6>Location</h6>
												<h6><strong>47 <small>KM</small></strong><small>&nbsp;to destination</small></h6>
											  
											</div>
										 </div>
											
											

											
											
							
										

									</div>
							</div>
					   
						</article>
					</div>
				
				
					<div class="col-md-7 animate-box">
							<article class="mobile-img">
						<div class="desc">
							<h2>Service Features</h2>
							<div class="features">
								<span class="icon"><i class="icon-lightbulb"></i></span>
								<div class="f-desc">
									<p>Ticket booking where you can book your desired seat right your trusted travels agency</p>
								</div>
							</div>
							<div class="features">
								<span class="icon"><i class="icon-circle-compass"></i></span>
								<div class="f-desc">
									<p>Ticket booking where you can book your desired seat right your trusted travels agency</p>
								</div>
							</div>
							<div class="features">
								<span class="icon"><i class="icon-beaker"></i></span>
								<div class="f-desc">
									<p>Ticket booking where you can book your desired seat right your trusted travels agency</p>
								</div>
							</div>
							<p><a href="/booking" class="btn btn-primary btn-outline with-arrow">Start booking right away <i class="icon-arrow-right3"></i></a></p>
						</div>
							</article>
					</div>
				</div>

		
			
			</div>

		</div>
	</section>

		
		<div class="colorlib-blog">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
							<h2>Updates</h2>
						</div>
					</div>
					<div class="row">

									<div class="col-md-4 animate-box">
										<article>
											<h2>Partners</h2>
											<p class="admin"><span>May 12, 2018</span></p>
												<ul class="list-group">
													<a href="#"><li class="list-group-item"><span class="badge" style="background-color:#086112fa">14</span>bus company one</li></a>
													<a href="#"><li class="list-group-item"><span class="badge"style="background-color:#3f0897fa">05</span>bus company two</li></a>
														<a href="#"><li class="list-group-item"><span class="badge" style="background-color:red">12</span>bus company three</li></a>
														<a href="#"><li class="list-group-item"><span class="badge" style="background-color:#586108fa;">12</span>bus company four</li></a>
												</ul>
										</article>
									</div>
								<div class="col-md-4 animate-box">
									<article>
										<h2>News</h2>
										<p class="admin"><span>May 12, 2018</span></p>
										<ul class="list-group">
											<li class="list-group-item">
												<a href="#">
														<div class="pull-right">
																<img src="{{URL::to('/')}}/vendor/templates/adminlte/dist/img/user2-160x160.jpg" height="30px" width="30px" style="margin:6px"class="img-circle" alt="User Image">
														</div>
													<h6>
															<strong>Ogmous Team</strong>
													  <small><i class="fa fa-clock-o"></i> 5 mins</small>
													</h6>
													<small>Travel with us</small>
												  </a>
											</li>
				
													<li class="list-group-item">
															<a href="#">
															<div class="pull-right">
																	<img src="{{URL::to('/')}}/vendor/templates/imgs/jnr/02.jpg" height="30px" width="30px" style="margin:6px"class="img-circle" alt="User Image">
															</div>
																<h6>
																
																		<strong>Ogmous Team</strong>
																  <small><i class="fa fa-clock-o"></i> 5 mins</small>
																</h6>
																<small>Travel with us</small>
															  </a>
														</li>
														<li class="footer"><a  style="color:#0e0101" href="#">See All Messages</a></li>
									  	</ul>
									</article>
								</div>
							<div class="col-md-4 animate-box">
								<article>
									<h2>Comments</h2>
									<p class="admin"><span>May 12, 2018</span></p>
									<ul class="list-group">
										<li class="list-group-item">
											<a href="#">
													<div class="pull-right">
															<img src="{{URL::to('/')}}/vendor/templates/adminlte/dist/img/user2-160x160.jpg" height="30px" width="30px" style="margin:6px"class="img-circle" alt="User Image">
													</div>
												<h6>
														<strong>Micheal</strong>
												  <small><i class="fa fa-clock-o"></i> 5 mins</small>
												</h6>
												<small>I like your services</small>
											  </a>
										</li>
			
												<li class="list-group-item">
														<a href="#">
														<div class="pull-right">
																<img src="{{URL::to('/')}}/vendor/templates/imgs/jnr/02.jpg" height="30px" width="30px" style="margin:6px"class="img-circle" alt="User Image">
														</div>
															<h6>
															
																	<strong>Ibra</strong>
															  <small><i class="fa fa-clock-o"></i> 3 days ago</small>
															</h6>
															<small>I travel well with the travel service provider you helped me make a choice with thank you, Ogmous</small>
														  </a>
													</li>
													<li class="footer"><a  style="color:#0e0101" href="#">See All Messages</a></li>
									  </ul>
								</article>
							</div>
					</div>
				</div>
		</div>




		<div id="colorlib-subscribe" class="colorlib-subscribe" style="background-image: url({{URL::to('/')}}/vendor/templates/unapp/images/cover_img_1.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 text-center colorlib-heading animate-box">
					
						<h2>Already trusted by over 0 users</h2>
						<p>Subscribe to receive unapp tips from instructors right to your inbox.</p>
					</div>
				</div>
					<div class="row animate-box">
						<div class="col-md-6 col-md-offset-3">
							<div class="row">
								<div class="col-md-12">
									<form class="form-inline qbstp-header-subscribe">
										<div class="col-three-forth">
											<div class="form-group">
												<input type="text" class="form-control" id="email" placeholder="Enter your email">
											</div>
										</div>
										<div class="col-one-third">
											<div class="form-group">
												<button type="submit" href="{{ route('register') }}" class="btn btn-primary">{{ __('Register') }}</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
			</div>
		</div>


		<footer id="colorlib-footer">
			<div class="container">
				<div class="row row-pb-md">
							<div class="col-md-3 colorlib-widget">
								<h4>About Ogmous Travels</h4>
								<p>Give a brief summary</p>
								<p>
									<ul class="colorlib-social-icons">
										<li><a href="#"><i class="icon-twitter"></i></a></li>
										<li><a href="#"><i class="icon-facebook"></i></a></li>
										<li><a href="#"><i class="icon-linkedin"></i></a></li>
										<li><a href="#"><i class="icon-dribbble"></i></a></li>
									</ul>
								</p>
							</div>
						<div class="col-md-3 colorlib-widget">
							<h4>Information</h4>
							<p>
								<ul class="colorlib-footer-links">
									<li><a href="#"><i class="icon-check"></i> Home</a></li>
									<li><a href="#"><i class="icon-check"></i>Bookings</a></li>
									<li><a href="#"><i class="icon-check"></i>Service Features</a></li>
									<li><a href="#"><i class="icon-check"></i> Blogs</a></li>
									<li><a href="#"><i class="icon-check"></i> Contact</a></li>
									<li><a href="#"><i class="icon-check"></i>Profile</a></li>
								</ul>
							</p>
						</div>

								<div class="col-md-3 colorlib-widget">
									<h4>Recent Blog</h4>
									<div class="f-blog">
										<a href="#" class="blog-img" style="background-image: url({{URL::to('/')}}/vendor/templates/unapp/images/blog-1.jpg);">
										</a>
										<div class="desc">
											<h2><a href="#">Partners</a></h2>
											<p class="admin"><span>30 March 2018</span></p>
										</div>
									</div>
									<div class="f-blog">
										<a href="#" class="blog-img" style="background-image: url({{URL::to('/')}}/vendor/templates/unapp/images/blog-2.jpg);">
										</a>
										<div class="desc">
											<h2><a href="#">Ogmous Travel Blogs</a></h2>
											<p class="admin"><span>30 March 2018</span></p>
										</div>
									</div>
									<div class="f-blog">
										<a href="#" class="blog-img" style="background-image: url({{URL::to('/')}}/vendor/templates/unapp/images/blog-3.jpg);">
										</a>
										<div class="desc">
											<h2><a href="#">New innovations by Ogmous e&s</a></h2>
											<p class="admin"><span>30 March 2018</span></p>
										</div>
									</div>
								</div>

							<div class="col-md-3 colorlib-widget">
								<h4>Contact Info</h4>
								<ul class="colorlib-footer-links">
									<li>256 xxxxx Street, <br> Plot xxxxx</li>
									<li><a href="tel://256-256-256-256"><i class="icon-phone"></i> + 256-256-256-256</a></li>
									<li><a href="mailto:info@xxxxxx"><i class="icon-envelope"></i> info@xxxxxx</a></li>
									<li><a href="#"><i class="icon-location4"></i> xxxxxx</a></li>
								</ul>
							</div>
				</div>
			</div>
				<div class="copy">
					<div class="container">
						<div class="row">
							<div class="col-md-12 text-center">
								<p>
													<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
													Copyright &copy;<script>document.write(new Date().getFullYear());</script> A product of Ogmous e&s
													<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
													
								</p>
							</div>
						</div>
					</div>
				</div>
		</footer>


	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>





<!---->


<script>
	$('[data-toggle="datepicker"]').datepicker({
	  // options here
	
	
	  // Show the datepicker automatically when initialized
	autoShow: false,
	
	// Hide the datepicker automatically when picked
	autoHide: true,
	
	// Pick the initial date automatically when initialized
	autoPick: false,
	
	// Enable inline mode
	inline: false,
	
	// A element (or selector) for putting the datepicker
	container: null,
	
	// A element (or selector) for triggering the datepicker
	trigger: null,
	
	// The ISO language code (built-in: en-US)
	language: '',
	
	// The date string format
	//format: 'dd/mm/yyyy',
	
	// The initial date
	date: null,
	
	// The start view date
	startDate: null,
	
	// The end view date
	endDate: null,
	
	// The start view when initialized
	startView: 0, // 0 for days, 1 for months, 2 for years
	
	// The start day of the week
	// 0 for Sunday, 1 for Monday, 2 for Tuesday, 3 for Wednesday,
	// 4 for Thursday, 5 for Friday, 6 for Saturday
	weekStart: 0,
	
	// Show year before month on the datepicker header
	yearFirst: false,
	
	// A string suffix to the year number.
	yearSuffix: '',
	
	// Days' name of the week.
	days: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
	
	// Shorter days' name
	daysShort: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
	
	// Shortest days' name
	daysMin: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
	
	// Months' name
	months: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
	
	// Shorter months' name
	monthsShort: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
	
	// A element tag for each item of years, months and days
	itemTag: 'li',
	
	// A class (CSS) for muted date item
	mutedClass: 'muted',
	
	// A class (CSS) for picked date item
	pickedClass: 'picked',
	
	// A class (CSS) for disabled date item
	disabledClass: 'disabled',
	
	// A class (CSS) for highlight date item
	highlightedClass: 'highlighted',
	
	// The template of the datepicker
	template: '<div class="datepicker-container">' + '<div class="datepicker-panel" data-view="years picker">' + '<ul>' + '<li data-view="years prev">&lsaquo;</li>' + '<li data-view="years current"></li>' + '<li data-view="years next">&rsaquo;</li>' + '</ul>' + '<ul data-view="years"></ul>' + '</div>' + '<div class="datepicker-panel" data-view="months picker">' + '<ul>' + '<li data-view="year prev">&lsaquo;</li>' + '<li data-view="year current"></li>' + '<li data-view="year next">&rsaquo;</li>' + '</ul>' + '<ul data-view="months"></ul>' + '</div>' + '<div class="datepicker-panel" data-view="days picker">' + '<ul>' + '<li data-view="month prev">&lsaquo;</li>' + '<li data-view="month current"></li>' + '<li data-view="month next">&rsaquo;</li>' + '</ul>' + '<ul data-view="week"></ul>' + '<ul data-view="days"></ul>' + '</div>' + '</div>',
	
	// The offset top or bottom of the datepicker from the element
	offset: 10,
	
	// The `z-index` of the datepicker
	zIndex: 1000,
	
	// Filter each date item (return `false` to disable a date item)
	filter: null,
	
	// Event shortcuts
	show: null,
	hide: null,
	pick: null
	});
	</script>
	
	
	
	
		   <script src="{{URL::to('/')}}/vendor/templates/vendor/progressbar/dist/progressbar.min.js"></script>
		   <script  src="{{URL::to('/')}}/vendor/templates/Autocomplete-Typeahead-Plugin-jQuery-Aircomplete/dist/jquery-1.12.4.min.js"></script>
		   <script src="{{URL::to('/')}}/vendor/templates/Autocomplete-Typeahead-Plugin-jQuery-Aircomplete/dist/jquery.aircomplete.min.js"></script>
		

<!---->

<script>
    $("#place").aircomplete({
      data: [
        "Kampala",  "Busia",
        "Masaka",    "Lira",
        "Arua",     "Juba",
        "Rwanda",    "Gulu",
        "Mbale",   "Kitugum",
        "Mbarara",  "Kigali",
        "Tooro",    "Jinja",
		"Nairobi","Mombasa"

      ],
      onSelect: function(data){
        return data;
      },
      minSearchStringLength : 1 // show results after a single character is entered
    });
    $("#place2").aircomplete({
      data: [
		"Kampala",  "Busia",
        "Masaka",    "Lira",
        "Arua",     "Juba",
        "Rwanda",    "Gulu",
        "Mbale",   "Kitugum",
        "Mbarara",  "Kigali",
        "Tooro",    "Jinja",
		"Nairobi","Mombasa"
      ],
      onSelect: function(data){
        return data;
      },
      minSearchStringLength : 1 // show results after a single character is entered
    });
</script>

<script src="{{URL::to('/')}}/vendor/templates/adminlte/dist/js/adminlte.min.js"></script>
	
	<!-- jQuery -->
	<script src="{{URL::to('/')}}/vendor/templates/unapp/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="{{URL::to('/')}}/vendor/templates/unapp/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="{{URL::to('/')}}/vendor/templates/unapp/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="{{URL::to('/')}}/vendor/templates/unapp/js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="{{URL::to('/')}}/vendor/templates/unapp/js/jquery.stellar.min.js"></script>
	<!-- YTPlayer -->
	<script src="{{URL::to('/')}}/vendor/templates/unapp/js/jquery.mb.YTPlayer.min.js"></script>
	<!-- Owl carousel -->
	<script src="{{URL::to('/')}}/vendor/templates/unapp/js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="{{URL::to('/')}}/vendor/templates/unapp/js/jquery.magnific-popup.min.js"></script>
	<script src="{{URL::to('/')}}/vendor/templates/unapp/js/magnific-popup-options.js"></script>
	<!-- Counters -->
	<script src="{{URL::to('/')}}/vendor/templates/unapp/js/jquery.countTo.js"></script>
	<!-- Main -->
	<script src="{{URL::to('/')}}/vendor/templates/unapp/js/main.js"></script>

	</body>
</html>

