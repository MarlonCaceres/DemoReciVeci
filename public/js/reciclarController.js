console.log('Cargando Controlador');

var ocultar= function(){
	var x= document.getElementById('categorias');
	console.log(x);

	document.getElementById('categorias').style.display='none';
	document.getElementById('content_categoria').style.display='none';
	
}

var reciclable= function(){
	var x = document.getElementById('reciclable1');
	//console.log(x);
	document.getElementById('categorias').style.display='inline';
	if (x.style.display==='none') {
		document.getElementById("reciclable1").style.display = "inline";
		document.getElementById("reciclable2").style.display = "inline";
		document.getElementById("reciclable3").style.display = "inline";
		document.getElementById("reciclable4").style.display = "inline";
		document.getElementById("reciclable5").style.display = "inline";
		//document.getElementById("reciclable6").style.display = "inline";
		document.getElementById("no_reciclable1").style.display = "none";
		document.getElementById("no_reciclable2").style.display = "none";
		document.getElementById("no_reciclable3").style.display = "none";
	}else{
		document.getElementById("no_reciclable1").style.display = "none";
		document.getElementById("no_reciclable2").style.display = "none";
		document.getElementById("no_reciclable3").style.display = "none";		
	}
	limpiarcategorias();
}

var no_reciclable= function(){

	var x = document.getElementById('no_reciclable1');
	//console.log(x);
	document.getElementById('categorias').style.display='inline';
	if (x.style.display==='none') {
		document.getElementById("no_reciclable1").style.display = "inline";
		document.getElementById("no_reciclable2").style.display = "inline";
		document.getElementById("no_reciclable3").style.display = "inline";
		document.getElementById("reciclable1").style.display = "none";
		document.getElementById("reciclable2").style.display = "none";
		document.getElementById("reciclable3").style.display = "none";
		document.getElementById("reciclable4").style.display = "none";
		document.getElementById("reciclable5").style.display = "none";
		//document.getElementById("reciclable6").style.display = "none";
	}else{
		document.getElementById("reciclable1").style.display = "none";
		document.getElementById("reciclable2").style.display = "none";
		document.getElementById("reciclable3").style.display = "none";
		document.getElementById("reciclable4").style.display = "none";
		document.getElementById("reciclable5").style.display = "none";
		//document.getElementById("reciclable6").style.display = "none";
	}
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
}

function contenido($categoria){
	limpiarcategorias();
	console.log($categoria);
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
	console.log('limpiando categorias');
}

ocultar();
