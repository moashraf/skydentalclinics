@extends('main.master')
@section('content')
 

<body class="property-template-default single single-property postid-32">


<div class="rh_wrap">

<div id="rh_progress"></div>
<section class="rh_banner rh_banner__image" style="background-repeat: no-repeat;background-position: center top;background-image: url('../wp-content/uploads/2017/10/banner.jpg'); background-size: cover; ">

		<div class="rh_banner__cover"></div>
		<!-- /.rh_banner__cover -->

		<div class="rh_banner__wrap">

			<h2 class="rh_banner__title"> {{$Products->name}}    </h2>
			<!-- /.rh_banner__title -->

		</div>
		<!-- /.rh_banner__wrap -->

	</section>
 <section class="rh_section rh_wrap--padding rh_wrap--topPadding">

		
			
				
				
					<div class="rh_page rh_page--fullWidth">

						
<div class="rh_page__head rh_page__property">

	<div class="rh_page__property_title">

		<h1 class="rh_page__title">  {{$Products->name}}  </h1>
		<!-- /.rh_page__title -->
 

						<!-- /.rh_page__property_address -->
			
	</div>
	<!-- /.rh_page__property_title -->

	<div class="rh_page__property_price">
		 
		<!-- /.status -->
		<p class="price"> {{$Products->get_cat_data['title']}}  </p>
		<!-- /.price -->
	</div>
	<!-- /.rh_page__property_price -->

</div>
<!-- /.rh_page__head -->


						<div class="rh_property">
								<div id="property-detail-flexslider" class="clearfix">
		<div class="flexslider">
			<ul class="slides">
			
			
			
			   @foreach($Products->get_Product_Photos as $Products_val_Photos )
				<li>
				<a href="#" class="swipebox" rel="gallery_real_homes"  style=" cursor: default; " >
				<img src="{{ URL::to('/').'/images/'.$Products_val_Photos->Photo}} " alt="property-10-exterior" />
				</a>
				</li>
				
				   @endforeach
				
				</ul>
		</div>
	</div>
			<div id="property-featured-image" class="clearfix only-for-print">
			<img src="../wp-content/uploads/2015/07/property-10-exterior.jpg" alt="Single Home at Florida 5, Pinecrest" />		</div>
		
							<div class="rh_property__wrap rh_property--padding">
								<div class="rh_property__main">
									
<div class="rh_property__content">
 
	<!-- /.rh_property__wrap -->

 <div class="rh_property__row rh_property__meta_wrap">
 
			<div class="rh_property__meta">
			<h4>غرف </h4>
			<div>
				<svg class="rh_svg" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
 <defs>
  </defs>
  <path d="M1111.91,600.993h16.17a2.635,2.635,0,0,1,2.68,1.773l1.21,11.358a2.456,2.456,0,0,1-2.61,2.875h-18.73a2.46,2.46,0,0,1-2.61-2.875l1.21-11.358A2.635,2.635,0,0,1,1111.91,600.993Zm0.66-7.994h3.86c1.09,0,2.57.135,2.57,1l0.01,3.463c0.14,0.838-1.72,1.539-2.93,1.539h-4.17c-1.21,0-2.07-.7-1.92-1.539l0.37-3.139A2.146,2.146,0,0,1,1112.57,593Zm11,0h3.86a2.123,2.123,0,0,1,2.2,1.325l0.38,3.139c0.14,0.838-.72,1.539-1.93,1.539h-5.17c-1.21,0-2.07-.7-1.92-1.539L1121,594C1121,593.1,1122.48,593,1123.57,593Z" transform="translate(-1108 -593)"/>
</svg>
				<span class="figure"> {{$Products->Rooms }} </span>
			</div>
		</div>
		<!-- /.rh_property__meta -->
	
			<div class="rh_property__meta">
			<h4>حمام 	</h4>
			<div>
				<svg class="rh_svg" xmlns="http://www.w3.org/2000/svg" width="23.69" height="24" viewBox="0 0 23.69 24">
  <path d="M1204,601a8,8,0,0,1,16,0v16h-2V601a6,6,0,0,0-12,0v1h-2v-1Zm7,6a6,6,0,0,0-12,0h12Zm-6,2a1,1,0,0,1,1,1v1a1,1,0,0,1-2,0v-1A1,1,0,0,1,1205,609Zm0,5a1,1,0,0,1,1,1v1a1,1,0,0,1-2,0v-1A1,1,0,0,1,1205,614Zm4.94-5.343a1,1,0,0,1,1.28.6l0.69,0.878a1,1,0,0,1-1.88.685l-0.69-.879A1,1,0,0,1,1209.94,608.657Zm2.05,4.638a1,1,0,0,1,1.28.6l0.35,0.94a1.008,1.008,0,0,1-.6,1.282,1,1,0,0,1-1.28-.6l-0.35-.939A1.008,1.008,0,0,1,1211.99,613.295Zm-11.93-4.638a1,1,0,0,1,.6,1.282l-0.69.879a1,1,0,1,1-1.87-.682l0.68-.88A1,1,0,0,1,1200.06,608.657Zm-2.05,4.639a1,1,0,0,1,.6,1.281l-0.34.941a1,1,0,0,1-1.88-.683l0.34-.94A1,1,0,0,1,1198.01,613.3Z" transform="translate(-1196.31 -593)"/>
</svg>
				<span class="figure"> {{$Products->bathroom }}  </span>
			</div>
		</div>
		 <div class="rh_property__meta">
			<h4>المساحه	</h4>
			<div>
				<svg class="rh_svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
<g>
	<circle cx="2" cy="2" r="2"/>
</g>
<g>
	<circle cx="2" cy="22" r="2"/>
</g>
<g>
	<circle cx="22" cy="2" r="2"/>
</g>
<rect x="1" y="1" width="2" height="22"/>
<rect x="1" y="1" width="22" height="2"/>
<path opacity="0.5" d="M23,20.277V1h-2v19.277C20.7,20.452,20.452,20.7,20.277,21H1v2h19.277c0.347,0.596,0.984,1,1.723,1
	c1.104,0,2-0.896,2-2C24,21.262,23.596,20.624,23,20.277z"/>
</svg>
				<span class="figure">   {{$Products->Area }}  </span>
									<span class="label">متر </span>
							</div>
		</div>
		 
	
</div>
<!-- /.rh_property__row rh_property__meta -->

	<h4 class="rh_property__heading">  {{$Products->name}}  </h4>
	<!-- /.rh_property__heading -->

	<div class="rh_content">
		<p>  {{$Products->body}}  </p>
	</div>
	
</div>
<!-- /.rh_property__content -->
 
<!-- /.rh_property__comments -->
								</div>
								<!-- /.rh_property__main -->

								<div class="rh_property__sidebar">
																			<aside class="rh_sidebar">
												<section class="widget rh_property_agent ">
						
					<div class="rh_property_agent__agent_info">
							<br>
								<p class="contact mobile">
					هاتف : <span class="value">  {{  site_settings("phone")  }} </span>
				</p>
							
								<p class="contact email">
					بريد : <a href="mailto: {{  site_settings('Mail')  }};" class="value"> {{  site_settings('Mail')  }} </a>
				</p>
						</div>
					<a class="rh_btn rh_btn--primary rh_property_agent__link" href="#">تواصل معنا </a>
		
						<div class="rh_property_agent__enquiry_form">
						
				 
					
					
					 {!! Form::open( [ 
					 'route' =>  'orders', 'method' => 'post'
					 , 'id' => 'agent-form-id57' , 'class' => 'rh_widget_form agent-form' ] ) !!}
 <input type="hidden" name="status"   value="اتصل بنا " />


 <p class="rh_widget_form__row">
 												<input type="text" name="title" id="name"  requiredclass="required"  required  placeholder="الاسم   " title="* Please provide your name">
											</p>

											<p class="  rh_widget_form__row">
 												<input type="email" name="email" id="email" class="email required"  required  placeholder=" البريد  " title="* Please provide a valid email address">
											</p>

											<p class="rh_widget_form__row  ">
 												<input  required  type="text" name="phone" id="number" placeholder=" الهاتف   ">
											</p>

											<p class="  rh_widget_form__row">
 												<textarea cols="20" rows="3" name="body" id="comment" class="required" required  placeholder=" الرساله  " title="* Please provide your message"></textarea>
											</p>
											
											<p class="rh_contact__input rh_contact__submit">
												<input type="submit" id="submit-button" value=" ارسل " class="rh_btn rh_btn--primary" name="submit">
										 </p>

 										</form>
										
										
					
					
					
				</div>
				<!-- /.rh_property_agent__enquiry_form -->
 </section>
 </div>
								<!-- /.rh_property__sidebar -->
							</div>
							<!-- /.rh_property__wrap -->
						</div>
						<!-- /.rh_property -->

					</div>
					<!-- /.rh_page -->

				
			
		
	</section>

 
				
</div>

   @endsection
