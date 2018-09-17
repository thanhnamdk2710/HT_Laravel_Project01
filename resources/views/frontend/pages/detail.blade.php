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
						<img src="images/{{ $book->image }}" alt="">
					</div>
				</div> <!-- End of /.col-md-5 -->
				<div class="col-md-4">
					<div class="block">
						<div class="product-des">
							<h4>{{ $book->name }}</h4>
							<h5 class="author">by {{ $book->author }}</h5>
							Rating: <div class="rateit" data-rateit-value="{{ $book->average }}" data-rateit-ispreset="true" data-rateit-readonly="true"></div>
							{{ $book->average }} / 5
							<br>
							Your rating: <div class="rateit"></div>
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
					{{-- <ul class="nav nav-tabs">
						<li class="active"><a href="#home" data-toggle="tab">More Info</a></li>
						<li><a href="#profile" data-toggle="tab">Comments</a></li>
					</ul> --}}

					<!-- Tab panes -->
					{{-- <div class="tab-content">
						<div class="tab-pane active" id="home">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus eligendi quidem vel sit expedita nam sint non explicabo magni totam?</p>
						</div> --}}
						{{-- @if(isset($user)) --}}
						{{-- <div class="tab-pane" id="profile">
							<h4>Write comment...<span class="glyphicon glyphicon-pencil"></span></h4>
							<form action="comment/{{ $book->id  }}" role="form">
								@csrf
								<div method="post" class="form-group">
									<textarea class="form-control" name="content" rows="3">
									</textarea>
								</div>
								<button type="button" class="btn btn-primary">Send</button>
							</form> --}}
						{{-- @endif --}}
								<br>
								@foreach($books1 as $book)
								<div class="panel panel-default">
									<div class="panel-body">
										<p style="font-size:16px;"><b>{{ $book->username }}</b> added a post.</p>
										<p style="font-size:11px; margin-top:-10px;">{{ date('M d, Y h:i A', strtotime($book->created_at)) }}</p>
										<h3 style="padding-top:30px; padding-bottom:30px;">{{ $book->name }}</h3>
									</div>
									<div class="panel-footer">
										<div class="row">
											<div class="col-md-2">
												<button class="btn btn-primary btn-sm"><i class="fa fa-thumbs-up"></i> <span>Like</span></button>
											</div>
											<div class="col-md-10" style="margin-left:-40px;">
												<button type="button" class="btn btn-primary btn-sm comment" value="{{ $book->bookid }}"><i class="fa fa-comments"></i>Comment</button>
											</div>
										</div>
									</div>
								</div>
								<div id="commentField_{{ $book->bookid }}" class="panel panel-default" style="padding:10px; margin-top:-20px; display:none;">
								<div id="comment_{{ $book->bookid }}">
								</div>
								<form id="commentForm_{{ $book->bookid }}">
									<input type="hidden" value="{{ $book->bookid }}" name="bookid">
									<div class="row"> 
										<div class="col-md-10">
											<input type="text" name="commenttext" id="commenttext" data-id="{{ $book->bookid }}" class="form-control commenttext" placeholder="Write a Comment...">
										</div>
										<div class="col-md-2" style="margin-left:-25px;">
											<button type="button" class="btn btn-primary submitComment" value="{{ $book->bookid }}"><i class="fa fa-comment"></i>Submit</button>
										</div>
									</div>
									
								</form>
							</div>
								@endforeach
														
							{{-- Comment book --}}
							@foreach($comments as $comment)
							<div class="media">
								<a class="pull-left" href="">
									<img class="media-object" src="images/icon/active.gif">
								</a>
								<div class="media-body">
									<p>{{ $comment->content }}</p>
								</div>
							</div>
							@endforeach
						{{-- </div> --}}
							

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

@section('script')
    <script type="text/javascript">
        $(document).ready(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(document).on('click', '.comment', function(){
                var id = $(this).val();
                if($('#commentField_'+id).is(':visible')){
                    $('#commentField_'+id).slideUp();
                }
                else{
                    $('#commentField_'+id).slideDown();
                    getComment(id);
                }
            });

            $(document).on('click', '.submitComment', function(){
                var id = $(this).val();
                if($('#commenttext').val()==''){
                    alert('Please write a Comment First!');
                }
                else{
                    var commentForm = $('#commentForm_'+id).serialize();
                    $.ajax({
                        type: 'POST',
                        url: 'writecomment',
                        data: commentForm,
                        success: function(){
                            getComment(id);
                            $('#commentForm_'+id)[0].reset();
                        },
                    });
                }
                    
            });
         
        });

        function showPost(){
            $.ajax({
                url: '/show',
                success: function(data){
                    $('#postList').html(data); 
                },
            });
        }

        function getComment(id){
            $.ajax({
                url: 'getcomment',
                data: {id:id},
                success: function(data){
                    $('#comment_'+id).html(data); 
                }
            });
        }
    </script>
@endsection