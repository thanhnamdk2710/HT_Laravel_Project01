@extends('backend.layouts.master')

@section('title', 'Create Category')

@section('content')
<section class="content-header">
	<h1>Create Category</h1>
	<ol class="breadcrumb">
		<li>
			<a href="#">
				<i class="fas fa-tachometer-alt"></i> Home
			</a>
		</li>
		<li class="active">Create Category</li>
	</ol>
</section>
<!-- Main content -->
<section class="content">
	<!-- Small boxes (Stat box) -->
	<div class="row">
		<div class="col-md-6">
			<div class="box box-info">
				<form class="form-horizontal" action="{{ URL('admin/categories/create') }}" method="post">
					{{ csrf_field() }}
					<div class="box-body">
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Name</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="inputEmail3" name="category">
								@if ($errors->has('category'))
									<p class="text-red help is-danger">* {{ $errors->first('category') }}</p>
								@endif
								@if (Session::has('error'))
									<p class=" text-red help is-danger">* {{ Session::get('error') }}</p>
								@endif
							</div>
						</div>
					</div>
					<!-- /.box-body -->
					<div class="box-footer">
						<button type="reset" class="btn btn-default">Cancel</button>
						<button type="submit" class="btn btn-info pull-right">Insert</button>
					</div>
					<!-- /.box-footer -->
				</form>
			</div>
		</div>
	</div>
</section>
<!-- /.content -->
@endsection
