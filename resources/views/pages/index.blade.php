@extends('layout')

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
			<p>Calcula tu ahorrro MENSUAL</p>
			<p class="cifras">- $ 54,670 -</p>
			<form action="">
				<div class="form-group overflow-hidden">
					<select name="periodo" id="periodo" class="form-control">
						<option value="mensual">Mensual</option>
						<option value="semanal">Semanal</option>
						<option value="diario">Diario</option>
					</select>

					<input type="text" name="consumo" class="form-control input-pesos" placeholder="Consumo en pesos">
				</div>
				<div class="form-group m-top-20"><input type="submit" value="CALCULAR" class="btn btn-primary submit"></div>
			</form>
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
					<div class="fact-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
				</div>

				<div class="fact-item text-center">
					<span class="icon-economico"></span>
					<div class="fact-title">ECONÓMICO</div>
					<div class="fact-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
				</div>

				<div class="fact-item text-center">
					<span class="icon-seguro"></span>
					<div class="fact-title">SEGURO</div>
					<div class="fact-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
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
					<div class="title">El Economista</div>
					<div class="info">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. </div>
				</div>

				<div class="item news-item">
					<div class="title">Milenio</div>
					<div class="info">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. </div>
				</div>

				<div class="item news-item">
					<div class="title">El Universal</div>
					<div class="info">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. </div>
				</div>
			</div>
		</div>
	</div>
	
@stop