@extends('backend.layouts.master')

@section('title', 'Edit Categories')

@push('css')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endpush

@section('content')
<section class="content-header">
	<h1>Category table</h1>
	<ol class="breadcrumb">
		<li>
			<a href="{{ route('admin.categories.index') }}">
				<i class="fas fa-tachometer-alt"></i> Home
			</a>
		</li>
		<li class="">
			<a href="{{ route('admin.categories.index')}}">Categories</a>
		</li>
		<li class="active">Edit</li>
	</ol>
</section>
<!-- Main content -->
<section class="content">
	<!-- Small boxes (Stat box) -->
	<div class="row">
		<div class="col-md-6">
			<div class="box box-info">
				{!! Form::open(['url' => "admin/categories/update/$category->id", 'method' => 'put', 'class' => 'form-horizontal']) !!}
				<div class="box-body">
					<div class="form-group">
						{!! Form::label('name', 'Name', ['class' => 'col-sm-2 control-label']) !!}
						<div class="col-sm-10">
							{!! Form::text('category', "$category->name", ['class' => 'form-control', 'id' => 'name']) !!}
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
					<a href="{{ route('admin.categories.index')}}" class="btn btn-info btn-default">Back</a>
					{!! Form::submit('Update', ['class' => 'btn btn-info pull-right']) !!}
					{!! Form::reset('Cancel', ['class' => 'btn btn-default pull-right cancel']) !!}
				</div>
				{!! Form::close() !!}	
			</div>
		</div>
	</div>
</section>
<!-- /.content -->
@endsection
