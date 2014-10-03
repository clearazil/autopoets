<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Autopoets</title>
		<link href="/css/stylesheet.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div class="header">
			@yield('nav')
		</div>
		<div class="container">
			@yield('content')
		</div>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="js/app.js"></script>
	</body>
</html>