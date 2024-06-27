{!! Form::hidden('is_create', getCurrentRoute() == 'teachers.create' ? 1 : 0) !!}
<div class="ui stackable grid">
	<div class="two column row">
		@include('teachers.form.personal')
		<div class="column">
			@include('teachers.form.education')
			@include('teachers.form.service')
		</div>
	</div>
	<div class="one column row">
		<div class="column">
			@include('teachers.form.posting')
		</div>
	</div>
	@if(count($errors))
		@foreach($errors->all() as $error)
			<div class="ui teal message">{{$error}}</div>
		@endforeach
	@endif
	<div class="one column row">
		<div class="column">
			<button class="ui primary button"><i class="checkmark icon"></i> Save</button>
		</div>
	</div>
		
</div>