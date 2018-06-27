<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="<?= base_url() ?>/assets/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>/assets/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>/assets/estilos.css">
</head>
<body class="body">
	<div class="card login">
		<div class="card-header">
			<h5 class="text-center">Ingresar al sistema</h5>
		</div>
		<div class="card-body">
			<form action="" method="post" class="container">
				<div class="form-row">
					<div class="input-group form-group col">
						<div class="input-group-addon"><span class="fa fa-user"></span></div>
						<input type="text" class="form-control" name="usuario" placeholder="Usuario">
					</div>
				</div>
				<div class="form-row">
					<div class="input-group form-group col">
						<div class="input-group-addon"><span class="fa fa-key"></span></div>
						<input type="password" class="form-control" name="clave" placeholder="Contraseña">
					</div>
				</div>
				<div class="row justify-content-center">
					<button type="submit" class="btn btn-primary col-7" name="login"><i class="fa fa-send"></i> Entrar</button>
				</div>
			</form>
		</div>
	</div>

	<script src="<?= base_url() ?>/assets/jquery.min.js"></script>
	<script src="<?= base_url() ?>/assets/bootstrap/bootstrap.min.js"></script>
</body>
</html>