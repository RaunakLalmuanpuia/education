@extends('layout.main')

@section('pageHeader')
<h1 class="ui dividing header">
	Import School Statistics
</h1>
@stop

@section('content')
<!-- css to be completed later -->
<style>
	.ui.tiny.progress:last-child {
			margin-bottom: 0 !important;
			margin-top: 20px !important;
	}
	.ui.tiny.progress {
			margin-bottom: 10px !important;
	}
</style>
{!! Form::open([
	'route' => 'schools.import.post',
	'class' => 'ui small form',
	'id'=>'school-import-form',
	'files'=>'true',
	]) 
!!}

<div class="ui horizontal segments">
	@include('schools.import-form', ['type'=>'enrollment'])
	@include('schools.import-form', ['type'=>'school'])
	@include('schools.import-form', ['type'=>'latlong'])
</div>
{!! Form::close() !!}
@stop