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
					  	<li><a href="{{ route('index')}}">Home</a></li>
					  	<li class="active">Book</li>
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
						<h2>NEW BOOKS</h2>
					</div>	<!-- End of /.Products-heading -->
					<div class="product-grid">
					    <ul>
					    	@foreach($books as $key => $book)
					        <li>
					            <div class="products">
									<a href="{{ route('detail',$book->id) }}">
										<img src="images/{{ $book->image }}" alt="image book">
									</a>
									<a href="{{ route('detail',$book->id) }}">
										<h4>{{ $book->name }}</h4>
									</a>
										<h6>by {{ $book->author }}</h6>
									<div class="rateit" data-rateit-value="{{ $book->average }}" data-rateit-ispreset="true" data-rateit-readonly="true"></div>
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
								@foreach($category as $key => $value)
								<a href="#" class="list-group-item">
									<i class="fas fa-dot-circle"></i>
									{{ $value->name }}$value
								</a>
								@endforeach
							</div>
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
