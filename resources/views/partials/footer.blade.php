<div class="container-fluid bg-gray">
	<div class="row">
		<div class="container">
			<div class="col-sm-8 col-sm-offset-2 newsletter text-center">
				<p class="title">Suscríbete a nuestro newsletter</p>
				<p class="m-top--10 gris">Entérate de promociones y noticias antes que nadie</p>
				<form action="">
					<div class="form-group"><input type="text" name="email" class="form-control" placeholder="Ingresa tu correo electrónico"></div>
					<div class="form-group"><input type="submit" value="suscribete" class="btn btn-primary submit"></div>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="container bottom-block">
	<div class="col-sm-4">
		<ul class="menu-quienes">
			<li><a href="{{ url('quienes-somos') }}">Quienes Somos</a></li>
			<li><a href="{{ url('que-es-gnv') }}">¿Qué es GNV?</a></li>
			<li><a href="{{ url('preguntas-frecuentes') }}">Preguntas Frecuentes</a></li>
		</ul>
	</div>
	<div class="col-sm-4">
		<ul class="menu-boreal">
			<li><a href="{{ url('beneficios-economicos') }}">Beneficios Económicos</a></li>
			<li><a href="{{ url('beneficios-ecologicos') }}">Beneficios Ecológicos</a></li>
			<li><a href="{{ url('seguridad') }}">Seguridad</a></li>
			{{-- <li><a href="{{ url('inversion') }}">Inversion</a></li> --}}
			<li><a href="{{ url('contacto') }}">Contacto</a></li>
		</ul>
	</div>
	<div class="col-sm-4 info border-none">
		<p>Carretera a los Altos 1436-D, Col. San Pedrito Tlaquepaque, Jalisco. C.P. 45620</p>
		<p>LLÁMANOS 3600 3420</p>
		<ul class="social border-none">
			<li><a href="#" class="icon-twitter"></a></li>
			<li><a href="#" class="icon-instagram"></a></li>
			<li><a href="#" class="icon-linkedin"></a></li>
		</ul>
	</div>
</div>