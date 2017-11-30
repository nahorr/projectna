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

        @include('includes.footer')

            @include('includes.subfooter')
@endsection

