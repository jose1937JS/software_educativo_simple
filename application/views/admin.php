<style>
	body {
		background-color: ghostwhite
	}
</style>



<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top py-2">
	<a class="navbar-brand" href="#">ADMIN</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item active">
				<a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<?= anchor('logout', 'Cerrar Sesión','class="nav-link btn"') ?>
			</li>
		</ul>

	</div>
</nav>




<div class="container" style="margin-top: 80px">	
	<div class="card">
		<div class="card-body">
			<h4 class="mb-4">Tienes <span class="badge badge-primary"><?= count($pruebas->result()) ?></span> pruebas por corregir.</h4>


			<div id="accordion" role="tablist">
				<?php foreach ($pruebas->result() as $key => $value): ?>
					
					<div class="card mb-2">
						<div class="card-header bg-dark text-white" role="tab" id="collapseOne">
							<h5 class="mb-0 ">
								<a data-toggle="collapse" href="#<?= $key ?>" aria-expanded="true" aria-controls="collapseOne">
									<?= $value->cedula ?> - <?= $value->nombre.' '.$value->apellido ?>
								</a>
							</h5>
						</div>

						<div id="<?= $key ?>" class="collapse" role="tabpanel" aria-labelledby="<?= $key ?>" data-parent="#accordion">
							<div class="card-body">
								<div class="row">
									<div class="col">
										<h4>Pregunta #1</h4>
										<p class="font-weight-bold">¿Qué es el tejido oseo compacto?</p>
										<b>R: </b><span class="text-justify"><?= $value->r1 ?></span>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col">
										<h4>Pregunta #2</h4>
										<p class="font-weight-bold">¿Cual de estas imagenes corresponde a una luxación?</p>
										<div class="row">
											<div class="col">
												1 <img class="img-thumbnail" src="<?= base_url() ?>/application/views/assets/img/luxacion-test1.jpg" alt="">
											</div>
											<div class="col">
												2 <img class="img-thumbnail" src="<?= base_url() ?>/application/views/assets/img/luxacion-test2.jpg" alt="">
											</div>
											<div class="col">
												3 <img class="img-thumbnail" src="<?= base_url() ?>/application/views/assets/img/luxacion-test3.jpg" alt="">
											</div>
										</div>
										<br><b>R: </b><span class="text-justify"><?= $value->r2 ?></span>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col">
										<h4>Pregunta #3</h4>
										<p class="font-weight-bold">De acuerdo a lo leido ¿Qué entiende usted por cartílago?</p>
										<b>R: </b><span class="text-justify"><?= $value->r3 ?></span>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col">
										<h4>Pregunta #4</h4>
										<p class="font-weight-bold"> Explique la division del sistema esquelético.</p>
										<b>R: </b><span class="text-justify"><?= $value->r4 ?></span>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col">
										<h4>Pregunta #5</h4>
										<p class="font-weight-bold">¿Cual de las siguientes respuestas es correcta ?</p>
										<ol>
											<li>El esqueleto axial esta formado por 126 huesos. De los miembros, incluidas las cinturas escapular y pelviana.</li>
											<li>La lordosis es la curvatura fisiológica de la columna en la región cervical o lumbar.</li>
											<li>Una dislocación es una separación de dos huesos en el lugar donde se encuentran en la articulación.</li>
										</ol>
										<b>R: </b><span class="text-justify"><?= $value->r5 ?></span>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-sm-12">
										<form action="" method="post" id="calificacion" class="inline">
											<input type="hidden" name="idestudiante" value="<?= $value->id ?>">
											<div class="input-group">
												<input id="cal" type="number" max="100" min="0" name="calificacion" placeholder="Asignar calificacion 0 - 100" class="form-control">
												<input type="submit" value="calificar" class="btn btn-primary ml-2">
											</div>
										</form>
										<p class="mt-2" id="r"></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>
</div>