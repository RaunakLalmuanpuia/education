{"success": "true",
"data":"
	{!! Form::open([
		'route' => 'retirements.store',
		'class' => 'ui small form',
		'id'=>'retirement-form',
		'files'=>'true'
		]) 
	!!}
		@include('retirement.form')
	{!! Form::close() !!}
"}