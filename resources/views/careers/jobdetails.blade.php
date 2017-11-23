@extends('layouts.app-public')

@section('content')

            @include('includes.header')

            <!-- main-container start -->
			<!-- ================ -->
			<section class="main-container">

				<div class="container">
					<div class="row">

						<!-- main start -->
						<!-- ================ -->
						<div class="main col-md-8">

							<!-- page-title start -->
							<!-- ================ -->
							<h1 class="page-title">{{@$job->job_title}}</h1>
							<!-- page-title end -->

							<!-- blogpost start -->
							<article class="clearfix blogpost full">
								<div class="blogpost-body">
									<div class="side">
										<div class="post-info">
											<span class="day">{{@$job->date_closing->day}}</span>
											<span class="month">{{@$job->date_closing->format('M')}} {{@$job->date_closing->year}}</span>

										</div>
										
									</div>
									<div class="blogpost-content">
										<header>
											<div class="submitted"><i class="fa fa-clock-o pr-5"></i> Closing <a href="#">{{@$job->date_closing->diffForHumans()}}</a></div>
										</header>
										
										<p>{{@$job->job_description}}</p>
										
									</div>
								</div>
								<footer class="clearfix">
									<button type="button" class="btn btn-warning btn-lg btn-block">APPLY NOW</button>
								</footer>
							</article>
							<!-- blogpost end -->
						</div>
						<!-- main end -->

					</div>
				</div>
			</section>
			<!-- main-container end -->
           
            @include('includes.footer')

            @include('includes.subfooter')
			
@endsection