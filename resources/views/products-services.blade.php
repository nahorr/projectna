@extends('layouts.app-public')

@section('content')

            @include('includes.header')

            <!-- banner start -->
			<!-- ================ -->
			<div class="banner">
				<div class="fixed-image section light-translucent-bg" style="background-image:url('idea/images/page-services-banner.jpg');">
					<div class="container">
					<div class="space-top"></div>
					<h1>Products & Services</h1>
					<div class="separator-2"></div>
					</div>
				</div>
			</div>
			<!-- banner end -->



			<!-- page-top start-->
			<!-- ================ -->
			<div class="page-top object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="100">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="text-center title">Core Services</h1>
							<div class="separator"></div>
							<p class="text-center">Our core services are list below:</p>
							<div class="row grid-space-20">
								<div class="col-sm-6">
									<div class="box-style-3 right object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="0">
										<div class="icon-container default-bg">
											<i class="fa fa-bold"></i>
										</div>
										<div class="body">
											<h2>Data Collection & Analysis</h2>
											<p>We provide data collection, analysis, and visualization services.</p>
											<a href="{{url('/')}}" class="link"><span>Read More</span></a>
										</div>
									</div>
									<div class="box-style-3 right object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="200">
										<div class="icon-container default-bg">
											<i class="fa fa-check"></i>
										</div>
										<div class="body">
											<h2>Software Development</h2>
											<p>We provide custom software solutions.</p>
											<a href="page-services.html" class="link"><span>Read More</span></a>
										</div>
									</div>
									
								</div>
								<div class="col-sm-6">
									<div class="box-style-3 object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="0">
										<div class="icon-container default-bg">
											<i class="fa fa-leaf"></i>
										</div>
										<div class="body">
											<h2>Data Driven Website Design</h2>
											<p>We provide custome web development solutions for businesses.</p>
											<a href="page-services.html" class="link"><span>Read More</span></a>
										</div>
									</div>
									<div class="box-style-3 object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="200">
										<div class="icon-container default-bg">
											<i class="fa fa-laptop"></i>
										</div>
										<div class="body">
											<h2>Training and Talent Development</h2>
											<p>we provide skills training and talent development services.</p>
											<a href="page-services.html" class="link"><span>Read More</span></a>
										</div>
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- page-top end -->

			<!-- page-top start-->
			<!-- ================ -->
			<div id="page-top" class="page-top object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="100">
				<div class="clearfix">
					<div class="col-md-12">
						<h1 class="text-center title">Products</h1>
						<div class="separator"></div>
						<p class="text-center">Totalgrades is our latest product.</p>
						<div class="row grid-space-20">
							<div class="col-md-12 col-lg-5">
								<br class="hidden-sm hidden-xs">
								<br class="hidden-sm hidden-xs">
								<img src="{{asset('idea/images/totalgrades-products-1.png')}}" alt="totalgrades" class="object-non-visible center-block" data-animation-effect="fadeInUp" data-effect-delay="0">
							</div>
							<div class="col-md-6 col-lg-3">
								<br class="hidden-xs">
								<div class="box-style-3 object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="0">
									<div class="icon-container default-bg circle">
										<i class="fa fa-diamond"></i>
									</div>
									<div class="body">
										<h2>Totalgrades</h2>
										<p>Total Grades is an easy to use online platform that encourages and empowers students to improve their grades while allowing parents to be actively enganged.</p>
										<a href="page-services.html" class="link"><span>Read More</span></a>
									</div>
								</div>
								
								<br class="hidden-xs hidden-sm">
							</div>
							<div class="col-md-6 col-lg-3">
								<br class="hidden-sm hidden-xs">
								<br class="hidden-sm hidden-xs">
								<img src="{{asset('idea/images/totalgrades-products.png')}}" alt="totalgrades" class="object-non-visible center-block" data-animation-effect="fadeInUp" data-effect-delay="0">
							</div>
							
						</div>
					</div>
				</div>
			</div>
			<!-- page-top end -->

					
            @include('includes.footer')

            @include('includes.subfooter')
@endsection