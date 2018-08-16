@extends('user.master')
@section('title','LOGIN')
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
					  	<li><a href="{{ route('/index')}}">Home</a></li>
					  	<li class="active">Login</li>
					</ol>
				</div>	<!-- End of /.col-md-8 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section>	<!-- End of /#Topic-header -->

	<section id="shop">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<div class="products-heading">
						<h2>Login</h2>
					</div>	<!-- End of /.Products-heading -->
					<div class="login">
						<div class="login-header">
							<h1></h1>
						</div>
						<ul>
							<li class="text-danger"></li>
						</ul>

						<div class="alert alert-danger alert-dismissible" role="alert">
							<strong>{{ Session::get('error') }}</strong>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								<span class="sr-only">Close</span>
							</button>
						</div>
						<form class="login-form" action="#" method="">
							<h3>Username:</h3>
							<input type="text" placeholder="Username" name="username"/><br>
							<h3>Password:</h3>
							<input type="password" placeholder="Password" name="password"/>
							<br>
							<button type="submit" class="login-button btn-primary">Login</button>
							<br>
							<a href="" class="sign-up">Sign Up!</a>
							<br>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection