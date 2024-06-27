@extends('layout.main')

@section('pageHeader')
<h1 class="ui dividing header">
	{{$type == 'pension' ? 'Pension on' : ($type == 'selection' ? 'Selection Grade on' : 'Senior Grade on')}}  {{$selectedYear}}
</h1>
@stop

@section('content')
<form action="" class="ui form">
	<div class="fields">
		<div class="six wide field">
			<select name="year" id="">
				<option value="">Select year</option>
				@foreach($years as $year)
				<option value="{{$year}}" {{$selectedYear == $year ? 'selected="selected"' : ''}}>{{$year}}</option>
				@endforeach
			</select>
		</div>
		<div class="six wide field">
			<select name="type" id="">
				<option value="">Select one</option>
				<option value="pension" {{$type == 'pension' ? 'selected="selected"':''}}>Pension</option>
				<option value="selection" {{$type == 'selection' ? 'selected="selected"':''}}>Selection</option>
				<option value="senior" {{$type == 'senior' ? 'selected="selected"':''}}>Senior</option>
			</select>
		</div>
		<div class="four wide field">
			<button class="ui  button">Submit</button>
		</div>
	</div>
</form>
<table class="ui striped table">
	<thead>
		<tr>
			<th>Name</th>
			<th>Date of Birth</th>
			<th>Date of Appointment</th>
			<th>Pension</th>
			<th>Senior Grade</th>
			<th>Selection Grade</th>
		</tr>
	</thead>
	<tbody>
		@foreach($services as $service)
		<tr>
			<td><a href="{{route('teachers.show', $service->teacher_id)}}">{{$service->name}}</a></td>
			<td>{{$service->date_of_birth}}</td>
			<td>{{$service->date_of_appointment}}</td>
			<td>{!!getPensionDate($service->date_of_birth)!!}</td>
			<td>{!!getSeniorGradeDate($service->date_of_joining)!!}</td>
			<td>{!!getSelectionGradeDate($service->date_of_joining)!!}</td>
		</tr>
		@endforeach
	</tbody>
</table>
	
<div class="ui hidden divider"></div>
<div class="ui grid">
	<div class="column">
	{!! $services->appends(['year' => $selectedYear, 'type' => $type])->render(new Landish\Pagination\SemanticUI($services))!!}
	</div>
</div>
<div class="ui hidden divider"></div>
@stop