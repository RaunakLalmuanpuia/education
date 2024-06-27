@extends('layout.main')
@section('content')

	<div class="ui grid">
		<div class="row">
			<div class="sixteen wide  column">
				<div class="ui horizontal divider">
					District Wise School Count
				</div>
				<div class="ui inverted segment">
					<div class="ui eight inverted statistics">
						@foreach($distWiseSchools as $distWiseSchool)
						<div class="statistic">
							<div class="label">{{ $distWiseSchool->districtName }}</div>
							<div class="value">{{ $distWiseSchool->countRows }}</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="sixteen wide  column">
				<div class="ui horizontal divider">
					Category Wise School Count
				</div>
				<div class="ui inverted segment">
					<div class="ui six inverted statistics">
						@foreach($catWiseSchools as $catWiseSchool)
						<div class="statistic">
							<div class="label">{{ $catWiseSchool->catName }}</div>
							<div class="value">{{ $catWiseSchool->countRows }}</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
		<div class="ui horizontal divider">
			District wise school category distribution
		</div>
		<div class="row dist-wise-school-cats">
			@foreach($distWiseSchoolsCats as $name => $distWiseSchoolsCat)
				<div class="eight wide column">
				<h3 class="ui header">{{$name}}</h3>
				<table class="ui table">
					<thead>
						<tr>
							<th>Category</th>
							<th>Number of Schools</th>
						</tr>
					</thead>
					<tbody>
						@foreach($distWiseSchoolsCat as $category)
						<tr>
							<td>{{$category->catName}}</td>
							<td>{{$category->countRows}}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			@endforeach
				
		</div>
	</div>
	

	



@stop