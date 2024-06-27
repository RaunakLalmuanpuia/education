@extends('layout.modal')

@section('content')
	<div class="ui long test modal scrolling transition ">
		<div class="ui red header">
		<i class="warning sign icon"></i>Similar Teachers
		</div>
		<div class="content">
			<div class="">
				Some existing teachers are similar to the one you created. Please make sure that the teacher does not exist.
			</div>
			<div class="divider"></div>
			@foreach($similar as $teacher)
			<div class="ui stacked segment">
				<div class="ui grid">
					<div class="ui three wide column">
						<img src="{{teacherImage($teacher)}}" alt="" class="ui small circle image">
					</div>
					<div class="ui six wide column">
						{{$teacher->name}}
					</div>
				</div>
			</div>
			@endforeach
		</div>
		<div class="actions">
			{!! Form::open([
				'route' => 'teachers.store',
				'class' => 'ui small form',
				'id'=>'teacher-form',
				'files'=>'true'
				]) !!}
				{!! Form::hidden('confirmed', 'true') !!}
			<a href="/teachers/create" class="ui icon negative button"><i class="left arrow icon"></i>Teacher exists. Go back</a>
			<button type="submit" class="ui icon positive button"><i class="right arrow icon"></i>Teacher does not exist. Create New Teacher</div>
			{!! Form::close() !!}
		</div>
	</div>
@stop
@section('libraries')
	@parent
	<script>
	$('.ui.modal').modal('show');
	</script>
@stop