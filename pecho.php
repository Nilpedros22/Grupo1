<!DOCTYPE html>
<html>

<head>
	<title>Rutina de pecho</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="general.css">
</head>

<body class="bg-info">
	<nav class="navbar navbar-expand-lg bg-light">
		<div class="container-fluid">
			<a class="navbar-brand" href="inicio.php"><img id="logo" src="img/logo.png" alt="NED FITNESS"></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
				aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
		<h1 class="text-center mt-5 text-white">Rutina de Pecho</h1>
		<div class="row mt-5">
			<div class="col-md-4">
				<div class="card">
					<img src="https://i.blogs.es/85d668/bench-press-1/1366_2000.webp" class="card-img-top"
						alt="Press de banca con barra">
					<div class="card-body">
						<h5 class="card-title">Press de banca con barra</h5>
						<p class="card-text">El press de banca con barra es uno de los ejercicios más populares para
							trabajar el pecho. Acuéstate en un banco plano con los pies firmemente apoyados en el suelo
							y levanta la barra desde el soporte. Baja lentamente la barra hacia el pecho, mantén una
							breve pausa y luego empuja la barra hacia arriba.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/press-up-1585328992.jpg?resize=480:*"
						class="card-img-top" alt="Flexiones de pecho">
					<div class="card-body">
						<h5 class="card-title">Flexiones de pecho</h5>
						<p class="card-text">Las flexiones de pecho son un ejercicio clásico que se pueden hacer en
							cualquier lugar. Coloca las manos en el suelo a la altura de los hombros y los pies juntos o
							separados, baja el pecho hacia el suelo y luego empuja hacia arriba.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img src="https://www.entrenamientos.com/media/cache/exercise_375/uploads/exercise/press-pectoral-con-mancuernas-en-banco-inclinado-init-pos-8206.png"
						class="card-img-top" alt="Press de banca inclinado con mancuernas">
					<div class="card-body">
						<h5 class="card-title">Press de banca inclinado con mancuernas</h5>
						<p class="card-text">El press de banca inclinado con mancuernas es un ejercicio excelente para
							trabajar los músculos superiores del pecho. Acuéstate en un banco inclinado con una
							mancuerna en cada mano, levanta las mancuernas hacia arriba y luego baja lentamente las
							mancuernas hacia los lados del pecho.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-md-4">
				<div class="card">
					<img src="https://i.blogs.es/5c0b8f/aperturas/1366_2000.webp" class="card-img-top"
						alt="Aperturas con mancuernas">
					<div class="card-body">
						<h5 class="card-title">Aperturas con mancuernas</h5>
						<p class="card-text">Las aperturas con mancuernas son un ejercicio excelente para trabajar los
							músculos laterales del pecho. Acuéstate en un banco plano con una mancuerna en cada mano,
							levanta los brazos hacia arriba y luego baja los brazos lentamente a los lados, manteniendo
							un ligero arco en los codos. Cuando sientas un estiramiento en el pecho, levanta los brazos
							de nuevo a la posición inicial.

					</div>
				</div>
			</div>
		</div>
	</div>
	<footer>

	</footer>
</body>

</html>