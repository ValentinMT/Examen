@extends('templates.website')

@section('content')

<div class="container">
    <div class="content">
    	<img src="/imagenes/animales.png" alt="" class="responsive-img">
        <div class="title"><b>Veterinaria Blanca</b></div>
		<a href="/registrousuario" class="waves-effect waves-light btn-large green accent-4">
			<b>REGISTRAR USUARIO  </b>
	  	</a>
	  	<a href="/iniciosesion" class="waves-effect waves-light btn-large  light-blue accent-4">
			<b>INICIAR SESIÓN  </b>
	  	</a>
    </div>
</div>

@stop