@extends('layouts.admin-horizontal')
@section('css')

@endsection
@section('content')
<div class="container">
	<div id="calendar"></div>
</div>
@endsection
@section('script')
<script type="text/javascript">
	
$(document).ready(function(){

	$("#calendar").fullCalendar({
		lang:'id',
	});

});

</script>
@endsection