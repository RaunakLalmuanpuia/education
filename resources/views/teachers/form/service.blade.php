<div class="service-wrapper">
	<h3 class="ui header">Service Information</h3>
	<div class="fields">
		<div class="six wide field {{errorClass($errors, 'current_nature_of_appointment_id')}}">
			<label for="current_nature_of_appointment_id">Current Nature of appointment</label>
			{!! Form::select('current_nature_of_appointment_id', $properties['natures_of_appointment'], null, ['id'=>'current_nature_of_appointment_id', 'onchange'=>'natureOfAppointmentChange(this);']) !!}
			{!! errorMessage($errors,'current_nature_of_appointment_id') !!}
		</div>
		<div class="seven wide field {{errorClass($errors, 'service.appointing_authority_id')}}">
			<label for="appointing_authority_id">Appointment Authority</label>
			{!! Form::select('service[appointing_authority_id]', $properties['appointing_authorities'], null, ['class'=>'ui', 'id'=>'appointing_authority_id']) !!}
			{!! errorMessage($errors,'service.appointing_authority_id') !!}
		</div>
		<div class="three wide field {{errorClass($errors, 'service.rank_in_recruitment')}}">
			<label for="rank_in_recruitment">Rank</label>
			{!! Form::number('service[rank_in_recruitment]', null, ['class'=>'', 'id'=>'rank_in_recruitment']) !!}
			{!! errorMessage($errors,'service.rank_in_recruitment') !!}
		</div>
	</div>
	<div class="fields">
		<div class="six wide field">
			<label for="pension_type">Pension Type</label>
			{!! Form::select('service[pension_type_id]', $properties['pension_types'], null, ['class'=>'', 'id'=>'pension_type', 'onchange' => 'pensionTypeChange(this);']) !!}
		</div>
		<div class="six wide  field">
			<label for="gpf_account_number">GPF Account Number</label>
			<div class="fields">
				<div  class="twelve wide disabled field">
					{!! Form::select('service[gpf_prefix]', $properties['gpf_prefixes'], null, ['class'=>'', 'id'=>'gpf_prefix', 'disabled' =>'disabled']) !!}
				</div>
				<div class="six wide disabled field">
					{!! Form::text('service[gpf_suffix]', null, ['id' => "gpf_suffix", 'disabled' =>'disabled']) !!}
				</div>
			</div>
		</div>
		<div class="four wide disabled field {{errorClass($errors, 'service.new_pension_scheme_number')}}">
			<label for="new_pension_scheme_number">NPS Number</label>
			{!! Form::text('service[new_pension_scheme_number]', null, ['id'=> 'new_pension_scheme_number', 'disabled'=>'disabled']) !!}
			{!! errorMessage($errors,'service.new_pension_scheme_number') !!}
		</div>
	</div>
	<div class="four fields">
		<div class="field">
			<label for="pension_type">Teacher Grade</label>
			{!! Form::select('service[grade]', ['None' => 'None', 'Senior'=>'Senior', 'Selection'=>'Selection'], null, ['class'=>'', 'id'=>'grade']) !!}
		</div>
		<div class="field {{errorClass($errors, 'service.date_of_appointment')}}">
			<label for="date_of_appointment">Date of Appointment</label>
			{!! Form::text('service[date_of_appointment]', null, ['class'=>'datepicker','id'=>"date_of_appointment",'onchange'=>'changeDateOfAppointment(this)']) !!}
			{!! errorMessage($errors,'service.date_of_appointment') !!}
		</div>
		<div class="field {{errorClass($errors, 'service.date_of_joining')}}">
			<label for="date_of_joining">Date of Joining</label>
			{!! Form::text('service[date_of_joining]', null, ['class'=>'datepicker','id'=>"date_of_joining"]) !!}
			{!! errorMessage($errors,'service.date_of_joining') !!}
		</div>
		<div class="field {{errorClass($errors, 'service.date_of_confirmation')}}">
			<label for="date_of_confirmation">Date of confirmation</label>
			{!! Form::text('service[date_of_confirmation]', null, ['class'=>'datepicker','id'=>"date_of_confirmation"]) !!}
			{!! errorMessage($errors,'service.date_of_confirmation') !!}
		</div>
	</div>
</div>