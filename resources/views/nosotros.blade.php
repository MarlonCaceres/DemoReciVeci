@extends('layouts.principal')
@section('content')

<link rel="stylesheet" type="text/css" href="css/nosotros.css">

<section id="nosotros1">
	<div class="centrar ">
		<br><br><br>
		<p class="titulo celeste negrilla">Somos un grupo de voluntarios</p>
		<h3 class="gris">de la sociedad civil, con experiencia y estudios diversos,<br>sin partidos políticos ni intereses comerciales.</h3>
	</div>
	<br><br><br>
</section>

<section id="nosotros2" >
	<div class="fd-verde">
		<h3 class="negrilla blanco" style="padding-top: 20px; padding-bottom: 15px; padding-left: 25px;">VOLUNTARIOS COORDINADORES</h3>
	</div>
	<div id="voluntarios">
		<script src="js/jssor.slider-26.5.0.min.js" type="text/javascript"></script>
	    <script type="text/javascript">
	        jssor_1_slider_init = function() {

	            var jssor_1_options = {
	              $AutoPlay: 1,
	              $AutoPlaySteps: 4,
	              $SlideDuration: 500,
	              $SlideWidth: 150,
	              $SlideSpacing: 50,
	              $Cols: 4,
	              $Align: 420,
	              $ArrowNavigatorOptions: {
	                $Class: $JssorArrowNavigator$,
	                $Steps: 4
	              },
	              $BulletNavigatorOptions: {
	                $Class: $JssorBulletNavigator$
	              }
	            };

	            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

	            /*#region responsive code begin*/

	            var MAX_WIDTH = 1080;

	            function ScaleSlider() {
	                var containerElement = jssor_1_slider.$Elmt.parentNode;
	                var containerWidth = containerElement.clientWidth;

	                if (containerWidth) {

	                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

	                    jssor_1_slider.$ScaleWidth(expectedWidth);
	                }
	                else {
	                    window.setTimeout(ScaleSlider, 30);
	                }
	            }

	            ScaleSlider();

	            $Jssor$.$AddEvent(window, "load", ScaleSlider);
	            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
	            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
	            /*#endregion responsive code end*/
	        };
	    </script>
	    <style>
	        /* jssor slider loading skin spin css */
	        .jssorl-009-spin img {
	            animation-name: jssorl-009-spin;
	            animation-duration: 10s;
	            animation-iteration-count: infinite;
	            animation-timing-function: linear;
	        }

	        @keyframes jssorl-009-spin {
	            from {
	                transform: rotate(0deg);
	            }

	            to {
	                transform: rotate(360deg);
	            }
	        }


	        .jssorb057 .i {position:absolute;cursor:pointer;}
	        .jssorb057 .i .b {fill:none;stroke:#fff;stroke-width:2000;stroke-miterlimit:10;stroke-opacity:0.4;}
	        .jssorb057 .i:hover .b {stroke-opacity:.7;}
	        .jssorb057 .iav .b {stroke-opacity: 1;}
	        .jssorb057 .i.idn {opacity:.3;}

	        .jssora073 {display:block;position:absolute;cursor:pointer;}
	        .jssora073 .a {fill:#ddd;fill-opacity:.7;stroke:#000;stroke-width:160;stroke-miterlimit:10;stroke-opacity:.7;}
	        .jssora073:hover {opacity:.8;}
	        .jssora073.jssora073dn {opacity:.4;}
	        .jssora073.jssora073ds {opacity:.3;pointer-events:none;}
	    </style>
	    <div class="blanco" style="margin-left: -10px; margin-right: -10px;">
	    	<br><br>
		<div id="jssor_1"  style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:150px;overflow:hidden;visibility:hidden;">
		        <!-- Loading Screen -->
		        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
		            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
		        </div>
		        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:100px;width:790px;height:150px;overflow:hidden; ">
		            <div>
		                <a data-toggle="modal" data-target="#carolina">
						  <img class="voluntarios" data-u="image" src="images/nosotros/carolina1.png" />
						</a>
		            </div>
		            <div>
		                <a data-toggle="modal" data-target="#soledad">
						  <img class="voluntarios" data-u="image" src="images/nosotros/soledad.png" />
						</a>
		            </div>
		            <div>
		                <a data-toggle="modal" data-target="#lucia">
						  <img class="voluntarios" data-u="image" src="images/nosotros/lucia.png" />
						</a>
		            </div>
		            <div>
		                <a data-toggle="modal" data-target="#fernando">
						  <img class="voluntarios" data-u="image" src="images/nosotros/fernando.png" />
						</a>
		            </div>
		            <div>
		                <a data-toggle="modal" data-target="#juan">
						  <img class="voluntarios" data-u="image" src="images/nosotros/juan.png" />
						</a>
		            </div>
		            <div>
		                <a data-toggle="modal" data-target="#paula">
						  <img class="voluntarios" data-u="image" src="images/nosotros/paula.png" />
						</a>
		            </div>
		            <div>
		                <a data-toggle="modal" data-target="#lorena">
						  <img class="voluntarios" data-u="image" src="images/nosotros/lorena.png" />
						</a>
		            </div>
		            <div>
		                <a data-toggle="modal" data-target="#claudia">
						  <img class="voluntarios" data-u="image" src="images/nosotros/claudia.png" />
						</a>
		            </div>
		            <div>
		                <a data-toggle="modal" data-target="#paulina">
						  <img class="voluntarios" data-u="image" src="images/nosotros/paulina.png" />
						</a>
		            </div>
		            <!--div>
		                <img class="voluntarios" data-u="image" src="images/nosotros/vol_coordinador/vol1.png" />
		            </div>
		            <div>
		                <img class="voluntarios" data-u="image" src="images/nosotros/vol_coordinador/vol2.png" />
		            </div>
		            <div>
		                <img class="voluntarios" data-u="image" src="images/nosotros/vol_coordinador/vol3.png" />
		            </div>
		            <div>
		                <img class="voluntarios" data-u="image" src="images/nosotros/vol_coordinador/vol4.png" />
		            </div-->

		        </div>
		        <!-- Bullet Navigator -->
		        <!--div data-u="navigator" class="jssorb057" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
		            <div data-u="prototype" class="i" style="width:16px;height:16px;">
		                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
		                    <circle class="b" cx="8000" cy="8000" r="5000"></circle>
		                </svg>
		            </div>
		        </div-->
		        <!-- Arrow Navigator -->
		        <div data-u="arrowleft" class="jssora073" style="width:50px;height:50px;top:0px;left:0px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
		            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
		                <path class="a" d="M4037.7,8357.3l5891.8,5891.8c100.6,100.6,219.7,150.9,357.3,150.9s256.7-50.3,357.3-150.9 l1318.1-1318.1c100.6-100.6,150.9-219.7,150.9-357.3c0-137.6-50.3-256.7-150.9-357.3L7745.9,8000l4216.4-4216.4 c100.6-100.6,150.9-219.7,150.9-357.3c0-137.6-50.3-256.7-150.9-357.3l-1318.1-1318.1c-100.6-100.6-219.7-150.9-357.3-150.9 s-256.7,50.3-357.3,150.9L4037.7,7642.7c-100.6,100.6-150.9,219.7-150.9,357.3C3886.8,8137.6,3937.1,8256.7,4037.7,8357.3 L4037.7,8357.3z"></path>
		            </svg>
		        </div>
		        <div data-u="arrowright" class="jssora073" style="width:50px;height:50px;top:0px;right:0px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
		            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
		                <path class="a" d="M11962.3,8357.3l-5891.8,5891.8c-100.6,100.6-219.7,150.9-357.3,150.9s-256.7-50.3-357.3-150.9 L4037.7,12931c-100.6-100.6-150.9-219.7-150.9-357.3c0-137.6,50.3-256.7,150.9-357.3L8254.1,8000L4037.7,3783.6 c-100.6-100.6-150.9-219.7-150.9-357.3c0-137.6,50.3-256.7,150.9-357.3l1318.1-1318.1c100.6-100.6,219.7-150.9,357.3-150.9 s256.7,50.3,357.3,150.9l5891.8,5891.8c100.6,100.6,150.9,219.7,150.9,357.3C12113.2,8137.6,12062.9,8256.7,11962.3,8357.3 L11962.3,8357.3z"></path>
		            </svg>
		        </div>
		    </div>	
		    <br><br><br>
		</div>
	    
	    <script type="text/javascript">jssor_1_slider_init();</script>
	</div>
</section>

<!---->

<section id="nosotros3" >
	<div class="fd-tomate">
		<h3 class="negrilla blanco" style="padding-top: 20px; padding-bottom: 15px; padding-left: 25px;">VOLUNTARIOS PROFESIONALES DE APOYO</h3>
	</div>
	<div id="voluntarios">
		<script src="js/jssor.slider-26.5.0.min.js" type="text/javascript"></script>
	    <script type="text/javascript">
	        jssor_2_slider_init = function() {

	            var jssor_2_options = {
	              $AutoPlay: 1,
	              $AutoPlaySteps: 4,
	              $SlideDuration: 500,
	              $SlideWidth: 150,
	              $SlideSpacing: 50,
	              $Cols: 4,
	              $Align: 420,
	              $ArrowNavigatorOptions: {
	                $Class: $JssorArrowNavigator$,
	                $Steps: 4
	              },
	              $BulletNavigatorOptions: {
	                $Class: $JssorBulletNavigator$
	              }
	            };

	            var jssor_2_slider = new $JssorSlider$("jssor_2", jssor_2_options);

	            /*#region responsive code begin*/

	            var MAX_WIDTH = 1080;

	            function ScaleSlider() {
	                var containerElement = jssor_2_slider.$Elmt.parentNode;
	                var containerWidth = containerElement.clientWidth;

	                if (containerWidth) {

	                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

	                    jssor_2_slider.$ScaleWidth(expectedWidth);
	                }
	                else {
	                    window.setTimeout(ScaleSlider, 30);
	                }
	            }

	            ScaleSlider();

	            $Jssor$.$AddEvent(window, "load", ScaleSlider);
	            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
	            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
	            /*#endregion responsive code end*/
	        };
	    </script>
	    <style>
	        /* jssor slider loading skin spin css */
	        .jssorl-009-spin img {
	            animation-name: jssorl-009-spin;
	            animation-duration: 10s;
	            animation-iteration-count: infinite;
	            animation-timing-function: linear;
	        }

	        @keyframes jssorl-009-spin {
	            from {
	                transform: rotate(0deg);
	            }

	            to {
	                transform: rotate(360deg);
	            }
	        }


	        .jssorb057 .i {position:absolute;cursor:pointer;}
	        .jssorb057 .i .b {fill:none;stroke:#fff;stroke-width:2000;stroke-miterlimit:10;stroke-opacity:0.4;}
	        .jssorb057 .i:hover .b {stroke-opacity:.7;}
	        .jssorb057 .iav .b {stroke-opacity: 1;}
	        .jssorb057 .i.idn {opacity:.3;}

	        .jssora073 {display:block;position:absolute;cursor:pointer;}
	        .jssora073 .a {fill:#ddd;fill-opacity:.7;stroke:#000;stroke-width:160;stroke-miterlimit:10;stroke-opacity:.7;}
	        .jssora073:hover {opacity:.8;}
	        .jssora073.jssora073dn {opacity:.4;}
	        .jssora073.jssora073ds {opacity:.3;pointer-events:none;}
	    </style>
	    <div class="blanco" style="margin-left: -10px; margin-right: -10px;">
	    	<br><br>
		<div id="jssor_2"  style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:150px;overflow:hidden;visibility:hidden;">
		        <!-- Loading Screen -->
		        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
		            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
		        </div>
		        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:100px;width:790px;height:150px;overflow:hidden; ">
		            <div>
		                <img class="voluntarios" data-u="image" src="images/nosotros/vol_profesional_apoyo/vol1.png" />
		            </div>
		            <div>
		                <img class="voluntarios" data-u="image" src="images/nosotros/vol_profesional_apoyo/vol2.png" />
		            </div>
		            <div>
		                <img class="voluntarios" data-u="image" src="images/nosotros/vol_profesional_apoyo/vol3.png" />
		            </div>
		            <div>
		                <img class="voluntarios" data-u="image" src="images/nosotros/vol_profesional_apoyo/vol4.png" />
		            </div>

		        </div>
		        <!-- Bullet Navigator -->
		        <!--div data-u="navigator" class="jssorb057" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
		            <div data-u="prototype" class="i" style="width:16px;height:16px;">
		                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
		                    <circle class="b" cx="8000" cy="8000" r="5000"></circle>
		                </svg>
		            </div>
		        </div-->
		        <!-- Arrow Navigator -->
		        <div data-u="arrowleft" class="jssora073" style="width:50px;height:50px;top:0px;left:0px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
		            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
		                <path class="a" d="M4037.7,8357.3l5891.8,5891.8c100.6,100.6,219.7,150.9,357.3,150.9s256.7-50.3,357.3-150.9 l1318.1-1318.1c100.6-100.6,150.9-219.7,150.9-357.3c0-137.6-50.3-256.7-150.9-357.3L7745.9,8000l4216.4-4216.4 c100.6-100.6,150.9-219.7,150.9-357.3c0-137.6-50.3-256.7-150.9-357.3l-1318.1-1318.1c-100.6-100.6-219.7-150.9-357.3-150.9 s-256.7,50.3-357.3,150.9L4037.7,7642.7c-100.6,100.6-150.9,219.7-150.9,357.3C3886.8,8137.6,3937.1,8256.7,4037.7,8357.3 L4037.7,8357.3z"></path>
		            </svg>
		        </div>
		        <div data-u="arrowright" class="jssora073" style="width:50px;height:50px;top:0px;right:0px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
		            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
		                <path class="a" d="M11962.3,8357.3l-5891.8,5891.8c-100.6,100.6-219.7,150.9-357.3,150.9s-256.7-50.3-357.3-150.9 L4037.7,12931c-100.6-100.6-150.9-219.7-150.9-357.3c0-137.6,50.3-256.7,150.9-357.3L8254.1,8000L4037.7,3783.6 c-100.6-100.6-150.9-219.7-150.9-357.3c0-137.6,50.3-256.7,150.9-357.3l1318.1-1318.1c100.6-100.6,219.7-150.9,357.3-150.9 s256.7,50.3,357.3,150.9l5891.8,5891.8c100.6,100.6,150.9,219.7,150.9,357.3C12113.2,8137.6,12062.9,8256.7,11962.3,8357.3 L11962.3,8357.3z"></path>
		            </svg>
		        </div>
		    </div>	
		    <br><br><br>
		</div>
	    
	    <script type="text/javascript">jssor_2_slider_init();</script>
	</div>
</section>



<!---->

<section id="nosotros4" >
	<div class="fd-azul">
		<h3 class="negrilla blanco" style="padding-top: 20px; padding-bottom: 15px; padding-left: 25px;">ALIADOS ESTRATÉGICOS</h3>
	</div>
	<div id="voluntarios">
		<script src="js/jssor.slider-26.5.0.min.js" type="text/javascript"></script>
	    <script type="text/javascript">
	        jssor_3_slider_init = function() {

	            var jssor_3_options = {
	              $AutoPlay: 1,
	              $AutoPlaySteps: 4,
	              $SlideDuration: 500,
	              $SlideWidth: 150,
	              $SlideSpacing: 50,
	              $Cols: 4,
	              $Align: 420,
	              $ArrowNavigatorOptions: {
	                $Class: $JssorArrowNavigator$,
	                $Steps: 4
	              },
	              $BulletNavigatorOptions: {
	                $Class: $JssorBulletNavigator$
	              }
	            };

	            var jssor_3_slider = new $JssorSlider$("jssor_3", jssor_3_options);

	            /*#region responsive code begin*/

	            var MAX_WIDTH = 1080;

	            function ScaleSlider() {
	                var containerElement = jssor_3_slider.$Elmt.parentNode;
	                var containerWidth = containerElement.clientWidth;

	                if (containerWidth) {

	                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

	                    jssor_3_slider.$ScaleWidth(expectedWidth);
	                }
	                else {
	                    window.setTimeout(ScaleSlider, 30);
	                }
	            }

	            ScaleSlider();

	            $Jssor$.$AddEvent(window, "load", ScaleSlider);
	            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
	            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
	            /*#endregion responsive code end*/
	        };
	    </script>
	    <style>
	        /* jssor slider loading skin spin css */
	        .jssorl-009-spin img {
	            animation-name: jssorl-009-spin;
	            animation-duration: 10s;
	            animation-iteration-count: infinite;
	            animation-timing-function: linear;
	        }

	        @keyframes jssorl-009-spin {
	            from {
	                transform: rotate(0deg);
	            }

	            to {
	                transform: rotate(360deg);
	            }
	        }


	        .jssorb057 .i {position:absolute;cursor:pointer;}
	        .jssorb057 .i .b {fill:none;stroke:#fff;stroke-width:2000;stroke-miterlimit:10;stroke-opacity:0.4;}
	        .jssorb057 .i:hover .b {stroke-opacity:.7;}
	        .jssorb057 .iav .b {stroke-opacity: 1;}
	        .jssorb057 .i.idn {opacity:.3;}

	        .jssora073 {display:block;position:absolute;cursor:pointer;}
	        .jssora073 .a {fill:#ddd;fill-opacity:.7;stroke:#000;stroke-width:160;stroke-miterlimit:10;stroke-opacity:.7;}
	        .jssora073:hover {opacity:.8;}
	        .jssora073.jssora073dn {opacity:.4;}
	        .jssora073.jssora073ds {opacity:.3;pointer-events:none;}
	    </style>
	    <div class="blanco" style="margin-left: -10px; margin-right: -10px;">
	    	<br><br>
		<div id="jssor_3"  style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:150px;overflow:hidden;visibility:hidden;">
		        <!-- Loading Screen -->
		        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
		            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
		        </div>
		        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:100px;width:790px;height:150px;overflow:hidden; ">
		            <div>
		                <img class="voluntarios" data-u="image" src="images/nosotros/aliados/avina-ecuador.png" />
		            </div>
		            <div>
		                <img class="voluntarios" data-u="image" src="images/nosotros/aliados/RENAREC.jpg" />
		            </div>

		        </div>
		        <!-- Bullet Navigator -->
		        <!--div data-u="navigator" class="jssorb057" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
		            <div data-u="prototype" class="i" style="width:16px;height:16px;">
		                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
		                    <circle class="b" cx="8000" cy="8000" r="5000"></circle>
		                </svg>
		            </div>
		        </div-->
		        <!-- Arrow Navigator -->
		        <div data-u="arrowleft" class="jssora073" style="width:50px;height:50px;top:0px;left:0px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
		            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
		                <path class="a" d="M4037.7,8357.3l5891.8,5891.8c100.6,100.6,219.7,150.9,357.3,150.9s256.7-50.3,357.3-150.9 l1318.1-1318.1c100.6-100.6,150.9-219.7,150.9-357.3c0-137.6-50.3-256.7-150.9-357.3L7745.9,8000l4216.4-4216.4 c100.6-100.6,150.9-219.7,150.9-357.3c0-137.6-50.3-256.7-150.9-357.3l-1318.1-1318.1c-100.6-100.6-219.7-150.9-357.3-150.9 s-256.7,50.3-357.3,150.9L4037.7,7642.7c-100.6,100.6-150.9,219.7-150.9,357.3C3886.8,8137.6,3937.1,8256.7,4037.7,8357.3 L4037.7,8357.3z"></path>
		            </svg>
		        </div>
		        <div data-u="arrowright" class="jssora073" style="width:50px;height:50px;top:0px;right:0px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
		            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
		                <path class="a" d="M11962.3,8357.3l-5891.8,5891.8c-100.6,100.6-219.7,150.9-357.3,150.9s-256.7-50.3-357.3-150.9 L4037.7,12931c-100.6-100.6-150.9-219.7-150.9-357.3c0-137.6,50.3-256.7,150.9-357.3L8254.1,8000L4037.7,3783.6 c-100.6-100.6-150.9-219.7-150.9-357.3c0-137.6,50.3-256.7,150.9-357.3l1318.1-1318.1c100.6-100.6,219.7-150.9,357.3-150.9 s256.7,50.3,357.3,150.9l5891.8,5891.8c100.6,100.6,150.9,219.7,150.9,357.3C12113.2,8137.6,12062.9,8256.7,11962.3,8357.3 L11962.3,8357.3z"></path>
		            </svg>
		        </div>
		    </div>	
		    <br><br><br>
		</div>
	    
	    <script type="text/javascript">jssor_3_slider_init();</script>
	</div>
</section>

<section id="nosotros5" class="fd-azul">
	<div class="centrar ">
		<br>
		<p class="titulo celeste negrilla">¿TE APASIONA RECIVECI?</p>
		<h3 class="gris">¡Sé parte del equipo!</h3>
	</div>
	<br>
</section>


<!-- Modal Carolina -->
<div class="modal fade" id="carolina" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title centrar" id="exampleModalLongTitle">CAROLINA VACA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body centrar" >
      	<img src="images/nosotros/carolina1.png" width="250" height="250" class="rounded">
      	<br><br>
        <p>Psicóloga clínica, apasionada con los temas de inclusión social, el trabajo por la igualdad de condiciones, el reciclaje y en especial el apoyo a los derechos de los recicladores que laboran en centros de acopio, calles y escombreras de la ciudad de Quito.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Soledad -->
<div class="modal fade" id="soledad" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title centrar" id="exampleModalLongTitle">SOLEDAD VILLARROEL</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body centrar" >
      	<img src="images/nosotros/soledad.png" width="250" height="250" class="rounded">
      	<br><br>
        <p>Ingeniera Civil con Maestría en Ingeniería Sanitaria, experiencia de 10 años en manejo de proyectos de agua y saneamiento; adicionalmente con 4 años de experiencia en el campo de la docencia.  Practicante de yoga, amante de la música y el arte y proambiente.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal lucia -->
<div class="modal fade" id="lucia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title centrar" id="exampleModalLongTitle">LUCÍA SALAZAR</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body centrar" >
      	<img src="images/nosotros/lucia.png" width="250" height="250" class="rounded">
      	<br><br>
        <p>Humana, lationamericana, músico y abogada ecologista. Trabaja con movimientos sociales y ambientales, investiga sobre la justicia ambiental y ecológica. Su pasión, la igualdad en la diversidad.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal fernando -->
<div class="modal fade" id="fernando" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title centrar" id="exampleModalLongTitle">FERNANDO GRANIZO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body centrar" >
      	<img src="images/nosotros/fernando.png" width="250" height="250" class="rounded">
      	<br><br>
        <p>Ingeniero Ambiental y Máster en Estudios Ambientales y Ciencia de la Sostenibilidad. Busco generar soluciones sostenibles para problemas complejos. Me apasiona el deporte, la ciencia, la cultura y la naturaleza, especialmente la de Ecuador. La familia, lo más importante. Toda actividad humana genera un impacto al medio ambiente.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Juan -->
<div class="modal fade" id="juan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title centrar" id="exampleModalLongTitle">JUAN SUBÍA VALDEZ</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body centrar" >
      	<img src="images/nosotros/juan.png" width="250" height="250" class="rounded">
      	<br><br>
        <p>Diseñador industrial – Ciclista, busca solucionar problemas reales de manera efectiva y eficiente, utilizando recursos disponibles. La estética es una consecuencia de las condiciones de trabajo y no el objetivo final.<br><br>
        	<a href="https://www.facebook.com/afuegodiseno" target="_blank">Facebook</a><br>
        	<a href="https://www.afuegodiseno.wordpress.com" target="_blank">A fuego diseño</a><br>
        	<a href="https://www.instagram.com/afuegodiseno" target="_blank">Instagram</a>
		</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal paula -->
<div class="modal fade" id="paula" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title centrar" id="exampleModalLongTitle">PAULA GUERRA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body centrar" >
      	<img src="images/nosotros/paula.png" width="250" height="250" class="rounded">
      	<br><br>
        <p>Latinoamericana enamorada del mundo de los residuos sólidos. Activa en el fomento del reciclaje inclusivo. Convencida en el fomento de participación ciudadana en la construcción de ciudades inclusivas y sostenibles.
		</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal lorena -->
<div class="modal fade" id="lorena" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title centrar" id="exampleModalLongTitle">LORENA GALLARDO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body centrar" >
      	<img src="images/nosotros/lorena.png" width="250" height="250" class="rounded">
      	<br><br>
        <p>Ingeniera Ambiental, voluntaria militante por causas ambientales y sociales que buscan equidad y justicia. Apasionada por explorar las montañas y ríos del Ecuador.  Me encanta conocer gente nueva que quiera sumar esfuerzos para generar cambios en el mundo.	</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Claudia -->
<div class="modal fade" id="claudia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title centrar" id="exampleModalLongTitle">CLAUDIA ANDRADE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body centrar" >
      	<img src="images/nosotros/claudia.png" width="250" height="250" class="rounded">
      	<br><br>
        <p>Ingeniera Geógrafa con Master en ciencias de la sociedad y ambiente, con experiencia en gestión integral de residuos sólidos, consumo responsable, reciclaje inclusivo y responsabilidad social y ambiental. Su formación académica le ha permitido ser versátil e involucrarse en varias problemáticas ambientales.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Paulina -->
<div class="modal fade" id="paulina" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title centrar" id="exampleModalLongTitle">PAULINA CRIOLLO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body centrar" >
      	<img src="images/nosotros/paulina.png" width="250" height="250" class="rounded">
      	<br><br>
        <p>Ecóloga Industrial.  Apasionada por trabajar con el "desperdicio", por buscar formas de crear oportunidades y nuevos procesos. En pocas palabras: economía circular. Me encanta la bici, subir montañas y tomar café.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@stop