@extends('layout.main')

@section('pageHeader')
<h1 class="ui dividing header">
	School list
</h1>
@stop

@section('content')
{!! Form::open(['method'=>'get', 'class'=>'ui form']) !!}
<form action="" class="ui form" method="post">
	<div class="seven wide field {{errorClass($errors, 'posting.school_id')}}">
		<label for="school_id">School</label>
		{!! Form::hidden('school_id', null, ["id"=>"school_id"]) !!}
		<div class="ui search school">
			<div class="ui icon input">
				{!! Form::text('school_name', null, ['class'=>'prompt', 'placeholder' => "Start typing school name"]) !!}
				<i class="search icon"></i>
			</div>
			<div class="results"></div>
		</div>
		{!! errorMessage($errors,'posting.school_id') !!}
	</div>
	<input type="submit" name="submitted">
</form>
@stop