@extends('layout')

@section('title_description', '¿Tienes alguna duda o pregunta acerca de nuestros servicios o deseas convertir tu auto a Gas Natural Vehicular? Escríbenos un mail y en breve te contactaremos.')

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
			
			{{ Form::open(['url'=>'sendmail', 'id'=>'contactForm']) }}
				
				<div class="col-sm-6 col-md-4 col-md-offset-2">
					<div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
					    {!! Form::text('nombre', null, ['class' => 'form-control', 'data-validate' => 'required', 'placeholder'=>'*Nombre']) !!}
					</div>
					
					<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
					    {!! Form::text('email', null, ['class' => 'form-control', 'data-validate' => 'required|email', 'placeholder'=>'*Correo Electrónico']) !!}
					</div>

					<div class="form-group{{ $errors->has('tel') ? ' has-error' : '' }}">
					    {!! Form::text('tel', null, ['class' => 'form-control', 'placeholder'=>'Teléfono']) !!}
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="form-group{{ $errors->has('comentario') ? ' has-error' : '' }}">
					    {!! Form::textarea('comentario', null, ['class' => 'form-control', 'data-validate' => 'required', 'placeholder'=>'*Comentario']) !!}
					</div>
				</div>
				
				<div class="col-xs-12 col-md-8 col-md-offset-2">
					<div class="form-group overflow-hidden">
					    {!! Form::submit('ENVIAR', ['class' => 'btn btn-primary submit pull-right']) !!}
					</div>
				</div>

				<div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 sent_mail_alert">
					<p class="thanks">¡Gracias!</p>
					<p>Tu mensaje se envió correctamente, nos pondremos en contacto contigo a la brevedad.</p>
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

@section('custom_scripts')
	<script>
		  function initMap() {
		    var san_pedrito = {lat: 20.619625, lng: -103.288494};
		    var map = new google.maps.Map(document.getElementById('map-home'), {
		      zoom: 14,
		      center: san_pedrito,
		      scrollwheel: false,
		      styles: [
		              {elementType: 'geometry', stylers: [{color: '#323232'}]},
		              {elementType: 'labels.text.stroke', stylers: [{color: '#323232'}]},
		              {elementType: 'labels.text.fill', stylers: [{color: '#f7323f'}]},
		              {
		                featureType: 'administrative.locality',
		                elementType: 'labels.text.fill',
		                stylers: [{color: '#8b4040'}]
		              },
		              {
		                featureType: 'poi',
		                elementType: 'labels.text.fill',
		                stylers: [{color: '#8b4040'}]
		              },
		              {
		                featureType: 'poi.park',
		                elementType: 'geometry',
		                stylers: [{color: '#263c3f'}]
		              },
		              {
		                featureType: 'poi.park',
		                elementType: 'labels.text.fill',
		                stylers: [{color: '#6b9a76'}]
		              },
		              {
		                featureType: 'road',
		                elementType: 'geometry',
		                stylers: [{color: '#282828'}]
		              },
		              {
		                featureType: 'road',
		                elementType: 'geometry.stroke',
		                stylers: [{color: '#212a37'}]
		              },
		              {
		                featureType: 'road',
		                elementType: 'labels.text.fill',
		                stylers: [{color: '#9ca5b3'}]
		              },
		              {
		                featureType: 'road.highway',
		                elementType: 'geometry',
		                stylers: [{color: '#f7323f'}]
		              },
		              {
		                featureType: 'road.highway',
		                elementType: 'geometry.stroke',
		                stylers: [{color: '#1f2835'}]
		              },
		              {
		                featureType: 'road.highway',
		                elementType: 'labels.text.fill',
		                stylers: [{color: '#f3d19c'}]
		              },
		              {
		                featureType: 'transit',
		                elementType: 'geometry',
		                stylers: [{color: '#2f3948'}]
		              },
		              {
		                featureType: 'transit.station',
		                elementType: 'labels.text.fill',
		                stylers: [{color: '#8b4040'}]
		              },
		              {
		                featureType: 'water',
		                elementType: 'geometry',
		                stylers: [{color: '#17263c'}]
		              },
		              {
		                featureType: 'water',
		                elementType: 'labels.text.fill',
		                stylers: [{color: '#515c6d'}]
		              },
		              {
		                featureType: 'water',
		                elementType: 'labels.text.stroke',
		                stylers: [{color: '#17263c'}]
		              }
		            ]
		    });

		    var marker_san_pedrito = new google.maps.Marker({
		      position: san_pedrito,
		      map: map,
		      animation: google.maps.Animation.DROP,
		      title: 'San Pedrito'
		    });
		  }
		</script>
		<script async defer
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD77lo6QWgOpoJlBYY8lqWIBjSe9eoO1S0&callback=initMap">
		</script>
@stop