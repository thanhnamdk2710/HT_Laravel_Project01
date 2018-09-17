@extends('backend.layouts.master')

@section('title', 'List Books')

@push('css')
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endpush

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
			<!-- /.box-header -->
			<div class="box-body">
				@include('backend.layouts.partials.modal')
				
				<div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
					<div class="row">
						<div class="col-sm-12">
							<div class="box-header with-border">
								<a class="btn btn-flat margin btn-social btn-dropbox" href=" {{ route('admin.books.create') }}">
									<i class="fa fa-plus"></i> Insert Book
								</a>
							</div>
							<div class="col-lg-12">
					            @if(Session::has('flash_messages'))
					                <div class="alert alert-success">
					                    {{ Session::get('flash_messages') }}
					                </div>
					            @endif
					        </div>
							<div class="box-header with-border">
							</div>
							<table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
								<thead>
									<tr role="row">
										<th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 20px;">STT</th>
										<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 150px; text-align: center;">ISBN</th>
										<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 199px;text-align: center;">Name</th>
										<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 100px;text-align: center;">Image</th>
										<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 80px;text-align: center;">Author</th>
										<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 112px;text-align: center;">Category</th>
										<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 112px;text-align: center;">Publication Date</th>
										<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 80px;text-align: center;">Total rating</th>
										<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 80px;text-align: center;">Average</th>
										<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 200px;text-align: center;">Action</th>
									</tr>
									</thead>
									<tbody>
										@foreach($books as $key => $book)
										<tr role="row" class="odd">
											<td class="sorting_1" style="text-align: center;" >{{ $key + 1 }}</td>
											<td>{{ $book->ISBN }}</td>
											<td>{{ $book->name }}</td>
											<td><img src="images/books/{{  $book->image }}" height="90px"></td>
											<td>{{ $book->author }}</td>
											<td>{{ $book->name_category }}</td>
											<td>{{ $book->publication_date }}</td>
											<td>{{ $book->total_rating }}</td>
											<td>{{ $book->average }}</td>
											<td>
												<a href="{{ url("admin/books/{$book->id}/edit") }}" class="btn btn-warning">Edit</a>
												<form method="POST" action="{{ route('admin.books.destroy', $book->id) }}" class="inline">
													@csrf
		                                            @method('DELETE')
													<button type="button" class="btn btn-danger form-delete btn-delete-item"
														data-title="Delete Books"
														data-confirm="Are you sure you want to delete <strong>{{ $book->name }}</strong>">Delete
													</button>
												</form>
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<!-- /.box-body -->
			</div>
		</div>
</section>
<!-- /.content -->
@endsection

@push('js')
	<script src="{{ asset('js/main.js') }}"></script>
@endpush