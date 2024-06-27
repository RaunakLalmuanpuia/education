<h3 class="ui header">Education Information</h3>
<div class="fields">
	<div class="eight wide required field">
		<label for="qualification">Qualification</label>
		{!! Form::text('name', $teacher->name, ['disabled'=>'disabled']) !!}
		{!! Form::hidden('teacher_id', $teacher->id) !!}
	</div>
</div>