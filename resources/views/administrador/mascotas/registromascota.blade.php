@extends('templates.administrador')

@section('content')

<div class="container">
    <div class="content">
    	<div class="row">
			<div class="input-field col s12">
        		<div class="title2">Registrar mascotas</div>
	        </div>
	    </div>
        <form class="col s12" action="/registromascotaModel" method="POST">
			{{csrf_field()}}
			
				<div class="input-field col s12">
					<input id="nombre" type="text" name="nombre" class="validate" required>
					<label for="nombre">Nombre de mascota</label>
				</div>
				<div class="input-field col s12">
					<input id="edad" type="text" name="edad" class="validate" required>
					<label for="edad">Edad</label>
				</div>
			
				<div class="input-field col s12">
					<input id="tipo" type="text" name="tipo" class="validate" required>
					<label for="tipo">Tipo</label>
				</div>
				<div class="input-field col s12">
					<input id="color" type="text" name="color" class="validate" required>
					<label for="color">Color</label>
				</div>
			
			<br>
			<div class="row">
				<div class="col s12">
					<a href="/administrador" class="waves-effect waves-light btn-large green accent-4">
						<b>REGRESAR</b>
			  		</a>
			  		<button class="waves-effect waves-light btn-large green accent-4" type="submit" name="action">
				    	<b>REGISTRAR</b>
				  	</button>
				</div>		    
			</div>
		</form>
    </div>

    <br>
    <img src="/imagenes/Sombra3.png" alt="" class="responsive-img">
    <br>
    <?php foreach ($mascotas as $mascota): ?>
	    <b>
	    	<a style="color: black;" href="/mascotasRegistradas/<?=$mascota['id']?>"><?=$mascota['nombre']?></a>
	    </b>
	    <br>
	<?php endforeach ?>
</div>

@stop