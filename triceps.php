<!DOCTYPE html>
<html lang="es">

<head>
	<?php
	session_start();
	$conexion = mysqli_connect("localhost", "root", "") or die("Error al conectar a la bbdd");
	$db = mysqli_select_db($conexion, "nedfitness") or die("Error al conectar a la bbdd");

	$musculo = "Tríceps";
	$query = mysqli_query($conexion, "SELECT * FROM ejercicios WHERE grupo_muscular='" . $musculo . "'");
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
		<h1 class="text-center mt-4 text-white">Rutina de Tríceps</h1>
		<?php
		$cont = 0;
		while ($columna = mysqli_fetch_array($query)) {
			if ($cont % 3 == 0) {
				echo "<br/>	<div class='row'>";
			}
			echo "<div class='col-md-4'>
				<div class='card'>";
			echo "<img src=" . $columna['imagen'] . " class='card-img-top'>";
			echo "<div class='card-body'>
				<h5 class='card-title'>" . $columna['Nombre'] . "</h5>";
			echo "<p class='card-text'>" . $columna['Descripción'] . "</p>";
			echo "</div></div></div>";
			if (($cont - 2) % 3 == 0) {
				echo "</div>";
			}
			$cont++;
		}
		?>
	</div>
	<br>
	<footer class="d-flex justify-content-center align-items-center">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
		<div class="wrapper">
			<div class="button">
				<div class="icon">
					<i class="fab fa-facebook-f"></i>
				</div>
				<span>Facebook</span>
			</div>
			<div class="button">
				<div class="icon">
					<i class="fab fa-twitter"></i>
				</div>
				<span>Twitter</span>
			</div>
			<div class="button">
				<div class="icon">
					<i class="fab fa-instagram"></i>
				</div>
				<span>Instagram</span>
			</div>
			<div class="button">
				<div class="icon">
					<i class="fab fa-youtube"></i>
				</div>
				<span>YouTube</span>
			</div>
		</div>
	</footer>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>