@extends('frontend.master')
@section('title','Regristered')
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
					<li><a href="{{ route('user.index')}}">Home</a></li>
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
					<h2>Registered</h2>
				</div>	<!-- End of /.Products-heading -->
				<div class="login">
					<div class="login-header">
						<h1></h1>
					</div>
					@if ( !empty($error) )
					<div class="alert alert-danger alert-dismissible" role="alert">
						<strong>{{ $error }}</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							<span class="sr-only">Close</span>
						</button>
					</div>
					@endif
					@if ( !empty($success) )
					<div class="alert alert-success alert-dismissible" role="alert">
						<strong>{{ $success }}</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							<span class="sr-only">Close</span>
						</button>
					</div>
					@endif
					<form class="login-form" action="{{ route('user.registered.store') }}" enctype="multipart/form-data" method="POST">
						{{ csrf_field() }}
						<h3>Name:</h3>
						<input type="text" placeholder="Name" name="username"/>
						@if ($errors->has('username'))
						<p class="text-red help is-danger">* {{ $errors->first('username') }}</p>
						@endif
						<h3>Avatar:</h3>
						<input type="file" name="avatar"/>
						<h3>Gender:</h3>
						<input type="radio" name="gender" value="0"/>Nam
						<input type="radio" name="gender" value="1"/>Nữ
						@if ($errors->has('gender'))
						<p class="text-red help is-danger">* {{ $errors->first('gender') }}</p>
						@endif
						<h3>Email:</h3>
						<input type="text" placeholder="Email" name="email"/><br>
						@if ($errors->has('email'))
						<p class="text-red help is-danger">* {{ $errors->first('email') }}</p>
						@endif
						<h3>Password:</h3>
						<input type="password" placeholder="Password" name="password"/>
						@if ($errors->has('password'))
						<p class="text-red help is-danger">* {{ $errors->first('password') }}</p>
						@endif
						<br>
						<button type="submit" class="login-button btn-primary">Sign Up</button>
						<br>
						<a href="" class="sign-up">Sign in!</a>
						<br>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
