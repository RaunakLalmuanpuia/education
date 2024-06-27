<h3 class="ui header">Education Information</h3>
<div class="education-wrapper">
	<div class="fields">
		<div class="eight wide required field">
			<label for="qualification">Qualification</label>
			{!! Form::select('qualification_id', $properties['qualifications'], null, ['class'=>'ui dropdown', 'id'=>'qualifications_id']) !!}
		</div>
	</div>
	<div class="fields">
		<div class="seven wide required field">
			<label for="professional_qualification">Professional Qualification</label>
			{!! Form::select('professional_qualification_id', $properties['professional_qualifications'], null, ['class'=>'ui dropdown', 'id'=>'professional_qualification', 'onchange'=>'professionalQualificationChange(this);']) !!}
		</div>
		<div class="four wide field {{errorClass($errors, 'professional_qualification_year')}}">
			<label for="professional_qualification_year">Year of Passing</label>
			{!! Form::text('professional_qualification_year', null, ['class'=>'yearpicker', 'id'=>'professional_qualification_year', 'disabled'=>'disabled']) !!}
			{!! errorMessage($errors,'professional_qualification_year') !!}
		</div>
		<div class="five wide field">
			<label>&nbsp;</label>
			<div class="ui checkbox">
				<input type="checkbox" name="trained_for_cwsn" id="trained_for_cwsn" />
				<label for="trained_for_csw">
					Trained for CWSN
				</label>
			</div>
		</div>
	</div>

	<div class="fields">
		
		<div class="sixteen wide required field">
			
		</div>
	</div>
</div>