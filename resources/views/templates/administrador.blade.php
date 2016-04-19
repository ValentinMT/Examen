<?php session_start() ?>

<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<?php $route = Route::current()->uri(); ?>
	@if($route == 'administrador') <?php $route = 'Bienvenido '.session()->get('administrador')->nombre ?> @endif
	@if($route == 'administrador/mascotas') <?php $route = 'Registrar mascota' ?> @endif
	@if($route == 'mascotasRegistradas/{id}') <?php $route = 'Información mascota' ?> @endif
	<title>{{ $route }}</title>
	<link rel="stylesheet" href="/css/materialize.min.css"/>
	<link rel="stylesheet" href="/css/app.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>

<body>
	<?php $route = Route::current()->uri(); ?>
	@yield('content')
    <script src="/js/jquery-2.2.1.min.js"></script>
	<script src="/js/materialize.min.js"></script>
	<script src="/js/app.js"></script>
</body>

</html>