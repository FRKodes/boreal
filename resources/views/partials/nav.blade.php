<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="{{ url('/') }}"><img src="images/boreal-logo.svg" alt="Logo Boreal"></a>
		</div>
		<div id="navbar" class="navbar-collapse collapse navbar-right">
		<ul class="nav navbar-nav">
			{{-- <li class="@if (Request::is('/')) active @endif"><a href="/">Inicio</a></li> --}}
			<li class="@if (Request::is('beneficios-economicos')) active @endif"><a href="{{ url('beneficios-economicos') }}">Beneficios Económicos</a></li>
			<li class="@if (Request::is('beneficios-ecologicos')) active @endif"><a href="{{ url('beneficios-ecologicos') }}">Beneficios Ecológicos</a></li>
			<li class="@if (Request::is('seguridad')) active @endif"><a href="{{ url('seguridad') }}">Seguridad</a></li>
			{{-- <li class="@if (Request::is('inversion')) active @endif"><a href="{{ url('inversion') }}">Inversión</a></li> --}}
			<li class="@if (Request::is('contacto')) active @endif"><a href="{{ url('contacto') }}">Contacto</a></li>
		</ul>
		</div><!--/.nav-collapse -->
	</div>
</nav>