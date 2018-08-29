@extends('backend.layouts.master')

@section('title', 'List Categories')

@section('content')
<section class="content-header">
	<h1>Book table</h1>
	<ol class="breadcrumb">
		<li>
			<a href="{{ route('admin.dashboard') }}">
				<i class="fas fa-tachometer-alt"></i> Home
			</a>
		</li>
		<li class="active">Book</li>
	</ol>
</section>
<!-- Main content -->
<section class="content">
	<!-- Small boxes (Stat box) -->
	<div class="row">
		<div class="box">
			<div class="box-header with-border">
				<a class="btn btn-flat margin btn-social btn-dropbox" href="#">
					<i class="fa fa-plus"></i> Insert book
				</a>
			</div>
			<div class="box-header with-border">
				<div class="col-md-6">
					@if (Session::has('success'))
					<div class="alert alert-success alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<h4><i class="icon fa fa-check"></i> Success!</h4>
						{{ Session::get('success') }}
					</div>
					@endif
				</div>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<table class="table table-bordered">
					<tbody>
						<tr>
							<th style="width: 30px">STT</th>
							<th>ISBN</th>
							<th>Name</th>
							<th>image</th>
							<th>editor</th>
							<th>publisher</th>
							<th>count</th>
							<th>category_id</th>
							<th>average</th>
							<th style="width: 150px">Action</th>
						</tr>
						@foreach($books as $key => $book)
						<tr>
							<td>{{ $key + 1 }}</td>
							<td>{{ $book->ISBN }}</td>
							<td>{{ $book->name }}</td>
							<td><img src="images/book/{{  $book->image }}" height="50px"></td>
							<td>{{ $book->editor }}</td>
							<td>{{ $book->publisher }}</td>
							<td>{{ $book->count }}</td>
							<td>{{ $book->category_id }}</td>
							<td>{{ $book->average }}</td>
							<td>
								<a href="#" class="btn btn-warning">Edit</a>
								<a href="#" class="btn btn-danger">Delete</i></a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				<div class="box-footer clearfix">
					<ul class="pagination pagination-sm no-margin pull-right">
						{{ $books->links() }}
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /.content -->
@endsection
