@extends('layout.main')

@section('pageHeader')
<h1 class="ui dividing header">
	School list
</h1>
@stop

@section('content')
	{!! Form::open(['route' => 'schools.index' , 'class' => 'ui small form', 'method'=> 'get']) !!}
	<div class="fields">
		<div class="three wide field">
			{!! Form::text('name', $name, ['placeholder'=>'Search by Name']) !!}
		</div>
		<div class="three wide field">
			{!! Form::select('district', $districts, $district, [ 'class'=>'ui dropdown']) !!}
		</div>
		<div class="four wide field">
			{!! Form::select('category', $categories, $category, [ 'class'=>'ui dropdown']) !!}
		</div>
		<div class="three wide field">
			<button class="ui primary icon labeled button">
				<i class="search icon"></i>
				Search
			</button>
		</div>
	</div>
	{!! Form::close() !!}
	<div class="ui three stackable cards pt-40" id="school_cards">
		@foreach($schools as $school)
		<a 
			class="ui card single school"
			href="/schools/{{$school->school_id}}"
			>
			<div class="content">
				<h4 class="header">
					{{$school->name}}
				</h4>
				<div class="meta">
					{{$school->village_name}}, {{$school->district_name}} {{$school->pincode}}
				</div>
				
				<div class="description">
					<div class="ui sub header">Contact</div>
					<div class="ui list">
						@if($school->head_phone_number_landline)
						<div class="item">
							<i class="phone icon"></i>
							{{$school->head_phone_number_landline}}
						</div>
						@endif
						@if($school->respondent_phone_number_landline && $school->respondent_phone_number_landline != $school->head_phone_number_landline )
						<div class="item">
							<i class="phone icon"></i>
							{{$school->respondent_phone_number_landline}}
						</div>
						@endif
						@if($school->head_phone_number_mobile)
						<div class="item">
							<i class="phone square icon"></i>
							{{$school->head_phone_number_mobile}}
						</div>
						@endif
						@if($school->respondent_phone_number_mobile && $school->respondent_phone_number_mobile != $school->head_phone_number_mobile )
						<div class="item">
							<i class="phone square icon"></i>
							{{$school->respondent_phone_number_mobile}}
						</div>
						@endif
						@if($school->website )
						<div class="item">
							<i class="url icon"></i>
							{{$school->website}}
						</div>
						@endif
						@if($school->email )
						<div class="item">
							<i class="mail icon"></i>
							{{$school->email}}
						</div>
						@endif
					</div> 
					Students  - {{$school->cpp_g+$school->cpp_g+$school->cpp_b+$school->c1_b+$school->c1_g+$school->c2_b+$school->c2_g+$school->c3_b+$school->c3_g+$school->c4_b+$school->c4_g+$school->c5_b+$school->c5_g+$school->c6_b+$school->c6_g+$school->c7_b+$school->c7_g+$school->c8_b+$school->c8_g+$school->c9_b+$school->c9_g+$school->c10_b+$school->c10_g+$school->c11_b+$school->c11_g+$school->c12_b+$school->c12_g}}
				</div>
			</div>
		</a>
		@endforeach
	</div>
	<div class="ui hidden divider"></div>
	<div class="ui grid">
		<div class="column">
		{!! $schools->appends(['name' => $name, 'district' => $district, 'category' => $category])->render(new Landish\Pagination\SemanticUI($schools)) !!}
		</div>
	</div>
@stop