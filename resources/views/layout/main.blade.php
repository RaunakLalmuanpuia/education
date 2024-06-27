<!DOCTYPE html>
<html>
<head>
	<title>{{isset($pageTitle) ? $pageTitle . ' - ' :''}} Total Information on Schools and Teachers</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript">
		app = {
			route: "{{getCurrentRoute()}}",
			token: "{{csrf_token()}}"
		};
	</script>
</head>
<body class="route-{{str_replace('.','-',getCurrentRoute())}}">
	<div class="pageload-wrap" style="width:100%;min-height: 100vh;background:#2185d0;margin:0;padding:0;text-align: center;height: 100%;position: fixed;z-index: 1;">
		<style>
			body{
				margin:0;
			}
		</style>
		<img src="/images/loader.gif" alt="" style="position:absolute;top:50%">
	</div>
	<div class="blue header ui container">
		<div class="ui grid">
				<div class="one wide column">
					<img src="//assets.mizoram.gov.in/senhri/public/libraries/senhri-common-assets/images/emblem.png" alt="" style="max-height:65px">
				</div>
				<div class="fifteen wide column">
					<h2><a href="/">Total Information on Schools and Teachers</a></h2>
					<p>Directorate of School Education, Government of Mizoram</p>
				</div>
		</div>
	</div>
	<div class="full height loading-hidden">
		@include('layout.menu.container', ['currentUserRole' => $currentUserRole])
		
		<div class="ui container">
			@yield('pageHeader')
			@include('layout.messages')
			@yield('content')
		</div>
	</div>
	<div class="ui blue inverted vertical main footer segment loading-hidden">
		<div class="ui center aligned container">
			
			<div class="ui inverted section divider"></div>
				<img src="/images/msegs-logo.png" class="ui centered small image">
				<div class="ui horizontal inverted small divided link list">
					<a class="item" href="http://msegs.mizoram.gov.in/" target="_blank">Mizoram State E-Governance Society</a>
				</div>
		</div>
	</div>

	@section('libraries')
	<link rel="stylesheet" href="/libraries/semantic-ui/dist/semantic.min.css">
	<link rel="stylesheet" href="/css/datetimepicker_standalone.css">
	<link rel="stylesheet" href="{{ my_own_elixir("css/app.css") }}">

	<script type="text/javascript" src="/libraries/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="/libraries/semantic-ui/dist/semantic.min.js"></script>
	<script type="text/javascript" src="/libraries/smalot-bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
	<script type="text/javascript" src="/libraries/handlebars/handlebars.min.js"></script>
	
	<script type="text/javascript" src="/js/all.js"></script>
	@show
</body>
</html>