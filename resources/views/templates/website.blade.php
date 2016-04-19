<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<?php $route = Route::current()->uri(); ?>
	@if($route == '/') <?php $route = 'Veterinaria blanca' ?> @endif
	@if($route == 'registrousuario') <?php $route = 'Registrar usuario' ?> @endif
	@if($route == 'iniciosesion') <?php $route = 'Iniciar sesión' ?> @endif
	<!--@if($route == 'administrador') <?php $route = 'Bienvenido' ?> @endif-->
	<title>{{ $route }}</title>
	<link rel="stylesheet" href="/css/materialize.min.css"/>
	<link rel="stylesheet" href="/css/app.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>

<body>
	@yield('content')
    <script src="/js/jquery-2.2.1.min.js"></script>
	<script src="/js/materialize.min.js"></script>
	<script src="/js/app.js"></script>
</body>

</html>