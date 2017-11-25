<!DOCTYPE html>
<html>
<head>
	<title>Reciveci</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <link rel="shortcut icon" href="favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="css/estilo_menu.css">
    
    <link rel="stylesheet" type="text/css" href="css/inicio.css">  
    
    
</head>
<header >
		<div class=" menu_bar centrar" style="margin-top: 20px;">
			<a href="#" class="bt-menu name-logo"><!--span class="name-logo">ReciVeci</span--><img src="images/logo.png" width="150" alt="logo ReciVeci"--><img " src="images/menu_icon.png" width="20"><!--/span--></a>
		</div>
		<nav class="justify-content-between">
			
			<ul>
				<li class="name-logo" style="margin-top: 0"><img src="images/logo.png" width="150" alt="logo_simbolo"></li>
				<li ><a href="home" class="celeste">Inicio</a></li>
				<li><a href="que_hacemos" class="celeste">¿Qué hacemos?</a></li>
				<li><a href="como_reciclar" class="celeste">¿Cómo reciclar?</a></li>
				<li><a href="conoce_a_tu_reciclador" class="celeste">Conoce a tu reciclador</a></li>
				<li><a href="nosotros" class="celeste">¿Quíenes somos?</a></li>
				<li><a href="involucrate" class="celeste">Involúcrate</a></li>
			</ul>
		</nav>
	</header>
<body>
	<hr >
	<div id="content">
		@yield('content')	
	</div>
	
</body>
<footer>
	<br>
	<div class="row">
		<div class="col centrar">
			<div class="mapa_sitio">
				<p class="centrar negrilla">Mapa del Sitio</p>
				<ul >
					<li></li>
					<li><a href="home">Inicio</a></li>
					<li><a href="que_hacemos" >¿Qué hacemos?</a></li>
					<li><a href="como_reciclar" >¿Cómo reciclar?</a></li>
					<li><a href="conoce_a_tu_reciclador" >Conoce a tu reciclador</a></li>
					<li><a href="nosotros" >¿Quíenes somos?</a></li>
					<li><a href="involucrate" >Involucrate</a></li>
				</ul>	
			</div>
		</div>
		
		<div class="col ">
			<div class="">
				<p class="centrar negrilla">Preguntas Frecuentes</p>
				<ul  class="centrar">
					<li></li>
					<li><a href="faq">¿Qué es ReciVeci?</a></li>
					<li><a href="faq">¿Qué es reciclaje inclusivo?</a></li>
					<li><a href="faq">¿Cómo puedo saber si ReciVeci<br>está en mi barrio?</a></li>
					<li><a href="faq">¿Qué es un voluntario ReciVeci?</a></li>
					<li><a href="faq">Ver más...</a></li>
				</ul>
			</div>
		</div>

		<div class="col ">
			<div class="">
				<p class="centrar negrilla">Contáctanos</p>
				<p class="centrar">info@reciveci.ec</p>
			</div>
			<br>
			<div class="">
				<p class="centrar negrilla">Encuéntranos</p>
				
				<ul id="redes" class="centrar">
					<li></li>
					<li><a href="https://www.facebook.com/reciveci/" target="_blank"><img src="images/redes/fb_icon.png" width="40" title="Facebook"></a></li>
					<li><a href="https://twitter.com/reciveci" target="_blank"><img src="images/redes/Twitter.png" width="40" title="Twitter"></a></li>
					<li><a href="https://www.instagram.com/reciveci/" target="_blank"><img src="images/redes/instagram.png" width="40" title="Instagram"></a></li>
					<li><a href="https://www.youtube.com/channel/UCkkkJ2og0MAVj8B_AIgZtaw" target="_blank"><img src="images/redes/Youtube.png" width="40" title="Youtube"></a></li>

				</ul>
			</div>
		</div>
		
	</div>

</footer>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/menu.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
    <script type="text/javascript" src="http://icomoon.io/app"></script>
</html>