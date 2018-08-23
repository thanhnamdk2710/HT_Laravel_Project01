@extends('backend.layouts.master')

@section('title', 'List Categories')

@section('content')
<section class="content-header">
	<h1>Category table</h1>
	<ol class="breadcrumb">
		<li>
			<a href="#">
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
				<a class="btn btn-flat margin btn-social btn-dropbox" href="#">
					<i class="fa fa-plus"></i> Insert category
				</a>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<table class="table table-bordered">
					<tbody>
						<tr>
							<th style="width: 40px">#</th>
							<th>Name</th>
							<th style="width: 150px">Action</th>
						</tr>
						@foreach($categories as $key => $category)
						<tr>
							<td>{{ $key + 1 }}</td>
							<td>{{ $category->name }}</td>
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
						{{ $categories->links() }}
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /.content -->
@endsection
