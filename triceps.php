<!DOCTYPE html>
<html lang="es">

<head>
	<?php
	session_start();
	?>
	<title>Rutina de Triceps </title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="general.css">
</head>

<body class="bg-info">
	<nav class="navbar navbar-expand-lg bg-light">
		<div class="container-fluid">
			<a class="navbar-brand" href="inicio.php"><img id="logo" src="img/logo.png" alt="NED FITNESS"></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="text-end">
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="inicio.php">Inicio</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="rutinas.php">Rutinas</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="alimentacion.php">Alimentación</a>
						</li>
						<li class="nav-item">
							<?php
							if (isset($_SESSION['loggedin'])) {
								echo  "<a class='nav-link' href='cerrar.php'>" . $_SESSION['username'] . "</a>";
							}
							?>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</nav>
	<div class="container">
		<h1 class="text-center mt-5 text-white">Rutina de Triceps</h1>
		<div class="row mt-5">
			<div class="col-md-4">
				<div class="card">
					<img src="https://www.entrenamientos.com/media/cache/exercise_375/uploads/exercise/fondos-en-paralelas-en-maquina-asistida-init-pos-4380.png" class="card-img-top" alt="Remo con barra">
					<div class="card-body">
						<h5 class="card-title">Fondos de Tríceps</h5>
						<p class="card-text">Los fondos de tríceps son un ejercicio efectivo para trabajar los tríceps.
							Para realizarlos, coloca tus manos en una barra o en dos barras paralelas y levanta tu
							cuerpo, luego bájalo lentamente hasta que tus brazos queden paralelos al suelo.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img src="https://www.entrenamientos.com/media/cache/exercise_375/uploads/exercise/extension-de-triceps-de-pie-con-polea-alta-init-pos-2088.png" class="card-img-top" alt="Dominadas">
					<div class="card-body">
						<h5 class="card-title">Extensiones de Triceps</h5>
						<p class="card-text">Las extensiones de tríceps son otro ejercicio efectivo para trabajar los
							tríceps. Para realizarlas, acuéstate en un banco con una mancuerna o una barra y baja
							lentamente el peso detrás de tu cabeza, luego levántalo de nuevo.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img src="https://www.entrenamientos.com/media/cache/exercise_375/uploads/exercise/extension-de-triceps-o-press-frances-con-barra-en-banco-inclinado-init-pos-7429.png" class="card-img-top" alt="Peso muerto">
					<div class="card-body">
						<h5 class="card-title">Press Frances</h5>
						<p class="card-text">El press francés es un gran ejercicio para trabajar los tríceps. Para
							realizarlo, acuéstate en un banco con una mancuerna o una barra y baja lentamente el peso
							detrás de tu cabeza, luego levantar de nuevo y repite.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card" id="carta4">
				<img src="https://www.entrenamientos.com/media/cache/exercise_375/uploads/exercise/extension-de-triceps-a-una-con-mancuerna-de-pie-init-pos-7296.png" class="card-img-top" alt="Pullover con cable">
				<div class="card-body">
					<h5 class="card-title">Extensión de Tríceps con Mancuernas</h5>
					<p class="card-text">Las extensiones de tríceps con mancuernas son un excelente ejercicio para
						trabajar los tríceps. Para realizarlo, sostén una mancuerna con ambas manos detrás de tu cabeza
						y levántala extendiendo tus brazos hacia arriba, luego baja lentamente y repite.</p>
				</div>
			</div>
		</div>
	</div>
	<!-- Enlace al archivo JS de Bootstrap -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>