@extends('layouts.admin-horizontal')
@section('css')

@endsection
@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<button type="button" class="btn btn-primary">Tambah Gaji</button><hr>		
			<div class="panel panel-default">
				<div class="panel-heading">
					Sallary
				</div>
				<div class="panel-bodyl">
					<div class="table-responsive">
						<table class="table table-bordered" id="table">
							<caption>Sallary Management</caption>
							<thead>
								<tr>
									<th>No</th>
									<th>Nama</th>
									<th>Bulan Gajian</th>
									<th>Gaji</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								@foreach($sallary as $index => $ini)
								<tr>
									<td>{{ $index+1 }}</td>
									<td>{{ $ini->name }}</td>
									<td>{{ date('F Y',strtotime($ini->date_salary)) }}</td>
									<td>Rp. {{ $ini->salary }} ,-</td>
									<td>
										<button type="button" class="btn btn-danger" onclick="event.preventDefault();document.getElementById('delete{{ $ini->id }}').submit()">Delete</button>
										<form id="delete{{ $ini->id }}" method="post" action="{{ url('cpanel/sallary/delete') }}">
											<input type="hidden" name="id" value="{{ $ini->id }}">
											{{ csrf_field() }}
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
	</div>
</div>
@endsection
@section('script')

@endsection