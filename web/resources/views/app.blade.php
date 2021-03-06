<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>

	<link href="/css/app.css" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
	@if(Auth::user())
		<body class="sidebar-push sticky-footer">
	@else
		<body class="sticky-footer">
	@endif

	@if(Auth::user())
		@include('partials.navbar')
		@include('partials.sidebar')
		@include('partials.page-title')
	@endif

	<div class="container">
		<div id="main">
        @include('flash::message')
        @yield('content')
		</div>
	</div>

    @yield('footer')

	<!-- Scripts -->
	<script src="/js/vendor/jquery.min.js"></script>
	<script src="/js/vendor/plugins.min.js"></script>
	<script src="/js/app.js"></script>

    <script>
        $('#flash-overlay-modal').modal();
    </script>

</body>
</html>
