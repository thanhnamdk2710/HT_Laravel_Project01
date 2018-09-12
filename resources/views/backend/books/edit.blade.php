@extends('backend.layouts.master')
 @section('title', 'Edit Categories')
 @push('css')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endpush
 @section('content')
<section class="content-header">
	<h1>Book table</h1>
	<ol class="breadcrumb">
		<li>
			<a href="{{ route('admin.books.index') }}">
				<i class="fas fa-tachometer-alt"></i> Home
			</a>
		</li>
		<li class="">
			<a href="{{ route('admin.books.index')}}">Books</a>
		</li>
		<li class="active">Edit</li>
	</ol>
</section>
<!-- Main content -->
<section class="content">
	<!-- Small boxes (Stat box) -->
	@include('backend.blocks.error')
	<div class="row">
		<div class="col-md-6">
			<div class="box box-info">
				@foreach($book as $value)
				{!! Form::open(['url' => "admin/books/update/$value->id", 'method' => 'put', 'class' => 'form-horizontal']) !!}
				<div class="box-body">
					<div class="form-group">
						{!! Form::label('isbn', 'ISBN', ['class' => 'col-sm-2 control-label']) !!}
						<div class="col-sm-10">
							{!! Form::text('isbn', "$value->ISBN", ['class' => 'form-control']) !!}
						</div>
					</div>
					<div class="form-group">
						{!! Form::label('name', 'Name', ['class' => 'col-sm-2 control-label']) !!}
						<div class="col-sm-10">
							{!! Form::text('name', "$value->name", ['class' => 'form-control']) !!}
						</div>
					</div>
					<div class="form-group">
						<img class="col-sm-8 control-label" width="200px" src="{{ 'images/books/'.$value->image }}">
					</div>
					<div class="form-group">
						{!! Form::label('img', 'Image', ['class' => 'col-sm-2 control-label']) !!}
						<div class="col-sm-10">
            				<input type="file" value="{{ old('img')}}">
						</div>
					</div>
					<div class="form-group">
						{!! Form::label('author', 'Author', ['class' => 'col-sm-2 control-label']) !!}
						<div class="col-sm-10">
							{!! Form::text('author', "$value->author", ['class' => 'form-control']) !!}
						</div>
					</div>
					<div class="form-group">
		            <label class="col-sm-2 control-label">Category</label>
						<div class="col-sm-10 control-label">
		                    <select class="col-sm-12 control-label" name="category" id="category">
								@foreach($cate as $value)
		                            <option value="{{ $value->category_id }}">
		                            	{{ $value->name_category}}
		                            </option>
		                        @endforeach
		                    </select>
						</div>
		                <br>
		            </div>
					<div class="form-group">
						{!! Form::label('total_rating', 'Total rating', ['class' => 'col-sm-2 control-label']) !!}
						<div class="col-sm-10">
							{!! Form::text('total_rating', "$value->total_rating", ['class' => 'form-control']) !!}
						</div>
					</div>
					<div class="form-group">
						{!! Form::label('average', 'Average', ['class' => 'col-sm-2 control-label']) !!}
						<div class="col-sm-10">
							{!! Form::text('average', "$value->average", ['class' => 'form-control', 'id' => 'name']) !!}
						</div>
					</div>
					@endforeach
				</div>
				<div class="box-footer">
					<a href="{{ route('admin.books.index')}}" class="btn btn-info btn-default">Back</a>
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