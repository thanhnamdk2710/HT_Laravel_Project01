@extends('backend.layouts.master')

@section('title', 'List Categories')

@push('css')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endpush

@section('content')
<section class="content-header">
	<h1>Category table</h1>
	<ol class="breadcrumb">
		<li>
			<a href="{{ route('admin.dashboard') }}">
				<i class="fas fa-tachometer-alt"></i> Home
			</a>
		</li>
		<li class="active">Categories</li>
	</ol>
</section>
<!-- Main content -->
<section class="content">
	<!-- Small boxes (Stat box) -->
	<div class="row">
		<div class="box">
			<div class="box-header with-border">
				<a class="btn btn-flat margin btn-social btn-dropbox" href=" {{ route('admin.categories.create') }} ">
					<i class="fa fa-plus"></i> Insert category
				</a>
			</div>
			@if (Session::has('success'))
			<div class="box-header with-border">
				<div class="col-md-6">
					<div class="alert alert-success alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<h4><i class="icon fa fa-check"></i> Success!</h4>
						<p>* {{ Session::get('success') }}</p>
					</div>
				</div>
			</div>
			@endif
			<!-- /.box-header -->
			<div class="box-body">
				<table class="table table-bordered">
					<tbody>
						<tr>
							<th style="width: 100px">STT</th>
							<th>Name</th>
							<th style="width: 250px">Action</th>
						</tr>
						@foreach($categories as $key => $category)
						<tr>
							<td>{{ $key + 1 }}</td>
							<td>{{ $category->name }}</td>
							<td>
								<a href="#" class="btn btn-warning">Edit</a>
								<button type='submit'class="btn btn-danger form-delete" data-toggle="modal" data-target="#myModal{{$category->id}}">Delete</button>
								<!-- Modal -->
								<div class="modal fade" id="myModal{{$category->id}}" role="dialog">
									<div class="modal-dialog modal-sm">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4 class="modal-title">Delete category?</h4>
											</div>
											<div class="modal-body">
												<p>Are you sure you want to delete <strong>"{{ $category->name }}"</strong></p>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
												<form method="POST" action="{{ route('admin.categories.destroy', $category->id) }}" class="inline">
													{{ csrf_field() }}
													{{ method_field('PUT') }}
													<button type="submit" class="btn btn-default">Delete</button>
												</form>
											</div>
										</div>
									</div>
								</div>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				<div class="box-footer clearfix">
					<ul class="pagination pagination-sm no-margin pull-right">
						{{ $categories->links() }}
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /.content -->
@endsection
