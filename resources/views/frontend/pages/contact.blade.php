@extends('frontend.master')
@section('title','CONTACT')
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
					  	<li class="active">Contact</li>
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
						<h2>CONTACT</h2>
					</div>	<!-- End of /.Products-heading -->
					<div class="leave-comment">
						<h5>LEAVE A COMMENT</h5>
						<form class="form-horizontal" role="form">
							<div class="form-group">
						    	<label for="inputname" class="col-sm-2 control-label">Name</label>
							    <div class="col-sm-10">
							      	<input type="text" class="form-control" id="inputname" placeholder="Name">
							    </div>
						  	</div>	<!-- End of /.form-group -->
						  	<div class="form-group">
						    	<label for="inputEmail" class="col-sm-2 control-label">Email</label>
							    <div class="col-sm-10">
							      	<input type="email" class="form-control" id="inputEmail" placeholder="Email">
							    </div>
						  	</div>	<!-- End of /.form-group -->
						  	<div class="form-group">
						    	<label for="inputwebsite" class="col-sm-2 control-label">Website</label>
							    <div class="col-sm-10">
							      	<input type="text" class="form-control" id="inputwebsite" placeholder="Website">
							    </div>
						  	</div>	<!-- End of /.form-group -->
						  	<div class="form-group">
						    	<label for="inputmessage" class="col-sm-2 control-label">Message</label>
							    <div class="col-sm-10">
							      	<textarea class="form-control" id="inputmessage"  rows="3"></textarea>
							    </div>
						  	</div>	<!-- End of /.form-group -->
						  		
							<div class="form-group">
						    	<div class="col-sm-offset-2 col-sm-10">
						      		<button type="submit" class="btn btn-primary">Send</button>
						    	</div>
						  	</div>	<!-- End of /.form-group -->
						</form>	<!-- End of /.form-horizontal -->
					</div>	<!-- End of /.leave comments -->
					<div class="products-heading">
					</div>
				</div>	<!-- End of /.col-md-9 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section>	<!-- End of Section -->
@endsection
