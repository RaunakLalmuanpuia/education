@extends('layout.main')

@section('pageHeader')
<h1 class="ui dividing header">
	{{$school->name}} <small class='fr'>{{$school->code?:'N/A'}}</small>
</h1>
@stop


@section('content')
<div class="ui grid">
	<div class="row">
		<div class="eight wide column">
			<div class="ui blue segment">
				<div class="ui four  tiny statistics">
					<div class="statistic">
						<div class="value">{{$schoolTotals['totalStudents']}}</div>
						<div class="label">Total Students</div>
					</div>
					<div class="statistic">
						<div class="value">{{$schoolTotals['totalBoys']}}</div>
						<div class="label">Total Boys</div>
					</div>
					<div class="statistic">
						<div class="value">{{$schoolTotals['totalGirls']}}</div>
						<div class="label">Total Girls</div>
					</div>
					<div class="statistic">
						<div class="value">{{$totalTeachers}}</div>
						<div class="label">Total Teachers</div>
					</div>
				</div>
			</div>
			<div class="ui blue segment">
				<dl class="school details">
					<dt>Principal Phone</dt>
					<dd>{{$school->head_phone_number_landline ?:'N/A'}}</dd>
					<dt>Respondent Phone</dt>
					<dd>{{$school->respondent_phone_number_landline ?:'N/A'}}</dd>
				</dl>
			</div>
			<div class="ui blue segment">
				<dl class="school details">
					<dt>Village</dt>
					<dd>{{$school->village_name}}</dd>
					<dt>Educational Block</dt>
					<dd>{{$school->educational_block_name}}</dd>
					<dt>District</dt>
					<dd>{{$school->district_name}}</dd>
				</dl>
			</div>
		</div>
		<div class="eight wide column">
			<div class="ui blue segment">
				<dl class="school details">
					<dt>U-DISE Code</dt>
					<dd>{{$school->code?:'N/A'}}</dd>
					@if($school->elementaryManagement && $school->management_id_elementary != 99)
					<dt>Elementary Management</dt>
					<dd>{{$school->elementaryManagement->name}}</dd>
					@endif
					@if($school->secondaryManagement && $school->management_id_secondary != 99)
					<dt>Secondary Management</dt>
					<dd>{{$school->secondaryManagement->name}}</dd>
					@endif
					@if($school->higherManagement && $school->management_id_higher_secondary != 99)
					<dt>Hr Sec. Management</dt>
					<dd>{{$school->higherManagement->name}}</dd>
					@endif

					<dt>Category</dt>
					<dd>{{$school->category_name}}</dd>
				</dl>
				<img src="https://maps.googleapis.com/maps/api/staticmap?center={{$school->latitude}},{{$school->longitude}}&zoom=18&size=520x200&maptype=hybrid&markers=color:red%7Clabel:%7C{{$school->latitude}},{{$school->longitude}}&key={{Config::get('services.gmap.key')}}" alt="">
			</div>
		</div>
	</div>
	<div class="ui horizontal divider teacher-view-divider" >Teachers</div>
	<div class="ui row">
		<div class="ui five column grid school teachers list">
			@foreach($postings as $k=> $posting)
			<a class="column teacher " href="/public/teachers/{{$posting->teacher->id}}">
				{{$posting->teacher->name}} {{$posting->place_of_post ? '(' . $posting->place_of_post . ')' : ''}}
			</a>
			@endforeach
		</div>
	</div>
</div>

<div class="ui hidden divider"></div>
@stop