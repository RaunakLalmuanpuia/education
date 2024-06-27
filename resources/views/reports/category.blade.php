@extends('layout.main')

@section('pageHeader')
<h1 class="ui dividing header">
	Generate Teacher list
</h1>
@stop

@section('content')
{!! Form::open(['method'=>'get', 'class'=>'ui form']) !!}
	<div class="seven wide field {{errorClass($errors, 'posting.school_id')}}">
		<label for="category_id">Category</label>
		{!! Form::select('category_id', $categories, null) !!}
	</div>
	<input type="submit" name="submitted">
{!! Form::close(); !!}
@stop