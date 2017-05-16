@extends('layout')

@section('content')
	<div class="main-banner-container economico">
		<div class="container item">
			<p>
				MÁS <b>KILÓMETROS</b> <br>
				AL <b>MENOR COSTO</b>
			</p>
		</div>
	</div>

	<div class="container">
		<div class="top-icon-line text-center">
			<span class="icon-economico"></span>
		</div>
		<div class="col-xs-12">
			<p class="block-title text-center">Ventajas económicas</p>
		</div>
		<p>
			Representando un ahorro de más del 50% en comparación con el precio por litro de la gasolina magna, el uso de gas natural vehicular (GNV) permite al usuario de un automotor convertido con el sistema BiFuel de Boreal® recuperar su inversión a través del ahorro en el precio del combustible que utiliza en su día a día. 
		</p>

		<div class="fuel-container">
			<div class="fuel-item gnv">
				<div class="title"><span>GNV</span></div>
				<div class="chart inactive">
					<div class="line"></div>
					<div class="dot"></div>
					<div class="price">$7.60</div>
				</div>
			</div>
			<div class="fuel-item premium">
				<div class="title">PREMIUM</div>
				<div class="chart inactive">
					<div class="line premium"></div>
					<div class="dot premium"></div>
					<div class="price">$18.22</div>
				</div>
			</div>
			<div class="fuel-item magna">
				<div class="title">MAGNA</div>
				<div class="chart inactive">
					<div class="line magna"></div>
					<div class="dot magna"></div>
					<div class="price">$16.36</div>
				</div>
			</div>
			<div class="fuel-item gas-lp">
				<div class="title">GAS LP</div>
				<div class="chart inactive">
					<div class="line gas-lp"></div>
					<div class="dot gas-lp"></div>
					<div class="price">$13.10</div>
				</div>
			</div>
			
			<div class="lines">
				<div class="line _0"></div>
				<div class="line _10"></div>
				<div class="line _20"></div>
			</div>
			<div class="prices">
				<span class="_0">$0</span>
				<span class="_10">$10</span>
				<span class="_20">$20</span>
				<p class="text-center">*Precio promedio por litro</p>
			</div>
		</div>
	</div>
	
	<div class="container-fluid inner-banner"></div>

	<div class="container">
		<div class="row">
			<div class="col-xs-12 m-top-20 m-bottom-20">
				<p>• Ahorra hasta un 50% respecto a otros combustibles.</p>
				<p>• No daña el motor.</p>
				<p>• Disminuye la periodicidad de cambios de aceite y refacciones.</p>
			</div>
			<p class="text-center m-bottom-20">
				<a href="#" class="white btn-btn-primary submit">¡COTIZA TU CONVERSIÓN YA!</a>
			</p>

		</div>
	</div>
@stop