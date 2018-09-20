@extends('frontend.master')
@section('title','PRODUCT')
@section('content')
	<section id="topic-header">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h1>Book</h1>
					<p>A Bunch Of Products</p>
				</div>	<!-- End of /.col-md-4 -->
				<div class="col-md-8 hidden-xs">
					<ol class="breadcrumb pull-right">
					  	<li><a href="{{ route('user.index')}}">Home</a></li>
					  	<li class="active">Book</li>
					</ol>
				</div>	<!-- End of /.col-md-8 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section>	<!-- End of /#Topic-header -->
	<!-- PRODUCTS Start
    ================================================== -->
	<section id="shop">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<div class="products-heading">
						<h2>NEW BOOKS</h2>
					</div>	<!-- End of /.Products-heading -->
					<div class="product-grid">
					    <ul>
					    	@foreach($books as $book)
					        <li>
					            <div class="products">
									<a href="{{ route('user.detail') }}">
										<img src="images/{{ $book->image }}" alt="">
									</a>
									<a href="{{ route('user.detail') }}">
										<h4>{{ $book->name }}</h4>
									</a>
										<h6>by {{ $book->author }}</h6>
									<p>avg rating {{ $book->average }}</p>
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
							{{ $books->links() }}
						</ul>
					</div>
				</div>	<!-- End of /.col-md-9 -->
				<div class="col-md-3">
					<div class="blog-sidebar">
						<div class="block">
							<h4>Catagories</h4>
							<div class="list-group">
								@foreach($categories as $category)
								<a href="{{ route('user.category',$category->id) }}" class="list-group-item">
									<i class="fas fa-dot-circle"></i>
									{{ $category->name }}
								</a>
								@endforeach
							</div>
						</div>
						<div class="block">
							<h4>Book Tag</h4>
							<div class="tag-link">
								@foreach($tags as $tag)
								<a href="#">{{ $tag->name }}</a>
								@endforeach
							</div>	
						</div>
				</div>	<!-- End of /.col-md-3 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section>	<!-- End of Section -->
@endsection
