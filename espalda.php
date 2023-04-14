<!DOCTYPE html>
<html lang="es">

<head>
	<?php
	session_start();
	?>
	<title>Rutina de espalda </title>
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
		<h1 class="text-center mt-5 text-white">Rutina de Espalda</h1>
		<div class="row mt-5">
			<div class="col-md-4">
				<div class="card">
					<img src="https://www.entrenamientos.com/media/cache/exercise_375/uploads/exercise/remo-con-barra-de-pie-init-pos-6237.png" class="card-img-top" alt="Remo con barra">
					<div class="card-body">
						<h5 class="card-title">Remo con barra</h5>
						<p class="card-text">El remo con barra es un excelente ejercicio para trabajar los músculos de
							la espalda. Para realizarlo, toma una barra con un agarre amplio y levanta el peso hasta que
							toque tu pecho, luego baja lentamente.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img src="https://www.entrenamientos.com/media/cache/exercise_375/uploads/exercise/dominadas-init-pos-4753.png" class="card-img-top" alt="Dominadas">
					<div class="card-body">
						<h5 class="card-title">Dominadas</h5>
						<p class="card-text">Las dominadas son un ejercicio clásico de espalda que puedes realizar en
							cualquier barra. Sostén la barra con las manos y levanta tu cuerpo hasta que tu barbilla
							esté por encima de la barra, luego baja lentamente.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img src="https://i.blogs.es/19909d/pesomuerto1/1366_2000.webp" class="card-img-top" alt="Peso muerto">
					<div class="card-body">
						<h5 class="card-title">Peso muerto</h5>
						<p class="card-text">El peso muerto es un ejercicio compuesto que trabaja varios grupos
							musculares, incluyendo la espalda baja. Para realizarlo, coloca una barra con peso en el
							suelo y levántala hasta que estés de pie, luego baja lentamente.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card" id="carta4">
				<img src="https://www.entrenamientos.com/media/cache/exercise_375/uploads/exercise/pullover-con-cable-polea-de-pie-init-pos-9896.png" class="card-img-top" alt="Pullover con cable">
				<div class="card-body">
					<h5 class="card-title">Pullover con cable</h5>
					<p class="card-text">El pullover con cable es un ejercicio efectivo para trabajar los músculos de la
						espalda, el pecho y los brazos. Sostén un cable con ambas manos, coloca los pies en una posición
						firme y baja el cable detrás de tu cabeza y luego levántalo de nuevo sobre tu cuerpo.</p>
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