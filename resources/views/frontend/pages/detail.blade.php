@extends('frontend.master')

@section('title','DETAIL')

@push('css')
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endpush

@section('content')
<section id="topic-header">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h1>Products Details</h1>
					<p></p>
				</div>	<!-- /.col-md-4 -->
				<div class="col-md-8 hidden-xs">
					<ol class="breadcrumb pull-right">
					  	<li><a href="{{ route('index') }}">Home</a></li>
					  	<li><a href="{{ route('all_book') }}">Book</a></li>
					  	<li class="active">Single Book</li>
					</ol>
				</div> <!-- /.col-md-8 -->
			</div>	<!-- /.row -->
		</div>	<!-- /.container-->
	</section><!-- /Section -->
	<section id="single-product">
		<div class="container">
			<div class="row">
				@foreach($books as $key => $book)
				<div class="col-md-5">
					<div class="single-product-img">
						<img src="images/books/{{ $book->image }}" alt="">
					</div>
				</div> <!-- End of /.col-md-5 -->
				<div class="col-md-4">
					<div class="block">
						<div class="product-des">
							<h4>{{ $book->name }}</h4>
							<h5 class="author">by {{ $book->author }}</h5>
                            <div class="rating">
                            	<span>Rating: 
                            	<input id="input-1" name="rate" class="rating rating-loading" data-min="0" data-max="5" data-step="1" value="{{ $book->average }}" data-size="xs"></span>

                                <input type="hidden" name="id" required="" value="{{ $book->id }}">

                            	<input id="input-1" class="rating rating-loading" data-min="0" data-max="5" data-step="1" data-size="xs"></span>
								
                            </div>
                            {{-- <div class="rateit bigstars" data-rateit-starwidth="32" data-rateit-starheight="32"></div> --}}
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, culpa, esse, magni omnis blanditiis unde vitae in nobis fuga optio numquam at ipsum impedit perspiciatis quia rem consequatur recusandae repudiandae provident nemo voluptatibus corporis ab id iste pariatur ipsam vero porro eos eaque rerum nam dolorum mollitia adipisci. Quaerat, ullam!</p>	
							@endforeach
						</div>	<!-- End of /.product-des -->
					</div> <!-- End of /.block -->
				</div>	<!-- End of /.col-md-4 -->
				<div class="col-md-3">
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
			<div class="row">
				<div class="col-md-9">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs">
						<li class="active"><a href="#home" data-toggle="tab">More Info</a></li>
						<li><a href="#profile" data-toggle="tab">Comments</a></li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
						<div class="tab-pane active" id="home">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus eligendi quidem vel sit expedita nam sint non explicabo magni totam?</p>
						</div>
						<div class="tab-pane" id="profile">
							<p>No customer comments for the moment.</p>
						</div>
					</div>
				</div>	<!-- End of /.col-md-9 -->
				<div class="col-md-3">
					<div class="blog-sidebar">
						<div class="block">
							<img src="images/food-ad.png" alt="">
						</div> <!-- End of /.block -->
					</div>	<!-- End of /.blog-sidebar -->
				</div>	<!-- End of /.col-md-3 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.Container -->
	</section> <!-- End of /.Single-product -->
	<section id="single-product">
		<div class="container">
			<div class="row">
			</div>
		</div>
	</section>
@endsection
