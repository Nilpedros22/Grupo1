<!DOCTYPE html>
<html lang="es">

<head>
	<title>Rutina de bíceps</title>
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
		<h1 class="text-center mt-5 text-white">Rutina de Bíceps</h1>
		<div class="row mt-5">
			<div class="col-md-4">
				<div class="card">
					<img src="https://i.blogs.es/d85006/elevaciones1/1366_2000.webp" class="card-img-top"
						alt="Curl de bíceps con mancuernas">
					<div class="card-body">
						<h5 class="card-title">Curl de bíceps con mancuernas</h5>
						<p class="card-text">El curl de bíceps con mancuernas es uno de los ejercicios más populares
							para trabajar los bíceps. Sostén una mancuerna en cada mano, mantén los codos pegados a los
							costados y levanta las mancuernas hasta los hombros, luego baja lentamente.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img src="https://i.blogs.es/eeba20/martillo1/1366_2000.webp" class="card-img-top"
						alt="Curl de martillo con mancuernas">
					<div class="card-body">
						<h5 class="card-title">Curl de martillo con mancuernas</h5>
						<p class="card-text">El curl de martillo con mancuernas es un excelente ejercicio para trabajar
							los bíceps y los antebrazos. Sostén una mancuerna en cada mano con los pulgares apuntando
							hacia arriba, levanta las mancuernas hasta los hombros y luego baja lentamente.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img src="https://i.blogs.es/70fc57/bicep-curls-1/1366_2000.webp" class="card-img-top"
						alt="Curl de bíceps en barra">
					<div class="card-body">
						<h5 class="card-title">Curl de bíceps en barra</h5>
						<p class="card-text">El curl de bíceps en barra es otro ejercicio popular para trabajar los
							bíceps. Toma una barra con un agarre amplio, levanta la barra hasta los hombros y luego baja
							lentamente.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-md-4">
				<div class="card" id="carta5">
					<img src="https://i.blogs.es/3f2207/curl/1366_2000.webp" class="card-img-top"
						alt="Curl concentrado con mancuernas">
					<div class="card-body">
						<h5 class="card-title">Curl concentrado con mancuernas</h5>
						<p class="card-text">El curl concentrado con mancuernas es un ejercicio excelente para trabajar
							los bíceps y los antebrazos. Siéntate en un banco con una mancuerna en una mano, coloca el
							brazo que sostiene la mancuerna en el interior del muslo y levanta la mancuerna hacia el
							hombro, manteniendo el codo fijo en su lugar. Luego, baja lentamente la mancuerna hasta la
							posición inicial y repite con la otra mano.</p>
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