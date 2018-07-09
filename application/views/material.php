<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Material Educativo</title>
	<link href="<?= base_url() ?>/application/views/assets/bootstrap/bootstrap.min.css" rel="stylesheet">
	<link href="<?= base_url() ?>/application/views/assets/docs.min.css" rel="stylesheet">
</head>
<body>
	<header class="navbar navbar-expand navbar-dark flex-column flex-md-row bd-navbar">

		<div class="navbar-nav-scroll">
			<ul class="navbar-nav bd-navbar-nav flex-row">
				<li class="nav-item"><?= anchor('logout','Cerrar Sesión', 'class="nav-link btn btn-flat"') ?></li>
				<li class="nav-item"><?= anchor('inicio', 'Inicio', 'class="nav-link btn"') ?></li>
			</ul>
		</div>
		<ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
			<li><?= anchor('prueba', 'Realizar prueba', 'class="btn btn-bd-yellow d-none d-lg-inline-block mb-3 mb-md-0 ml-md-3"') ?></li>		
		</ul>
	</header>

	<div class="container" style="margin-top: 20px">
		<h4 class="my-4">Material audiovisual</h4>
		<div class="row">
			<div class="col-sm-6">
				<div class="card">
					<div class="card-body">
						<video src="https://www.youtube.com/watch?v=ONCFwXy0JT0&t=57s" controls ></video>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="card">
					<div class="card-body">
						<video src="https://www.youtube.com/watch?v=Nxgby8DaHMY" controls ></video>
					</div>
				</div>
			</div>
		</div>
		<div class="row my-4">
			<div class="col-sm-6">
				<div class="card">
					<div class="card-body">
						<video src="https://www.youtube.com/watch?v=Ya9S4aipO00" controls ></video>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="card">
					<div class="card-body">
						<video src="https://www.youtube.com/watch?v=6QiOIxnydJw" controls ></video>
					</div>
				</div>
			</div>
		</div>
	</div>


</body>
</html>