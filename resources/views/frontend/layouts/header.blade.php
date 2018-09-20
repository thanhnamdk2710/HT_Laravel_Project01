<section id="top">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<p class="contact-action"><i class="fas fa-phone-volume"></i>IN CASE OF ANY QUESTIONS, CALL THIS NUMBER: <strong>+565 975 658</strong></p>
			</div>
			<div class="col-md-3 clearfix">
				<ul class="login-cart">
					@if ((Auth::check()) && (Auth::user()->role == config('define.admin.role_user')))
					<li>
						<div class="cart dropdown">
							<a data-toggle="dropdown" href="#">
								<img class="pull-left avatar" src="images/users/{{ Auth::user()->avatar }}" alt="">
								<span style="font-size: 18px">{{ Auth::user()->username }}</span>
							</a>
							<div class="dropdown-menu dropup">
								<span class="caret"></span>
								<ul class="media-list">
									<li class="media">
										<img class="pull-left" src="images/users/{{ Auth::user()->avatar }}" alt="">
										<div class="media-body">
											<h6>
												<span>{{ Auth::user()->username }}</span>
											</h6>
										</div>
									</li>
								</ul>
								<a href="{{ route('logout') }}" class="btn btn-primary btn-sm logout">Logout</a>
							</div>
						</div>
					</li>
					@else
					<li>
						<a href=" {{ route('login.index') }}">
							<i class="fas fa-sign-in-alt"></i>
							Login
						</a>
					</li>
					<li>
						<div class="cart dropdown">
							<a href="#"><i class="far fa-user "></i>Registered</a>
						</div>
					</li>
					@endif
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
<!-- MENU Start-->
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
				<li class="{{Request::is('/') ? 'active' : ''}}">
					<a href="{{ route('user.index')}}">HOME</a>
				</li>
				<li class="{{Request::is('/book') ? 'active' : ''}}">
					<a href="{{ route('user.show')}}">BOOK</a>
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
