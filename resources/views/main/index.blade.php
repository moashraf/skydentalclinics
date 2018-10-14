<!DOCTYPE html>
<html lang="en">

<head>
	<title> {!! site_settings("Web site name") !!}  </title>
	<link rel="shortcut icon" href="images/logo1.png" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Designer Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Custom Theme files -->
	<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
	<!--gallery -->
	<link type="text/css" rel="stylesheet" href="css/cm-overlay.css" />
	<!-- //gallery -->
	<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">
	<!-- font-awesome icons -->
	<!--//Custom Theme files-->
	<!-- js -->
	<script src="js/jquery-2.2.3.min.js"></script>

	<!-- //js -->
</head>

<body>
	<!-- banner -->
	<div id="home" class="banner">
		<div class="banner-agileinfo">
			<!-- header -->
			<div class="header">
				<div class="container">
					<div class="col-sm-4">
						<!-- <img src="images/logo2.png" class="img-responsive"> -->
					</div>
					<div class="menu">
						<a href="" id="menuToggle"> <span class="navClosed"></span> </a>
						<nav>
							<a href="#home" class="active scroll">Home</a>
							<a href="#about" class="scroll">About Us</a>
							<a href="#services" class="scroll">Services</a>
							<a href="#gallery" class="scroll">Gallery</a>
							<a href="#testimonial" class="scroll">Testimonial</a>
							<a href="#contact" class="scroll">Contact</a>
						</nav>
						<script>
							(function($) {
								// Menu Functions
								$(document).ready(function() {
									$('#menuToggle').click(function(e) {
										var $parent = $(this).parent('.menu');
										$parent.toggleClass("open");
										var navState = $parent.hasClass('open') ? "hide" : "show";
										$(this).attr("title", navState + " navigation");
										// Set the timeout to the animation length in the CSS.
										setTimeout(function() {
											console.log("timeout set");
											$('#menuToggle > span').toggleClass("navClosed").toggleClass("navOpen");
										}, 200);
										e.preventDefault();
									});
								});
							})(jQuery);
						</script>

					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<!-- //header -->
			<div class="banner-text">
				<div class="container">
					<div class="row dental-first">
						<div class="col-sm-4 wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
							<h2 class="heading-right">  {!! site_settings("Web site name") !!}    </h2>
						</div>
						<div class=" col-sm-4 items-group">
							<div class="item agileits-dental">
								<div class="block text main-agileits">
									<span class="circleLight"></span>
									<img src="images/logo.png" class="img-responsive wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
									<br>
								</div>
							</div>
						</div>
						<div class="col-sm-4 wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
							<h2 class="heading-right">  {!! site_settings("Web site name") !!}    </h2>
						</div>
					</div>
					<div class="bottom-left">
						<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Booking Now!</button>

					</div>
				</div>
			</div>
			<!-- Modal -->
			<div class="modal fade" id="myModal" role="dialog">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">You can booking now, just full this form</h4>
						</div>
						<div class="modal-body">
							{!! Form::open( [ 'route' =>  'orders', 'method' => 'post', 'class' => 'agile_form' ] ) !!}

							<label class="header">Name</label>
							<div class="icon1 w3ls-name1">
									<input class="form-control" type="text" name="title" placeholder="" required="">
							</div>
							<label class="header">Phone</label>
							<div class="icon1 w3ls-name1">
                                    <input class="form-control" type="text" name="phone" placeholder="" required="">
							</div>
							<div class="icon2">
								<label class="header">Email</label>
                                    <input class="form-control" type="email" name="email" placeholder="" required="">
							</div>
							<label class="header">your message</label>
					     <textarea name="body"   class="w3l_summary" id="textarea" placeholder="" required=""></textarea>

 							<input type="submit" value="SEND">
					{!! Form::close() !!}
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- //banner -->

	<!-- about -->
	<div class="agile-about w3ls-section text-center" id="mission">
		<div class="container">
			<br><br>
			<h3 class="agileits-title wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
         <img src="images/mission.png"> Our Mission
			</h3>
			<div class="agileits-about-grid col-md-12">
				<h2> {!! site_settings("Mission") !!}  </h2>
				<br><br>
				<hr style="opacity: 0.5; width: 50%"><br>
			</div>

			<h3 class="agileits-title wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
				 <img src="images/vision.png"> Our Vision
			</h3>
			<div class="agileits-about-grid col-md-12">
				<h2> {!! site_settings("Vision") !!}  </h2>
				<br>
			</div>
		</div>
	</div>
 
	<div class="agileits-about-btm">
		<br><br>
		<div class="container">
			<div class="w3-flex">
			 
				@foreach($NEWS as $NEWS_val)
					 <div class="col-md-6 col-sm-6 col-xs-12 ab1 agileits-about-grid1">
					<h2> {{  $NEWS_val->title}} </h2>
					<p> {!! $NEWS_val->slug !!} </p>
					<p> {!! $NEWS_val->body !!} </p>
					<br><br>
				</div>
				
				
							@endforeach 

							
							
				
			
				 
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //about-bottom -->

	<!-- services -->
	<div class="services-section black-trans-bg" id="services">
		<!-- <div class="services-section-banner"></div> -->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="container">
						<div class="services-head">
							<h2 class="services-title">Our Services</h2>
							<span class="services-title-border"></span>
							<p class="services-text">Dramatically maintain clicks and mortar solutions without functional</p>
						</div>
					</div>
					<div class="services-content">
						<div class="row">
						
						
						<?php // dd($services->chunk(4) );?>
						
										 	@foreach($services->chunk(4)  as $services_val)

						
							<div class="col-md-3 col-sm-6 col-xs-12">
								<div class="service-2">
								
								
								
										  	@foreach($services_val  as $services_val_data)

																		  	@foreach($services_val_data->get_services_description_en as $services_val_data_val)

														
									<div class="service-box">
										<div class="clearfix">
											<div class="servicesB-content">
												<a type="" class="" data-toggle="modal" data-target="#myModal{{  $services_val_data_val->id }}">
													<div class="col-md-5">
														<img  style="    width: 100px;
    height: 100px; " src="{{ URL::to('/').'/images/'.$services_val_data->image}}" class="img-circle">
													</div>
													<div class="col-md-7">
														<h4>  {{  $services_val_data_val->title }}</h4>
													</div>
												</a>
											</div>
										</div>
									</div>
									
										@endforeach 
										@endforeach 
									
									 
									 
								</div>
							</div>
							
																	@endforeach 

							
							 </div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal1 -->
	
	
	
	
	
	
	 	@foreach($services as $services_va_val)
	 	@foreach($services_va_val->get_services_description_en as $services_va_val_rr)

	<div class="modal fade" id="myModal{{  $services_va_val_rr->id }}" role="dialog">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">  {{  $services_va_val_rr->title }} </h4>
				</div>
				<div class="modal-body">
					<p> {{  $services_va_val_rr->description }}  </p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	
	
		@endforeach 
		@endforeach 

	
	
	
	<!-- Modal2 -->
 
	<!-- //services -->
	<!-- //gallary -->
	<div class="w3ls-section agileits-gallery" id="gallery">
		<div class="container">
			<h3 class="agileits-title">Gallery</h3>
			<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
				<div id="myTabContent" class="tab-content">
					<div role="tabpanel" class="tab-pane fade in active" id="home-main" aria-labelledby="home-tab">
						<div class="w3_tab_img"> 
								@foreach($image as $image_val)
								<div class="col-md-3 col-sm-4 w3_tab_img_left">
								<div class="demo">
									<a class="cm-overlay" href="{{ URL::to('/').'/images/'.$image_val->single_photo}}">
										<figure class="imghvr-shutter-in-out-diag-2">
										<img src="{{ URL::to('/').'/images/'.$image_val->single_photo}}"   class="img-responsive" />
										</figure>
									</a>
								</div>
								<!-- <div class="agile-gallery-info">
									<h5>Teeth Cleaning</h5>
								</div> -->
							</div>
							@endforeach 

							
							
							
							
							
							
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="js/jquery.tools.min.js"></script>
		<script src="js/jquery.mobile.custom.min.js"></script>
		<script src="js/jquery.cm-overlay.js"></script>
		<script>
			$(document).ready(function() {
				$('.cm-overlay').cmOverlay();
			});
		</script>
	</div>
	<!-- //menu -->

	<div class="testimonial" id="testimonial">
		<br><br>
		<h2>Testimonials</h2>
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Carousel indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
				<li data-target="#myCarousel" data-slide-to="3"></li>
			</ol>
			<!-- Wrapper for carousel items -->
			<div class="carousel-inner">
			
			
			
											@foreach($slider as $slider_val)

			
			
			
				<div class="item carousel-item    <?php  if($loop->iteration  == 1 ){echo 'active';}    ?>" >
					<div class="img-box"><img src="{{ URL::to('/').'/images/'.$slider_val->single_photo}}" alt=""></div>
 					<p class="overview"><b> {{ $slider_val->title}} </b></p>
					<div class="star-rating">
						<ul class="list-inline">
							<li class="list-inline-item"><i class="fa fa-star"></i></li>
							<li class="list-inline-item"><i class="fa fa-star"></i></li>
							<li class="list-inline-item"><i class="fa fa-star"></i></li>
							<li class="list-inline-item"><i class="fa fa-star"></i></li>
							<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
						</ul>
					</div>
				</div>
				
				
				
				
					@endforeach 
				
				
			  
			</div>
			<!-- Carousel controls -->
			<a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
						<i class="fa fa-angle-left"></i>
					</a>
			<a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
						<i class="fa fa-angle-right"></i>
					</a>
		</div>
	</div>

	<!-- contact -->
	<div class="contact-w3-agileits w3ls-section" id="contact">
		<div class="container">
			<h3 class="agileits-title cont-w3l">Contact Me</h3>
			<div class="contact-main-w3ls">
				<div class="col-md-6  contact-left-w3ls">
					<div class="mail contact-grid-agileinfo">
						<div class="col-md-4 col-sm-4 col-xs-4 contact-icon-wthree">
							<h4>Mail me</h4>
						</div>
						<div class="col-md-8  col-sm-8 col-xs-8 contact-text-agileinfo">
							<a href="mailto:info@example.com">info@example.com</a><br>
							<a href="mailto:info@example.com">info@Vision.com</a>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="call contact-grid-agileinfo">
						<div class="col-md-4 col-sm-4 col-xs-4 contact-icon-wthree">
							<h4>Phone</h4>
						</div>
						<div class="col-md-8 col-sm-8 col-xs-8 contact-text-agileinfo">
							<p>  {!! site_settings('phone')  !!} </p>
							<p> {!! site_settings('mop')  !!}</p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="contact-grid-agileinfo">
						<div class="col-md-4 col-sm-4 col-xs-4 contact-icon-wthree">
							<h4>Address</h4>
						</div>
						<div class="col-md-8 col-sm-8 col-xs-8 contact-text-agileinfo">
							<p> {!! site_settings('Location')  !!} 	</p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="visit wthree-social-icons contact-grid-agileinfo">
						<div class="col-md-4 col-sm-4 col-xs-4 contact-icon-wthree">
							<h4>Follow me</h4>
						</div>
						<div class="col-md-8 col-sm-8 col-xs-8 contact-text-agileinfo">
							<ul class="w3-links">
								<li><a href=" {!! site_settings('facebook')  !!}"><i class="fa fa-facebook"></i></a></li>
								<li><a href=" {!! site_settings('twitter')  !!}"><i class="fa fa-twitter"></i></a></li>
								<li><a href=" {!! site_settings('linkedin')  !!}"><i class="fa fa-linkedin"></i></a></li>
								<li><a href=" {!! site_settings('instagram')  !!}"><i class="fa fa-instagram"></i></a></li>
							</ul>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="contact-main">
					<div class="col-md-6 agileits-main-right">
 			 	{!! Form::open( [ 'route' =>  'orders', 'method' => 'post', 'class' => 'agile_form' ] ) !!}

							<label class="header">Name</label>
							<div class="icon1 w3ls-name1">
									<input class="form-control" type="text" name="title" placeholder="" required="">
							</div>
							<label class="header">Phone</label>
							<div class="icon1 w3ls-name1">
                                    <input class="form-control" type="text" name="phone" placeholder="" required="">
							</div>
							<div class="icon2">
								<label class="header">Email</label>
                                    <input class="form-control" type="email" name="email" placeholder="" required="">
							</div>
							<label class="header">your message</label>
					     <textarea name="body"   class="w3l_summary" id="textarea" placeholder="" required=""></textarea>

 							<input type="submit" value="SEND">
					{!! Form::close() !!}
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3453.042714844306!2d31.349790573120117!3d30.06431007385254!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583e7495b230ff%3A0x8a4c2b359446ac8f!2sSky+Dental+Clinic!5e0!3m2!1sar!2seg!4v1526378284155"
	  width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>


	<!-- //contact -->
	<div class="agileits_w3layouts-footer">
		<p>© 2018 Sky Dental. All rights reserved | Design by <a href="#">Be Group</a></p>
	</div>
	<!-- start-smooth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
			$().UItoTop({
				easingType: 'easeOutQuart'
			});
		});
	</script>
	<script type="text/javascript" src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="js/wow.min.js"></script>
	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="js/bootstrap.js"></script>
</body>

</html>
