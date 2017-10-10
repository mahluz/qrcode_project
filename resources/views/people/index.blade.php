@extends('layouts.admin-horizontal')
@section('css')

@endsection
@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<button type="button" class="btn btn-primary">Add new People</button><hr>

			<div class="panel panel-default">
				<div class="panel-heading">
					People Management
				</div>
				<div class="panel-body">
					<div class="table-responsive">
						<table id="table" class="table table-bordered">
							<thead>
								<tr>
									<td>No.</td>
									<td>Nama</td>
									<td>Barcode</td>
									<td>Action</td>
								</tr>
							</thead>
							<tbody>
								@foreach($people as $index =>$ini)
								<tr>
									<td>{{ $index+1 }}</td>
									<td>{{ $ini->name }}</td>
									<td>{{ $ini->qrcode }}</td>
									<td>
										<button type="button" class="btn btn-warning">Edit</button>
										<button type="button" class="btn btn-danger">Delete</button>
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
	{{-- end row --}}
</div>
{{-- end container --}}
@endsection
@section('script')

<script type="text/javascript">
$(document).ready(function(){
	$("#table").dataTable();
});
</script>

@endsection