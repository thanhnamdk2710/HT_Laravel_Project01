<section id="top">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<p class="contact-action"><i class="fas fa-phone-volume"></i>IN CASE OF ANY QUESTIONS, CALL THIS NUMBER: <strong>+565 975 658</strong></p>
			</div>
			<div class="col-md-3 clearfix">
				<ul class="login-cart">
					<li>
						<a data-toggle="modal" href="">
							<i class="fas fa-sign-in-alt"></i>
							Login
						</a>
					</li>
					<li>
						<div class="cart dropdown">
							<a href=""><i class="far fa-user "></i>Registered</a>
						</div>
					</li>
				</ul>
			</div>
			<div class="col-md-2">
				<form action="{{ route('user.search') }}" method="get">
					<div class="search-box">
						<div class="input-group">
							<input value="{{ old('keyword') }}" placeholder="Search Here" type="text" class="form-control" name="keyword" pattern="[^'\x22]+" required>
							<span class="input-group-btn">
								<button type="submit" class="btn btn-default" type="button"></button>
							</span>
						</div><!-- /.input-group -->
						@if ($errors->has('book'))
						<p class="text-danger help is-danger">* {{ $errors->first('book') }}</p>
						@endif
					</div><!-- /.search-box -->
				</form>
			</div>
		</div> <!-- End Of /.row -->
	</div>	<!-- End Of /.Container -->
</section>  <!-- End of /Section -->
<!-- LOGO Start -->
<header>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<a href="#">
					<img src="frontend/images/logo.png" alt="logo">
				</a>
			</div>	<!-- End of /.col-md-12 -->
		</div>	<!-- End of /.row -->
	</div>	<!-- End of /.container -->
</header> <!-- End of /Header -->
<!-- MENU Start -->
<nav class="navbar navbar-default">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div> <!-- End of /.navbar-header -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav nav-main">
				<li>
					<a href="">HOME</a>
				</li>
				<li>
					<a href="">BOOK</a>
				</li>
				<li>
					<a href="">AUTHOR</a>
				</li>
				<li>
					<a href="">CONTACT</a>
				</li>
			</ul> <!-- End of /.nav-main -->
		</div>	<!-- /.navbar-collapse -->
	</div>	<!-- /.container-fluid -->
</nav>	<!-- End of /.nav -->
