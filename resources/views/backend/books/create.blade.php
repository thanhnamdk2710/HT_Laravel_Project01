@extends('backend.layouts.master')

@section('title', 'Create Category')

@section('content')
<section class="content-header">
	<h1>Create Book</h1>
	<ol class="breadcrumb">
		<li>
			<a href="{{ route('admin.dashboard') }}">
				<i class="fas fa-tachometer-alt"></i> Home
			</a>
		</li>
		<li>
			<a href="{{ route('admin.books.index') }}">Books</a>
		</li>
		<li class="active">Create Book</li>
	</ol>
</section>
<!-- Main content -->
<section class="content">
	<!-- Small boxes (Stat box) -->
    @include('backend.blocks.error')

	<div class="row">
		<div class="col-md-6">
			<div class="box box-info">
				{!! Form::open(['route' => 'admin.books.store', 'method' => 'post', 'class' => 'form-horizontal' ,'enctype'=> "multipart/form-data"]) !!}
				<div class="box-body">
					<div class="form-group">
						{!! Form::label('isbn', 'ISBN', ['class' => 'col-sm-2 control-label']) !!}
						<div class="col-sm-10">
							{!! Form::text('isbn', old('isbn'), ['class' => 'form-control']) !!}
						</div>
					</div>
					<div class="form-group">
						{!! Form::label('name', 'Name', ['class' => 'col-sm-2 control-label']) !!}
						<div class="col-sm-10">
							{!! Form::text('name', old('name'), ['class' => 'form-control', 'id' => 'name']) !!}
						</div>
					</div>
					<div class="form-group">
						{!! Form::label('img', 'Image', ['class' => 'col-sm-2 control-label']) !!}
						<div class="col-sm-10">
            				<input type="file" name="fImages" value="{{ old('fImages')}}">
						</div>
					</div>
					<div class="form-group">
						{!! Form::label('author', 'Author', ['class' => 'col-sm-2 control-label']) !!}
						<div class="col-sm-10">
							{!! Form::text('author', old('author'), ['class' => 'form-control']) !!}
						</div>
					</div>
					<div class="form-group">
						{!! Form::label('editor', 'Editor', ['class' => 'col-sm-2 control-label']) !!}
						<div class="col-sm-10">
							{!! Form::text('editor', old('editor'), ['class' => 'form-control']) !!}
						</div>
					</div>
					<div class="form-group">
						{!! Form::label('publisher', 'Publisher', ['class' => 'col-sm-2 control-label']) !!}
						<div class="col-sm-10">
							{!! Form::text('publisher', old('publisher'), ['class' => 'form-control']) !!}
						</div>
					</div>
				</div>
				<div class="box-footer">
					<a href="{{ route('admin.books.index')}}" class="btn btn-info btn-default">Back</a>
					{!! Form::submit('Insert', ['class' => 'btn btn-info pull-right']) !!}
					{!! Form::reset('Cancel', ['class' => 'btn btn-default pull-right']) !!}
				</div>
				{!! Form::close() !!}	
			</div>
		</div>
	</div>
</section>
<!-- /.content -->
@endsection
