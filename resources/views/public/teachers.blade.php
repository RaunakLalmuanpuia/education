@extends('layout.main')

@section('pageHeader')
<h1 class="ui dividing header">
	Teachers list
</h1>
@stop

@section('content')
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	{!! Form::open(['route' => 'public.teachers.index' ,'class' => 'ui small form', 'id'=>"search_form", 'method'=>'get']) !!}
	<div class="fields">
		<div class="three wide field">
			{!! Form::text('name', $name, ['placeholder'=>'Search by Name']) !!}
		</div>
		<div class="four wide field">
			{!! Form::select('designation', $designations, $designation, [ 'class'=>'ui dropdown']) !!}
		</div>
		<div class="two wide field">
			<button class="ui primary icon labeled button">
				<i class="search icon"></i>
				Search
			</button>
		</div>
	</div>
	{!! Form::close() !!}
	<div class="ui three doubling cards pt-40" id="teacher_cards">
	@foreach($teachers as $teacher)
		<div 
			id="teacher-{{$teacher->teacher_id}}"
			class="{{$teacher->status == 'inactive' ? 'red' : 'primary'}} card single teacher"
			data-teacher="{{$teacher}}"
			>
			<div class="content">
				<h4 class="header">
					<a href="{{route('public.teachers.show', $teacher->teacher_id)}}">{{$teacher->name}}</a>
				</h4>
				<div class="meta">
					{{ $teacher->gender_id == 1 ? 'S/O' : 'D/O'}} {{$teacher->father_name}}
				</div>
				 
				<div class="meta qualifications appointment-nature">
					<span class="">
						{{ $teacher->designation }}
					</span>
				</div>
				<div class="description post-info">
					@if($teacher->school_name)
					<p><a href="{{route('public.schools.show', $teacher->school_id)}}">{{ $teacher->school_name}}</a></p>
						@if($teacher->place_of_post)
						<p>({{ $teacher->place_of_post }})</p>
						@endif
					<p>{{ $teacher->district_name}}</p>
					@else
					<p>Posting information not available</p>
					@endif
				</div>
			</div>
		</div>
	@endforeach
	</div>
	<div class="ui hidden divider"></div>
	<div class="ui grid">
		<div class="column">
		{!! $teachers->appends(['name' => $name,  'designation'=>$designation])->render(new Landish\Pagination\SemanticUI($teachers)) !!}
		</div>
	</div>
	<div class="ui hidden divider"></div>
@stop