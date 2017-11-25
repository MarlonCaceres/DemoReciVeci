@extends('layouts.principal')

@section('content')
<link href="css/animacion_afectacion.css" rel="stylesheet">
<section id="reciclaje1" class="reciclaje1">
	<div class="centrar fondo">
		<br><br><br>
		<h1 class="celeste negrilla">¿QUÉ ES RECICLAJE INCLUSIVO?</h1>
		<br><br>
		<p class="blanco letra-p1 ">Hay alguien que recoge, separa, limpia y <br>vende nuestros residuos reciclables, y con esos <br>ingresos sustenta a su familia.</p>
		<br>
		<p class="blanco letra-p1">Reciclaje inclusivo es <br><span class="blanco letra-p1-negrilla">INCREMENTAR Y POTENCIAR LA LABOR <br>DE LOS RECICLADORES DE BASE, <br>COMO EJE DEL PROCESO</span></p>	
		<br><br><br>
	</div>
</section>

<section id="reciclaje2" class="reciclaje2">
	<div class="centrar ">
		<br><br>
		<h1 class="celeste negrilla">¿CÚAL ES LA SITUACIÓN ACTUAL?</h1>
		<br>
		<img src="images/inicio/estadisticas.PNG">
		<br><br><br>
	</div>
</section>

<section id="reciclaje3" class="reciclaje3">
	<!--div class="centrar  fondo3">
		<br><br>
		<P class="blanco negrilla derecha letra-p3">LOS RECICLADORES <br>DE BASE <br>PASAN ANTES QUE <br>EL CAMIÓN <br>RECOLECTOR</P>
		<br><br>
	</div-->
	
	<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img class="d-block w-100" src="images/inicio/proceso/proceso1.PNG" alt="Proceso 1">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="images/inicio/proceso/proceso2.PNG" alt="Proceso 2">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="images/inicio/proceso/proceso3.PNG" alt="Proceso 3">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="images/inicio/proceso/proceso4.PNG" alt="Proceso 4">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="images/inicio/proceso/proceso5.PNG" alt="Proceso 5">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="images/inicio/proceso/proceso6.PNG" alt="Proceso 6">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="images/inicio/proceso/proceso7.PNG" alt="Proceso 7">
	    </div>
	  </div>
	</div>
</section>

<section id="reciclaje4" class="reciclaje4">
	<div class="centrar ">
		<br><br>
		<h1 class="celeste negrilla">AFECTACIÓN</h1>
		<br>
		<table class="afectacion">
			<tr>
				<td width="170">
					
					<div class="view view-ninth">
						<img src="images/inicio/afectacion/afectacion1.png" width="140" >
						<div class="mask mask-1"></div>
						<div class="mask mask-2"></div>
						<div class="content">
							<p><br>CAMINAR<br>LARGAS<br>DISTANCIAS</p>
							
						</div>
					</div>

				</td>
				<td width="170">
					<div class="view view-ninth">
						<img src="images/inicio/afectacion/afectacion2.png" width="140" >
						<div class="mask mask-1"></div>
						<div class="mask mask-2"></div>
						<div class="content">
							<p>+ DE 8H<br>DE TRABAJO<br>AL DÍA<br>(mañana y <br>noche)</p>
							
						</div>
					</div>
				</td>
				<td width="170">
					<div class="view view-ninth">
						<img src="images/inicio/afectacion/afectacion3.png" width="140" >
						<div class="mask mask-1"></div>
						<div class="mask mask-2"></div>
						<div class="content">
							<p><br>EXCLUSIÓN<br>ECONÓMICA<br>Y SOCIAL</p>
							
						</div>
					</div>
				</td>
				<td width="170">
					
					<div class="view view-ninth">
						<img src="images/inicio/afectacion/afectacion4.png" width="140" >
						<div class="mask mask-1"></div>
						<div class="mask mask-2"></div>
						<div class="content">
							<p><br>RIESGOS<br>SANITARIOS</p>
							
						</div>
					</div>
				</td>
				<td width="170">
				
					<div class="view view-ninth">
						<img src="images/inicio/afectacion/afectacion5.png" width="140" >
						<div class="mask mask-1"></div>
						<div class="mask mask-2"></div>
						<div class="content">
							<p><br>ESTRÉS<BR>Y<br>ANSIEDAD</p>
							
						</div>
					</div>
				</td>
				<td width="170">
					
					<div class="view view-ninth">
						<img src="images/inicio/afectacion/afectacion6.png" width="140" >
						<div class="mask mask-1"></div>
						<div class="mask mask-2"></div>
						<div class="content">
							<p><br>DESPERDICIO<br>DE<br>RECURSOS</p>
							
						</div>
					</div>
				</td>
				<td width="170">
					
					<div class="view view-ninth">
						<img src="images/inicio/afectacion/afectacion7.png" width="140" >
						<div class="mask mask-1"></div>
						<div class="mask mask-2"></div>
						<div class="content">
							<p><br>GASTOS<br>PÚBLICOS<br>INNECESARIOS</p>
							
						</div>
					</div>
				</td>
			</tr>
		</table>
		<br><br><br><br>
	</div>
</section>

<section id="reciclaje5" class="reciclaje5">
	<div class="centrar fondo5">
		<br><br>
		<h1 class="blanco negrilla">¿CÚAL ES LA SITUACIÓN ACTUAL?</h1>
		<br>
		<!--img src="images/buscamos.png"-->
		
		<table class="situacion">
			<tr>
				<td width="220"><img src="images/inicio/buscamos/aumentar.png" width="150"></td>
				<td width="220"><img src="images/inicio/buscamos/mejorar.png" width="150"></td>
				<td width="220"><img src="images/inicio/buscamos/educar.png" width="150"></td>
				<td width="220"><img src="images/inicio/buscamos/generar.png" width="150"></td>
				<td width="220"><img src="images/inicio/buscamos/fortalecer.png" width="150"></td>
			</tr>
			<tr><td>&nbsp</td></tr>
			<tr>
				<td width="200">
					<h4 class="negrilla">AUMENTAR</h4>
					<p>% DE SEPARACIÓN DEL<br>MATERIAL RECICLABLE<br>EN LOS HOGARES<br>ECUATORIANOS.</p>
				</td>
				<td width="200">
					<h4 class="negrilla">MEJORAR</h4>
					<p>LA EFICIENCIA<br>DE LOS<br>RECICLADORES<br>DE BASE.</p>
				</td>
				<td width="200">
					<h4 class="negrilla">EDUCAR</h4>
					<p>A LOS VECINOS Y<br>CONECTARLOS<br>DIRECTAMENTE CON<br>LOS RECICLADORES<br>DEL VECINDARIO.</p>
				</td>
				<td width="200">
					<h4 class="negrilla">GENERAR</h4>
					<p>HERRAMIENTAS QUE<br>FORTALEZCAN LA<br>EDUCACION DE LA<br>CIUDADANIA:<br>TALLERES, APPS<br>REDES SOCIALES.</p>
				</td>
				<td width="200">
					<h4 class="negrilla">FORTALECER</h4>
					<p>LA ORGANIZACION<br>SOCIAL DE<br>RECICLADORES E<br>IMPULSAR SU<br>POTENCIAL<br>EMPRESARIAL.</p>
				</td>
			</tr>
		</table>
		<br>
	</div>
</section>

@stop
