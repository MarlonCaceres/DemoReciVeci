<div class="form-group col-6">
				{!!Form::text('Nombres',null,['class'=>'form-control','placeholder'=>'Nombre: Juan José Flores'])!!}
		</div>
		<div class="form-group col-6">
				{!!Form::text('Correo',null,['class'=>'form-control','placeholder'=>'Correo: Juan.Jose@reciveci.ec'])!!}
		</div>
		<div class="form-group col-6" hidden>
				{!!Form::select('Tipo',['1'=>'Diseño Web y Móvil',
										'2'=>'Desarrollo de Sistemas',
										'3'=>'Capacitaciones',
										'4'=>'Voluntario'],
								null,['class'=>'form-control','placeholder'=>'Seleccione una opción'])!!}
		</div>
		<div class="form-group col-6">
				{!!Form::textarea('Mensaje',null,['class'=>'form-control','placeholder'=>'Su mensaje aquí.'])!!}
		</div>
		<button class="btn-aux negrilla blanco" >ENVIAR</button>