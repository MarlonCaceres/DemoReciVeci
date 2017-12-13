console.log('Cargando Controlador');

var ocultar= function(){
	var x= document.getElementById('categorias');
	//console.log(x);

	//document.getElementById('categorias').style.display='none';
	document.getElementById('content_categoria').style.display='none';
	
}

var reciclable= function(){
	var x = document.getElementById('plastico');
	//console.log(x);
	document.getElementById('categorias').style.display='inline';
	if (x.style.display==='none') {
		document.getElementById("plastico").style.display = "inline";
		document.getElementById("papel").style.display = "inline";
		document.getElementById("chatarra").style.display = "inline";
		document.getElementById("vidrio").style.display = "inline";
		//document.getElementById("reciclable6").style.display = "inline";
		document.getElementById("compuesto").style.display = "inline";

		document.getElementById("tech").style.display = "none";
		document.getElementById("organico").style.display = "none";
		document.getElementById("peligroso").style.display = "none";
		document.getElementById("especiales").style.display = "none";
	}else{
		//document.getElementById("compuesto").style.display = "none";
		document.getElementById("tech").style.display = "none";
		document.getElementById("organico").style.display = "none";
		document.getElementById("peligroso").style.display = "none";		
		document.getElementById("especiales").style.display = "none";
	}
	limpiar();
	limpiarcategorias();
	
}

var no_reciclable= function(){

	var x = document.getElementById('organico');
	//console.log(x);
	document.getElementById('categorias').style.display='inline';
	if (x.style.display==='none') {
		document.getElementById("compuesto").style.display = "none";
		document.getElementById("organico").style.display = "inline";
		document.getElementById("peligroso").style.display = "none";
		document.getElementById("especiales").style.display = "none";
		document.getElementById("plastico").style.display = "none";
		document.getElementById("papel").style.display = "none";
		document.getElementById("chatarra").style.display = "none";
		document.getElementById("tech").style.display = "none";
		document.getElementById("vidrio").style.display = "none";
		//document.getElementById("reciclable6").style.display = "none";
	}else{
		document.getElementById("compuesto").style.display = "none";
		document.getElementById("plastico").style.display = "none";
		document.getElementById("papel").style.display = "none";
		document.getElementById("chatarra").style.display = "none";
		document.getElementById("tech").style.display = "none";
		document.getElementById("vidrio").style.display = "none";
		document.getElementById("peligroso").style.display = "none";
		document.getElementById("especiales").style.display = "none";
		//document.getElementById("reciclable6").style.display = "none";
	}
	limpiar();
	limpiarcategorias();
}

var especiales= function(){
	var x = document.getElementById('peligroso');
	//console.log(x);
	document.getElementById('categorias').style.display='inline';
	if (x.style.display==='none') {
		document.getElementById("compuesto").style.display = "none";
		document.getElementById("organico").style.display = "none";
		document.getElementById("peligroso").style.display = "inline";
		document.getElementById("especiales").style.display = "inline";
		document.getElementById("plastico").style.display = "none";
		document.getElementById("papel").style.display = "none";
		document.getElementById("chatarra").style.display = "none";
		document.getElementById("tech").style.display = "none";
		document.getElementById("vidrio").style.display = "none";
		//document.getElementById("reciclable6").style.display = "none";
	}else{
		document.getElementById("plastico").style.display = "none";
		document.getElementById("papel").style.display = "none";
		document.getElementById("chatarra").style.display = "none";
		document.getElementById("tech").style.display = "none";
		document.getElementById("vidrio").style.display = "none";
		document.getElementById("compuesto").style.display = "none";
		document.getElementById("organico").style.display = "none";
		//document.getElementById("reciclable6").style.display = "none";
	}
	limpiar();
	limpiarcategorias();
}

var activo= function($valor) {
	limpiar();
	document.getElementById($valor).style.borderBottom="2px solid #F7931D";
	document.getElementById($valor).style.paddingBottom="10px";
	//console.log($valor);
	contenido($valor+'-content');
}

function limpiar(){
	document.getElementById('plastico').style.borderBottom="none";
	document.getElementById('papel').style.borderBottom="none";
	document.getElementById('chatarra').style.borderBottom="none";
	document.getElementById('compuesto').style.borderBottom="none";
	document.getElementById('organico').style.borderBottom="none";
	document.getElementById('peligroso').style.borderBottom="none";
	document.getElementById('tech').style.borderBottom="none";
	document.getElementById('vidrio').style.borderBottom="none";
	document.getElementById('especiales').style.borderBottom="none";
}

function contenido($categoria){
	limpiarcategorias();
	//console.log($categoria);
	document.getElementById('content_categoria').style.display='inline';
	document.getElementById($categoria).style.display='inline';
}

function limpiarcategorias(){
	document.getElementById('plastico-content').style.display="none";
	document.getElementById('papel-content').style.display="none";
	document.getElementById('chatarra-content').style.display="none";
	document.getElementById('compuesto-content').style.display="none";
	document.getElementById('organico-content').style.display="none";
	document.getElementById('peligroso-content').style.display="none";
	document.getElementById('tech-content').style.display="none";
	document.getElementById('vidrio-content').style.display="none";	
	document.getElementById('especiales-content').style.display="none";	
	//console.log('limpiando categorias');
}

ocultar();

