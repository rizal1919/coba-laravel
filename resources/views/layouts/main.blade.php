<?php 

// header("refresh: 2");

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>{{ $title }}</title>
	<link href="css/style.css?version=<?php echo filemtime('css/style.css'); ?>" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	@include('partials/navbar')
	@yield('container')
</body>
</html>