@extends('backend.layouts.master')

@section('title', 'Create Category')

@section('content')
<section class="content-header">
	<h1>Create Category</h1>
	<ol class="breadcrumb">
		<li>
			<a href="{{ route('admin.dashboard') }}">
				<i class="fas fa-tachometer-alt"></i> Home
			</a>
		</li>
		<li>
			<a href="{{ route('admin.categories.index') }}">Categories</a>
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
				{!! Form::open(['route' => 'admin.categories.store', 'method' => 'post', 'class' => 'form-horizontal']) !!}
				<div class="box-body">
					<div class="form-group">
						{!! Form::label('name', 'Name', ['class' => 'col-sm-2 control-label']) !!}
						<div class="col-sm-10">
							{!! Form::text('category', '', ['class' => 'form-control', 'id' => 'name']) !!}
							@if ($errors->has('category'))
							<p class="text-red help is-danger">* {{ $errors->first('category') }}</p>
							@endif
							@if (Session::has('error'))
							<p class=" text-red help is-danger">* {{ Session::get('error') }}</p>
							@endif
						</div>
					</div>
				</div>
				<div class="box-footer">
					{!! Form::reset('Cancel', ['class' => 'btn btn-default']) !!}
					{!! Form::submit('Insert', ['class' => 'btn btn-info pull-right']) !!}
				</div>
				{!! Form::close() !!}	
			</div>
		</div>
	</div>
</section>
<!-- /.content -->
@endsection
