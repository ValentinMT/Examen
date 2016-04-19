@extends('templates.administrador')

@section('content')

<div class="container">
    <div class="content">
    	<div class="row">
			<div class="input-field col s12">
        		<div class="title2">Detalle de mascota</div>
	        </div>
	    </div>
    	<div class="row">
			<div class="input-field col s12">
        		<p>
					Nombre: <?=$mascotas['nombre']?>
					<br>
					Edad: <?=$mascotas['edad']?>
					<br>
					Tipo: <?=$mascotas['tipo']?>
					<br>
					Color: <?=$mascotas['color']?>
				</p>
				<a href="/administrador/mascotas" class="waves-effect waves-light btn-large green accent-4">
					<b>REGRESAR</b>
			  	</a>
	        </div>
	    </div>
    </div>
    <br>
</div>

@stop