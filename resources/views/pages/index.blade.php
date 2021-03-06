@extends('layout')

@section('title_description', 'Ahorra más deL 50% en el consumo diario de combustible. Reduce el gasto de gasolina. Ya sea por economía o por el cuidado del medio ambiente, tenemos opciones para ti. El sistema está regulado por NOMs con revisiones anuales.')

@section('content')
	<div class="main-banner-container">
		<div class="container item">
			<p>
				Ahorra <br>
				más del <b>50%</b>
			</p>
			<p class="m-top--25"><span>en tu consumo de gasolina</span></p>
		</div>
	</div>
	<div class="container">
		<div class="calculator col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
			<p>Calcula tu ahorrro <span class="periodo-block">MENSUAL</span></p>
			<p class="cifras">- $ <span id="ahorro">0</span> -</p>
			<div>
				<div class="form-group overflow-hidden">
					<select name="periodo" id="periodo" class="form-control">
						<option value="MENSUAL">Mensual</option>
						<option value="SEMANAL">Semanal</option>
						<option value="DIARIO">Diario</option>
					</select>

					<input type="text" name="consumo" id="consumo" class="form-control input-pesos" placeholder="Consumo en pesos">
				</div>
				<div class="form-group m-top-20"><input type="submit" value="CALCULAR" id="calculate" class="btn btn-primary submit"></div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<p class="block-title text-center">¿Quiénes pueden convertir su vehiculo a Gas Natural Vehicular (GNV)?</p>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="car-item col-sm-6 col-lg-3">
				<img src="images/auto-flotilla.jpg" alt="auto flotilla">
				<div class="card">
					<div class="title">EMPRESAS</div>
					<div class="description">Reduce el gasto de gasolina en la flotilla de tu empresa.</div>
				</div>
			</div>
			<div class="car-item col-sm-6 col-lg-3">
				<img src="images/auto-privado.jpg" alt="auto privado">
				<div class="card">
					<div class="title">TRANSPORTE PÚBLICO</div>
					<div class="description">Optimiza recursos y ahorra más deL 50% en el consumo diario de combustible.</div>
				</div>
			</div>
			<div class="car-item col-sm-6 col-lg-3">
				<img src="images/auto-particular.jpg" alt="auto particular">
				<div class="card">
					<div class="title">PARTICULARES</div>
					<div class="description">Ya sea por economía o por el cuidado del medio ambiente, tenemos opciones para ti.</div>
				</div>
			</div>
			<div class="car-item col-sm-6 col-lg-3">
				<img src="images/auto-nuevo.jpg" alt="auto nuevo">
				<div class="card">
					<div class="title">AUTOS NUEVOS</div>
					<div class="description">Autos con sistema BiFuel, 0 km directos de agencia a través de consesionarias NISSAN.</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-xs-12 text-center">
				<p class="block-title advantages capitalize">Ventajas del gas natural vehicular</p>
			</div>

			<div class="facts-container">
				<div class="fact-item text-center">
					<span class="icon-ecologico"></span>
					<div class="fact-title">ECOLÓGICO</div>
					<div class="fact-description">Reduce hasta el 30% de emisiones de CO2 y hasta un 90% de CO.</div>
				</div>

				<div class="fact-item text-center">
					<span class="icon-bill"></span>
					<div class="fact-title">ECONÓMICO</div>
					<div class="fact-description">Ahorra hasta un 50% respecto a otros combustibles.</div>
				</div>

				<div class="fact-item text-center">
					<span class="icon-seguro"></span>
					<div class="fact-title">SEGURO</div>
					<div class="fact-description">El sistema está regulado por NOMs con revisiones anuales.</div>
				</div>
			</div>

			<div class="col-xs-12 text-center">
				<p class="block-title">¿Dónde cargar Gas Natural Vehicular?</p>
				<p class="m-top--20">Red de gaseras en el estado de Jalisco</p>
			</div>

		</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="map-home" id="map-home"></div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="news-container">
				<div class="item news-item">
					<div class="title">El Informador</div>
					<div class="info">La conversión permite reducir hasta 47% el gasto en combustible al año.</div>
					<div class="link"><a target="_blank" href="http://www.informador.com.mx/economia/2017/708681/6/te-conviene-convertir-tu-auto-al-gas-natural.htm" class="btn btn-primary submit">VER NOTA COMPLETA</a></div>
				</div>

				<div class="item news-item">
					<div class="title">Pasajero 7</div>
					<div class="info">Abren apoyos para adquirir unidades a gas natural en Jalisco.</div>
					<div class="link"><a target="_blank" href="http://www.pasajero7.com/abren-apoyos-adquirir-unidades-a-gas-natural-en-jalisco/" class="btn btn-primary submit">VER NOTA COMPLETA</a></div>
				</div>

				<div class="item news-item">
					<div class="title">1070 Noticias</div>
					<div class="info">Vehículos oficiales de gobierno de Jalisco migrarán a gas natural.</div>
					<div class="link"><a target="_blank" href="http://www.1070noticias.com.mx/jalisco/vehiculos-oficiales-de-gobierno-de-jalisco-migraran-a-gas-natural/" class="btn btn-primary submit">VER NOTA COMPLETA</a></div>
				</div>
			</div>
		</div>
	</div>
	
@stop

@section('custom_scripts')
	<script>
		$('#periodo').on('change', function (){
			$('.periodo-block').html($( "#periodo option:selected" ).val());
		});

	    $('#calculate').on('click', function (){
	    	var litros = $('#consumo').val()/18.22;
	    	var consumo = $('#consumo').val();
	    	var gnv = litros*7.6;
	    	var ahorro = consumo-gnv;
	    	console.log('---->' + ahorro);
	    	$('#ahorro').html(ahorro.toFixed(2));
		});

	    $('.news-container').slick({
	      dots: true,
	      infinite: true,
	      speed: 300,
	      autoplay: true,
	      autoplaySpeed: 5000,
	      arrows: false,
	      slidesToShow: 3,
	      responsive: [
	          {
	            breakpoint: 768,
	            settings: {
	              slidesToShow: 3,
	              slidesToScroll: 3
	            }
	          },
	          {
	            breakpoint: 480,
	            settings: {
	              slidesToShow: 1,
	              slidesToScroll: 1
	            }
	          }
	        ]
	    });

	    $('.facts-container').slick({
	      dots: true,
	      infinite: true,
	      speed: 300,
	      autoplay: true,
	      autoplaySpeed: 5000,
	      arrows: false,
	      slidesToShow: 3,
	      responsive: [
	          {
	            breakpoint: 768,
	            settings: {
	              slidesToShow: 3,
	              slidesToScroll: 3
	            }
	          },
	          {
	            breakpoint: 480,
	            settings: {
	              slidesToShow: 1,
	              slidesToScroll: 1
	            }
	          }
	        ]
	    });
	</script>
	<script>
		  function initMap() {
		    var centro_gdl = {lat: 20.674968, lng: -103.354637};
		    var san_pedrito = {lat: 20.619625, lng: -103.288494};
		    var el_salto = {lat: 20.492248, lng: -103.222741};

		    var map = new google.maps.Map(document.getElementById('map-home'), {
		      zoom: 10,
		      center: centro_gdl,
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

		    var marker_el_salto = new google.maps.Marker({
		      position: el_salto,
		      map: map,
		      animation: google.maps.Animation.DROP,
		      title: 'El salto'
		    });
		  }
		</script>
		<script async defer
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD77lo6QWgOpoJlBYY8lqWIBjSe9eoO1S0&callback=initMap">
		</script>
@stop