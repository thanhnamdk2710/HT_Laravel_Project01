@extends('frontend.master')
@section('title','AUTHOR')
@section('content')
	<section id="topic-header">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h1>Shop</h1>
					<p></p>
				</div>	<!-- End of /.col-md-4 -->
				<div class="col-md-8 hidden-xs">
					<ol class="breadcrumb pull-right">
					  	<li><a href="{{ route('index')}}">Home</a></li>
					  	<li class="active">Author</li>
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
						<h2>ALL AUTHOR</h2>
					</div>	<!-- End of /.Products-heading -->
					<div class="product-grid">
					    <ul>
					        <li>
					            <div class="products">
									<a href="#">
										<img src="images/product-image-8.jpg" alt="">
									</a>
									<a href="#">
										<h4>Amazing Italian Sauces</h4>
									</a>
									<p class="price">From: £69.99</p>
									<div >
										<a class="view-link shutter" href="#">
										<i class="fas fa-info"></i>Detail of book</a>
									</div>
								</div>	<!-- End of /.products -->
					        </li>
					        <li>
					            <div class="products">
									<a href="#">
										<img src="images/product-image-8.jpg" alt="">
									</a>
									<a href="#">
										<h4>Amazing Italian Sauces</h4>
									</a>
									<p class="price">From: £69.99</p>
									<div >
										<a class="view-link shutter" href="#">
										<i class="fas fa-info"></i>Detail of book</a>
									</div>
								</div>	<!-- End of /.products -->
					        </li>
					        <li>
					            <div class="products">
									<a href="#">
										<img src="images/product-image-8.jpg" alt="">
									</a>
									<a href="#">
										<h4>Amazing Italian Sauces</h4>
									</a>
									<p class="price">From: £69.99</p>
									<div >
										<a class="view-link shutter" href="#">
										<i class="fas fa-info"></i>Detail of book</a>
									</div>
								</div>	<!-- End of /.products -->
					        </li>
					        <li>
					            <div class="products">
									<a href="#">
										<img src="images/product-image-8.jpg" alt="">
									</a>
									<a href="#">
										<h4>Amazing Italian Sauces</h4>
									</a>
									<p class="price">From: £69.99</p>
									<div >
										<a class="view-link shutter" href="#">
										<i class="fas fa-info"></i>Detail of book</a>
									</div>
								</div>	<!-- End of /.products -->
					        </li>
					        <li>
					            <div class="products">
									<a href="#">
										<img src="images/product-image-8.jpg" alt="">
									</a>
									<a href="#">
										<h4>Amazing Italian Sauces</h4>
									</a>
									<p class="price">From: £69.99</p>
									<div >
										<a class="view-link shutter" href="#">
										<i class="fas fa-info"></i>Detail of book</a>
									</div>
								</div>	<!-- End of /.products -->
					        </li>
					        <li>
					           <div class="products">
									<a href="#">
										<img src="images/product-image-8.jpg" alt="">
									</a>
									<a href="#">
										<h4>Amazing Italian Sauces</h4>
									</a>
									<p class="price">From: £69.99</p>
									<div >
										<a class="view-link shutter" href="#">
										<i class="fas fa-info"></i>Detail of book</a>
									</div>
								</div>	<!-- End of /.products -->
					        </li>
					        <!--  ... -->
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
							<img src="images/food-ad.png" alt="">
						</div>
						<div class="block">
							<h4>Book Tag</h4>
							<div class="tag-link">
								<a href="">BALLET</a>
								<a href="">CHRISTMAS</a>
								<a href="">ELEGANCE</a>
								<a href="">ELEGANT</a>
								<a href="">SHOPPING</a>
								<a href="">SHOP</a>
							</div>	
						</div>
					</div>
				</div>	<!-- End of /.col-md-3 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section>	<!-- End of Section -->
@endsection
