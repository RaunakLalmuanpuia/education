	<div class="ui small inverted blue main menu">
		<div class="ui container">
			@if($currentUserRole == 'admin')
				@include('layout.menu.admin')
			@else
				@include('layout.menu.public')
			@endif
		</div>
	</div>