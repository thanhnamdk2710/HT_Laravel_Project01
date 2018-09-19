@extends('backend.layouts.master')

@section('title', 'List Users')

@push('css')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.css') }}">
@endpush

@section('content')
<section class="content-header">
	<h1>User table</h1>
	<ol class="breadcrumb">
		<li>
			<a href="{{ route('admin.dashboard') }}">
				<i class="fas fa-tachometer-alt"></i> Home
			</a>
		</li>
		<li class="active">User</li>
	</ol>
</section>
<!-- Main content -->
<section class="content">
	<div class="box">
		<div class="box-header">
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
		</div>
		<!-- /.box-header -->
		<div class="box-body">
			<div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
				<div class="row">
					<div class="col-sm-12">
						<table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
							<thead>
								<tr role="row">
									<th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 80px; text-align: center;">STT</th>
									<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 100px;text-align: center;">Username</th>
									<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 100px;text-align: center;">Avatar</th>
									<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 100px;text-align: center;">Email</th>
									<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 100px;text-align: center;">Gender</th>
									<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 100px;text-align: center;">Status</th>
									<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 100px;text-align: center;">Count(review)</th>
									<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 199px;text-align: center;">Action</th>
								</tr>
							</thead>
							<tbody>
								@include('backend.layouts.partials.modal')
								{!! csrf_field() !!}
								@foreach ($users as $key => $user)
								<tr role="row" class="odd">
									<td class="sorting_1" style="text-align: center;">{{ $key + 1 }}</td>
									<td style="text-align: center;">{{ $user->username }}</td>
									<td style="text-align: center;"><img src="images/users/{{ $user->avatar }}" class="attachment-img" alt="User Image"></td>
									<td style="text-align: center;">{{ $user->email }}</td>
									<td style="text-align: center;">
										{{ $user->gender == 0 ? 'Nam' : 'Nữ' }}
									</td>
									<td style="text-align: center;">
										<a  href="javascript:void(0) " type="button" class="btn active1" status= "{{$user->status}}" id_users="{{ $user->id }}">
											@if( $user->status ==1 )
											<img src="images/icon/deactive.gif"/>
											@else
											<img src="images/icon/active.gif"/>
											@endif
										</a>
									</td>
									<td style="text-align: center;">
										@if( $user->count == 0 )
										<strong>{{ $user->count}}</strong>
										@else
										<a href="{{ route('admin.users.show', ['id'=>$user->id]) }}" class="text-yellow"><strong>{{ $user->count}}</strong></a>
										@endif
									</td>
									<td style="text-align: center;">
										<form method="POST" action="{{ route('admin.users.destroy', $user->id) }}" class="inline">
											{{ csrf_field() }}
											{{ method_field('DELETE') }}
											<button type="button" class="btn btn-danger form-delete btn-delete-item"
											data-title="Delete User"
											data-confirm="Are you sure you want to delete user  <strong>{{ $user->username }}</strong>">Delete</button>
										</form> 
									</td>
								</tr>
								@endforeach
							</tbody>
							<tfoot>
								<tr>
									<th rowspan="1" colspan="1" style="text-align: center;">STT</th>
									<th rowspan="1" colspan="1" style="text-align: center;">Username</th>
									<th rowspan="1" colspan="1" style="text-align: center;">Avatar</th>
									<th rowspan="1" colspan="1" style="text-align: center;">Email</th>
									<th rowspan="1" colspan="1" style="text-align: center;">Gender</th>
									<th rowspan="1" colspan="1" style="text-align: center;">Status</th>
									<th rowspan="1" colspan="1" style="text-align: center;">Count(review)</th>
									<th rowspan="1" colspan="1" style="text-align: center;">Action</th>
								</tr>
							</tfoot>
						</table>
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
<!-- jQuery 3 -->
<script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- DataTables -->
<script src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<!-- SlimScroll -->
<script src="{{ asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('bower_components/admin-lte/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('bower_components/admin-lte/dist/js/demo.js') }}"></script>
<!-- page script -->
<script>
	$(function () {
		$('#example1').DataTable()
		$('#example2').DataTable({
			'paging'      : true,
			'lengthChange': false,
			'searching'   : false,
			'ordering'    : true,
			'info'        : true,
			'autoWidth'   : false
		})
	})
</script>
<script src="{{ asset('js/main.js') }}"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$(".active1").click(function() {
			var position = $(this);
			var status = $(this).attr('status');
			var id = $(this).attr('id_users');
			$token     = $('meta[name=csrf-token]').attr("content");
			if(status == 0){
				$(this).attr("status", 1);
			}else{
				$(this).attr("status", 0);
			}
			console.log(id);
			$.ajax({
				url: '/admin/users/update/'+id,
				type : 'POST',
				data: {
					aid: id,
					astatus: status,
					_token: '{{csrf_token()}}',
				},
				success: function(data){
					$(position).children("img").attr("src", data);
				},
				error: function(){
					alert("Erros!");
				}
			});
		});
	});
</script>
@endpush
