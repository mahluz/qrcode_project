@extends('layouts.admin-horizontal')
@section('css')

@endsection
@section('content')
<div class="container">
	<div class="panel panel-default">
		<div class="panel-heading">
			Denda
		</div>
		<div class="panel-body">
			<div class="table-responsive">
				<table id="table" class="table table-striped">
					<caption>table title and/or explanatory text</caption>
					<button type="button" class="btn btn-primary">Add Bill</button><hr>
					<thead>
						<tr>
							<th>No</th>
							<th>Start_at</th>
							<th>End_at</th>
							<th>Bill</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($bill as $index => $ini)
						<tr>
							<td>{{ $index+1 }}</td>
							<td>{{ $ini->start_at }}</td>
							<td>{{ $ini->end_at }}</td>
							<td>{{ $ini->bill }}</td>
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
@endsection
@section('script')

@endsection