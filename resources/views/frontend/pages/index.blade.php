@extends('frontend.master')
@section('title','HOME')
@section('content')
	<section id="slider-area">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div id="slider" class="nivoSlider">
				    	<img src="frontend/images/slider.jpg" alt="" />
				    	<img src="frontend/images/slider1.jpg" alt=""/>
				    	<img src="frontend/images/slider2.jpg" alt="" />
					</div>	<!-- End of /.nivoslider -->
				</div>	<!-- End of /.col-md-12 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section> <!-- End of Section -->
	<!-- FEATURES Start
    ================================================== -->
	<section id="features">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="block">
						<div class="media">
							<div class="pull-left" href="#">
						    	<i class="fas fa-car"></i>
						  	</div>
						  	<div class="media-body">
						    	<h4 class="media-heading">Free Shipping</h4>
						    	<p>Lorem ipsum dolor sit amet, consectetur.</p>
						  </div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="block">
						<div class="media">
							<div class="pull-left" href="#">
								<i class=" fab fa-foursquare "></i>
						  	</div>
						  	<div class="media-body">
						    	<h4 class="media-heading">Media heading</h4>
						    	<p>Lorem ipsum dolor sit amet, consectetur.</p>
						  </div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="block">
						<div class="media">
							<div class="pull-left" href="#">
						    	<i class=" fas fa-mobile-alt"></i>
						  	</div>
						  	<div class="media-body">
						    	<h4 class="media-heading">Call Us</h4>
						    	<p>Lorem ipsum dolor sit amet, consectetur.</p>
						  </div>	<!-- End of /.media-body -->
						</div>	<!-- End of /.media -->
					</div>	<!-- End of /.block -->
				</div> <!-- End of /.col-md-4 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section>	<!-- End of section -->
	<!-- CATAGORIE Start
    ================================================== -->
	<section id="catagorie">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="block">
						<div class="block-heading">
							<h2>OUR BOOK CATEGORIES</h2>
						</div>	
						<div class="row">
							@foreach ($randomBooks as $key => $randomBook)
						  	<div class="col-sm-6 col-md-4">
							    <div class="thumbnail">
							    	<a class="catagotie-head" href="#">
										<img src="frontend/images/{{ $randomBook->image }}" alt="image book">
										<h3>{{ $randomBook->name }}</h3>
									</a>
							      	<div class="caption">
							        	<p>Tác giả : {{ $randomBook->author }}</p>
							        	<p>Danh mục : {{ $randomBook->name_category }}</p>
							        	<p>
							        		<a href="#" class="btn btn-default btn-transparent bg-success" role="button">
							        			<span class="text-white">Detail of book</span>
							        		</a>
							        	</p>
							      	</div>	<!-- End of /.caption -->
							    </div>	<!-- End of /.thumbnail -->
						  	</div>	<!-- End of /.col-sm-6 col-md-4 -->
						  	@endforeach
						</div>	<!-- End of /.row -->
					</div>	<!-- End of /.block --> 
				</div>	<!-- End of /.col-md-12 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section>	<!-- End of Section -->
		<!-- PRODUCTS Start
    ================================================== -->
	<section id="products">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="products-heading">
						<h2>NEW PRODUCTS</h2>
					</div>
				</div>
			</div>
			<div class="row">
				@foreach ($newBooks as $key => $newBook)
				<div class="col-md-3">
					<div class="products">
						<a href="">
							<img src="frontend/images/{{ $newBook->image }}" alt="image book">
						</a>
						<a href="">
							<h4>{{ $newBook->name }}</h4>
						</a>
						<p class="category">Danh mục : {{ $newBook->name_category }}</p>
						<a class="view-link shutter" href="#">
							<i class="fas fa-info"></i>Detail of book</a>
					</div>	<!-- End of /.products -->
				</div>	<!-- End of /.col-md-3 -->
				@endforeach
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section>	<!-- End of Section -->
		<!-- CALL TO ACTION Start
    ================================================== -->
	<section id="call-to-area">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="block">
						<div class="block-heading">
							<h2>Our Partners</h2>
						</div>
					</div>	<!-- End of /.block -->
					<div id="owl-example" class="owl-carousel">
						<div> <img src="frontend/images/company-1.png" alt=""></div>
						<div> <img src="frontend/images/company-2.png" alt=""></div>
						<div> <img src="frontend/images/company-3.png" alt=""></div>
						<div> <img src="frontend/images/company-4.png" alt=""></div>
						<div> <img src="frontend/images/company-5.png" alt=""></div>
						<div> <img src="frontend/images/company-6.png" alt=""></div>
						<div> <img src="frontend/images/company-8.png" alt=""></div>
						<div> <img src="frontend/images/company-9.png" alt=""></div>
					</div>	<!-- End of /.Owl-Slider -->
				</div>	<!-- End of /.col-md-12 -->
			</div> <!-- End Of /.Row -->
		</div> <!-- End Of /.Container -->
	</section>	<!-- End of Section -->
@endsection
