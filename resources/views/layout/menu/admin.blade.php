	<div href="#" class="ui dropdown item">Teachers
		<div class=" menu">
			<a class="item" href="{{route('teachers.index')}}">List</a>
			<a class="item" href="{{route('teachers.list')}}">Year wise abstract</a>
			<a class="item" href="{{route('teachers.create')}}">Add New</a>
		</div>
	</div>
	<div href="#" class="ui dropdown item">Schools
		<div class=" menu">
			<a class="item" href="{{route('schools.index')}}">List</a>
			<a class="item" href="{{route('schools.map')}}">Map</a>
			<!-- <a class="item" href="{{route('schools.create')}}">Add New</a> -->
			<a class="item" href="{{route('schools.import.get')}}">Import Statistics</a>
		</div>
	</div>
	<div class="ui dropdown item">Reports
		<div class="menu">
			<a href="{{route('reports.school')}}" class="item">School Wise</a>
			<a href="{{route('reports.category')}}" class="item">School Category</a>
			<a href="{{route('reports.qualification')}}" class="item">Qualification</a>
			<a href="{{route('reports.management')}}" class="item">Management</a>
			<a href="{{route('reports.subject')}}" class="item">Subject</a>
			<a href="{{route('reports.appointment')}}" class="item">Appointment</a>
			<a href="{{route('reports.grade')}}" class="item">Grade</a>
			<a href="{{route('reports.retirement')}}" class="item">Retirement</a>
			<a href="{{route('reports.training')}}" class="item">Training Status</a>
		</div>
	</div>


	<a href="{{route('contact')}}" class="item">Contact Us</a>

	<div class="right menu">
		<a href="/auth/logout" class="ui item">
			<i class="log out icon"></i>
		</a>
	</div>