<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Registro</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="session.css">
</head>

<body class="bg-info">
	<?php
	$conexion = mysqli_connect("localhost", "root", "") or die("Error al connectar a la bbdd.");
	$db = mysqli_select_db($conexion, "usuarios") or die("Error al connectar a la bbdd");
	if (!empty($_POST['nombre']) && !empty($_POST['apellidos']) && !empty($_POST['fecha']) && !empty($_POST['email']) && !empty($_POST['password'])) {
		$consulta = "INSERT INTO datos (nombre, apellidos, fecha_nacimiento, correo, contraseña) VALUES ('" . $_POST['nombre'] . "','" . $_POST['apellidos'] . "','" . $_POST['fecha'] . "','" . $_POST['email'] . "','" . $_POST['password'] . "');";
		$resultado = mysqli_query($conexion, $consulta) or die("Error en la consulta SQL");
	}
	mysqli_close($conexion);
	?>
	<nav class="navbar navbar-expand-lg bg-light">
		<div class="container-fluid">
			<a class="navbar-brand" href="#"><img id="logo" src="img/logo.png" alt="NED FITNESS"></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="text-end">
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="inicio.html">Inicio</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="rutinas.html">Rutinas</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="alimentacion.html">Alimentacion</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="login.php">Login</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="register.php">Registro</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</nav>
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
					<div class="text-center my-5">
						<img src="assets/login-icon.svg" alt="login-icon" style="height: 7rem" />
					</div>
					<div class="card shadow-lg">
						<div class="card-body p-5">
							<h1 class="fs-4 card-title fw-bold mb-4">Registrate</h1>
							<form method="POST" class="needs-validation" novalidate="" autocomplete="off">
								<div class="mb-3">
									<label class="mb-2 text-muted" for="name">Nombre</label>
									<input id="name" type="text" class="form-control" name="name" value="" required autofocus>
									<div class="invalid-feedback">
										El nombre es obligatorio
									</div>
								</div>

								<div class="mb-3">
									<label class="mb-2 text-muted" for="name">Apellidos</label>
									<input id="apellidos" type="text" class="form-control" name="apellidos" value="" required autofocus>
									<div class="invalid-feedback">
										Los apellidos son obligatorio
									</div>
								</div>

								<div class="mb-3">
									<label class="mb-2 text-muted" for="name">Fecha de nacimiento</label>
									<input id="fecha" type="date" class="form-control" name="fecha" value="" aria-label="dd / mm / aaaa" placeholder="dd / mm / aaaa" required autofocus>
									<div class="invalid-feedback">
										Los apellidos son obligatorio
									</div>
								</div>

								<div class="mb-3">
									<label class="mb-2 text-muted" for="email">Email</label>
									<input id="email" type="email" class="form-control" name="email" value="" required>
									<div class="invalid-feedback">
										El correo es obligatorio
									</div>
								</div>

								<div class="mb-3">
									<label class="mb-2 text-muted" for="password">Contraseña</label>
									<input id="password" type="password" class="form-control" name="password" required>
									<div class="invalid-feedback">
										La contraseña es obligatoria
									</div>
								</div>

								<div class="align-items-center d-flex">
									<button type="submit" class="btn btn-info text-white w-100 mt-4 fw-semibold shadow-sm">
										Register
									</button>
								</div>
							</form>
						</div>
						<div class="card-footer py-3 border-0">
							<div class="text-center">
								¿Ya tienes una cuenta? <a href="login.php" class="text-decoration-none text-info fw-semibold">Login</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<script src="js/login.js"></script>
</body>

</html>