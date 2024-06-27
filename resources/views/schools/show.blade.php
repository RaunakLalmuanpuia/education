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
	@if($schoolTotals)
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
		@endif
			<div class="ui blue segment">
				<dl class="school details">
					<dt>Principal Phone</dt>
					<dd>{{$school->head_phone_number_landline ?:'N/A'}}</dd>
					<dt>Principal Mobile</dt>
					<dd>{{$school->head_phone_number_mobile ?:'N/A'}}</dd>
					<dt>Respondent Phone</dt>
					<dd>{{$school->respondent_phone_number_landline ?:'N/A'}}</dd>
					<dt>Respondent Mobile</dt>
					<dd>{{$school->respondent_phone_number_mobile ?:'N/A'}}</dd>
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
					<dt>RMSA School Code</dt>
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
			</div>
		</div>
	</div>
</div>
<div class="ui horizontal divider"></div>
<div class="ui styled fluid accordion">
	<div class="title">
		<i class="dropdown icon"></i>
		Teachers
	</div>
	<div class="content">
		<table class="ui celled table">
			<thead>
				<tr>
					<th>#</th>
					<th>Name</th>
					<th>Date Of Birth</th>
					<th>Joined</th>
					<th>Pension</th>
				</tr>
			</thead>
			<tbody>
					@foreach($postings as $k=> $posting)
					<tr class="{{$posting->teacher->service ? '' : 'error'}}">
						<td>{{$k+1}}</td>
						<td><a class="" href="/teachers/{{$posting->teacher->id}}">{{$posting->teacher->name}}</a></td>
						<td>{!! formatDate($posting->teacher->date_of_birth) !!}</td>
						<td>{!! $posting->teacher->service?formatDate($posting->teacher->service->date_of_joining):'N/A'!!}</td>
						<td>{!! $posting->teacher->service? getPensionDate($posting->teacher->date_of_birth) : 'N/A' !!}</td>
					</tr>
					@endforeach
				
			</tbody>
		</table>
	</div>

	<div class="title">
		<i class="dropdown icon"></i>
		Enrollment History
	</div>
	@if($schoolTotals)
	<div class="content" id="enrollmentHistory">
		<div class="center aligned">Please wait</div>
	</div>
	@else
	<div class="content">
		<div class="center aligned">School enrollment record not found</div>
	</div>
	@endif
	<!-- <div class="title">
		<i class="dropdown icon"></i>
		Result History
	</div>
	<div class="content">
		To be implemented
	</div> -->
</div>

@stop


@section('libraries')
	@parent
	<script type="text/javascript">
	$('.accordion').accordion();
	</script>
	<script type="text/handlebars" id="enrollmentTemplate">
		<table class="ui compact table" data-categoryid="@{{school_category_id}}">
			<thead>
				<tr>
				
					<th scope="row">Class</th>
					@{{#ifInArray school_category_id '1,2,6'}}
					<th scope="row">Pre Primary</th>
					<th scope="row">Class I</th>
					<th scope="row">Class II</th>
					<th scope="row">Class III</th>
					<th scope="row">Class IV</th>
					@{{/ifInArray}}
					@{{#ifInArray school_category_id '2,3,4,7'}}
					<th scope="row">Class V</th>
					<th scope="row">Class VI</th>
					<th scope="row">Class VII</th>
					<th scope="row">Class VIII</th>
					@{{/ifInArray}}
					@{{#ifInArray school_category_id '3,5,6,7,8,10'}}
					<th scope="row">Class IX</th>
					<th scope="row">Class X</th>
					@{{/ifInArray}}
					@{{#ifInArray school_category_id '10,11,5'}}
					<th scope="row">Class XI</th>
					<th scope="row">Class XII</th>
					@{{/ifInArray}}
				</tr>
			</thead>
			<tbody>
				@{{#each consolidated_enrollments}}
				<tr class="ui active center aligned header">
					<th colspan="@{{colspan ../school_category_id}}">@{{year}}</th>
				</tr>
				<tr>
					<th>Boys</th>
					@{{#ifInArray ../school_category_id '1,2,6'}}
					<td>@{{cpp_b}}</td>
					<td>@{{c1_b}}</td>
					<td>@{{c2_b}}</td>
					<td>@{{c3_b}}</td>
					<td>@{{c4_b}}</td>
					@{{/ifInArray}}
					@{{#ifInArray ../school_category_id '2,3,4,7'}}
					<td>@{{c5_b}}</td>
					<td>@{{c6_b}}</td>
					<td>@{{c7_b}}</td>
					<td>@{{c8_b}}</td>
					@{{/ifInArray}}
					@{{#ifInArray ../school_category_id '3,5,6,7,8,10'}}
					<td>@{{c9_b}}</td>
					<td>@{{c10_b}}</td>
					@{{/ifInArray}}
					@{{#ifInArray ../school_category_id '10,11,5'}}
					<td>@{{c11_b}}</td>
					<td>@{{c12_b}}</td>
					@{{/ifInArray}}
				</tr>
				<tr>
					<th>Girls</th>
					@{{#ifInArray ../school_category_id '1,2,6'}}
					<td>@{{cpp_g}}</td>
					<td>@{{c1_g}}</td>
					<td>@{{c2_g}}</td>
					<td>@{{c3_g}}</td>
					<td>@{{c4_g}}</td>
					@{{/ifInArray}}
					@{{#ifInArray ../school_category_id '2,3,4,7'}}
					<td>@{{c5_g}}</td>
					<td>@{{c6_g}}</td>
					<td>@{{c7_g}}</td>
					<td>@{{c8_g}}</td>
					@{{/ifInArray}}
					@{{#ifInArray ../school_category_id '3,5,6,7,8,10'}}
					<td>@{{c9_g}}</td>
					<td>@{{c10_g}}</td>
					@{{/ifInArray}}
					@{{#ifInArray ../school_category_id '10,11,5'}}
					<td>@{{c11_g}}</td>
					<td>@{{c12_g}}</td>
					@{{/ifInArray}}
				</tr>
				<tr>
					<th>Total</th>
					@{{#ifInArray ../school_category_id '1,2,6'}}
					<td>@{{totals this 'pp'}}</td>
					<td>@{{totals this '1'}}</td>
					<td>@{{totals this '2'}}</td>
					<td>@{{totals this '3'}}</td>
					<td>@{{totals this '4'}}</td>
					@{{/ifInArray}}
					@{{#ifInArray ../school_category_id '2,3,4,7'}}
					<td>@{{totals this '5'}}</td>
					<td>@{{totals this '6'}}</td>
					<td>@{{totals this '7'}}</td>
					<td>@{{totals this '8'}}</td>
					@{{/ifInArray}}
					@{{#ifInArray ../school_category_id '3,5,6,7,8,10'}}
					<td>@{{totals this '9'}}</td>
					<td>@{{totals this '10'}}</td>
					@{{/ifInArray}}
					@{{#ifInArray ../school_category_id '10,11,5'}}
					<td>@{{totals this '11'}}</td>
					<td>@{{totals this '12'}}</td>
					@{{/ifInArray}}
				</tr>
				@{{/each}}
			</tbody>
		</table>
	</script>
	<script type="text/javascript">
	var template;
	var source   = $("#enrollmentTemplate").html();
	var template = Handlebars.compile(source);
	
	$.ajax({
		url:'/ajax/get-school-history/{{$school->school_id}}',
	}).success(function(data){
		var html = template(data.school);
		$('#enrollmentHistory').html(html);
	})

	</script>
@stop