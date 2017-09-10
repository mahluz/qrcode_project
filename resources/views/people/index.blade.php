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
							
						</tbody>
					</table>
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