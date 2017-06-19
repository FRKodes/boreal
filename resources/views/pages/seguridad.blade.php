@extends('layout')

@section('content')
	<div class="main-banner-container seguridad">
		<div class="container item">
			<p>
				TU <b>SEGURIDAD</b> ES <br>
				NUESTRA <b>PRIORIDAD</b>
			</p>
		</div>
	</div>

	<div class="container">
		<div class="top-icon-line text-center">
			<span class="icon-ecologico"></span>
		</div>
		<div class="col-xs-12">
			<p class="block-title text-center">Seguridad</p>
		</div>
		<p>
			El Gas Natural Vehicular al igual que cualquier combustible puede generar riesgos si este no es utilizado de manera adecuada o con las normas correctas de seguridad, es por eso que el sistema Bi-Fuel de Boreal® cuenta con numerosas certificaciones expedidas por distintos organismos tanto públicos como privados, garantizando lo más importante para nosotros TU SEGURIDAD Y LA DE TU FAMILIA.
		</p>
	</div>

	<div class="container-fluid inner-banner seguridad"></div>

	<div class="container">
		<div class="row">
			<div class="col-xs-12 m-top-20 m-bottom-20">
				<p>• El sistema GNV de Boreal® es a prueba de impactos y condiciones extremas.</p>
				<p>• En caso de fuga el GNV se disipa rápidamente pues es más ligero que el aire.</p>
				<p>• Está regulado por Normas Oficiales Mexicanas.</p>
				<p>• Actualmente existen más de 18 millones de autos convertidos a GNV en el mundo.</p>
			</div>

			<div class="col-xs-12 text-center m-bottom-20">
				<p class="block-title text-center">NUESTRAS CERTIFICACIONES</p>
				<div class="cert"><a href="pdf/aut_cdmx_gnc_f350_f450_f550_ram4000_ch3500.pdf" target="_blank" title="Ver certificación">aut_cdmx_gnc_f350_f450_f550_ram4000_ch3500.pdf</a></div>
				<div class="cert"><a href="pdf/aut_multimarca_gnc_edo_mx.pdf" target="_blank" title="Ver certificación">aut_multimarca_gnc_edo_mx.pdf</a></div>
				<div class="cert"><a href="pdf/cert_autorizaciones_equipo_gazo_5ta_gen_cdmx_edo_mex.pdf" target="_blank" title="Ver certificación">cert_autorizaciones_equipo_gazo_5ta_gen_cdmx_edo_mex.pdf</a></div>
				<div class="cert"><a href="pdf/cert_gas_natural_df.pdf" target="_blank" title="Ver certificación">cert_gas_natural_df.pdf</a></div>
				<div class="cert"><a href="pdf/cert_titan_gnc_cdmx_2016.pdf" target="_blank" title="Ver certificación">cert_titan_gnc_cdmx_2016.pdf</a></div>
				<div class="cert"><a href="pdf/cert_tsuru_2016.pdf" target="_blank" title="Ver certificación">cert_tsuru_2016.pdf</a></div>
				<div class="cert m-bottom-20"><a href="http://www.bureauveritas.com.mx/" target="_blank"><img src="images/bureau-veritas-certification.jpeg" alt="bureau veritas certification"></a></div>
			</div>
			
			@include('partials.modal-form-quotation')

		</div>
	</div>
@stop