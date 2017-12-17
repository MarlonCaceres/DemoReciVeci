@extends('layouts.principal')

@section('content')
<link rel="stylesheet" type="text/css" href="css/animacion_hacemos.css">
<link rel="stylesheet" type="text/css" href="css/hacemos.css">

<section id="hacemos1" class="hacemos1">
	<div class="centrar ">
		<br>
		<h1 class="celeste negrilla ">EN LA PRÁCTICA ¿QUÉ HACEMOS?</h1>
		<br>
		<div class="row centrar texto-aux fd-tomate">
			<div class="col">
				<h2 class="blanco ">ReciVeci es una iniciativa de voluntariado ciudadano<br>e independiente que promueve el reciclaje inclusivo en<br>Ecuador.<br><br>Somos un grupo organizado que busca generar una<br>cultura de reciclaje por medio de un vínculo humano<br>entre recicladores/as de base y ciudadanos/as.</h2>
			</div>
		</div>

		<div class="row centrar texto-aux fd-verde">
			<div class="col">
				<h1 class="blanco negrilla">Trabajamos en:<br></h1>
				<br>
				<h5>
					<ul class="blanco negrilla">
						<li></li>
						<li> Incrementar los porcentajes de separación de residuos en los hogares ecuatorianos.<br>&nbsp</li>
						<li>Recuperar el material reciclable  de forma eficiente por parte de los/as recicladores/as de base.<br>&nbsp</li>
						<li>Capacitar a los/as vecinos/as, instituciones, barrios y vincularlos/as directamente con el/la reciclador/a de su barrio.<br>&nbsp</li>
						<li>Generar herramientas para fortalecer la capacitación ciudadana: talleres, app. móvil, web y redes sociales.<br>&nbsp</li>
						<li>Fortalecer la organización de los/as recicladores/as de base e incrementar su potencial emprendedor.</li>
					</ul>
				</h5>
			</div>
		</div>
		<br>
		<table class="practica">
			<tr>
				<td width="350">
					<div class="view view-ninth">
						<img src="images/que_hacemos/foto1.jpg" width="300" height="200">
						<div class="mask mask-1"></div>
						<div class="mask mask-2"></div>
						<div class="content">
							<p>Hacemos capacitaciones sobre
								<br>reciclaje inclusivo puerta a puerta
								<br>en los barrios con los vecinos,
								<br>además de participar en festivales,
								<br>conciertos y ferias con el mismo
								<br>objetivo. </p>
						</div>
					</div>

				</td>
				<td width="350">
					<div class="view view-ninth">
						<img src="images/que_hacemos/foto2.jpg" width="300" height="200">
						<div class="mask mask-1"></div>
						<div class="mask mask-2"></div>
						<div class="content">
							<p>Trabajamos semana a semana,<br>minuciosamente y de manera<br>personalizada con los recicladores<br>involucrados en ReciVeci, para que se<br>empoderen y reciban beneficios,<br>talleres y seguimiento.</p>
						</div>
					</div>
				</td>
				<td width="350">
					<div class="view view-ninth">
						<img src="images/que_hacemos/foto3.jpg" width="300" height="200">
						<div class="mask mask-1"></div>
						<div class="mask mask-2"></div>
						<div class="content">
							<p>Conseguimos equipo de<br>trabajo para que los<br>recicladores generen<br>estadísticas e<br>indicadores de impacto.</p>
						</div>
					</div>
				</td>
			</tr>
			<tr>
				<td width="350">
					<div class="view view-ninth">
						<img src="images/que_hacemos/foto4.jpg" width="300" height="200">
						<div class="mask mask-1"></div>
						<div class="mask mask-2"></div>
						<div class="content">
							<p>Trabajamos todo el tiempo en<br>
								mejorar el contenido de esta<br>
								página y de nuestra app para<br>
								generar ese vínculo entre el<br>
								reciclador de base, tú y el<br>
							medio ambiente.</p>
						</div>
					</div>
				</td>
			</tr>
		</table>
		<br>
	</div>
</section>

<section id="hacemos2" class="hacemos2" hidden>
	<div class="centrar ">
		<br><br>
		<h1 class="celeste negrilla">HISTORIA</h1>
		<img src="images/inicio/time-line.jpg" >
		<br>
	</div>
</section>

@stop