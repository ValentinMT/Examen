@extends('templates.website')

@section('content')

<div class="container">
    <div class="content">
    	<div class="row">
			<div class="input-field col s12">
        		<div class="title2">Registro de usuario</div>
	        </div>
	    </div>
        <form class="col s12" action="/registrousuarioModel" method="POST">
			{{csrf_field()}}
			
				<div class="input-field col s12">
					<input id="nombre" type="text" name="nombre" class="validate" required>
					<label for="nombre">Nombre de usuario</label>
				</div>
				<div class="input-field col s12">
					<input id="email" type="email" name="email" class="validate" required>
					<label for="email">Email</label>
				</div>
				<div class="input-field col s12">
					<input id="password" type="password" name="password" class="validate" required>
					<label for="password">Password</label>
				</div>
			
			<br>
			<div class="row">
				<div class="col s12">
					<a href="/" class="waves-effect waves-light btn-large green accent-4">
						<b>REGRESAR</b>
			  		</a>
			  		<button class="waves-effect waves-light btn-large green accent-4" type="submit" name="action">
				    	<b>REGISTRAR</b>
				  	</button>
				</div>
				
			</div>
		</form>
    </div>
</div>

@stop