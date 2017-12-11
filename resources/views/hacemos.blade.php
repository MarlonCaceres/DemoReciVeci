@extends('layouts.principal')

@section('content')
<link rel="stylesheet" type="text/css" href="css/animacion_hacemos.css">

<section id="hacemos1" class="hacemos1">
	<div class="centrar ">
		<br><br>
		<h1 class="celeste negrilla">EN LA PRÁCTICA ¿QUÉ HACEMOS?</h1>
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