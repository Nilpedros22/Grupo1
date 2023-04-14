<!DOCTYPE html>
<html lang="es">

<head>
	<?php
	session_start();
	?>
	<title>Rutina de hombro</title>
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
		<h1 class="text-center mt-5 text-white">Rutina de Hombro</h1>
		<div class="row mt-5">
			<div class="col-md-4">
				<div class="card">
					<img src="https://i.blogs.es/6485db/pres-hombro/1366_2000.webp" class="card-img-top" alt="Press de hombros con mancuernas">
					<div class="card-body">
						<h5 class="card-title">Press de hombros con mancuernas</h5>
						<p class="card-text">El press de hombros con mancuernas es un excelente ejercicio para trabajar
							los hombros. Sostén una mancuerna en cada mano, levanta las mancuernas hasta la altura de
							los hombros y presiona hacia arriba, luego baja lentamente.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img src="https://i.blogs.es/7ad688/ejercicio21-3/1366_2000.webp" class="card-img-top" alt="Elevación lateral con mancuernas">
					<div class="card-body">
						<h5 class="card-title">Elevación lateral con mancuernas</h5>
						<p class="card-text">La elevación lateral con mancuernas es un ejercicio que trabaja la parte
							lateral del hombro. Sostén una mancuerna en cada mano, levanta los brazos hasta los hombros
							y levanta las mancuernas hacia los lados, manteniendo los brazos rectos, luego baja
							lentamente.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img src="https://i.blogs.es/18b6f6/remo-cuello/1366_2000.webp" class="card-img-top" alt="Remo al mentón con barra">
					<div class="card-body">
						<h5 class="card-title">Remo al mentón con barra</h5>
						<p class="card-text">El remo al mentón con barra es un ejercicio que trabaja los hombros, los
							trapecios y los brazos. Toma una barra con un agarre amplio, levanta la barra hasta la
							altura de la barbilla y luego baja lentamente.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-md-4 offset-md-4">
				<div class="card">
					<img src="https://depowerlifting.site/wp-content/uploads/2021/06/press-frontal-de-hombros-en-maquina-sentado-y-agarre-neutro-1537.png" class="card-img-top" alt="Prensa de hombros en máquina">
					<div class="card-body">
						<h5 class="card-title">Prensa de hombros en máquina</h5>
						<p class="card-text">La prensa de hombros en máquina es un ejercicio que trabaja los hombros con
							un movimiento guiado. Siéntate en la máquina con la espalda recta y los pies apoyados en el
							suelo. Agarra los agarres de la máquina y levanta los brazos hacia arriba hasta que los
							codos estén completamente extendidos. Luego, baja lentamente hasta la posición inicial y
							repite el ejercicio.</p>
					</div>
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