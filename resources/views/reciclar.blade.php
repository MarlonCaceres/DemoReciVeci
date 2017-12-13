@extends('layouts.principal')
@section('content')

<link rel="stylesheet" type="text/css" href="css/como_reciclar.css">
<link rel="stylesheet" type="text/css" href="css/animacion_reciclar.css">

<section id="reciclar1"  >
	<div class="centrar ">
		<br>
		<p class="titulo celeste negrilla">QUÉ Y CÓMO SEPARAR</p>
		<h3 class="celeste">en base al reciclaje en <span class="negrilla">Ecuador</span></h3>
		<p class="parrafo-1">Por falta de empresas recicladoras, poca información o poca convenienvia<br>económica, las recicladoras de base no siempre recogen todos los residuos<br>reciclables. Si tienes algún residuo reciclable que tu recicladora no recoge, habla con<br>tu recicladora y conéctala con ReciVeci para entregarle más información.
		</p>
	</div>
</section>

<section id="reciclar2" >
	<br>
	<div class="row">
		<div class="col-md-3 col-sm-1"></div>
		<div class="col-md-2 col-sm-3" style="text-align: right;">
			
			<button class="btn-reciclar " onclick="reciclable()" id="img-reciclable">
				 <span class="texto"><img src="images/reciclar/corazon.PNG" width="100" style="padding-bottom: 12px;"></span>
			</button>

			<!--input type="button" class="btn fd-verde blanco negrilla " name="btn_reciclable" value="Reciclable" onclick="reciclable()"-->
		</div>
		<div class="col-md-2 col-sm-3" style="text-align: center;">
			<button class="btn-ordinario1" onclick="no_reciclable()">
				 <span class="texto"><img src="images/reciclar/ordinarios.png" width="80" style="padding-bottom: 12px;"></span>
			</button>
			<!--input type="button" class="btn fd-tomate blanco negrilla " name="btn_no_reciclable" value="No Reciclable" onclick="no_reciclable()"-->
		</div>
		<div class="col-md-2 col-sm-3" style="text-align: left;">
			<button class="btn-especiales" onclick="especiales()">
				 <span class="texto"><img src="images/reciclar/ordinarios.png" width="80" style="padding-bottom: 12px;"></span>
			</button>
			<!--input type="button" class="btn fd-rojo blanco negrilla " name="btn_especiales" value="Peligrosos y Especiales" onclick="especiales()"-->
		</div>
		<div class="col-md-3 col-sm-1"></div>
	</div>
	<br><br>
	<div style="float: none; position: relative; left: 6%;" class="centrar" onchange="ocultar()" id="categorias">
		<ul class="nav " id="myTab" role="tablist">
			<li></li>
		  <li class="nav-item " id="plastico" >
		    <a class="nav-link active" id="plastico-tab" data-toggle="tab" href="#plastico" role="tab" aria-controls="plastico" aria-selected="true" onclick="activo('plastico');">
		    	<img src="images/reciclar/categorias/plastico.png" width="100"><br><br><span id="plastico" class="negrilla gris">PLÁSTICO</span>
		    </a>
		  </li>
		  <li class="nav-item" id="papel">
		    <a class="nav-link" id="papel-tab" data-toggle="tab" href="#papel" role="tab" aria-controls="papel" aria-selected="false" onclick="activo('papel');">
		    	<img src="images/reciclar/categorias/papel.png" width="100"><br><br><span id="papel" class="negrilla gris">PAPEL</span>
		    </a>
		  </li>
		  <li class="nav-item" id="chatarra">
		    <a class="nav-link" id="chatarra-tab" data-toggle="tab" href="#chatarra" role="tab" aria-controls="chatarra" aria-selected="false" onclick="activo('chatarra');" >
		    	<img src="images/reciclar/categorias/chatarra.png" width="100"><br><br><span id="chatarra" class="negrilla gris">CHATARRA</span>
		    </a>
		  </li>
		  <li class="nav-item" id="tech" >
		    <a class="nav-link active" id="tech-tab" data-toggle="tab" href="#tech" role="tab" aria-controls="tech" aria-selected="false" onclick="activo('tech');">
		    	<img src="images/reciclar/categorias/tech.png" width="100"><br><br><span id="tech" class="negrilla gris">TECH</span>
		    </a>
		  </li>
		  <li class="nav-item" id="vidrio">
		    <a class="nav-link" id="vidrio-tab" data-toggle="tab" href="#vidrio" role="tab" aria-controls="vidrio" aria-selected="false" onclick="activo('vidrio');">
		    	<img src="images/reciclar/categorias/vidrio.png" width="100"><br><br><span id="vidrio" class="negrilla gris">VIDRIO</span>
		    </a>
		  </li>
		  <li class="nav-item" id="compuesto" >
		    <a class="nav-link active" id="compuesto-tab" data-toggle="tab" href="#compuesto" role="tab" aria-controls="compuesto" aria-selected="false" onclick="activo('compuesto');">
		    	<img src="images/reciclar/categorias/compuesto.png" width="100"><br><br><span id="compuesto" class="negrilla gris" >COMPUESTO</span>
		    </a>
		  </li>
		  <li class="nav-item" id="organico">
		    <a class="nav-link" id="organico-tab" data-toggle="tab" href="#organico" role="tab" aria-controls="organico" aria-selected="false" onclick="activo('organico');">
		    	<img src="images/reciclar/categorias/organico.png" width="100"><br><br><span id="organico" class="negrilla gris">ORGÁNICO</span>
		    </a>
		  </li>
		  <li class="nav-item" id="peligroso">
		    <a class="nav-link" id="peligroso-tab" data-toggle="tab" href="#peligroso" role="tab" aria-controls="peligroso" aria-selected="false" onclick="activo('peligroso');">
		    	<img src="images/reciclar/categorias/peligroso.png" width="100"><br><br><span id="peligroso" class="negrilla gris">PELIGROSO</span>
		    </a>
		  </li>
		  <li class="nav-item" id="especiales">
		    <a class="nav-link" id="especiales-tab" data-toggle="tab" href="#especiales" role="tab" aria-controls="especiales" aria-selected="false" onclick="activo('especiales');">
		    	<img src="images/reciclar/categorias/especiales.png" width="110"><br><br><span id="especiales" class="negrilla gris">ESPECIALES</span>
		    </a>
		  </li>
		  
		</ul>
	</div>
	
	<div id="content_categoria" class="centrar" onchange="ocultar()">
		<br><br>
		<div class="row">
			<div class="col" id="plastico-content" >
				<div class="row">
					<div class="col">
						<div class="view view-ninth">
							<img src="images/reciclar/categorias/reciclable/plastico/g208.png" width="200" height="200">
							<div class="mask mask-1"></div>
							<div class="mask mask-2"></div>
							<div class="content">
								<p><br><br>Enjuaga los envases<br>y entregalos a tu<br>reciclador de base</p>
						</div>
					</div>
						
					</div>
					<div class="col">
						<img src="images/reciclar/categorias/reciclable/plastico/g220.png" width="200" height="200">
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col" id="papel-content">
				<div class="row">
					<div class="col" >
						<img src="images/reciclar/categorias/reciclable/papel/periodico.jpg" width="200" height="200">
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col"  id="chatarra-content">
				<div class="row">
					<div class="col" >
						<img src="images/reciclar/categorias/reciclable/chatarra/aluminio.jpg" width="200" height="200">
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col" id="compuesto-content" >
				<div class="row">
					<div class="col" >
						<img src="images/reciclar/categorias/no_reciclable/compuesto/tetrapack.jpg" width="200" height="200">
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col" id="organico-content" >
				<div class="row">
					<div class="col" >
						<img src="images/reciclar/categorias/no_reciclable/organico/organico.png" width="200" height="200">
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col" id="peligroso-content" >
				<div class="row">
					<div class="col" >
						<img src="images/reciclar/categorias/no_reciclable/peligroso/peligroso.png" width="200" height="200">
					</div>	
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col" id="tech-content" >
				<div class="row">
					<div class="col" >
						<img src="images/reciclar/categorias/reciclable/tech/telefono.jpg" width="200" height="200">
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col" id="vidrio-content" >
				<div class="row">
					<div class="col" >
						<img src="images/reciclar/categorias/reciclable/vidrio/vidrio.jpg" width="200" height="200">
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col" id="especiales-content" >
				<div class="row">
					<div class="col" >
						<img src="http://duncanlock.net/images/posts/better-figures-images-plugin-for-pelican/dummy-200x200.png" width="200" height="200">
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
</section>

<section id="reciclar3">
	<div class="centrar">
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		    	<img src="images/fondoazul.png" width="100%" height="250px">
		      <div class="carousel-caption d-none d-md-block">
			    <h1 class="negrilla">TIPS</h1>
			    <br>
			    <p class="parrafo">EVITA EL USO DEL SORBETE. CASI NUNCA SE RECICLA, <br>
			    	TIENE UN EFECTO ENORME EN EL MEDIO AMBIENTE, <br>Y NOCUMPLE UNA FUNCIÓN HIGIÉNICA.</p>
			  </div>
		    </div>
		    <div class="carousel-item">
		    	<img src="images/fondoazul.png" width="100%" height="250px">
		      <div class="carousel-caption d-none d-md-block">
			    <h1 class="negrilla">TIPS</h1>
			    <br>
			    <p class="parrafo">EVITA EL USO DEL SORBETE. CASI NUNCA SE RECICLA, <br>
			    	TIENE UN EFECTO ENORME EN EL MEDIO AMBIENTE, <br>Y NOCUMPLE UNA FUNCIÓN HIGIÉNICA.</p>
			  </div>
		    </div>
		    <div class="carousel-item">
		    	<img src="images/fondoazul.png" width="100%" height="250px">
		      <div class="carousel-caption d-none d-md-block">
			    <h1 class="negrilla">TIPS</h1>
			    <br>
			    <p class="parrafo">EVITA EL USO DEL SORBETE. CASI NUNCA SE RECICLA, <br>
			    	TIENE UN EFECTO ENORME EN EL MEDIO AMBIENTE, <br>Y NOCUMPLE UNA FUNCIÓN HIGIÉNICA.</p>
			  </div>
		    </div>
		  </div>

		  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
	</div>
</section>

<section id="reciclar4" hidden>
	<div class="centrar ">
		<br>
		<p class="titulo celeste negrilla">¿CUÁNTO HEMOS RECICLADO JUNTOS?</p>
		<h3 class="celeste">en toneladas por los recicladores activos en ReciVeci</h3>
		<img src="images/reciclar/estadisticas.png">
	</div>
</section>

<script type="text/javascript" src="js/reciclarController.js"></script>
@stop