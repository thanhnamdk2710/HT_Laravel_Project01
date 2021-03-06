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
			@if (Session::has('error'))
			<div class="box-header with-border">
				<div class="col-md-6">
					<div class="alert alert-danger alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<h4><i class="icon fa fa-check"></i> Error!</h4>
						<p>* {{ Session::get('error') }}</p>
					</div>
				</div>
			</div>
			@endif
			<!-- /.box-header -->
			<div class="box-body">
				@include('backend.layouts.partials.modal')
				
				<table class="table table-bordered">
					<tbody>
						<tr>
							<th style="width: 100px; text-align: center;">STT</th>
							<th style="text-align: center;">Name</th>
							<th style="width: 350px;text-align: center;">Action</th>
						</tr>
						@foreach($categories as $key => $category)
						<tr>
							<td style="text-align: center;">{{ $key + 1 }}</td>
							<td>{{ $category->name }}</td>
							<td style="text-align: center;">
								<a href="{{url("admin/categories/{$category->id}/edit")}}" class="btn btn-warning">Edit</a>
								<!-- Modal -->
								<form method="POST" action="{{ route('admin.categories.destroy', $category->id) }}" class="inline">
									{{ csrf_field() }}
									{{ method_field('DELETE') }}
									<button type="button" class="btn btn-danger form-delete btn-delete-item"
										data-title="Delete Category"
										data-confirm="Are you sure you want to delete <strong>{{ $category->name }}</strong>">Delete
									</button>
								</form> 
							</td>
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

@push('js')
<script src="{{ asset('js/main.js') }}"></script>
@endpush
