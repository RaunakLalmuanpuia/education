<div class="ui horizontal divider teacher-view-divider" id="personal-details">Detailed Information</div>
<div class="ui grid personal-details">
	<div class="eight wide column">
		<div class="ui blue dividing center aligned header">Personal</div>
		<ul>
			<li>
				<strong class="key">Name</strong>
				<span class="value">{{$teacher->name}}</span>
			</li>
			<li>
				<strong class="key">Gender</strong>
				<span class="value">{{$teacher->gender}} </span>
			</li>
			<li>
				<strong class="key">Date of Birth</strong>
				<span class="value">{!! formatDate($teacher->date_of_birth) !!}</span>
			</li>
			<li>
				<strong class="key">Social Category</strong>
				<span class="value">{{$teacher->social_category}}</span>
			</li>
			<li>
				<strong class="key">Disability</strong>
				<span class="value">{{$teacher->disability}}</span>
			</li>
			<li>
				<strong class="key">EPIC Number</strong>
				<span class="value">{{$teacher->epic_number}}</span>
			</li>
			<li>
				<strong class="key">Blood Group</strong>
				<span class="value">{{$teacher->blood_group}}</span>
			</li>
			<li>
				<strong class="key">Marital Status</strong>
				<span class="value">{{$teacher->marital_status}}</span>
			</li>
		</ul>
		<div class="ui blue dividing center aligned header">Relatives</div>
		<ul>
			<li>
				<strong class="key">Father's Name</strong>
				<span class="value">{{$teacher->father_name}}</span>
			</li>
			<li>
				<strong class="key">Mother's Name</strong>
				<span class="value">{{$teacher->mother_name}} </span>
			</li>
			@if($teacher->spouse_name)
			<li>
				<strong class="key">Spouse's Name</strong>
				<span class="value">{{$teacher->spouse_name}} </span>
			</li>
			@endif
		</ul>
		
	</div>
	<div class="eight wide column">
		<div class="ui blue dividing center aligned header">Qualification</div>
		<ul>
			<li class="item">
				<strong class="long key">Academic Qualification</strong>
				<span class="value">{{$teacher->qualification}}</span>
			</li>
			<li class="item">
				<strong class="long key">Professional Qualification</strong>
				<span class="value">{{$teacher->professional_qualification}}</span>
			</li>
			<li class="item">
				<strong class="long key">Professional Qualification Passed Year</strong>
				<span class="value">{{$teacher->professional_qualification_year}}</span>
			</li>
			<li class="item">
				<strong class="long key">Trained for CWSN</strong>
				<span class="value">{{$teacher->trained_for_cwsn ? 'Yes' : 'No' }}</span>
			</li>
		</ul>
		<div class="ui blue dividing center aligned header">Addresses</div>
		<ul>
			<li>
				<strong class="long key">Present</strong>
				<div class="value">
				{!! nl2br(e($teacher->present_address)) !!}
				</div>
			</li>
			<li>
				<strong class="long key">Permanent</strong>
				<div class="value">
				{!! nl2br(e($teacher->permanent_address)) !!}
				</div>
			</li>
		</ul>
	</div>
</div>