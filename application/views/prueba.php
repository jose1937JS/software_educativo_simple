<div class="container">
	<div class="row">
		<div class="col">
			<div class="jumbotron mt-4">
				<h2 class="text-center">Responde correctamente las preguntas a continuación. La calificación mínima aprobatoria es de 60 puntos.</h2>
			</div>
		</div>
	</div>

	<form action="" method="post" id="testform">

		<input type="hidden" name="id_estudiante" value="<?= $id_estudiante[0]->id ?>">
		
		<div class="row">
			<div class="col card">
				<div class="card-body">
					<h5 class="card-title">1. ¿Qué es el tejido oseo compacto?</h5>
					<div class="form-group">
						<input type="text" class="form-control" name="oseocompacto">
					</div>
					<button type="button" class="btn btn-primary a" id="oseocompacto">Siguiente</button>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col card">
				<div class="card-body">
					<h5 class="card-title">2. Selecciona la opción correcta</h5>
					<p class="card-text">¿Cual de éstas imágenes corresponde a una luxación?</p>
					<ol>
						<li><input type="radio" name="luxacion" value="1"><img class="peq img-thumbnail" src="<?= base_url() ?>/application/views/assets/img/luxacion-test1.jpg" class="img-thumbnail"></li><br>
						<li><input type="radio" name="luxacion" value="2"><img class="peq img-thumbnail" src="<?= base_url() ?>/application/views/assets/img/luxacion-test2.jpg" class="img-thumbnail"></li><br>
						<li><input type="radio" name="luxacion" value="3"><img class="peq img-thumbnail" src="<?= base_url() ?>/application/views/assets/img/luxacion-test3.jpg" class="img-thumbnail"></li><br>
					</ol>
					<button type="button" class="btn btn-primary a" id="luxacion">Siguiente</button>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col card">
				<div class="card-body">
					<h5 class="card-title">3. De acuerdo a lo leido ¿Qué entiende usted por cartílago?.</h5>
					<p class="card-text"></p>
					<textarea name="cartilago"  class="form-control"></textarea><br>
					<button type="button" class="btn btn-primary a" id="cartilago">Siguiente</button>
				</div>

			</div>
		</div>

		<div class="row">
			<div class="col card">
				<div class="card-body">
					<h5 class="card-title">4. Explique la division del sistema esquelético</h5>
					<div class="form-group">
						<input type="text" class="form-control" name="sistemaesqueletico">
					</div>
					<button type="button" class="btn btn-primary a" id="sistemaesqueletico">Siguiente</button>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col card">
				<div class="card-body">
					<h5 class="card-title">5. ¿Cual de las siguientes respuestas es correcta ?</h5>
					<div class="form-group">
						<input type="checkbox" id="respuesta1" name="respuesta[]" value="1">
						<label for="respuesta1">El esqueleto axial esta formado por 126 huesos. De los miembros, incluidas las cinturas escapular y pelviana.</label><br>

						<input type="checkbox" id="respuesta2" name="respuesta[]" value="2" >
						<label for="respuesta2">La lordosis es la curvatura fisiológica de la columna en la región cervical o lumbar.</label><br>

						<input type="checkbox" id="respuesta3" name="respuesta[]" value="3">
						<label for="respuesta3">Una dislocación es una separación de dos huesos en el lugar donde se encuentran en la articulación.</label>
					</div>
					<button type="button" class="btn btn-primary a" id="respuestas">Siguiente</button>
				</div>
			</div>
		</div>

		<div class="row justify-content-center">
			<button class="btn btn-primary" type="submit">Enviar Resultados</button>
		</div>
	</form>
</div>