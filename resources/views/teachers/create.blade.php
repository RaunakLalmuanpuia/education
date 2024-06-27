@extends('layout.main')

@section('pageHeader')
<h1 class="ui dividing header">
	New Teacher
</h1>
@stop

@section('content')
	{!! Form::open([
		'route' => 'teachers.store',
		'class' => 'ui small form',
		'id'=>'teacher-form',
		'files'=>'true'
		]) 
	!!}
		@include('teachers.form')
	{!! Form::close() !!}
@stop