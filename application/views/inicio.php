<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">

	<title>PRUEBA</title>
	<link href="<?= base_url() ?>/application/views/assets/bootstrap/bootstrap.min.css" rel="stylesheet">
	<link href="<?= base_url() ?>/application/views/assets/docs.min.css" rel="stylesheet">
	<link href="<?= base_url() ?>/application/views/assets/estilos.css" rel="stylesheet">

</head>
<body>
	<header class="navbar navbar-expand navbar-dark flex-column flex-md-row bd-navbar">

		<div class="navbar-nav-scroll">
			<ul class="navbar-nav bd-navbar-nav flex-row">
				<li class="nav-item"><a class="nav-link active" href="#">PDF</a></li>
				<li class="nav-item"><a class="nav-link" href="#">Videos</a></li>
				<li class="nav-item"><a class="nav-link" href="#">Galeria</a></li>
			</ul>
		</div>
		<ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
			<li><?= anchor('prueba', 'Realizar prueba', 'class="btn btn-bd-yellow d-none d-lg-inline-block mb-3 mb-md-0 ml-md-3"') ?></li>		
		</ul>
	</header>

	<div class="container-fluid">
		<div class="row flex-xl-nowrap">
			<div class="col-12 col-md-3 col-xl-2 bd-sidebar">
				
				<form class="bd-search d-flex align-items-center">
					<input type="search" class="form-control" id="search-input" placeholder="Buscar ..." aria-label="Search for..." autocomplete="off">
					<button class="btn btn-link bd-search-docs-toggle d-md-none p-0 ml-3" type="button" data-toggle="collapse" data-target="#bd-docs-nav" aria-controls="bd-docs-nav" aria-expanded="false" aria-label="Toggle docs navigation">
						<svg viewbox="0 0 30 30" width="30" height="30" focusable="false"><title>Menu</title><path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M4 7h22M4 15h22M4 23h22"/></svg>
					</button>
				</form>

				<nav class="collapse bd-links" id="bd-docs-nav">

					<div class="bd-toc-item active">
						<a class="bd-toc-link" href="#">Sistema esquelético</a>
						<!-- sub categorias q se deben desplegar al presionar el enlace de arriba -->
						<ul class="nav bd-sidenav">
							<li class="active bd-sidenav-active"><a href="intro">Introducción</a></li>
							<li><a href="#funciones">Funciones del sistema esquelético</a></li>
							<li><a href="#estructura">Estructura de los huesos</a></li>
							<li><a href="#histologia">Histología del tejido óseo</a></li>
							<li><a href="#compacto">Tejido óseo compacto</a></li>
							<li><a href="#esponjoso">Tejido óseo esponjoso</a></li>
							<li><a href="#cartilago">Cartílago</a></li>
							<li><a href="#crecimiento">Formación y crecimiento de los huesos</a></li>
							<li><a href="#vascularizacion">Vascularización e inervación de los huesos</a></li>
							<li><a href="#division">División del sistema esquelético</a></li>
							<li><a href="#clasificacion">Clasificación de los huesos</a></li>
							<li><a href="#marcas">Marcas superficiales de los huesos.</a></li>
							<li><a href="#diferencias">Diferencias entre los esqueletos masculino y femenino</a></li>
							<li><a href="#regiones">Huesos de las diferentes regiones del cuerpo</a></li>
							<li><a href="#craneo">Cráneo</a></li>
							<li><a href="#columna">Columna vertebral</a></li>
							<li><a href="#torso">Torso</a></li>
							<li><a href="#miembroSup">Huesos del miembro superior</a></li>
							<li><a href="#miembroInf">Huesos del miembro inferior</a></li>
							<li><a href="#curvaturaVertebral">Curvatura vertebral</a></li>
							<li><a href="#escoliosis">Escoliosis</a></li>
							<li><a href="#cifosis">Cifosis</a></li>
							<li><a href="#lordosis">Lordosis</a></li>
							<li><a href="#fracturas">Fracturas óseas</a></li>
							<li><a href="#luxaciones">Luxaciónes</a></li>
							<li><a href="#pies">Tipos de pies</a></li>
						</ul>
					</div>
				<!-- 	<div class="bd-toc-item">
						<a class="bd-toc-link" href="#">Sistema muscular</a>
						
						<ul class="nav bd-sidenav">
							<li><a href="#">Sistema inmunitario</a></li>
							<li><a href="#">sistema tegumentario</a></li>
							<li><a href="#">sistema nervioso</a></li>
							<li><a href="#">sistema circulatorio</a></li>
							<li><a href="#">sistema linfatico</a></li>
							<li><a href="#">sistema endocrino</a></li>
							<li><a href="#">sistema muscular</a></li>
							<li><a href="#">sistema oseo</a></li>
							<li><a href="#">sistema articular</a></li>
						</ul>
					</div>
					<div class="bd-toc-item">
						<a class="bd-toc-link" href="#">Sistema vascular</a>
						
						<ul class="nav bd-sidenav">
							<li><a href="#">Sub temas</a></li>
							<li><a href="#">Sub temas</a></li>
							<li><a href="#">Sub temas</a></li>
							<li><a href="#">Sub temas & devices</a></li>
							<li><a href="#">Sub temas</a></li>
							<li><a href="#">Sub temas</a></li>
							<li><a href="#">Sub temas tools</a></li>
							<li><a href="#">Sub temas</a></li>
							<li><a href="#">Sub temas</a></li>
						</ul>
					</div> -->
					
				</nav>
			</div>

			<main class="col-12 col-md-9 pl-md-5 bd-content" role="main">
				<h2 class="bd-title" id="content">Sistema Esquelético</h2>

				<p class="bd-lead">Introducción</p>
				<div class="row">
					<div class="col">
						<p>El esqueleto es una estructura dinámica, constituida por huesos. Cada hueso es un órgano ya que está formado por diversos tejidos: óseo, cartilaginoso, conectivo denso, epitelial, otros que generan sangre, adiposo y nervioso. El esqueleto de un ser humano adulto tiene, aproximadamente, 206 huesos, sin contar las piezas dentarias, los huesos suturales o wormianos (supernumerarios del cráneo) y los huesos sesamoideos. </p><p> El esqueleto humano participa (en una persona con un peso normal) con alrededor del 12 % del peso total del cuerpo. Por consiguiente, una persona que pesa 75 kilogramos, 9 kilogramos de ellos son por su esqueleto.</p>
					</div>
					<div class="col">
						<img src="<?= base_url() ?>/application/views/assets/img/esqueleto.jpg" class="img-thumbnail">
					</div>
				</div>

			</main>
		</div>
	</div>
	<script src="<?= base_url() ?>/application/views/assets/jquery.min.js"></script>
	<!-- <script src="../assets/docs.min.js"></script> -->
	<script src="<?= base_url() ?>/application/views/assets/scripts.js"></script>
</body>
</html>



