<p class="text-center m-bottom-20">
	<a href="#cotizr-conversion" data-toggle="modal" data-target="#myModal" class="white btn-btn-primary submit">¡COTIZA TU CONVERSIÓN YA!</a>
</p>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Cotiza tu conversión</h4>
			</div>
			<div class="modal-body">
				{{ Form::open(['id'=>'quotationForm', 'url'=>'quotation']) }}
					<div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
					    {!! Form::text('nombre', null, ['class' => 'form-control', 'data-validate' => 'required', 'placeholder'=>'Nombre']) !!}
					</div>

					<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
					    {!! Form::text('email', null, ['class' => 'form-control', 'data-validate' => 'required|email', 'placeholder'=>'Correo electrónico']) !!}
					</div>

					<div class="form-group{{ $errors->has('tel') ? ' has-error' : '' }}">
					    {!! Form::text('tel', null, ['class' => 'form-control', 'data-validate' => 'required', 'placeholder'=>'Teléfono']) !!}
					</div>

					<div class="form-group{{ $errors->has('tipo_auto') ? ' has-error' : '' }}">
					    {!! Form::select('tipo_auto', [''=>'Tipo de auto', 'Sedan'=>'Sedan', 'Pick Up'=>'Pick Up', 'Otro'=>'Otro'], null, ['id' => 'tipo_auto', 'class' => 'form-control', 'data-validate' => 'required']) !!}
					</div>
					
					<div class="form-group{{ $errors->has('cilindros') ? ' has-error' : '' }}">
					    {!! Form::select('cilindros', [''=>'No. de cilindros', '4 cilindros'=>'4 cilindros', '6 cilindros'=>'6 cilindros', '8 cilindros'=>'8 cilindros'], null, ['id' => 'cilindros', 'class' => 'form-control', 'data-validate' => 'required']) !!}
					</div>

					<div class="form-group{{ $errors->has('marca') ? ' has-error' : '' }}">
					    {!! Form::text('marca', null, ['class' => 'form-control', 'data-validate' => 'required', 'placeholder'=>'Marca']) !!}
					</div>

					<div class="form-group{{ $errors->has('modelo') ? ' has-error' : '' }}">
					    {!! Form::text('modelo', null, ['class' => 'form-control', 'data-validate' => 'required', 'placeholder'=>'Modelo']) !!}
					</div>

					<div class="form-group{{ $errors->has('anio') ? ' has-error' : '' }}">
					    {!! Form::text('anio', null, ['class' => 'form-control', 'data-validate' => 'required', 'placeholder'=>'Año']) !!}
					</div>

					<div class="form-group">
					    {!! Form::submit('submit', ['class' => 'btn btn-primary submit']) !!}
					</div>
					<div class="sent_email_quotation">Se ha enviado la información con éxito, en breve nos pondremos en contacto contigo.</div>
				{{ Form::close() }}
			</div>
			<div class="modal-footer">
				<span class="text-danger pull-left">*Todos los campos son obligatorios</span>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>