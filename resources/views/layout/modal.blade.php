<!DOCTYPE html>
<html>
<head>
	<title>Please confirm</title>
	
</head>
<body class="dimmable">
	<div class="pageload-wrap" style="width:100%;min-height: 100vh;background:#2185d0;margin:0;padding:0;text-align: center;height: 100%;position: fixed;z-index: 1;">
		<style>
			body{
				margin:0;
			}
		</style>
		<img src="/images/loader.gif" alt="" style="position:absolute;top:50%">
	</div>
	
	@yield('content')
	
	@section('libraries')
	<link rel="stylesheet" href="/libraries/semantic-ui/dist/semantic.min.css">
	<script type="text/javascript" src="/libraries/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="/libraries/semantic-ui/dist/semantic.min.js"></script>
	@show
	<script type="text/javascript">
		app = {
			route: "{{getCurrentRoute()}}"
		};
	</script>
	<script type="text/javascript" src="/js/all.js"></script>
</body>
</html>