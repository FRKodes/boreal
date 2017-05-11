@extends('layout')

@section('content')
	<div class="main-banner-container contacto">
		<div class="container item">
			<p>
				CONTÁCTANOS
			</p>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<p class="block-title text-center">Ponte en contacto</p>
			</div>
			<p class="col-md-8 col-md-offset-2">
				Tienes alguna duda o pregunta acerca de nuestros servicios o deseas convertir tu auto a Gas Natural Vehicular, escribenos un mail y en breve te contactaremos.
			</p>
		</div>
		
		<div class="row m-top-20">
			
			{{ Form::open(['id'=>'contactform']) }}
				
				<div class="col-sm-6 col-md-4 col-md-offset-2">
					<div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
					    {!! Form::text('nombre', null, ['class' => 'form-control', 'required' => 'required', 'placeholder'=>'*Nombre']) !!}
					    <small class="text-danger">{{ $errors->first('nombre') }}</small>
					</div>
					
					<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
					    {!! Form::text('email', null, ['class' => 'form-control', 'required' => 'required', 'placeholder'=>'*Correo Electrónico']) !!}
					    <small class="text-danger">{{ $errors->first('email') }}</small>
					</div>

					<div class="form-group{{ $errors->has('tel') ? ' has-error' : '' }}">
					    {!! Form::text('tel', null, ['class' => 'form-control', 'placeholder'=>'Teléfono']) !!}
					    <small class="text-danger">{{ $errors->first('tel') }}</small>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="form-group{{ $errors->has('comentario') ? ' has-error' : '' }}">
					    {!! Form::textarea('comentario', null, ['class' => 'form-control', 'required' => 'required', 'placeholder'=>'*Comentario']) !!}
					    <small class="text-danger">{{ $errors->first('comentario') }}</small>
					</div>
				</div>
				
				<div class="col-xs-12 col-md-8 col-md-offset-2">
					<div class="form-group overflow-hidden">
					    {!! Form::submit('ENVIAR', ['class' => 'btn btn-primary submit pull-right']) !!}
					</div>
				</div>
			{{ Form::close() }}
		</div>
		
		<div class="col-xs-12">
			<p class="block-title text-center">¿Cómo llegar?</p>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="map-home" id="map-home"></div>
		</div>
	</div>
@stop