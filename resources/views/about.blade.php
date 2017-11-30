@extends('layouts.app-public')

@section('content')

            @include('includes.header')

            <!-- banner start -->
			<!-- ================ -->
			<div class="banner">
				<div class="fixed-image section light-translucent-bg" style="background-image:url('idea/images/page-about-banner-1.jpg');">
					<div class="container">
					<div class="space-top"></div>
					<h1>Introducion</h1>
					<div class="separator-2"></div>
					<p class="lead">Nahorr Analytics is a software and data analytics company. We bring software,
				    <br class="hidden-xs hidden-sm"> data and ideas together to meet local and global needs. We belive in using 
				    <br class="hidden-xs hidden-sm"> software and data to better processes and to provide and display
				    <br class="hidden-xs hidden-sm"> information in a manner that improves decision making and planning.
					</p>
					</div>
				</div>
			</div>
			<!-- banner end -->

			<!-- main-container start -->
			<!-- ================ -->
			<section class="main-container">

				<div class="container">
					<div class="row">

						<!-- main start -->
						<!-- ================ -->
						<div class="main col-md-12">

							<!-- page-title start -->
							<!-- ================ -->
							<h1 class="page-title">What we do</h1>
							<div class="separator-2"></div>
							<!-- page-title end -->
							
							<div class="row">
								<div class="col-md-8">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex.</p>
									<h3>Uspendisse id sem elementum condimentum lorem</h3>
									<p>Sed eget pulvinar quam, vel feugiat enim. Aliquam erat volutpat. Phasellus eu porta ipsum. Suspendisse aliquet imperdiet commodo. Aenean vel lacinia elit. Class aptent taciti sociosqu ad litora torquent per. Vestibulum velmo.</p>
									<ul class="list-icons">
										<li class="object-non-visible" data-animation-effect="fadeInUpSmall"><i class="icon-check"></i> Etiam sed dolor ac diam volutpat</li>
										<li class="object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="100"><i class="icon-check"></i> Sed eget pulvinar quam, vel feugiat enim aliquam </li>
										<li class="object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="300"><i class="icon-check"></i> Erat volutpat. Phasellus eu porta ipsum suspendisse aliquet imperdiet</li>
										<li class="object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="500"><i class="icon-check"></i> Phasellus eu porta ipsum. Suspendisse aliquet imperdiet commodo</li>
									</ul>
									<a class="btn btn-lg btn-default" href="page-team.html"><i class="fa fa-users pr-10"></i> Our Team</a>
								</div>
								<!-- sidebar start -->
								<aside class="sidebar col-md-4">
									<div class="side vertical-divider-left">
										<div class="block clearfix">
											<h3 class="title margin-top-clear">Latest projects</h3>
											<div class="separator"></div>
											<div class="gallery row">
												<div class="gallery-item col-xs-4">
													<div class="overlay-container">
														<img src="images/gallery-1.jpg" alt="">
														<a href="portfolio-item.html" class="overlay small">
															<i class="fa fa-link"></i>
														</a>
													</div>
												</div>
												<div class="gallery-item col-xs-4">
													<div class="overlay-container">
														<img src="images/gallery-2.jpg" alt="">
														<a href="portfolio-item.html" class="overlay small">
															<i class="fa fa-link"></i>
														</a>
													</div>
												</div>
												<div class="gallery-item col-xs-4">
													<div class="overlay-container">
														<img src="images/gallery-3.jpg" alt="">
														<a href="portfolio-item.html" class="overlay small">
															<i class="fa fa-link"></i>
														</a>
													</div>
												</div>
												<div class="gallery-item col-xs-4">
													<div class="overlay-container">
														<img src="images/gallery-4.jpg" alt="">
														<a href="portfolio-item.html" class="overlay small">
															<i class="fa fa-link"></i>
														</a>
													</div>
												</div>
												<div class="gallery-item col-xs-4">
													<div class="overlay-container">
														<img src="images/gallery-5.jpg" alt="">
														<a href="portfolio-item.html" class="overlay small">
															<i class="fa fa-link"></i>
														</a>
													</div>
												</div>
												<div class="gallery-item col-xs-4">
													<div class="overlay-container">
														<img src="images/gallery-6.jpg" alt="">
														<a href="portfolio-item.html" class="overlay small">
															<i class="fa fa-link"></i>
														</a>
													</div>
												</div>
											</div>
										</div>
										<h3 class="title">Testimonial</h3>
										<div class="separator"></div>
										<blockquote class="margin-clear">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos dolorem.</p>	
											<footer><cite title="Source Title">Steve Doe </cite></footer>
										</blockquote>
									</div>
								</aside>
								<!-- sidebar end -->
							</div>
							<hr>
						</div>
						<!-- main end -->

					</div>
				</div>
			</section>
			<!-- main-container end -->

        @include('includes.footer')

        @include('includes.subfooter')
@endsection

