<div class="eight wide column">
	<div class="ui header">Service information <a class="popup-toggle " href="#post-history" data-title="Posting History" data-content="View posting history of {{$teacher->name}} "><i class="list icon"></i> </a></div>
	<div class="ui segments">
		@if($current_post)
		<div class="ui segment">
			<strong class="header">Current Post </strong>
			<p class="value"><a href="/schools/{{$current_post->school_id}}">{{$current_post->school_name}}</a> </p>

			@if($current_post->place_of_post)
			<strong class="header">Place of work</strong> 
			<p class="value">{{$current_post->place_of_post?:'asd'}}</p>
			@endif
			<p>{{$current_post->village_name}}, <br>{{$current_post->district_name}} <br><i class="phone icon"></i>
				{{ $current_post->head_phone_number_landline ? : ($current_post->respondent_phone_number_landline?: ($current_post->head_phone_number_mobile ? : ($current_post->respondent_phone_number_mobile)))}}
			</p>
		</div>
		<div class="ui horizontal segments">
			<div class="ui segment">
				<strong class="header">Designation</strong> 
				<p class="value">{{$current_post->type_of_teacher}}</p>
			</div>
			<div class="ui segment">
				<strong class="header">Type of Appointment</strong> 
				<p class="value">{{$current_post->nature_of_appointment}}</p>
			</div>
			<div class="ui segment">
				<strong class="header">Subject of Appointment</strong> 
				<p class="value">{{$current_post->subject?:'N/A'}}</p>
			</div>
		</div>
		@endif
		@if($teacher->service)
		<div class="ui horizontal segments">
			<div class="ui segment">
				<strong class="header">Date of Birth</strong> 
				<p class="value">{!! formatDate($teacher->date_of_birth)!!}</p>
			</div>
			<div class="ui segment">
				<strong class="header">Date of Appointment</strong> 
				<p class="value">{!! formatDate($teacher->service->date_of_joining)!!}</p>
			</div>
			<div class="ui segment">
				<strong class="header">Date of Joining</strong> 
				<p class="value">{!! formatDate($teacher->service->date_of_joining)!!}</p>
			</div>
		</div>
		<div class="ui horizontal segments">
			<div class="ui segment">
				<strong class="header">Pension</strong> 
				<p class="value">{!!getPensionDate($teacher->date_of_birth)!!}</p>
			</div>
			<div class="ui segment">
				<strong class="header">Selection Grade</strong> 
				<p class="value">{!! getSelectionGradeDate($teacher->service->date_of_joining) !!}</p>
			</div>
			<div class="ui segment">
				<strong class="header">Senior Grade</strong> 
				<p class="value">{!! getSeniorGradeDate($teacher->service->date_of_joining) !!}</p>
			</div>
		</div>
		<div class="ui horizontal segments">
			<div class="ui segment">
				<strong class="header">Pension Type</strong> 
				<p class="value">{{$teacher->service ? $teacher->service->pension_type : 'None'}}</p>
			</div>
			@if($teacher->service->pension_type == 'Old Pension')
			<div class="ui segment">
				<strong class="header">GPF Account Number</strong> 
				<p class="value">{{$teacher->service ? $teacher->service->gpf_prefix . $teacher->service->gpf_suffix : 'N/A'}}</p>
			</div>
			@else
			<div class="ui segment">
				<strong class="header">Pension Account Number</strong> 
				<p class="value">{{$teacher->service ? ($teacher->service->new_pension_scheme_number ? : 'N/A') : 'N/A'}}</p>
			</div>
			@endif
		</div>
		@endif
		@if($teacher->service && $teacher->service->appointing_authority)
		<div class="ui horizontal segments">
			<div class="ui segment">
				<strong class="header">Appointing Authority</strong> 
				<p class="value">{{$teacher->service ? $teacher->service->appointing_authority : 'N/A'}}</p>
			</div>
			<div class="ui segment">
				<strong class="header">Recruitment Rank</strong> 
				<p class="value">{{$teacher->service ? ($teacher->service->rank_in_recruitment ? : 'N/A') : 'N/A'}}</p>
			</div>
		</div>
		@endif
	</div>
</div>