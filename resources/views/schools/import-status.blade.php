@extends('layout.main')

@section('pageHeader')
<h1 class="ui dividing header">
	Importing
</h1>
@stop


@section('content')
<div class="ui grid">
	<div class="row">
		<div class="sixteen wide column">
			<div class="ui message">
				The files will be imported in the background. This window can be closed.
			</div>
			<div class="ui indicating progress" id="progress" data-value="0" data-total="0">
				<div class="bar"></div>
				<div class="label">Please Wait</div>
			</div>
		</div>
	</div>
</div>
@stop


@section('libraries')
	@parent

	<script type="text/javascript" src="/libraries/jquery-ajaxQueue/dist/jquery.ajaxQueue.min.js"></script>
	<script>
	$('#progress')
		.progress({
			text: {
				active: 'Imported {value} of {total}',
				success: 'Imported {total} entries.'
			}
		})
	;
	var timer = setInterval(getData, 500);

	function getData() {
		jQuery.ajaxQueue({
			url: '/import-progress?id=' + {{$id}}
		}).done(function(data){
			
			$('#progress').data('value', data.done);
			$('#progress').data('total', data.total);

			var percent = data.done / data.total * 100;
			$('#progress')
				.progress('set percent', percent)
				.progress('set total', data.total)
				.progress('set progress', data.done)
			;

			if(data.done == data.total){
				clearInterval(timer);
			}
		})
	}
	</script>
@stop