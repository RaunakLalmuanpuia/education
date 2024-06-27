@extends('layout.main')

@section('pageHeader')
<h1 class="ui dividing header">
	Generate Teacher list
</h1>
@stop

@section('content')
{!! Form::open(['method'=>'get', 'class'=>'ui form']) !!}
	<div class="seven wide field">
		<label for="training_status">Training Status</label>
		{!! Form::select('training_status', $trainingStatuses, null) !!}
	</div>
	<input type="submit" name="submitted">
{!! Form::close(); !!}
@stop