@extends('backend.layouts.master')

@section('title', 'BOOK')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		BOOK
	</h1>
	<ol class="breadcrumb">
		<li>
			<a href="#"><i class="fas fa-tachometer-alt"></i> Home</a>
		</li>
		<li class="{{Request::is('admin/books') ? 'active' : ''}}">Books</li>
	</ol>
</section>
<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box">
				<div class="box-header">
					<a class="btn btn-primary" href="{{ route('books.insert')}}">
						<h3 class="box-title">Insert Book</h3>
					</a>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
						<div class="row">
							<div class="col-sm-6">
								<div class="dataTables_length" id="example1_length">
									<label>Show 
										<select name="example1_length" aria-controls="example1" class="form-control input-sm">
											<option value="10">10</option>
											<option value="25">25</option>
											<option value="50">50</option>
											<option value="100">100</option>
										</select> entries
									</label>
								</div>
							</div>
							<div class="col-sm-6">
								<div id="example1_filter" class="dataTables_filter">
									<label>Search:
										<input type="search" class="form-control input-sm" placeholder="" aria-controls="example1">
									</label>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
									<thead>
										<tr role="row">
											<th style="width: 30px">STT</th>
											<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 112px;">
												Name
											</th>
											<th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 182px;">
												Editor
											</th>
											<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 224px;">Publisher</th>
											<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 199px;">Average</th>
											<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 156px;">Author</th>
											<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 112px;">Category</th>
										</tr>
									</thead>
									<tbody>
										<tr role="row" class="odd">
											<td>1</td>
											<td class="sorting_1">Gecko</td>
											<td>Firefox 1.0</td>
											<td>Win 98+ / OSX.2+</td>
											<td>1.7</td>
											<td>A</td>
											<td>Firefox 1.0</td>
										</tr>
									</tbody>
									<tfoot>
										<tr>
											<th rowspan="1" colspan="1">STT</th>
											<th rowspan="1" colspan="1">Name</th>
											<th rowspan="1" colspan="1">Editor</th>
											<th rowspan="1" colspan="1">Publisher</th>
											<th rowspan="1" colspan="1">Average</th>
											<th rowspan="1" colspan="1">Author</th>
											<th rowspan="1" colspan="1">Category</th>
										</tr>
									</tfoot>
								</table>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-5">
								<div class="dataTables_info" id="example1_info" role="status" aria-live="polite">
								</div>
							</div>
							<div class="col-sm-7">
								<div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
									<ul class="pagination">
										<li class="paginate_button previous disabled" id="example1_previous">
											<a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">Previous</a>
										</li>
										<li class="paginate_button active">
											<a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1</a>
										</li>
										<li class="paginate_button ">
											<a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">2</a>
										</li>
										<li class="paginate_button ">
											<a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0">3</a>
										</li>
										<li class="paginate_button ">
											<a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0">4</a>
										</li>
										<li class="paginate_button ">
											<a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0">5</a>
										</li>
										<li class="paginate_button ">
											<a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0">6</a>
										</li>
										<li class="paginate_button next" id="example1_next">
											<a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0">Next</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /.box-body -->
			</div>
		</div>
	</div>
</section>
@endsection
@include('backend.layouts.partials.js')
