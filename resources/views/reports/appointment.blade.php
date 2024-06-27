@extends('layout.main')

@section('pageHeader')
<h1 class="ui dividing header">
	Generate Teacher list
</h1>
@stop

@section('content')
{!! Form::open(['method'=>'get', 'class'=>'ui form']) !!}
	<div class="seven wide field">
		<label for="appointment_id">Appointment</label>
		{!! Form::select('appointment_id', $appointments, null) !!}
	</div>
	<input type="submit" name="submitted">
{!! Form::close(); !!}
@stop