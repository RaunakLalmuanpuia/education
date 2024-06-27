	<a href="{{route('public.teachers.index')}}" class="item">Teachers</a>
	<div href="#" class="ui dropdown item">Schools
		<div class=" menu">
			<a class="item" href="{{route('public.schools.index')}}">List</a>
			<a class="item" href="{{route('schools.map')}}">Map</a>
		</div>
	</div>

	<a href="{{route('contact')}}" class="item">Contact Us</a>

	<div class="right menu">
		<a href="/auth/login" class="ui item">
			<i class="big lock icon"></i>
		</a>
	</div>