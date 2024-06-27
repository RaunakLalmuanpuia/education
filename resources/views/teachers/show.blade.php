@extends('layout.main')

@section('pageHeader')
<h1 class="ui dividing header">
	{{$teacher->name}}
	<a href="#post-history" class="fr" data-title="Posting History" data-content="View posting history of Lianphunghminga Hmar ">
		<i class="history icon"></i>
	</a>
</h1>
@stop

@section('content')
	<div class="ui stackable grid">
		@include('teachers.view.personal-information')
		@include('teachers.view.post-information')
	</div>
	@include('teachers.view.post-history')
	@include('teachers.view.personal-detail')
@stop