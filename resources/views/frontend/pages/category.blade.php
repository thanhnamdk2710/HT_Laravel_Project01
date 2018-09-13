@extends('frontend.master')
@section('title','CATEGORY')
@section('content')
	<section id="topic-header">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h1>Shop</h1>
					<p>A Bunch Of Products</p>
				</div>	<!-- End of /.col-md-4 -->
				<div class="col-md-8 hidden-xs">
					<ol class="breadcrumb pull-right">
					  	<li><a href="{{ route('index')}}">Home</a></li>
					  	<li class="active">Shop</li>
					</ol>
				</div>	<!-- End of /.col-md-8 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section>	<!-- End of /#Topic-header -->
	<!-- PRODUCTS Start
    ================================================== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
		.checked {
		    color: orange;
		}
	</style>
	<section id="shop">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<div class="products-heading">
						<h2>CATEGORIES</h2>
					</div>	<!-- End of /.Products-heading -->
					<div class="product-grid">
					    <ul>
					    	@foreach($books as $key => $value)
					        <li>
					            <div class="products">
									<a href="{{ route('detail') }}">
										<img src="images/{{ $value->image }}" alt="" height="300px" width="50px">
									</a>
									<a href="{{ route('detail') }}">
										<h4>{{ $value->name }}</h4>
									</a>
										<h6>by {{ $value->author }}</h6>
									<p>avg rating {{ $value->average }}</p>
									<div class="single_product_ratings mb-15">
		                                <span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
		                            </div>
								</div>	<!-- End of /.products -->
					        </li>
					        @endforeach
					    </ul>
					</div>	<!-- End of /.products-grid -->
					<!-- Pagination -->
					<div class="pagination-bottom">
						<ul class="pagination">
						  	<li class="disabled"><a href="#">&laquo;</a></li>
						  	<li class="active"><a href="#">1 <span class="sr-only"></span></a></li>
						  	<li><a href="#">2</a></li>
						  	<li><a href="#">3</a></li>
						  	<li><a href="#">4</a></li>
						  	<li><a href="#">»</a></li>
						</ul>	<!-- End of /.pagination -->
					</div>
				</div>	<!-- End of /.col-md-9 -->
				<div class="col-md-3">
					<div class="blog-sidebar">
						<div class="block">
							<h4>Catagories</h4>
							<div class="list-group">
								@foreach($category as $key => $value)
								<a href="{{ route('category',$value->id) }}" class="list-group-item">
									<i class="fas fa-dot-circle"></i>
									{{ $value->name }}
								</a>
								@endforeach
							</div>
						</div>
						<div class="block">
							<img src="images/food-ad.png" alt="">
						</div>
						<div class="block">
							<h4>Book Tag</h4>
							<div class="tag-link">
								@foreach($tag as $tag)
								<a href="">{{ $tag->name }}</a>
								@endforeach
							</div>	
						</div>
				</div>	<!-- End of /.col-md-3 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section>	<!-- End of Section -->
@endsection
