<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="<?= base_url() ?>/application/views/assets/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>/application/views/assets/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>/application/views/assets/estilos.css">
</head>
<body class="body">
	<div class="card login">
		<div class="card-header">
			<h5 class="text-center">Ingresar al sistema</h5>
		</div>
		<div class="card-body px-0">
			<?= form_open('login', 'class="container"') ?>
				<div class="form-row">
					<div class="input-group form-group col">
						<div class="input-group-addon"><span class="fa fa-user"></span></div>
						<input type="text" class="form-control" name="usuario" placeholder="Usuario" required="">
					</div>
				</div>
				<div class="form-row">
					<div class="input-group form-group col">
						<div class="input-group-addon"><span class="fa fa-key"></span></div>
						<input type="password" class="form-control" name="clave" placeholder="Contraseña" required="">
					</div>
				</div>
				<div class="row justify-content-center">
					<button type="submit" class="btn btn-primary col-7" name="login"><i class="fa fa-send"></i> Entrar</button>
				</div>
				<div class="row justify-content-end">
					<a class="" data-toggle="modal" href="#exampleModalLong">¿No estas registrad@? - Regístrate</a>
				</div>
			</form>
		</div>
	</div>



	<!-- Modal -->
	<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Regístrate</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form id="aniadirUser" method="post">
					<div class="modal-body">
						<div class="form row">
							<div class="form-group col-md-3">
								<label for="cedula">Cédula</label>
								<input type="text" name="cedula" class="form-control" id="cedula" required>
								<small id="cedhelp" class="form-text text-muted text-danger"></small>
							</div>
							<div class="form-group col">
								<label for="nombre">Nombre</label>
								<input type="text" name="nombre" class="form-control" id="nombre" required>
							</div>
							<div class="form-group col">
								<label for="apellido">Apellido</label>
								<input type="text" name="apellido" class="form-control" id="apellido" required>
							</div>
						</div>
						<div class="form row">
							<div class="form-group col-md-3">
								<label for="cedula">Teléfono</label>
								<input type="text" name="telefono" class="form-control" id="telefono">
							</div>
							<div class="form-group col">
								<label for="nombre">Correo</label>
								<input type="text" name="correo" class="form-control" id="correo" required>
							</div>
							<div class="form-group col">
								<label for="usuario">Usuario</label>
								<input type="text" name="usuario" class="form-control" id="usuario" required>
								<small id="userhelp" class="form-text text-muted text-danger"></small>
							</div>
							<div class="form-group col">
								<label for="usuario">Clave</label>
								<input type="password" name="clave" class="form-control" id="clave" required>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Enviar</button>
					</div>
				</form>
			</div>
		</div>
	</div>



	<script src="<?= base_url() ?>/application/views/assets/jquery.min.js"></script>
	<script src="<?= base_url() ?>/application/views/assets/bootstrap/popper.min.js"></script>
	<script src="<?= base_url() ?>/application/views/assets/bootstrap/bootstrap.min.js"></script>
	<script src="<?= base_url() ?>/application/views/assets/scripts.js"></script>
</body>
</html>