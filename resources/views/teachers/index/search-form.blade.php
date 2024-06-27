{!! Form::open(['route' => 'teachers.search' ,'class' => 'ui small form', 'id'=>"search_form", 'style'=> ($filter ? 'display:block' : 'display:none')]) !!}


{!! Form::close() !!}
<script id="advanced_search_contents" type="text/x-handlebars-template" >
<input type="hidden" name="_token" value="{{csrf_token()}}">
<div class="fields">
	<div class="three wide field">
		<input type="text" name="filter[teachers][name][like]" placeholder="Search by teacher name" value="@{{searchFilters.teachers.name.like}}">
	</div>
	<div class="three wide field">
		<input type="text" name="filter[postings][school][name][none]" placeholder='Search by School Name' value="@{{searchFilters.teachers.school_name.like}}">
	</div>
	<div class="four wide field">
		<select name="filter[postings][school][district_id][in][]" class="ui dropdown" multiple="multiple">
			<option value="">Filter by District</option>
		</select>
	</div>
	<div class="four wide field">
		<select name="filter[teachers][current_nature_of_appointment_id][in][]" class='ui dropdown' multiple="multiple">
			<option value="">Filter by Nature of Appointment</option>
			@{{#each natures_of_appointment}}
				<option value="@{{id}}">@{{name}}</option>
			@{{/each}}			
		</select>
	</div>
	<div class="two wide inline field">
		<div class="ui toggle checkbox">
			<input type="checkbox" class="" name="advanced_search" value="check" id="advanced_search_toggle" onchange="toggleAdvanceSearch(this)">
			<label for="advanced_search_toggle">Advanced</label>
		</div>
	</div>
</div>
<div class="advanced-search-fields fields" style="@{{showIfAdvanced}}">
	<div class="four wide field">
		<select name="filter[teachers][qualification_id][in][]" class='ui dropdown' multiple="multiple">
			<option value="">Filter by Qualification </option>
			@{{#each qualifications}}
				<option value="@{{id}}" @{{propertyCheckIn ../searchFilters.teachers.qualification_id.in id}} >@{{name}}</option>
			@{{/each}}			
		</select>
	</div>
	<div class="four wide field">
		<select name='filter[teachers][social_category_id][in][]' class="ui multi dropdown" multiple="multiple">
			<option value="">Filter by social categories</option>
			@{{#each social_categories}}
			<option value="@{{id}}" @{{propertyCheckIn ../searchFilters.teachers.social_category_id.in id}}>@{{name}}</option>
			@{{/each}}
		</select>
	</div>
	<div class="four wide field">
		<select name='filter[teachers][professional_qualification_id][in][]' class="ui multi dropdown" multiple="multiple">
			<option value="">Filter by professional qualification</option>
			@{{#each professional_qualifications}}
			<option value="@{{id}}" @{{propertyCheckIn ../searchFilters.teachers.professional_qualification_id.in id}}>@{{name}}</option>
			@{{/each}}
		</select>
	</div>
</div>
<div class="advanced-search-fields fields" style="@{{showIfAdvanced}}">
	<div class="four wide field">
		<select name='filter[teachers][disability_id][in][]' class="ui multi dropdown" multiple="multiple">
			<option value="">Filter by disability</option>
			@{{#each disabilities}}
			<option value="@{{id}}" @{{propertyCheckIn ../searchFilters.teachers.disability_id.in id}} >@{{name}}</option>
			@{{/each}}
		</select>
	</div>
	<div class="three wide inline field">
		<div class="ui toggle checkbox">
			<input type="checkbox" class="" name='filter[teachers][trained_for_cwsn]'>
			<label for="filter_trained_for_cwsn">Trained For CSWN</label>
		</div>
	</div>
	<div class="three wide field">
		<input type="text" name="filter[teachers][father_name][like]" placeholder='Search by Father&lsquo;s Name' value="@{{searchFilters.teachers.father_name.like}}">
	</div>
	<div class="three wide field">
		<input type="text" name="filter[teachers][mother_name][like]" placeholder='Search by Mother&lsquo;s Name' value="@{{searchFilters.teachers.mother_name.like}}">
	</div>
	<div class="three wide field">
		<input type="text" name="filter[teachers][spouse_name][like]" placeholder='Search by Spouse&lsquo;s Name' value="@{{searchFilters.teachers.spouse_name.like}}">
	</div>
</div>
<div class="fields">
	<button class="ui primary small icon button" type="submit" ><i class="search icon"></i>Search</button>
	<a href="{{route('teachers.reset-search')}}" class="ui secondary small icon button" type="submit" ><i class="remove icon"></i>Reset</a>
</div>
</script>