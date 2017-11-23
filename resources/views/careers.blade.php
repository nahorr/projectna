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
						<div class="main col-md-12">

							<!-- page-title start -->
							<!-- ================ -->
							<h1 id="tables" class="page-title">Job Openings</h1>
							<br>
							<!-- page-title end -->

							<table class="table table-hover">
								<thead>
									<tr>
										<th>#</th>
										<th>Job Title</th>
										<th>Date Posted</th>
										<th>Closing Date</th>
										<th>View Details & Apply</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>Mark</td>
										<td>Otto</td>
										<td>@mdo</td>
										<td>@mdo</td>
									</tr>
									<tr>
										<td>2</td>
										<td>Jacob</td>
										<td>Thornton</td>
										<td>@fat</td>
										<td>@mdo</td>
									</tr>
									<tr>
										<td>3</td>
										<td>Larry the Bird</td>
										<td>@twitter</td>
										<td>@mdo</td>
									</tr>
								</tbody>
							</table>
						</div>
						<!-- main end -->
					</div>
				</div>
			</section>
			<!-- main-container end -->
           
            @include('includes.footer')

            @include('includes.subfooter')
			
@endsection