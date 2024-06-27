@extends('layout.main')

@section('pageHeader')
<h1 class="ui dividing header">
	{{$teacher->name}}
</h1>
@stop

@section('content')
<div class="ui grid personal-details">
	<div class="eight wide column">
		<ul>
			<li>
				<strong class="key">Name</strong>
				<span class="value">{{$teacher->name}}</span>
			</li>
			@if($teacher->father_name != 'NULL')
			<li>
				<strong class="key">Father's Name</strong>
				<span class="value">{{$teacher->father_name}}</span>
			</li>
			@endif
			@if($teacher->gender)
			<li>
				<strong class="key">Gender</strong>
				<span class="value">{{$teacher->gender->name}} </span>
			</li>
			@endif
			@if($teacher->blood_group)
			<li>
				<strong class="key">Blood Group</strong>
				<span class="value">{{$teacher->blood_group}}</span>
			</li>
			@endif
		</ul>	
	</div>
	<div class="eight wide column">
		<ul>
			@if($teacher->mobile_number)
			<li>
				<strong class="key">Mobile</strong>
				<span class="value">{{$teacher->mobile_number}}</span>
			</li>
			@endif
			@if($teacher->epic_number)
			<li>
				<strong class="key">EPIC Number</strong>
				<span class="value">{{$teacher->epic_number}}</span>
			</li>
			@endif
			@if($teacher->email)
			<li>
				<strong class="key">Email Address</strong>
				<span class="value">{{$teacher->email}}</span>
			</li>
			@endif
		</ul>
	</div>
	
</div>
@if($teacher->postings)
<div class="ui horizontal divider teacher-view-divider" id="post-history">Posting History</div>
<table class="ui celled blue table post-history-table">
	<thead>
		<tr>
			<th rowspan="2">Date</th>
			<th rowspan="2">School</th>
			<th rowspan="2">Place of Work</th>
			<th rowspan="2">Designation</th>
			<th colspan="2" class="center aligned">Appointment</th>
		</tr>
		<tr>
			<th>Nature</th>
			<th>Subject</th>
		</tr>
	</thead>
	<tbody>
		@foreach($teacher->postings as $posting)
		<tr>
			<td>{!! formatDate($posting->date)!!}</td>
			<td><a href="{{route('public.schools.show', ['id'=>$posting->school_id])}}">{{$posting->school->name}}</a></td>
			<td>{{$posting->place_of_post ? : 'Same as school'}}</td>
			<td>{{$posting->typeOfTeacher?$posting->typeOfTeacher->name:''}}</td>
			<td>{{($posting->natureOfAppointment) ? $posting->natureOfAppointment->name:''}}</td>
			<td>{{$posting->subject?:'N/A'}}</td>
		</tr>
		@endforeach
	</tbody>
</table>

@endif	
<div class="ui hidden divider"></div>
@stop