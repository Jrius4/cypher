<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Ogmous Travels</title>
<!--    
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
---- Include the above in your HEAD tag ---------->

<!--fonts-->
<link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/vendor/templates/style.css">
    <!-- Bootstrap core CSS -->
	<link href="{{asset('vendor/templates/startbootstrap/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{URL::to('/')}}/vendor/templates/vendor/fonts.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/vendor/templates/vendor/Datepicker/dist/datepicker.min.css" >
	<script src="{{URL::to('/')}}/vendor/templates/vendor/jquery1111.min.js"></script>
	<script  src="{{URL::to('/')}}/vendor/templates/vendor/Datepicker/dist/datepicker.min.js"></script>
	<!--Autocomplete-->
	<link rel="stylesheet" type="text/css"  href="{{URL::to('/')}}/vendor/templates/Autocomplete-Typeahead-Plugin-jQuery-Aircomplete/css/jquery.aircomplete.css"/>

<!---->

	<!-- Animate.css -->
	<link rel="stylesheet" href="{{URL::to('/')}}/vendor/templates/unapp/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{URL::to('/')}}/vendor/templates/unapp/css/icomoon.css">


	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{URL::to('/')}}/vendor/templates/unapp/css/magnific-popup.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="{{URL::to('/')}}/vendor/templates/unapp/css/owl.carousel.min.css">
	<link rel="stylesheet" href="{{URL::to('/')}}/vendor/templates/unapp/css/owl.theme.default.min.css">


	<!-- Theme style  -->
	<link rel="stylesheet" href="{{URL::to('/')}}/vendor/templates/unapp/css/style.css">

	<!-- Modernizr JS -->
	<script src="{{URL::to('/')}}/vendor/templates/unapp/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
<!---->

    <!-- Custom fonts for this template -->
    <link href="{{asset('vendor/templates/startbootstrap/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
	<link href="{{asset('vendor/templates/startbootstrap/css/agency.min.css')}}" rel="stylesheet">
	
	<link rel="stylesheet" href="{{URL::to('/')}}/vendor/templates/unapp/css/style.css">
	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
	<link rel="stylesheet" href="{{asset('vendor/templates/edx/css/edx_book.css')}}"/>
	<!--<link rel="stylesheet" href="{{URL::to('/')}}/seats/seatstyle.css"-->
	<style type="text/css">
		label.seat{
			color: #FF8000;
		}
		div.vertical-line{
		  width: 1px;
		  background-color: black;
		  height: 100%;
		  float: left;
		  border: 2px ridge black ;
		  border-radius: 2px;
		}
			
		input[type="checkbox"]{
			display: none;
			border: none !important;
			box-shadow: none !important;
		}
	
		input[type="checkbox"] + label span {   
			background: url("{{URL::to('/')}}/vendor/templates/assets/images/images/uncheck.png");
			width: 49px;
			height: 49px;
			display: inline-block;
			vertical-align: middle;
		}
	
		input[type="checkbox"]:disabled + label span {
			background: url("{{asset('vendor/templates/assets/images/images/booked.png')}}");
			width: 49px;
			height: 49px;
			display: inline-block;
			vertical-align: middle;
		}
	
		input[type="checkbox"]:checked + label span {
			background: url("{{asset('vendor/templates/assets/images/images/check.png')}}");
			width: 49px;
			height: 49px;
			display: inline-block;
			vertical-align: middle;
		}
	</style>
	<link rel="stylesheet" href="{{URL::to('/')}}/vendor/templates/payment/payment.css">
</head>

<body id="page-top" >


	    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
				<div class="container">
				  <a class="navbar-brand js-scroll-trigger" href="/"><span id="bklog">Ogmous</span> Travels</a>
				  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
					Menu
					<i class="fa fa-bars"></i>
				  </button>
				  <div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav text-uppercase ml-auto">
					  <li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="/booking">Booking</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="/">Home</a>
					  </li>
					 
					  <li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#">About</a>
					  </li>
	
					  <li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#">Contact</a>
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
													  {{ Auth::user()->name }} <span class="caret"></span>
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
				  </div>
				</div>
			  </nav>

<div class="masthead image-container set-full-height" style="background-image: url('{{URL::to('/')}}/vendor/templates/assets/images/images/bkgd2.jpg')">

		<!--  Made With Material Kit  -->
		<a href="#page-top" class="made-with-mk" target="_blank">
			<div class="brand">OT</div>
			<div class="made-with">made by <strong>Ogmous e&s</strong></div>
		</a>

	    <!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="container col-sm-10 col-sm-offset-2" style="margin-top:2em;">
		            <!-- Wizard container -->
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="red" id="wizard">
		                    <form action="" method="">
		                <!--        You can switch " data-color="blue" "  with one of the next bright colors: "green", "orange", "red", "purple"             -->

		                    <div class="wizard-header">
								<div class="jumbtron">
								
												<!--   Creative Tim Branding   -->
										<a href="#">
											<img src="{{URL::to('/')}}/vendor/templates/assets/images/images/jr.jpg" style="border-radius:100px"  height="100px" width="100px">
										</a>
									
								
		                        	<h3 class="text-center wizard-title">
		                        		Book a ticket
									</h3>
									
									
								
<h5>This information will let us know more about your booking.</h5>
</div>
		                    </div>
								<div class="wizard-navigation">
									<ul>
			                            <li><a href="#details" data-toggle="tab">Booking</a></li>
			                            <li><a href="#captain" data-toggle="tab">Seat Type</a></li>
			                            <li><a href="#description" data-toggle="tab">Extra Details</a></li>
			                        </ul>
								</div>

		                        <div class="tab-content">
		                            <div class="tab-pane" id="details">
											<div class="row">
													<div class="form-group col-sm-6">
														<label for="from">FROM</label>
														<input type="text" class="form-control" id="place" placeholder="From">
													</div>
													<div class="form-group col-sm-6">
															<label for="to">TO</label>
															<input type="text" class="form-control" id="place2" placeholder="Destination">
															</div>

															<div class="form-group col-sm-6">
																	<label for="choose-bus">CHOOSE BUS</label>
																	<input id="bus" type="text" class="form-control" placeholder="...choose bus" aria-label="Card Holder" aria-describedby="basic-addon1">
															</div>

													<div class="form-group col-sm-5">
															<label for="date">DATE OF TRAVEL</label>
															<input type="text" class="form-control" placeholder="DD/MM/YYYY" data-format="dd/mm/yyyy" data-toggle="datepicker" aria-describedby="basic-addon1">
													</div>
												
												
		
										  </div>
		                            </div>
		                            <div class="tab-pane" id="captain">
		                                <h4 class="info-text">What type of seat would you want? </h4>
		                                	<div class="row">
		                                    	<div class="col-12 col-sm-offset-1">
														<div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-light">
															<div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12">
																<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
																		<div class="choice" data-toggle="wizard-radio" rel="tooltip" title="This is good if you travel alone.">
																			<input type="radio" name="job" value="Design">
																			<div class="icon">
																				<i class="fa fa-cube"></i>
																			</div>
																				<h6><button type="button" class="btn" style="background-color: #fa770bc7;" data-toggle="modal"
																				data-target="#reservation-modal">Basic Seat</button></h6>
																		</div>	
																														
																</div>
																	
																
		
	
																	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
																			<div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Select this seat if you're wising with extra comfort.">
																				<input type="radio" name="job" value="Code">
																					<div class="icon">
																						<a id="popover-link" data-toggle="popover" data-content="This is the content of my popover which can be longer than a tooltip">
																							<i class="fa fa-cubes"></i></a>
																					</div>
																						<h6><button type="button" class="btn" style="background-color: #f83504bb;" data-toggle="modal"data-target="#luxury-modal">Luxury Seats</button></h6>
																						<div class="clear-fix"></div>
																		
																			</div>
																	</div>
														
															</div>
														
														</div>
													<!---------------------------------------------------------------------------->
													<div class=" card col-lg-6 col-md-8 col-sm-12 col-xs-12" style="padding:5px 5px;">
															<div style="background-color: #f7fbff;padding: 25px;">
																	<h3 style="font-weight: 600;font-size: 1.2em;">Booking Details</h3>
											
																	<div style="margin-bottom:1em;">
																	  <span style="float: right;font-weight: 600;font-size: 0.9em;">$200</span>
																	  <p style="font-size: 1em; ">Ticket 1&nbsp;&nbsp;&nbsp;Price/Ticket:&nbsp;300</p>
																	  <p style="font-size:0.8em;opacity:0.6;">Ordinary seat <small class="label label-pill bg-warning" style="float: right;font-weight: 600;font-size: 0.9em;"><strong>B5</strong></small></p>
																	</div>
																	<div margin-bottom:1em;>
																	  <span style="float: right;font-weight: 600;font-size: 0.9em;">$120</span>
																	  <p style="font-size: 1em; ">Charges</p>
																	  
																	</div>
																	<div style="border-top: 1px solid rgba(0, 0, 0, 0.1);margin-top: 10px;padding-top: 19px;font-weight: 600;line-height: 1;">Total<span style="float: right;font-weight: 600;font-size: 0.9em;">$320</span></div>
																  </div>
													</div>
								
																
		                                		</div>
											</div>
										</div>
										
									<!-- Basic modal //-->
                                    <div class="modal fade col-lg-12 col-md-12 col-sm-12 col-xs-12" id="reservation-modal">
											<div class="modal-dialog">
												<div class="modal-content col-lg-12 col-md-12 col-sm-12 col-xs-12">
													<div class="modal-header">

														<h4 class="modal-title">Seat Reservation</h4>
														<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span ariahidden="true">&times;</span></button>
													</div>
														<div class="modal-body col-lg-12 col-md-12 col-sm-12 col-xs-12">
															
																<center>
																	  <table>
																		<h3>Ordinary Bus Seat</h3>
																		  <tr>
																			  <th><img src="{{URL::to('/')}}/vendor/templates/assets/images/images/uncheck.png" width="30px" height="30px" /></th>
																			  <th><img src="{{URL::to('/')}}/vendor/templates/assets/images/images/check.png" width="30px" height="30px" /></th>
																			  <th><img src="{{URL::to('/')}}/vendor/templates/assets/images/images/booked.png" width="30px" height="30px" /></th>
																		  </tr>
																		  <tr>
																			  <td style="color: black">Available &nbsp;</td>
																			  <td style="color: black">Selected &nbsp;</td>
																			  <td style="color: black">Booked &nbsp;</td>
																		  </tr>
																	  </table>
																
																	  <div class="container text-primary">
																		<hr class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color: black;border: 2px ridge black; width: 75%;">     
																		<table class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color: rgba(214, 240, 214, 0.548);border:3px ridge rgb(255, 38, 0)">
																			  
																				<thead>
																					<tr>
																							
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;"><input type="checkbox" id="A1" name="seats[]" value="A1" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="A1" class="seat"><span></span>A1</label></td>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;border-right: 3px solid rgb(63, 29, 1)"><input type="checkbox" id="B1" name="seats[]" value="B1" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="B1" class="seat"><span></span>B1</label></td>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;"> &nbsp; </td>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;"><input type="checkbox" id="C1" name="seats[]" value="C1" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="C1" class="seat"><span></span>C1</label></td>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;"><input type="checkbox" id="D1" name="seats[]" value="D1" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="D1" class="seat"><span></span>D1</label></td>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;"><input type="checkbox" id="E1" name="seats[]" value="E1" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="E1" class="seat"><span></span>E1</label></td>
																					
																					</tr>
																				</thead>
																				<tbody>
																					<tr>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;"><input type="checkbox" id="A2" name="seats[]" value="A2" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="A2" class="seat"><span></span>A2</label></td>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;border-right: 3px solid rgb(63, 29, 1)"><input type="checkbox" id="B2" name="seats[]" value="B2" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="B2" class="seat"><span></span>B2</label></td>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;"> &nbsp; </td>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;"><input type="checkbox" id="C2" name="seats[]" value="C2" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="C2" class="seat"><span></span>C2</label></td>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;"><input type="checkbox" id="D2" name="seats[]" value="D2" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="D2" class="seat"><span></span>D2</label></td>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;"><input type="checkbox" id="E2" name="seats[]" value="E2" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="E2" class="seat"><span></span>E2</label></td>
																					
																					</tr>
																					<tr>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;"><input type="checkbox" id="A3" name="seats[]" value="A3" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="A3" class="seat"><span></span>A3</label></td>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;border-right: 3px solid rgb(63, 29, 1)"><input type="checkbox" id="B3" name="seats[]" value="B3" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="B3" class="seat"><span></span>B3</label></td>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;"> &nbsp; </td>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;"><input type="checkbox" id="C3" name="seats[]" value="C3" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="C3" class="seat"><span></span>C3</label></td>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;"><input type="checkbox" id="D3" name="seats[]" value="D3" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="D3" class="seat"><span></span>D3</label></td>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;"><input type="checkbox" id="E3" name="seats[]" value="E3" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="E3" class="seat"><span></span>E3</label></td>
																					</tr>
																					<tr>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;"><input type="checkbox" id="A4" name="seats[]" value="A4" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="A4" class="seat"><span></span>A4</label></td>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;border-right: 3px solid rgb(63, 29, 1)"><input type="checkbox" id="B4" name="seats[]" value="B4" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="B4" class="seat"><span></span>B4</label></td>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;"> &nbsp; </td>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;"><input type="checkbox" id="C4" name="seats[]" value="C4" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="C4" class="seat"><span></span>C4</label></td>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;"><input type="checkbox" id="D4" name="seats[]" value="D4" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="D4" class="seat"><span></span>D4</label></td>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;"><input type="checkbox" id="E4" name="seats[]" value="E4" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="E4" class="seat"><span></span>E4</label></td>
																					</tr>
																					<tr>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;"><input type="checkbox" id="A5" name="seats[]" value="A5" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="A5" class="seat"><span></span>A5</label></td>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;border-right: 3px solid rgb(63, 29, 1)"><input type="checkbox" id="B5" name="seats[]" value="B5" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="B5" class="seat"><span></span>B5</label></td>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;"> &nbsp; </td>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;"><input type="checkbox" id="C5" name="seats[]" value="C5" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="C5" class="seat"><span></span>C5</label></td>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;"><input type="checkbox" id="D5" name="seats[]" value="D5" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="D5" class="seat"><span></span>D5</label></td>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;"><input type="checkbox" id="E5" name="seats[]" value="E5" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="E5" class="seat"><span></span>E5</label></td>
																					
																					</tr>
																					<tr>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;"><input type="checkbox" id="A6" name="seats[]" value="A6" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="A6" class="seat"><span></span>A6</label></td>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;border-right: 3px solid rgb(63, 29, 1)"><input type="checkbox" id="B6" name="seats[]" value="B6" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="B6" class="seat"><span></span>B6</label></td>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;"> &nbsp; </td>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;"><input type="checkbox" id="C6" name="seats[]" value="C6" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="C6" class="seat"><span></span>C6</label></td>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;"><input type="checkbox" id="D6" name="seats[]" value="D6" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="D6" class="seat"><span></span>D6</label></td>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;"><input type="checkbox" id="E6" name="seats[]" value="E6" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="E6" class="seat"><span></span>E6</label></td>
																					</tr>
																					<tr>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;"><input type="checkbox" id="A5" name="seats[]" value="A5" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="A5" class="seat"><span></span>A7</label></td>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;border-right: 3px solid rgb(63, 29, 1)"><input type="checkbox" id="B7" name="seats[]" value="B7" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="B7" class="seat"><span></span>B7</label></td>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;"> &nbsp; </td>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;"><input type="checkbox" id="C7" name="seats[]" value="C7" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="C7" class="seat"><span></span>C7</label></td>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;"><input type="checkbox" id="D7" name="seats[]" value="D7" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="D7" class="seat"><span></span>D7</label></td>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;"><input type="checkbox" id="E7" name="seats[]" value="E7" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="E7" class="seat"><span></span>E7</label></td>
																					</tr>
																					<tr>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;"><input type="checkbox" id="A8" name="seats[]" value="A8" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="A8" class="seat"><span></span>A8</label></td>
																						<td style="padding-left:5px;padding-right:5px;padding-top:5px;padding-bottom:5px;border-right: 3px solid rgb(63, 29, 1)"><input type="checkbox" id="B8" name="seats[]" value="B8" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="B8" class="seat"><span></span>B8</label></td>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;"> &nbsp; </td>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;"><input type="checkbox" id="C8" name="seats[]" value="C8" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="C8" class="seat"><span></span>C8</label></td>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;"><input type="checkbox" id="D8" name="seats[]" value="D8" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="D8" class="seat"><span></span>D8</label></td>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;"><input type="checkbox" id="E8" name="seats[]" value="E8" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="E8" class="seat"><span></span>E8</label></td>
																					
																					</tr>
																					<tr>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;"><input type="checkbox" id="A9" name="seats[]" value="A9" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="A9" class="seat"><span></span>A9</label></td>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;border-right: 3px solid rgb(63, 29, 1)"><input type="checkbox" id="B9" name="seats[]" value="B9" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="B9" class="seat"><span></span>B9</label></td>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;"> &nbsp; </td>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;"><input type="checkbox" id="C9" name="seats[]" value="C9" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="C9" class="seat"><span></span>C9</label></td>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;"><input type="checkbox" id="D9" name="seats[]" value="D9" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="D9" class="seat"><span></span>D9</label></td>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;"><input type="checkbox" id="E9" name="seats[]" value="E9" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="E9" class="seat"><span></span>E9</label></td>
																					</tr>
																					<tr>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;"><input type="checkbox" id="A10" name="seats[]" value="A10" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="A10" class="seat"><span></span>A10</label></td>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;border-right: 3px solid rgb(63, 29, 1)"><input type="checkbox" id="B10" name="seats[]" value="B10" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="B10" class="seat"><span></span>B10</label></td>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;"> &nbsp; </td>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;"><input type="checkbox" id="C10" name="seats[]" value="C10" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="C10" class="seat"><span></span>C10</label></td>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;"><input type="checkbox" id="D10" name="seats[]" value="D10" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="D10" class="seat"><span></span>D10</label></td>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;"><input type="checkbox" id="E10" name="seats[]" value="E10" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="E10" class="seat"><span></span>E10</label></td>
																					</tr>            
																					<tr>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;"><input type="checkbox" id="A11" name="seats[]" value="A11" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="A11" class="seat"><span></span>A11</label></td>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;border-right: 3px solid rgb(63, 29, 1)"><input type="checkbox" id="B11" name="seats[]" value="B11" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="B11" class="seat"><span></span>B11</label></td>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;"> &nbsp; </td>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;"><input type="checkbox" id="C11" name="seats[]" value="C11" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="C11" class="seat"><span></span>C11</label></td>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;"><input type="checkbox" id="D11" name="seats[]" value="D11" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="D11" class="seat"><span></span>D11</label></td>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;"><input type="checkbox" id="E11" name="seats[]" value="E11" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="E11" class="seat"><span></span>E11</label></td>
																					
																					</tr>
																					<tr>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;"><input type="checkbox" id="A12" name="seats[]" value="A12" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="A12" class="seat"><span></span>A12</label></td>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;border-right: 3px solid rgb(63, 29, 1)"><input type="checkbox" id="B12" name="seats[]" value="B12" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="B12" class="seat"><span></span>B12</label></td>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;"> &nbsp; </td>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;"><input type="checkbox" id="C12" name="seats[]" value="C12" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="C12" class="seat"><span></span>C12</label></td>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;"><input type="checkbox" id="D12" name="seats[]" value="D12" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="D12" class="seat"><span></span>D12</label></td>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;"><input type="checkbox" id="E12" name="seats[]" value="E12" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="E12" class="seat"><span></span>E12</label></td>
																					</tr>
																					<tr>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;"><input type="checkbox" id="A13" name="seats[]" value="A13" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="A13" class="seat"><span></span>A13</label></td>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;border-right: 3px solid rgb(63, 29, 1)"><input type="checkbox" id="B13" name="seats[]" value="B13" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="B13" class="seat"><span></span>B13</label></td>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;"> &nbsp; </td>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;"><input type="checkbox" id="C13" name="seats[]" value="C13" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="C13" class="seat"><span></span>C13</label></td>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;"><input type="checkbox" id="D13" name="seats[]" value="D13" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="D13" class="seat"><span></span>D13</label></td>
																						<td style="padding-left:2px;padding-right:2px;padding-top:2px;padding-bottom:2px;"><input type="checkbox" id="E13" name="seats[]" value="E13" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="E13" class="seat"><span></span>E13</label></td>
																					</tr>
																		
																				   
																				</tbody>
																		</table>    
																		
																		</div>
																</center>
														</div>
															<div class="modal-footer">
																<button type="button" class="btn btn-default" datadismiss="modal">Close</button>
																<button type="button" class="btn btnprimary">Submit</button>
															</div>
												</div><!-- /.modal-content -->
											</div><!-- /.modal-dialog -->
										</div><!-- /.modal -->


									<!-- luxury modal //-->
                                    <div class="modal fade" id="luxury-modal">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">

														<h4 class="modal-title">Book Reservation</h4>
														<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span ariahidden="true">&times;</span></button>
													</div>
														<div class="modal-body">
															<center>
																<table>
																  <h3>Luxury Bus Seat</h3>
																	<tr>
																		<th><img src="{{URL::to('/')}}/vendor/templates/assets/images/images/uncheck.png" width="49px" height="49px" /></th>
																		<th><img src="{{URL::to('/')}}/vendor/templates/assets/images/images/check.png" width="49px" height="49px" /></th>
																		<th><img src="{{URL::to('/')}}/vendor/templates/assets/images/images/booked.png" width="49px" height="49px" /></th>
																	</tr>
																	<tr>
																		<td style="color: black">Available &nbsp;</td>
																		<td style="color: black">Selected &nbsp;</td>
																		<td style="color: black">Booked &nbsp;</td>
																	</tr>
																</table>
														  
																<div class="container text-primary">
																  <hr style="background-color: black;border: 2px ridge black; width: 400PX;">     
																  <table class="table" style="background-color: rgba(214, 240, 214, 0.548);border:3px ridge rgb(255, 38, 0)">
																		
																		  <thead>
																			  <tr>
																					  
																				  <td><input type="checkbox" id="A_LUX1" name="seats[]" value="A_LUX1" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="A_LUX1" class="seat"><span></span>A1</label></td>
																				  <td style="border-right: 3px solid rgb(63, 29, 1)"><input type="checkbox" id="B_LUX1" name="seats[]" value="B1" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="B_LUX1" class="seat"><span></span>B1</label></td>
																				  <td> &nbsp; </td>
																				  <td style="border-left: 3px solid rgb(63, 29, 1)"><input type="checkbox" id="C_LUX1" name="seats[]" value="C1" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="C_LUX1" class="seat"><span></span>C1</label></td>
																				  <td><input type="checkbox" id="D_LUX1" name="seats[]" value="D1" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="D_LUX1" class="seat"><span></span>D1</label></td>
																				 
																			  
																			  </tr>
																		  </thead>
																		  <tbody>
																			  <tr>
																				  <td><input type="checkbox" id="A_LUX2" name="seats[]" value="A_LUX2" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="A_LUX2" class="seat"><span></span>A2</label></td>
																				  <td style="border-right: 3px solid rgb(63, 29, 1)"><input type="checkbox" id="B_LUX2" name="seats[]" value="B_LUX2" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="B_LUX2" class="seat"><span></span>B2</label></td>
																				  <td> &nbsp; </td>
																				  <td style="border-left: 3px solid rgb(63, 29, 1)"><input type="checkbox" id="C_LUX2" name="seats[]" value="C_LUX2" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="C_LUX2" class="seat"><span></span>C2</label></td>
																				  <td><input type="checkbox" id="D_LUX2" name="seats[]" value="D_LUX2" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="D_LUX2" class="seat"><span></span>D2</label></td>
																				  
																			  
																			  </tr>
																			  <tr>
																				  <td><input type="checkbox" id="A_LUX3" name="seats[]" value="A_LUX3" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="A_LUX3" class="seat"><span></span>A3</label></td>
																				  <td style="border-right: 3px solid rgb(63, 29, 1)"><input type="checkbox" id="B_LUX3" name="seats[]" value="B_LUX3" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="B_LUX3" class="seat"><span></span>B3</label></td>
																				  <td> &nbsp; </td>
																				  <td style="border-left: 3px solid rgb(63, 29, 1)"><input type="checkbox" id="C_LUX3" name="seats[]" value="C_LUX3" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="C_LUX3" class="seat"><span></span>C3</label></td>
																				  <td><input type="checkbox" id="D_LUX3" name="seats[]" value="D_LUX3" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="D_LUX3" class="seat"><span></span>D3</label></td>
																				
																			  </tr>
																			  <tr>
																				  <td><input type="checkbox" id="A_LUX4" name="seats[]" value="A_LUX4" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="A_LUX4" class="seat"><span></span>A4</label></td>
																				  <td style="border-right: 3px solid rgb(63, 29, 1)"><input type="checkbox" id="B_LUX4" name="seats[]" value="B_LUX4" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="B_LUX4" class="seat"><span></span>B4</label></td>
																				  <td> &nbsp; </td>
																				  <td style="border-left: 3px solid rgb(63, 29, 1)"><input type="checkbox" id="C_LUX4" name="seats[]" value="C_LUX4" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="C_LUX4" class="seat"><span></span>C4</label></td>
																				  <td><input type="checkbox" id="D_LUX4" name="seats[]" value="D_LUX4" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="D_LUX4" class="seat"><span></span>D4</label></td>
																				
																			  </tr>
																			  <tr>
																				  <td><input type="checkbox" id="A_LUX5" name="seats[]" value="A_LUX5" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="A_LUX5" class="seat"><span></span>A5</label></td>
																				  <td style="border-right: 3px solid rgb(63, 29, 1)"><input type="checkbox" id="B_LUX5" name="seats[]" value="B_LUX5" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="B_LUX5" class="seat"><span></span>B5</label></td>
																				  <td> &nbsp; </td>
																				  <td style="border-left: 3px solid rgb(63, 29, 1)"><input type="checkbox" id="C_LUX5" name="seats[]" value="C_LUX5" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="C_LUX5" class="seat"><span></span>C5</label></td>
																				  <td><input type="checkbox" id="D_LUX5" name="seats[]" value="D_LUX5" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="D_LUX5" class="seat"><span></span>D5</label></td>
																				
																			  
																			  </tr>
																			  <tr>
																				  <td><input type="checkbox" id="A_LUX6" name="seats[]" value="A_LUX6" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="A_LUX6" class="seat"><span></span>A6</label></td>
																				  <td style="border-right: 3px solid rgb(63, 29, 1)"><input type="checkbox" id="B_LUX6" name="seats[]" value="B_LUX6" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="B_LUX6" class="seat"><span></span>B6</label></td>
																				  <td> &nbsp; </td>
																				  <td style="border-left: 3px solid rgb(63, 29, 1)"><input type="checkbox" id="C_LUX6" name="seats[]" value="C_LUX6" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="C_LUX6" class="seat"><span></span>C6</label></td>
																				  <td><input type="checkbox" id="D_LUX6" name="seats[]" value="D_LUX6" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="D_LUX6" class="seat"><span></span>D6</label></td>
																				 
																			  </tr>
																			  <tr>
																				  <td><input type="checkbox" id="A_LUX7" name="seats[]" value="A_LUX7" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="A_LUX7" class="seat"><span></span>A7</label></td>
																				  <td style="border-right: 3px solid rgb(63, 29, 1)"><input type="checkbox" id="B_LUX7" name="seats[]" value="B_LUX7" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="B_LUX7" class="seat"><span></span>B7</label></td>
																				  <td> &nbsp; </td>
																				  <td style="border-left: 3px solid rgb(63, 29, 1)"><input type="checkbox" id="C_LUX7" name="seats[]" value="C_LUX7" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="C_LUX7" class="seat"><span></span>C7</label></td>
																				  <td><input type="checkbox" id="D_LUX7" name="seats[]" value="D_LUX7" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="D_LUX7" class="seat"><span></span>D7</label></td>
																				 
																			  </tr>
																			  <tr>
																				  <td><input type="checkbox" id="A_LUX8" name="seats[]" value="A8" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="A_LUX8" class="seat"><span></span>A8</label></td>
																				  <td style="border-right: 3px solid rgb(63, 29, 1)"><input type="checkbox" id="B_LUX8" name="seats[]" value="B_LUX8" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="B_LUX8" class="seat"><span></span>B8</label></td>
																				  <td> &nbsp; </td>
																				  <td style="border-left: 3px solid rgb(63, 29, 1)"><input type="checkbox" id="C_LUX8" name="seats[]" value="C_LUX8" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="C_LUX8" class="seat"><span></span>C8</label></td>
																				  <td><input type="checkbox" id="D_LUX8" name="seats[]" value="D_LUX8" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="D_LUX8" class="seat"><span></span>D8</label></td>
																				
																			  
																			  </tr>
																			  <tr>
																				  <td><input type="checkbox" id="A_LUX9" name="seats[]" value="A_LUX9" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="A_LUX9" class="seat"><span></span>A9</label></td>
																				  <td style="border-right: 3px solid rgb(63, 29, 1)"><input type="checkbox" id="B_LUX9" name="seats[]" value="B9" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="B_LUX9" class="seat"><span></span>B9</label></td>
																				  <td> &nbsp; </td>
																				  <td style="border-left: 3px solid rgb(63, 29, 1)"><input type="checkbox" id="C_LUX9" name="seats[]" value="C_LUX9" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="C_LUX9" class="seat"><span></span>C9</label></td>
																				  <td><input type="checkbox" id="D_LUX9" name="seats[]" value="D_LUX9" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="D_LUX9" class="seat"><span></span>D9</label></td>
																				  
																			  </tr>
																			  <tr>
																				  <td><input type="checkbox" id="A_LUX10" name="seats[]" value="A_LUX10" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="A_LUX10" class="seat"><span></span>A10</label></td>
																				  <td style="border-right: 3px solid rgb(63, 29, 1)"><input type="checkbox" id="B_LUX10" name="seats[]" value="B10" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="B_LUX10" class="seat"><span></span>B10</label></td>
																				  <td> &nbsp; </td>
																				  <td style="border-left: 3px solid rgb(63, 29, 1)"><input type="checkbox" id="C_LUX10" name="seats[]" value="C_LUX10" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="C_LUX10" class="seat"><span></span>C10</label></td>
																				  <td><input type="checkbox" id="D_LUX10" name="seats[]" value="D_LUX10" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="D_LUX10" class="seat"><span></span>D10</label></td>
																				 
																			  </tr>            
																			  <tr>
																				  <td><input type="checkbox" id="A_LUX11" name="seats[]" value="A_LUX11" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="A_LUX11" class="seat"><span></span>A11</label></td>
																				  <td style="border-right: 3px solid rgb(63, 29, 1)"><input type="checkbox" id="B_LUX11" name="seats[]" value="B11" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="B_LUX11" class="seat"><span></span>B11</label></td>
																				  <td> &nbsp; </td>
																				  <td style="border-left: 3px solid rgb(63, 29, 1)"><input type="checkbox" id="C_LUX11" name="seats[]" value="C_LUX11" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="C_LUX11" class="seat"><span></span>C11</label></td>
																				  <td><input type="checkbox" id="D_LUX11" name="seats[]" value="D_LUX11" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="D_LUX11" class="seat"><span></span>D11</label></td>
																				 
																			  
																			  </tr>
																			  <tr>
																				  <td><input type="checkbox" id="A_LUX12" name="seats[]" value="A_LUX12" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="A_LUX12" class="seat"><span></span>A12</label></td>
																				  <td style="border-right: 3px solid rgb(63, 29, 1)"><input type="checkbox" id="B_LUX12" name="seats[]" value="B_LUX12" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="B_LUX12" class="seat"><span></span>B12</label></td>
																				  <td> &nbsp; </td>
																				  <td style="border-left: 3px solid rgb(63, 29, 1)"><input type="checkbox" id="C_LUX12" name="seats[]" value="C_LUX12" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="C_LUX12" class="seat"><span></span>C12</label></td>
																				  <td><input type="checkbox" id="D_LUX12" name="seats[]" value="D_LUX12" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="D_LUX12" class="seat"><span></span>D12</label></td>
																				 
																			  </tr>
																			  <tr>
																				  <td><input type="checkbox" id="A_LUX13" name="seats[]" value="A_L13" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="A_LUX13" class="seat"><span></span>A13</label></td>
																				  <td style="border-right: 3px solid rgb(63, 29, 1)"><input type="checkbox" id="B_LUX13" name="seats[]" value="B_LUX13" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="B_LUX13" class="seat"><span></span>B13</label></td>
																				  <td> &nbsp; </td>
																				  <td style="border-left: 3px solid rgb(63, 29, 1)"><input type="checkbox" id="C_LUX13" name="seats[]" value="C_LUX13" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="C_LUX13" class="seat"><span></span>C13</label></td>
																				  <td><input type="checkbox" id="D_LUX13" name="seats[]" value="D_LUX13" onchange="document.getElementById('checkBtn').disabled = !this.checked;"/><label for="D_LUX13" class="seat"><span></span>D13</label></td>
																				 
																			  </tr>
																  
																			 
																		  </tbody>
																  </table>    
																  
																  </div>
														  </center>
														</div>
															<div class="modal-footer">
																<button type="button" class="btn btn-default" datadismiss="modal">Close</button>
																<button type="button" class="btn btnprimary">Submit</button>
															</div>
												</div><!-- /.modal-content -->
											</div><!-- /.modal-dialog -->
										</div><!-- /.modal -->

									
									
						<div class="tab-pane" id="description">
		                    <div class="row " style="padding:3px 3px; margin:3px 3px;">
									<div  class="form-group input-group label-floating">
		                            <h4 class="info-text"> Check Out</h4>


										<div style="display: flex;margin-bottom: 60px;justify-content: space-between;width:100%">
												<label class="pull-left col-lg-6 col-md-12 col-sm-12 col-xs-12"  for="card" class="card" style="display: flex;flex-direction: column;height: 122px;padding-top: 20px;cursor: pointer;border: 1px solid transparent;border-radius: 2px;background-color: rgb(249, 249, 249);justify-content: center;align-items: center;">
													<div style="display: flex;justify-content: space-between;align-items: center;">
														<img src="{{URL::to('/')}}/vendor/templates/checkout-panel/img/visa_logo.png"/>
														<img src="{{URL::to('/')}}/vendor/templates/checkout-panel/img/mastercard_logo.png"/>
													</div>
											
													<div style="margin-top: 20px;">
																<input id="card" type="radio" name="payment">
																Pay £340.00 with credit card
													</div>
												</label>
										
												<label class="pull-right col-lg-6 col-md-12 col-sm-12 col-xs-12" for="paypal" class="paypal" style="display: flex;flex-direction: column;height: 122px;padding: 20px;cursor: pointer;border: 1px solid transparent;border-radius: 2px;background-color: rgb(249, 249, 249);justify-content: center;align-items: center;">
													<div style="display:flex;justify-content: space-between;align-items: center;">
														<img src="{{URL::to('/')}}/vendor/templates/checkout-panel/img/paypal_logo.png"/>
													</div>
													
													<div style=" margin-top: 20px;">
														<input id="paypal" type="radio" name="payment">
														Pay £340.00 with PayPal
													</div>
												</label>
											</div>
										
										
													
													<div class="card-details">
													  <h3 class="title">Credit Card Details</h3>
													  <div class="row">
																<div class="form-group col-sm-7">
																	<label for="card-holder">Card Holder</label>
																	<input id="card-holder" type="text" class="form-control" placeholder="Card Holder" aria-label="Card Holder" aria-describedby="basic-addon1">
																</div>
																<div class="form-group col-sm-5">
																		<label for="">Expiration Date</label>
																		<div class="input-group expiration-date">
																		<input type="text" class="form-control" placeholder="MM" aria-label="MM" aria-describedby="basic-addon1">
																		<span class="date-separator">/</span>
																		<input type="text" class="form-control" placeholder="YY" aria-label="YY" aria-describedby="basic-addon1">
																		</div>
																</div>
															<div class="form-group col-sm-8">
															<label for="card-number">Card Number</label>
															<input id="card-number" type="text" class="form-control" placeholder="Card Number" aria-label="Card Holder" aria-describedby="basic-addon1">
															</div>
															<div class="form-group col-sm-4">
															<label for="cvc">CVC</label>
															<input id="cvc" type="text" class="form-control" placeholder="CVC" aria-label="Card Holder" aria-describedby="basic-addon1">
															</div>
					
													  </div>
													</div>
												</div>


											
		                                </div>
		                            </div>
		                        </div>
	                        	<div class="wizard-footer">
	                            	<div class="pull-right">
	                                    <input type='button' class='btn btn-next btn-fill btn-danger btn-wd' name='next' value='Next' />
	                                    <input type='button' class='btn btn-finish btn-fill btn-danger btn-wd' name='go' value='Go' />
	                                </div>
	                                <div class="pull-left">
	                                    <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Previous' />

										<div class="footer-checkbox">
											<div class="col-sm-12">
											  <div class="checkbox">
												  <label>
													  <input type="checkbox" name="optionsCheckboxes">
												  </label>
												  Subscribe to our newsletter
											  </div>
										  </div>
										</div>
	                                </div>
	                                <div class="clearfix"></div>
	                        	</div>
		                    </form>
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	    	</div> <!-- row -->
		</div> <!--  big container -->

	    <div class="footer">
	        <div class="container text-center">
	             
	        </div>
		</div>
		
		<footer id="colorlib-footer">
				<div class="container">
					<div class="row row-pb-md">
						<div class="col-md-3 colorlib-widget">
							<h4>About unapp</h4>
							<p>Far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
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
									<li><a href="#"><i class="icon-check"></i> Gallery</a></li>
									<li><a href="#"><i class="icon-check"></i> About</a></li>
									<li><a href="#"><i class="icon-check"></i> Blog</a></li>
									<li><a href="#"><i class="icon-check"></i> Contact</a></li>
									<li><a href="#"><i class="icon-check"></i> Privacy</a></li>
								</ul>
							</p>
						</div>
	
						<div class="col-md-3 colorlib-widget">
							<h4>Recent Blog</h4>
							<div class="f-blog">
								<a href="blog.html" class="blog-img" style="background-image: url({{URL::to('/')}}/vendor/templates/unapp/images/blog-1.jpg);">
								</a>
								<div class="desc">
									<h2><a href="blog.html">Photoshoot Technique</a></h2>
									<p class="admin"><span>30 March 2018</span></p>
								</div>
							</div>
							<div class="f-blog">
								<a href="blog.html" class="blog-img" style="background-image: url({{URL::to('/')}}/vendor/templates/unapp/images/blog-2.jpg);">
								</a>
								<div class="desc">
									<h2><a href="blog.html">Camera Lens Shoot</a></h2>
									<p class="admin"><span>30 March 2018</span></p>
								</div>
							</div>
							<div class="f-blog">
								<a href="blog.html" class="blog-img" style="background-image: url({{URL::to('/')}}/vendor/templates/unapp/images/blog-3.jpg);">
								</a>
								<div class="desc">
									<h2><a href="blog.html">Imahe the biggest photography studio</a></h2>
									<p class="admin"><span>30 March 2018</span></p>
								</div>
							</div>
						</div>
	
						<div class="col-md-3 colorlib-widget">
							<h4>Contact Info</h4>
							<ul class="colorlib-footer-links">
								<li>291 South 21th Street, <br> Suite 721 New York NY 10016</li>
								<li><a href="tel://1234567920"><i class="icon-phone"></i> + 1235 2355 98</a></li>
								<li><a href="mailto:info@yoursite.com"><i class="icon-envelope"></i> info@yoursite.com</a></li>
								<li><a href="#"><i class="icon-location4"></i> yourwebsite.com</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="copy">
					<div class="container">
						<div class="row">
							<div class="col-md-12 text-center">
								<p>
				
	Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved by <a href="#" target="_blank"> <i class="fa fa-bus heart"></i> Ogmous Travels</a>.

									
								</p>
							</div>
						</div>
					</div>
				</div>
			</footer>
	</div>


	<!---->
	
		<!---->


		
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
	$("#bus").aircomplete({
      data: [
		"Volcano",  "YY coaches",
        "Link",    "Baby Coach",
        "Gaagaa",     "Califonia",
        "KK travels",    "Pioneer",
        "Global",
        "Kasamba"
      ],
      onSelect: function(data){
        return data;
      },
      minSearchStringLength : 1 // show results after a single character is entered
    });
</script>


	<!-- jQuery Easing -->
	<script src="{{URL::to('/')}}/vendor/templates/unapp/js/jquery.easing.1.3.js"></script>

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

	<!---->
	
    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('vendor/templates/startbootstrap/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/templates/startbootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{asset('vendor/templates/startbootstrap/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Contact form JavaScript -->
    <script src="{{asset('vendor/templates/startbootstrap/js/jqBootstrapValidation.js')}}"></script>
    <script src="{{asset('vendor/templates/startbootstrap/js/contact_me.js')}}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{asset('vendor/templates/startbootstrap/js/agency.min.js')}}"></script>
	<script src="{{asset('vendor/templates/edx/js/edx_book.js')}}"></script>
	<script>$("#popover-link").popover();</script>
</body>

</html>
