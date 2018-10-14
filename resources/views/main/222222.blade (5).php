@extends('main.master')
@section('content')
 

<body class="property-template-default single single-property postid-32">


<div class="rh_wrap">

<div id="rh_progress"></div>
<section class="rh_banner rh_banner__image" style="background-repeat: no-repeat;background-position: center top;background-image: url('../wp-content/uploads/2017/10/banner.jpg'); background-size: cover; ">

		<div class="rh_banner__cover"></div>
		<!-- /.rh_banner__cover -->

		<div class="rh_banner__wrap">

			<h2 class="rh_banner__title"> {{$services->title}}   </h2>
			<!-- /.rh_banner__title -->

		</div>
		<!-- /.rh_banner__wrap -->

	</section>
 <section class="rh_section rh_wrap--padding rh_wrap--topPadding">

		
			
				
				
					<div class="rh_page rh_page--fullWidth">

						
<div class="rh_page__head rh_page__property">

	<div class="rh_page__property_title">

		<h1 class="rh_page__title">   {{$services->title}}    </h1>
		<!-- /.rh_page__title -->
 

						<!-- /.rh_page__property_address -->
			
	</div>
	<!-- /.rh_page__property_title -->

	 
</div>
<!-- /.rh_page__head -->


						<div class="rh_property">
								<div id="property-detail-flexslider" class="clearfix">
		<div class="flexslider">
			<ul class="slides">
				<li> 
				<img src="{{ URL::to('/').'/images/'.$services->single_photo}}" alt="property-10-exterior" /> </li>
				
				</ul>
		</div>
	</div>
			 
		
							<div class="rh_property__wrap rh_property--padding">
								<div class="rh_property                  __main">
									
<div class="rh_property__content">
 
	<!-- /.rh_property__wrap -->

 
	<h4 class="rh_property__heading"> {{$services->title}}  </h4>
	<!-- /.rh_property__heading -->

	<div class="rh_content">
		<p>   {{$services->body}}   </p>
	</div>
	
</div>
<!-- /.rh_property__content -->
 
<!-- /.rh_property__comments -->
								</div>
				 	</div>
						<!-- /.rh_property -->

					</div>
					<!-- /.rh_page -->

				
			
		
	</section>

 
				
</div>

   @endsection
