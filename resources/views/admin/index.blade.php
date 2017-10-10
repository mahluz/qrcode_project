@extends('layouts.admin-horizontal')
@section('css')

@endsection
@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-10 calendar">
			<div id="calendar"></div>
			<div class="sallary"></div>
		</div>
		<div class="col-sm-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					Select People
				</div>
				<div class="panel-body">
					@foreach($people as $index => $ini)
                    <button type="button" class="btn btn-default btn-block" onclick="getCalendar({{ $ini->id }})">{{ $ini->name }}</p></button>
					<hr>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('script')
<script type="text/javascript">
	
$(document).ready(function(){

	$("#calendar").fullCalendar({
		lang:'id',
	});

});

function getCalendar(id){
	$("#calendar").remove();
	$(".calendar").append("<div id='calendar'></div>");
	$.ajax({
		method:"post",
		url:'{{ url('api/getData') }}',
		data:{
			id:id,
			_token:'{{ csrf_token() }}'
		},
		success:function(result){
			var data=[];
			$.each(result["absent"],function(key,i){
				data[key]={
					title:this.status+" \ndenda: Rp."+this.bill+",-",
					start:this.date_absent
				}
			});
			$('#calendar').fullCalendar({
				lang:'id',
				events:data
			});
			console.log(result);
			console.log(data);
		},
		error:function(error){
			console.log(error);
		}
	});
}

</script>
@endsection