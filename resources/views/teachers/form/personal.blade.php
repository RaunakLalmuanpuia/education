<div class="column personal-wrapper">
	<h3 class="ui header">Personal Information</h3>
	<div class="fields">
		<div class="eight wide required field {{errorClass($errors, 'name')}}">
			<label for="name">Name</label>
			{!! Form::text('name', null, ['placeholder' => 'Full Name', 'id'=>'name', 'autocomplete' => 'off']) !!}
			{!! errorMessage($errors,'name') !!}
		</div>
		<div class="eight wide required field">
			<label for="gender">Gender</label>
			{!! Form::select('gender_id', $properties['genders'], null, ['class'=>'ui dropdown', 'id'=>'gender_id']) !!}
		</div>
	</div>
	<div class=" two fields">
		<div class="required field  {{errorClass($errors, 'father_name')}}">
			<label for="father_name">Father's Name</label>
			{!! Form::text('father_name', null, ['placeholder' => 'Father\'s Name', 'id'=>'father_name', 'autocomplete' => 'off']) !!}
			{!! errorMessage($errors,'father_name') !!}
		</div>
		<div class="required field  {{errorClass($errors, 'mother_name')}}">
			<label for="mother_name">Mother's Name</label>
			{!! Form::text('mother_name', null, ['placeholder' => 'Mother\'s Name', 'id'=>'mother_name', 'autocomplete' => 'off']) !!}
			{!! errorMessage($errors,'mother_name') !!}
		</div>
	</div>
	<div class=" two fields">
		<div class="field  {{errorClass($errors, 'phone_number')}}">
			<label for="phone_number">Phone Number</label>
			{!! Form::number('phone_number', null, ['placeholder' => 'Landline Number (if any)', 'id'=>'phone_number', 'autocomplete' => 'off']) !!}
			{!! errorMessage($errors,'phone_number') !!}
		</div>
		<div class="field  {{errorClass($errors, 'mobile_number')}}">
			<label for="mobile_number">Mobile Number</label>
			{!! Form::number('mobile_number', null, ['placeholder' => 'Mobile Number', 'id'=>'mobile_number', 'autocomplete' => 'off']) !!}
			{!! errorMessage($errors,'mobile_number') !!}
		</div>
	</div>
	<div class="fields">
		<div class="six wide field  {{errorClass($errors, 'email')}}">
			<label for="email">Email Address</label>
			{!! Form::email('email', null, ['placeholder' => 'email', 'id'=>'email', 'autocomplete' => 'off']) !!}
			{!! errorMessage($errors,'email') !!}
		</div>
		<div class="four wide field  {{errorClass($errors, 'epic_number')}}">
			<label for="epic_number">EPIC Number</label>
			{!! Form::text('epic_number', null, ['placeholder' => 'EPIC Number', 'id'=>'epic_number', 'autocomplete' => 'off']) !!}
			{!! errorMessage($errors,'epic_number') !!}
		</div>
		<div class="three wide required field  {{errorClass($errors, 'blood_group')}}">
			<label for="blood_group">Blood Group</label>
			{!! Form::select('blood_group',  ['O+'=>'O+','O-'=>'O-','A+'=>'A+','A-'=>'A-','B+'=>'B+','B-'=>'B-','AB+'=>'AB+','AB-'=>'AB-'], null, ['id'=>'blood_group'])!!}
			{!! errorMessage($errors,'blood_group') !!}
		</div>
		<div class="three wide required field  {{errorClass($errors, 'date_of_birth')}}">
			<label for="dob">Date of Birth</label>
			{!! Form::text('date_of_birth', null, ['placeholder' => 'Date of Birth', 'readonly'=>'readonly', 'class'=>'datepicker', 'id'=>'date_of_birth']) !!}
			{!! errorMessage($errors,'date_of_birth') !!}
		</div>
	</div>
	<div class="fields">
		<div class="eight wide required field">
			<label for="social_category_id">Social Category</label>
			{!! Form::select('social_category_id', $properties['social_categories'], null, ['class'=>'ui dropdown', 'id'=>'social_category_id']) !!}
		</div>
		<div class="eight wide required field">
			<label for="disability_id">Disability</label>
			{!! Form::select('disability_id', $properties['disabilities'], null, ['class'=>'ui dropdown', 'id'=>'disability_id']) !!}
		</div>
	</div>
	<div class="fields marital-status-wrapper">
		<div class="ui six wide field">
			<label for="marital_status_id">Marital Status</label>
			{!! Form::select('marital_status_id', $properties['marital_statuses'], null, ['class'=>'ui dropdown', 'id'=>'marital_status_id', 'onchange'=>'maritalStatusChange(this);']) !!}
		</div>
		<div class="ten wide disabled field  {{errorClass($errors, 'spouse_name')}}">
			<label for="spouse_name">Spouse Name</label>
			{!! Form::text('spouse_name', null, ['placeholder' => 'Spouse\'s Name', 'id'=>'spouse_name', 'disabled' => 'disabled', 'autocomplete' => 'off']) !!}
			{!! errorMessage($errors,'spouse_name') !!}
		</div>
	</div>
	<div class="fields">
		<div class="six wide required field {{errorClass($errors, 'present_address')}}">
			<label for="present_address">Present Address</label>
			{!! Form::textarea('present_address', null, ["rows"=>"4", "id"=>"present_address", "placeholder"=>"Present Address", 'autocomplete' => 'off']) !!}
			{!! errorMessage($errors,'present_address') !!}
		</div>
		<div class="six wide required field {{errorClass($errors, 'permanent_address')}}">
			<label for="permanent_address">Permanent Address</label>
			{!! Form::textarea('permanent_address', null, ["rows"=>"4", "id"=>"permanent_address", "placeholder"=>"Permanent Address", 'autocomplete' => 'off']) !!}
			{!! errorMessage($errors,'permanent_address') !!}
		</div>
		<div class="four wide field">
			<label for="photo">Picture</label>
	        <img src="" alt="" id="photo-preview" class="ui tiny hidden image">
			<div>
			    <label for="photo" class="ui icon blue button">
			        <i class="file icon"></i>
			        Open File</label>
					{!! Form::file('photo', ['style'=>'display:none','id'=>'photo']) !!}
			</div>
		</div>
	</div>
</div>