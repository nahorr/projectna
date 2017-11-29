@extends('layouts.app-public')

@section('content')

            @include('includes.header')

            @include('includes.slider')

            <!-- page-top start-->
            <!-- ================ -->
            <div class="page-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="call-to-action">
                                <h1 class="title">Welcome!</h1>
                                <p>Nahorr analytics is a software and data analytics company...</p>
                                <a class="btn btn-white more" data-toggle="modal" data-target="#myModal">
                                Read more <i class="pl-10 fa fa-info"></i>
                                </a>

                                <!-- Modal -->
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Nahorr Analytics.</h4>
                                            </div>
                                            <div class="modal-body">
                                                <p>Nahorr Analytics is a software and data analytics company. We bring software, data and ideas together to meet local and global needs. We belive in using software and data to better processes and to provide and display information in a manner that improves decision making and planning.</p>
                                                <h2>Core Services</h2>
                                                <ul class="list-icons">
                                                    <li><i class="icon-check"></i> Data Analysis</li>
                                                    <li><i class="icon-check"></i> Software Development</li>
                                                    <li><i class="icon-check"></i> Data Driven Website Design</li>
                                                    <li><i class="icon-check"></i> Training</li>
                                                    <li><i class="icon-check"></i> Talent Development</li>
                                                </ul>
                                                <p>We are a new but fast growing company made up of a team of thinkers, builders, doers, and innovators. We bring passion to we do. We meet opportunities and challenges head-on, with unwavering optimism, innovation, collaboration, and resourcefulness.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <a href="{{asset('/contact')}}" type="button" class="btn btn-sm btn-default" role="button"><i class="icon-check"></i> Contact us</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                or
                                <a href="{{asset('/contact')}}" class="btn btn-default contact">Contact us <i class="pl-10 fa fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page-top end -->

            <!-- main-container start -->
            <!-- ================ -->
            <section class="main-container gray-bg">

                <!-- main start -->
                <!-- ================ -->
                <div class="main">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="text-center title">Products and Services</h1>
                                <div class="separator"></div>
                                <p class="text-center"></p>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="box-style-1 white-bg object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="200">
                                            <i class="fa fa-bar-chart"></i>
                                            <h2>Data Analysis</h2>
                                            <p>We collect and analyse data.</p>
                                            <a href="{{url('/products-services')}}" class="btn-default btn">Read More</a>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-4">
                                        <div class="box-style-1 white-bg object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="200">
                                            <i class="fa fa-code"></i>
                                            <h2>Software Development</h2>
                                            <p> We bring ideas and codes together.</p>
                                            <a href="{{url('/products-services')}}" class="btn-default btn">Visit Product Website</a>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="box-style-1 white-bg object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="200">
                                            <i class="fa fa-laptop"></i>
                                            <h2>Totalgrades</h2>
                                            <p> An innovative online gradebook.</p>
                                            <a href="https://totalgrades.com/features" class="btn-default btn">Read More</a>
                                        </div>
                                    </div>
                              
                            </div>
                        </div>
                    </div>
                </div>
                <!-- main end -->

            </section>
            <!-- main-container end -->



            <!-- section start -->
            <!-- ================ -->
            <div class="section parallax light-translucent-bg parallax-bg-3">
                <div class="container">
                    
                            <!-- Counters start -->
                            <!-- ============================================================================== -->
                            <div class="stats row grid-space-10">
                                <div class="col-md-3 col-sm-6">
                                    <div class="box-style-1">
                                        <h2 class="title">We Listen</h2>
                                        <i class="fa fa-volume-up"></i>
                                        
                                    </div>
                                </div>
                                
                                <div class="col-md-3 col-sm-6">
                                    <div class="box-style-1">
                                        <h2 class="title">We Think</h2>
                                        <i class="fa fa-users"></i>
                                       
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="box-style-1">
                                        <h2 class="title">We Consult</h2>
                                        <i class="fa fa-handshake-o"></i>
                                        
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="box-style-1">
                                        <h2 class="title">We Build</h2>
                                        <i class="fa fa-cubes"></i>
                                        
                                    </div>
                                </div>
                            </div>
                </div>
            </div>
            <!-- section end -->

            <!-- section start -->
            <!-- ================ -->
            <div class="section clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">

                            <h1 class="text-center">Why Choose Nahorr Analytics</h1>
                            <div class="separator"></div>
                            <p class="lead text-center">Because we strive to provide innovative, affordable and cost effective solutions to educational institutions, corporations, and government institutions. We work with our clients to meet their goals and we make a commitment to be accessible and accountable to all our clients.</p>
                            
                            <div class="col-md-4 col-md-offset-4">
                                <div class="text-center">
                                    <a href="{{url('/contact')}}" class="btn btn-default btn-lg">Contact Us</a>
                                </div>
                            </div>
                
                        </div>
                    </div>
                </div>
            </div>
            <!-- section end -->


           

            @include('includes.footer')

            @include('includes.subfooter')
@endsection