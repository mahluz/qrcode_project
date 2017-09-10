@extends('welcome')
@section('css')

@endsection
@section('content')

<div class="container">
	<div class="row">
		<div class="col-lg-6">
			<div class="panel panel-default">
				<div class="panel-heading">
					Scan your Barcode here
				</div>
				<div class="panel-body">
					<canvas id="cam"></canvas>
				</div>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="panel panel-default">
				<div class="panel-heading">
					Result
				</div>
				<div class="panel-body">
					<img src="" id="imgResult" height="200px" width="200px">
					<div id="result"></div>	
				</div>
			</div>
		</div>
	</div>
	<button type="button" class="btn btn-default btn-block" onclick="play()">Play</button>
	<button type="button" class="btn btn-default btn-block" onclick="stop()">Stop</button>
	<hr>
</div>

<div class="container footer">
	<div class="pull-right">copyright <a href="facebook.com/zulham.achmad">Zulham Azwar Achmad</a> as Full-stack Developer in <a href="">Pt Ardata Indonesia</a></div>
</div>

@endsection
@section('script')
<script type="text/javascript">
	
$(document).ready(function(){

var data = {
    resultFunction: function(result) {
        $('#result').html(result.format+" : "+result.code);
        $("#imgResult").attr('src',result.imgData);
    }, beep:"{{url('public/audio/beep.mp3')}}"
};

cam = $("#cam").WebCodeCamJQuery(data).data().plugin_WebCodeCamJQuery;

});

function play(){
	cam.play();
}
function stop(){
	cam.stop();
}

</script>
@endsection