<div class="posting-wrapper">
	<h3 class="ui header">Posting Information</h3>
	<div class="fields">
		<div class="seven wide field {{errorClass($errors, 'posting.school_id')}}">
			<label for="school_id">School</label>
			{!! Form::hidden('posting[school_id]', null, ["id"=>"school_id"]) !!}
			<div class="ui search school">
				<div class="ui icon input">
					{!! Form::text('school_name', null, ['class'=>'prompt', 'placeholder' => "Start typing school name"]) !!}
					<i class="search icon"></i>
				</div>
				<div class="results"></div>
			</div>
			{!! errorMessage($errors,'posting.school_id') !!}
		</div>
		<div class="two wide field">
			<label>Place of post different from school?</label>
			<div class="ui checkbox">
				{!! Form::checkbox('post_different_from_school', 'checked', false,  ['id'=>'post_different_from_school','onchange' => 'postDifferentFromSchoolChange(this);']) !!}
			</div>
		</div>
		<div class="seven wide disabled field {{errorClass($errors, 'posting.place_of_post')}}">
			<label for="place_of_post">Place of posting</label>
			<input type="text" name="posting[place_of_post]" id="place_of_post" disabled="disabled">
			{!! errorMessage($errors,'posting.place_of_post') !!}
		</div>
	</div>
	<div class="five fields">
		<div class="field">
			<label for="appointment_subject">Subject of Appointment</label>
			{!! Form::select('posting[subject_of_appointment_id]', $properties['subjects'], null, ['class'=>'ui dropdown', 'id'=>'subject_of_appointment_id']) !!}
		</div>
		<div class="required field">
			<label for="appointment_type">Nature of Appointment</label>
			{!! Form::select('posting[nature_of_appointment_id]', $properties['natures_of_appointment'], null, ['id'=>'nature_of_appointment_id']) !!}
		</div>
		<div class="field">
			<label for="type_of_teacher">Type of Teacher</label>
			{!! Form::select('posting[type_of_teacher_id]', $properties['types_of_teacher'], null, ['class'=>'ui dropdown', 'id'=>'type_of_teacher_id']) !!}
		</div>
		
		<div class="field">
			<label for="classes_taught">Classes Taught</label>
			{!! Form::select('posting[classes_taught_id]', $properties['classes_taught'], null, ['class'=>'ui dropdown', 'id'=>'classes_taught']) !!}
		</div>
		<div class="field {{errorClass($errors, 'posting.date')}}">
			<label for="date">Date of Appointment</label>
			{!! Form::text('posting[date]', null, ['class'=>'datepicker','id'=>"date_of_post_appointment"]) !!}
			{!! errorMessage($errors,'posting.date') !!}
		</div>
	</div>
</div>