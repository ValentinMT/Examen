@extends('templates.website')

@section('content')

<div class="container">
    <div class="content">
    	<div class="row">
				<div class="input-field col s12">
        		<div class="title3">Iniciar sesión</div>
	        </div>
	    </div>
        <form class="col s12" action="/login" method="POST">
			{{csrf_field()}}
			@if(Session::has('error'))
		        <p class="error"><center>Error en usuario o contraseña</center></p>
		    @endif
			
				<div class="input-field col s12">
					<input id="email" type="email" name="email" class="validate" required>
					<label for="email">Email de usuario</label>
				</div>
			
				<div class="input-field col s12">
					<input id="password" type="password" name="password" class="validate" required>
					<label for="password">Password de usuario</label>
				</div>

			<br>
			<div class="row">
				<div class="col s12">
					<a href="/" class="waves-effect waves-light btn-large green accent-4">
						<b>REGRESAR</b>
			  		</a>
					<button class="waves-effect waves-light btn-large green accent-4" type="submit" name="action">
			    		<b>INICIAR SESIÓN</b>
			  		</button>
				</div>
			</div>
		</form>
    </div>
</div>

@stop