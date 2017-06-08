@extends('layout')

@section('content')
	
	<div class="main-banner-container ecologico">
		<div class="container item">
			<p>
				POR UN MUNDO MÁS <br>
				<b>VERDE</b>
			</p>
		</div>
	</div>

	<div class="container">
		<div class="top-icon-line text-center">
			<span class="icon-ecologico"></span>
		</div>
		<div class="col-xs-12">
			<p class="block-title text-center">Ventajas ecológicas</p>
		</div>
		<p>
			En el momento en que un auto es convertido con la tecnología <span class="red">Boreal®</span> este deja de producir de manera significativa gases de efecto invernadero y particulas contaminantes como el monóxido de carbono, gracias a que la combustión del gas natural vehicular (GNV) tiene una combustión más pura que la de otros combustible líquidos.
		</p>
	</div>

	<div class="container-fluid inner-banner ecologico"></div>

	<div class="container">
		<div class="row">
			<div class="col-xs-12 m-top-20 m-bottom-20">
				<p>• Reduce hasta 30% de emisiones de CO2</p>
				<p>• Reduce hasta 90% de emisiones de CO</p>
				<p>• Reduce el 100% de la emisión de material particulado.</p>
				<p>• No produce emisiones de Sox.</p>
				<p>• No contamina el suelo.</p>
				<p>• Combustión libre de olor.</p>
				<p>• Nivel de ruido mucho menor</p>
			</div>
			
			@include('partials.modal-form-quotation')

		</div>
	</div>
@stop