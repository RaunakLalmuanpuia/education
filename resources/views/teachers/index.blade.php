@extends('layout.main')

@section('pageHeader')
<h1 class="ui dividing header">
	Teachers list
	<a href="#" onclick="showSearchForm()" style="float:right">
		<i class="search icon"></i>
	</a>
</h1>
@stop

@section('content')
	@include('teachers.index.search-form')
	<div class="ui three doubling cards pt-40" id="teacher_cards" data-properties="{{$properties}}">
	@foreach($teachers as $teacher)
		<div 
			id="teacher-{{$teacher->id}}"
			class="{{$teacher->status == 'inactive' ? 'red' : 'primary'}} card single teacher"
			data-teacher="{{$teacher}}"
			>
			@if($teacher->service)
			<div class="ui green right corner label">
				<i class="asterisk icon"></i>
			</div>
			@else
				<div class="ui orange right corner label">
					<i class="circle icon"></i>
			</div>
			@endif
			<div class="content">
				<img class="right floated mini ui image" src="{{teacherImage($teacher)}}">
				<h4 class="header">
					{{$teacher->name}}
				</h4>
				<div class="meta qualifications appointment-nature">
					<span class="">
						{{$teacher->qualification ? $teacher->qualification->name : 'n/a'}}
						{{$teacher->professionalQualification->name != 'None' ? '(' . $teacher->professionalQualification->name . ')' : '' }}
						@if(count($teacher->postings))
						,<br /> {{ $teacher->postings->last()->natureOfAppointment ? $teacher->postings->last()->natureOfAppointment->name : 'NA'}} {{ $teacher->postings->last()->typeOfTeacher ? $teacher->postings->last()->typeOfTeacher->name : 'N/A'}}
						@endif
					</span>
				</div>
				<div class="description post-info">
					@if(count($teacher->postings))
					<p><a href="{{route('schools.show', $teacher->postings->last()->school->id)}}">{{ $teacher->postings->last()->school->name}}</a></p>
					<p>{{ $teacher->postings->last()->school->district->name}}</p>
					@else
					<p>Posting information not available</p>
					@endif
				</div>
			</div>
			<div class="ui bottom attached six buttons">
				<a href="#" 
					class=" ui basic icon button popup-toggle history-button"
					data-content="View Posting History"
					data-variation="inverted"
					>
					<i class="history icon"></i>
				</a>
				<a href="{{route('teachers.show', $teacher->id)}}" 
					class=" ui basic icon button popup-toggle"
					data-content="View Details"
					data-variation="inverted"
					>
					<i class="list icon"></i>
				</a>
				<a 
					href="{{route('teachers.edit', ['id'=>$teacher->id])}}" 
					class="ui basic edit-button icon button popup-toggle {{$teacher->status == 'inactive' ? 'disabled' : 'enabled'}}"
					data-content="Update personal information for this teacher" 
					data-variation="inverted"
					>
					<i class="edit icon"></i>
				</a>
				<a 
					href="{{route('teachers.service.post', $teacher->id)}}" 
					class="ui basic {{$teacher->service ? 'service-button' : 'disabled'}} icon button popup-toggle {{$teacher->status == 'inactive' ? 'disabled' : 'enabled'}}"
					data-content="Update service information for this teacher" 
					data-variation="inverted"
					>
					<i class="info icon"></i>
				</a>
				<a 
					href="{{route('teachers.promote', $teacher->id)}}" 
					class="ui basic posting-button icon button popup-toggle {{$teacher->status == 'inactive' ? 'disabled' : 'enabled'}}"
					data-content="Promote/transfer this teacher" 
					data-variation="inverted"
					>
					<i class="exchange icon"></i>
				</a>
				<a 
					href="" 
					class="ui basic icon button popup-toggle retire-button {{$teacher->status == 'inactive' ? 'disabled' : 'enabled'}}" 
					data-content="Retire this teacher"
					data-variation="inverted"
					>
					<i class="remove arrow icon"></i>
				</a>
			</div>
		</div>
	@endforeach
	
	@include('teachers.index.retire-modal')
	@include('teachers.index.promote-modal')
	@include('teachers.index.edit-modal') 
	@include('teachers.index.service-modal')
	@include('teachers.index.history-modal')
	</div>
	<div class="ui hidden divider"></div>
	<div class="ui grid">
		<div class="column">
		{!! (new Landish\Pagination\SemanticUI($teachers))->render() !!}
		</div>
	</div>
	<?php //dd($is_advanced_search) ?>
@stop

@section('libraries')
	@parent
	<script type="text/javascript">
		app.teacherSearchFilters = {!!json_encode($filter)!!};
		app.isAdvancedSearch = {!! $is_advanced_search ? 'true' : 'false' !!};
	</script>
@stop