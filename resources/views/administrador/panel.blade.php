@extends('templates.administrador')

@section('content')

<div class="container">
    <div class="content">
        <div class="title3"><b>Panel de administración</b></div>
		<a href="/administrador/mascotas" class="waves-effect waves-light btn-large green accent-4">
			<b>REGISTRAR MASCOTA</b>
	  	</a>
	  	<a href="/logout" class="waves-effect waves-light btn-large red darken-4">
			<b>SALIR</b>
	  	</a>
    </div>
</div>

@stop