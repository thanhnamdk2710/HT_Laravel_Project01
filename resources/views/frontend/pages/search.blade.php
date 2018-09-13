@extends('frontend.master')

@section('title', 'SEARCH BOOK')

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
@endpush

@section('content')
<section id="products">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="products-heading">
					<h2>Search Results</h2>
				</div>
			</div>
		</div>
		@if(count($searchBooks))
		<div class="row">
			@foreach ($searchBooks as $key => $searchBook)
			<div class="col-md-3">
				<div class="products">
					<a href="">
						<img src="frontend/images/{{ $searchBook['image'] }}" alt="image book">
					</a>
					<a href="">
						<h4>{{ $searchBook['name'] }}</h4>
					</a>
					<p class="category">Danh mục : {{ $searchBook['name_category'] }}</p>
					<a class="view-link shutter" href="#">
						<i class="fas fa-info"></i>Detail of book
					</a>
				</div>	<!-- End of /.products -->
			</div>	<!-- End of /.col-md-3 -->
			@endforeach
		</div>
		<div class="row">
			<div class="box-footer clearfix mx-auto d-block">
					
				{{$searchBooks->appends(request()->input())->links()}}
			</div>
		</div>
		@else
			<h4 class="text-danger">* No result </h4>
		@endif
	</div>	<!-- End of /.row -->
	<div class="row">

	</div>
</div>	<!-- End of /.container -->
</section>	<!-- End of Section -->
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
