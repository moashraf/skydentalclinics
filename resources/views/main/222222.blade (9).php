@extends('main.master')
@section('content')
  
<body class="page-template page-template-templates page-template-contact page-template-templatescontact-php page page-id-155">




<!-- /#rh_progress -->

	<section class="rh_banner rh_banner__image" style="background-repeat: no-repeat;background-position: center top;background-image: url('../wp-content/uploads/2017/10/banner.jpg'); background-size: cover; ">

		<div class="rh_banner__cover"></div>
		<!-- /.rh_banner__cover -->

		<div class="rh_banner__wrap">

							<h2 class="rh_banner__title"> تواصل معنا </h2>
				<!-- /.rh_banner__title -->
			
			
		</div>
		<!-- /.rh_banner__wrap -->

	</section>

<section class="rh_section rh_wrap rh_wrap--padding rh_wrap--topPadding">

	<div class="rh_page">

		
		<div class="rh_page__contact">
 
			
			<div class="rh_contact">

				<div class="rh_contact__wrap" 	 STYLE="     BACKGROUND: #e6e6e6;
    PADDING: 20PX; ">

					<div class="rh_contact__form">
															<section id="contact-form">
 {!! Form::open( [ 'route' =>  'orders', 'method' => 'post'] ) !!}

<input type="hidden" name="status"   value="اتصل بنا " />


 <p class="rh_contact__input rh_contact__input_text">
 												<input type="text" name="title" id="name"  requiredclass="required"  required  placeholder="الاسم   " title="* Please provide your name">
											</p>

											<p class="rh_contact__input rh_contact__input_text">
 												<input type="email" name="email" id="email" class="email required"  required  placeholder=" البريد  " title="* Please provide a valid email address">
											</p>

											<p class="rh_contact__input rh_contact__input_text">
 												<input  required  type="text" name="phone" id="number" placeholder=" الهاتف   ">
											</p>

											<p class="rh_contact__input rh_contact__input_textarea">
 												<textarea cols="20" rows="3" name="body" id="comment" class="required" required  placeholder=" الرساله  " title="* Please provide your message"></textarea>
											</p>
											
											<p class="rh_contact__input rh_contact__submit">
												<input type="submit" id="submit-button" value=" ارسل " class="rh_btn rh_btn--primary" name="submit">
										 </p>

 										</form>
									</section>
														</div>
					<!-- /.rh_contact__form -->

					
							<div class="rh_contact__details">
							
							<div class="rh_agent_card__name">

 				<!-- /.name -->

				<div class="social">
							                <a target="_blank" href=" {{ site_settings('facebook')  }}"><i class="fa fa-facebook-official fa-lg"></i></a>
		                		                <a target="_blank" href="{{ site_settings('twitter')  }}"><i class="fa fa-twitter fa-lg"></i></a>
		                		                <a target="_blank" href="{{ site_settings('linkedin')  }}"><i class="fa fa-linkedin-square fa-lg"></i></a>
 		                		                <a target="_blank" href="{{ site_settings('instagram')  }} "><i class="fa fa-instagram fa-lg"></i></a>
		                				</div>
				<!-- /.social -->

			</div>

																	<div class="rh_contact__item">
										<p class="icon"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="18px" height="18px" viewBox="0 0 459 459" style="enable-background:new 0 0 459 459;" xml:space="preserve">
<g>
	<g>
		<path d="M91.8,198.9c35.7,71.4,96.9,130.05,168.3,168.3L316.2,311.1c7.649-7.649,17.85-10.199,25.5-5.1
			c28.05,10.2,58.649,15.3,91.8,15.3c15.3,0,25.5,10.2,25.5,25.5v86.7c0,15.3-10.2,25.5-25.5,25.5C193.8,459,0,265.2,0,25.5
			C0,10.2,10.2,0,25.5,0h89.25c15.3,0,25.5,10.2,25.5,25.5c0,30.6,5.1,61.2,15.3,91.8c2.55,7.65,0,17.85-5.1,25.5L91.8,198.9z"/>
	</g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>
</p>
										<p class="content"> <span class="label">الهاتف </span>  {!! site_settings('phone')  !!}    </p>
									</div>
								
																	<div class="rh_contact__item">
										<p class="icon"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="20px" height="32.754px" viewBox="0 0 32.754 32.754" style="enable-background:new 0 0 32.754 32.754;"
	 xml:space="preserve">
<g>
	<path d="M21.072,26.604c-0.316,0-0.625-0.02-0.934-0.047v2.104H4.189V3.508h15.949v2.194c0.31-0.027,0.617-0.047,0.935-0.047
		c0.203,0,0.404,0.02,0.604,0.029V2.211C21.678,0.994,20.683,0,19.465,0H4.863C3.646,0,2.65,0.994,2.65,2.211v28.331
		c0,1.216,0.996,2.212,2.213,2.212h14.602c1.218,0,2.213-0.996,2.213-2.212v-3.969C21.478,26.585,21.275,26.604,21.072,26.604z
		 M9.829,1.595H14.5c0.148,0,0.268,0.12,0.268,0.271c0,0.148-0.119,0.267-0.268,0.267H9.829c-0.148,0-0.268-0.118-0.268-0.267
		C9.561,1.715,9.68,1.595,9.829,1.595z M12.165,31.648c-0.611,0-1.105-0.496-1.105-1.105c0-0.611,0.494-1.104,1.105-1.104
		c0.611,0,1.107,0.492,1.107,1.104C13.272,31.152,12.775,31.648,12.165,31.648z M27.555,12.274c0.052,0.064,0.115,0.106,0.183,0.129
		l-0.303,0.188l-0.525-0.678l0.084-0.118C27.15,11.994,27.555,12.274,27.555,12.274z M21.072,7.099
		c-4.988,0-9.033,4.045-9.033,9.031c0,4.989,4.045,9.031,9.033,9.031c4.988,0,9.031-4.042,9.031-9.031
		C30.104,11.144,26.062,7.099,21.072,7.099z M15.775,9.894c0.316,0.475-0.438,0.551-0.438,0.551
		c-0.078,0.022-0.156,0.056-0.234,0.096C15.315,10.31,15.542,10.096,15.775,9.894z M16.59,17.796
		c-0.283,0.354-0.244,0.714-0.244,0.714c0.363,1.272-0.363,1.272-0.363,1.272c-0.525,0.077-0.322,0.712-0.322,0.712
		c0,0.357-0.203,0.639-0.203,0.639c0.203,0.277,0.043,0.598,0.043,0.598c-0.041,0.062-0.059,0.131-0.061,0.199
		c-1.549-1.477-2.518-3.559-2.518-5.865c0-0.477,0.043-0.94,0.121-1.396c0.047-0.079,0.076-0.13,0.076-0.13l0.324,0.199
		c0.283-0.119,0.441,0.316,0.441,0.316c0.242-0.041,0.324,0.398,0.324,0.398c0.605-0.239,0.725,0.871,0.725,0.871
		c0.324,0,0.688,0.396,0.688,0.396c0.604,0,0.725,0.397,0.725,0.397C16.871,17.038,16.59,17.796,16.59,17.796z M16.81,9.509
		c-0.052,0.439-0.82,0.385-1.006,0.364c0.322-0.271,0.666-0.521,1.029-0.739L16.81,9.509z M27.957,13.543
		c0,0-0.158,0.437-0.643,0.676c0,0-0.686-1.669-1.533-2.026c0,0,0.887,1.55,1.613,2.266c0,0,0.201,0.121,0.523-0.038
		c0,0,0.039,1.312-0.728,2.185c0,0-0.199,0.479-0.119,0.992c0,0,0.119,0.875-0.524,1.312c0,0-0.283,0.197-0.283,0.674
		c0,0,0,0.396-0.443,0.396c0,0-0.484,1.025-1.855,0.828c0,0,0-0.746-0.399-1.621c0,0-0.365-0.479,0.196-1.033
		c0,0,0.527-0.238-0.278-1.151c0,0-0.522-0.438-0.242-0.914c0,0,0.08-0.397-0.12-0.517c0,0-0.562,0.117-0.685-0.277
		c0,0-1.05,0.396-1.533,0.198c0,0-0.604,0.396-1.09-0.519c0,0-0.806-0.478-0.521-0.914c0,0,0.08-0.436,0.08-0.873
		c0,0,0.08-0.716,0.887-1.072c0,0,0.242-0.717,0.604-0.717c0,0,0.768-0.041,1.172-0.196c0,0,0.523-0.16,0.844-0.08
		c0,0,0.203,0.317,0.082,0.516c0,0,0.562-0.196,0.928,0.237c0,0,0.361-0.037,0.279-0.316c0,0,0.931,0.559,1.414,0.239
		c0,0,0.119-0.795-0.322-0.756c0,0-0.686,0.04-1.01-0.437c0,0-0.361-0.16-0.283,0.08c0,0,0.043,0.237,0.324,0.316
		c0,0-0.08,0.238-0.361,0.119c0,0-0.241-0.08-0.321-0.598c0,0-0.646-0.117-0.81-0.396c0,0-0.399,0.119,0.523,0.559
		c0,0,0.365,0.275-0.121,0.476c0,0-0.322-0.158,0.041-0.237c0,0-0.08-0.16-0.443-0.279c0,0-0.239-0.236-0.28-0.396
		c0,0-0.481,0.318-0.687,0.119c0,0-0.082,0.396-0.322,0.396c0,0-0.043,0.596-0.848,0.358h-0.244c0,0-0.201-0.556,0.082-0.716
		c0,0,0.523,0.119,0.644,0c0.123-0.117,0.202-0.317-0.119-0.396c0,0-0.481-0.123-0.283-0.36c0,0,0.242-0.276,0.484,0.082
		c0,0,0.403-0.28,0.926-0.317c0,0,0.931-0.4,0.687-0.679c0,0-0.603,0.358-0.886,0.162c0,0-0.795-0.263-0.147-0.895
		c2.803,0.27,5.186,1.969,6.418,4.355c-0.121,0.051-0.287,0.097-0.439,0.059C27.906,12.542,28.424,13.122,27.957,13.543z"/>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>
</p>
										<p class="content">
											<span class="label">محمول </span>  {!! site_settings('mop')  !!}  </p>
									</div>
								 <div class="rh_contact__item">
										<p class="icon"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="20px" height="20px" viewBox="0 0 510 510" style="enable-background:new 0 0 510 510;" xml:space="preserve">
<g>
	<g>
		<path d="M459,51H51C22.95,51,0,73.95,0,102v306c0,28.05,22.95,51,51,51h408c28.05,0,51-22.95,51-51V102
			C510,73.95,487.05,51,459,51z M459,153L255,280.5L51,153v-51l204,127.5L459,102V153z"/>
	</g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>
</p>
										<p class="content">
											<span class="label">البريد </span>
											<a href="mailto:  {!! site_settings('Mail')  !!} ;">   {!! site_settings('Mail')  !!}  </a>
										</p>
									</div>
								
																	<div class="rh_contact__item">
										<p class="icon"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="20px" height="30px" viewBox="0 0 425.963 425.963" style="enable-background:new 0 0 425.963 425.963;"
	 xml:space="preserve">
<g>
	<path d="M213.285,0h-0.608C139.114,0,79.268,59.826,79.268,133.361c0,48.202,21.952,111.817,65.246,189.081
		c32.098,57.281,64.646,101.152,64.972,101.588c0.906,1.217,2.334,1.934,3.847,1.934c0.043,0,0.087,0,0.13-0.002
		c1.561-0.043,3.002-0.842,3.868-2.143c0.321-0.486,32.637-49.287,64.517-108.976c43.03-80.563,64.848-141.624,64.848-181.482
		C346.693,59.825,286.846,0,213.285,0z M274.865,136.62c0,34.124-27.761,61.884-61.885,61.884
		c-34.123,0-61.884-27.761-61.884-61.884s27.761-61.884,61.884-61.884C247.104,74.736,274.865,102.497,274.865,136.62z"/>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>
</p>
										<p class="content">
											<span class="label">العنوان </span>   {!! site_settings('Location')  !!}   </p>
									</div>					<div class="rh_contact__item">
										<p class="icon"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="20px" height="30px" viewBox="0 0 425.963 425.963" style="enable-background:new 0 0 425.963 425.963;"
	 xml:space="preserve">
<g>
	<path d="M213.285,0h-0.608C139.114,0,79.268,59.826,79.268,133.361c0,48.202,21.952,111.817,65.246,189.081
		c32.098,57.281,64.646,101.152,64.972,101.588c0.906,1.217,2.334,1.934,3.847,1.934c0.043,0,0.087,0,0.13-0.002
		c1.561-0.043,3.002-0.842,3.868-2.143c0.321-0.486,32.637-49.287,64.517-108.976c43.03-80.563,64.848-141.624,64.848-181.482
		C346.693,59.825,286.846,0,213.285,0z M274.865,136.62c0,34.124-27.761,61.884-61.885,61.884
		c-34.123,0-61.884-27.761-61.884-61.884s27.761-61.884,61.884-61.884C247.104,74.736,274.865,102.497,274.865,136.62z"/>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>
</p>
										<p class="content">
											<span class="label">العنوان </span>  {!! site_settings('Location2')  !!} 	</p>
									</div>
															<br><br><br>

							</div>							<!-- /.rh_contact__details -->
							
							
							
							
							
							<br><br><br>
							
							
					<div class=" rh_contact__form">
					 {!! site_settings('google_maps')  !!} 
  	</div>
					
					<div class="rh_contact__details">
					 {!! site_settings('google_maps2')  !!} 
  	</div>
					<!-- /.rh_contact__map -->

				</div>
				<!-- /.rh_contact__wrap -->

			</div>
			<!-- /.rh_contact -->

		</div>
		<!-- /.rh_page__contact -->

	</div>
	<!-- /.rh_page -->


</section>	<!-- /.rh_section rh_wrap rh_wrap--padding -->

 
   @endsection
