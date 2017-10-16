@extends('layouts.admin-horizontal')
@section('css')

@endsection
@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-10">
			<div class="calendar"><div id="calendar"></div></div><hr>

			<div class="panel panel-default">
				<div class="panel-heading">
					Calculate
				</div>	
				<div class="panel-body">
					<table class="table table-striped">
						<thead>
							<tr>
								<td>Sallary</td>
								<td>Total Bills</td>
								<td>Remain</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td id="sallary"></td>
								<td id="total_bills"></td>
								<td id="remain"></td>
							</tr>
						</tbody>
					</table>					
				</div>
			</div>

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
			data=[];
			data_sallary={
				sallary:0,
				total_bills:0,
				remain:0
			}

			$.each(result["absent"],function(key,i){
				var date = new Date(this.created_at);  
				var options = {  
				    weekday: "long", year: "numeric", month: "short",  
				    day: "numeric", hour: "2-digit", minute: "2-digit"  
				};  
				data[key]={
					title:"status: "+this.status+" Pada jam: \n"+date.getHours()+" lebih "+date.getMinutes()+" menit \ndenda: Rp."+this.bill+",-",
					start:this.date_absent
				}
			});

			$('#calendar').fullCalendar({
				lang:'id',
				events:data
			});

			var moment = $("#calendar").fullCalendar('getDate');

			$.each(result["absent"],function(key,i){
				if(new Date(this.date_absent).getMonth()+1==moment._d.getMonth()+1){
					data_sallary.total_bills+=parseInt(this.bill);
				}
			});

			$.each(result["sallary"],function(key,i){
				if(new Date(this.date_salary).getMonth()+1==moment._d.getMonth()+1){
					data_sallary={
						sallary:parseInt(this.salary),
						total_bills:data_sallary.total_bills,
						remain:parseInt(this.salary)-parseInt(data_sallary.total_bills)
					}
				}
			});

			$("#sallary").text("Rp. "+data_sallary.sallary+",-");
			$("#total_bills").text("Rp. "+data_sallary.total_bills+",-");
			$("#remain").text("Rp. "+data_sallary.remain+",-");

			$(".fc-next-button").click(function(){
				var moment = $("#calendar").fullCalendar('getDate');
				data_sallary={
					sallary:0,
					total_bills:0,
					remain:0
				}

				$.each(result["absent"],function(key,i){
					if(new Date(this.date_absent).getMonth()+1==moment._d.getMonth()+1){
						data_sallary.total_bills+=parseInt(this.bill);
					}
				});

				$.each(result["sallary"],function(key,i){
					if(new Date(this.date_salary).getMonth()+1==moment._d.getMonth()+1){
						data_sallary={
							sallary:parseInt(this.salary),
							total_bills:data_sallary.total_bills,
							remain:parseInt(this.salary)-parseInt(data_sallary.total_bills)
						}
					}
				});

				console.log(data_sallary);
				$("#sallary").text("Rp. "+data_sallary.sallary+",-");
				$("#total_bills").text("Rp. "+data_sallary.total_bills+",-");
				$("#remain").text("Rp. "+data_sallary.remain+",-");

			});
			$(".fc-prev-button").click(function(){
				var moment = $("#calendar").fullCalendar('getDate');
				data_sallary={
					sallary:0,
					total_bills:0,
					remain:0
				}

				$.each(result["absent"],function(key,i){
					if(new Date(this.date_absent).getMonth()+1==moment._d.getMonth()+1){
						data_sallary.total_bills+=parseInt(this.bill);
					}
				});

				$.each(result["sallary"],function(key,i){
					if(new Date(this.date_salary).getMonth()+1==moment._d.getMonth()+1){
						data_sallary={
							sallary:parseInt(this.salary),
							total_bills:data_sallary.total_bills,
							remain:parseInt(this.salary)-parseInt(data_sallary.total_bills)
						}
					}
				});

				console.log(data_sallary);
				$("#sallary").text("Rp. "+data_sallary.sallary+",-");
				$("#total_bills").text("Rp. "+data_sallary.total_bills+",-");
				$("#remain").text("Rp. "+data_sallary.remain+",-");
			});

			console.log("data sallary array object ",data_sallary);
			console.log("result: ",result);
			console.log("data: ",data);
		},
		error:function(error){
			console.log(error);
		}
	});
}

</script>
@endsection