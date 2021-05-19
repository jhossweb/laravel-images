<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<title> @yield('title') </title>
</head>
<body class="bg-gray-50">

	@include('layouts.partials.header')

	<div class="container-fluid">
		{{-- CONTENT --}}
		@yield('content')
	</div>

	<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>