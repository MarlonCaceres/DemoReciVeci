@extends ('layouts.principal')

@section('content')

<link rel="stylesheet" type="text/css" href="css/involucrate.css">

<div id="section1" class="fd-tomate blanco centrar seccion1">
	<div class="row">
		<div class="col">
			<h1 class="negrilla">Cómo ser un ReciVeci.</h1>		
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-7">
			<!--h3>Quieres empezar a ser un ReciVeci en tu barrio.</h3-->
			<h3 style="padding-top: 20px;">Aprende como puedes implementar ReciVeci en tu barrio.</h3>		
		</div>
		<div class="col-md-3">
			<span><a href="files/FAQs.docx" download="Manual ReciVeci" class="descarga">Descarga el<br>Manual ReciVeci
			<br>		
			<img src="images/download.svg" width="40"></a></span>			
		</div>
		<div class="col-md-1"></div>
	</div>
	
</div>

<div id="section2" class="fd-azul seccion2-aux">
	<div class="centrar row  blanco">
		<div class="col">
			<!--h2 class="negrilla">Voluntarios y Colaboradores</h2-->
			<h1 class="negrilla">Se parte del Equipo de ReciVeci...!!!</h1>
		</div>
	</div>
	<br>
	<!--form action="#" method="get" class="">
		<div class="form-row " id="formulario_voluntario">	
			<div class="col-md-1"></div>
			<div class="col-md-4" class="form-group">
				<input type="text" name="Nombres" class="form-control" placeholder="Juan José Flores">
				<input type="text" name="Teléfono" class="form-control" placeholder="0221234567">
				<input type="text" name="Teléfono" class="form-control" placeholder="0221234567">
			</div>
			<div class="col-md-1"></div>
			<div class="col-md-4">
				<input type="text" name="area" class="form-control" placeholder="Aréa">
				<input type="text" name="Correo" class="form-control" placeholder="JuanJose@reciveci.com">
				<input type="text" name="Teléfono" class="form-control" placeholder="0221234567">
			</div>
			<div class="col-md-2 centrar">

				<button class="vertical btn-enviar negrilla blanco" >ENVIAR</button>
			</div>
		</div>
	</form-->

	
	<form action ="guardar()" method="POST" class="">
		<div class="form-row centrar" id="formulario_voluntario">	
			<div class="col-3"></div>
			<div class="col-6" class="form-group" style="">
				<input type="text" name="Nombres" class="form-control " placeholder="Juan José Flores">
				<input type="text" name="Correo" class="form-control" placeholder="Juan.Jose@reciveci.ec">
				
				<select name="tipo_vol" class="form-control" hidden>
					<option>Seleccione una opción</option>
					<option>Diseño Web y Móvil</option>
					<option>Desarrollo de Sistemas</option>
					<option>Capacitaciones</option>
				</select>
				
				<textarea class="form-control" rows="5" cols="81" placeholder="Su mensaje aquí." name="mensaje"></textarea>
				
				<button class="btn-aux negrilla blanco" >ENVIAR</button>		
			</div>
			<div class="col-3"></div>
		</div>
	</form>	
</div>



@stop