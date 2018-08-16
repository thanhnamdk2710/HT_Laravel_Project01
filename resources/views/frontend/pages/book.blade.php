@extends('frontend.master')
@section('title','PRODUCT')
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
					  	<li><a href="{{ route('/index')}}">Home</a></li>
					  	<li class="active">Shop</li>
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
						<h2>NEW PRODUCTS</h2>
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
							<h4>Catagories</h4>
							<div class="list-group">
								<a href="#" class="list-group-item">
									<i class="fas fa-dot-circle"></i>
									Italian Foods
								</a>
								<a href="#" class="list-group-item">
									<i class="fas fa-dot-circle"></i>
									Traditional Food
								</a>
								<a href="#" class="list-group-item">
									<i class="fas fa-dot-circle"></i>
									Indian Food
								</a>
								<a href="#" class="list-group-item">
									<i class="fas fa-dot-circle"></i>
									Spanish Food
								</a>
								<a href="#" class="list-group-item">
									<i class="fas fa-dot-circle"></i>
									Thai FoodN
								</a>
							</div>
						</div>
						<div class="block">
							<img src="images/food-ad.png" alt="">
						</div>
						<div class="block">
							<h4>Book Items</h4>
							<ul class="media-list">
							 	<li class="media">
							    	<a class="pull-left" href="#">
							      		<img class="media-object" src="images/post-img.png" alt="...">
							    	</a>
							    	<div class="media-body">
							      		<a href="" class="media-heading">Lamb leg roast
							      		<p>Lorem ipsum dolor sit amet.</p></a>
							    	</div>
							  	</li>
							  	<li class="media">
							    	<a class="pull-left" href="#">
							      		<img class="media-object" src="images/post-img-2.png" alt="...">
							    	</a>
							    	<div class="media-body">
							      		<a href="" class="media-heading"> Lamingtons
							      		<p>Lorem ipsum dolor.</p></a>
							    	</div>
							  	</li>
							  	<li class="media">
							    	<a class="pull-left" href="#">
							      		<img class="media-object" src="images/post-img-3.png" alt="...">
							    	</a>
							    	<div class="media-body">
							      		<a href="" class="media-heading">
							      		Anzac Salad
							      		<p>Lorem ipsum dolor sit.</p>

							      		</a>
							    	</div>
							  	</li>
							  </ul>
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
				</div>	<!-- End of /.col-md-3 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section>	<!-- End of Section -->
@endsection
