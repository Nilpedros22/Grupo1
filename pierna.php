<!DOCTYPE html>
<html lang="es">

<head>
	<?php
	session_start();
	?>
	<title>Rutina de pierna</title>
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
		<h1 class="text-center mt-5 text-white">Rutina de pierna</h1>
		<div class="row mt-5">
			<div class="col-md-4">
				<div class="card">
					<img src="https://i.blogs.es/1fd119/sentadilla/1366_2000.webp" class="card-img-top" alt="Sentadillas con barra">
					<div class="card-body">
						<h5 class="card-title">Sentadillas con barra</h5>
						<p class="card-text">Las sentadillas con barra son uno de los ejercicios más efectivos para
							trabajar los músculos de las piernas. Sujeta la barra sobre tus hombros, baja tu cuerpo
							hasta que tus muslos estén paralelos al suelo, y luego vuelve a la posición inicial.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img src="https://i.blogs.es/7425be/prensa1/1366_2000.webp" class="card-img-top" alt="Prensa de piernas">
					<div class="card-body">
						<h5 class="card-title">Prensa de piernas</h5>
						<p class="card-text">La prensa de piernas es un ejercicio excelente para trabajar los músculos
							de las piernas. Siéntate en la máquina de prensa, coloca tus pies en la plataforma, y empuja
							la plataforma hacia afuera, luego vuelve a la posición inicial.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img src="https://www.entrenamientos.com/media/cache/exercise_375/uploads/exercise/zancadas-con-mancuernas-init-pos-1547.png" class="card-img-top" alt="Zancadas con mancuernas">
					<div class="card-body">
						<h5 class="card-title">Zancadas con mancuernas</h5>
						<p class="card-text">Las zancadas con mancuernas son un excelente ejercicio para trabajar los
							músculos de las piernas y mejorar el equilibrio. Sostén una mancuerna en cada mano, da un
							gran paso adelante con una pierna, dobla ambas rodillas hasta que la rodilla trasera esté a
							pocos centímetros del suelo, y luego regresa a la posición inicial. Repite con la otra
							pierna.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card" id="tarjeta4">
					<img src="https://www.entrenamientos.com/media/cache/exercise_375/uploads/exercise/zancada-con-la-otra-pierna-elevada-init-pos-9604.png" class="card-img-top" alt="Prensa de piernas">
					<div class="card-body">
						<h5 class="card-title">Sentadilla Bulgara</h5>
						<p class="card-text">La sentadilla búlgara es un ejercicio de piernas muy efectivo que se enfoca
							en los músculos de las piernas y los glúteos. Es un movimiento desafiante que implica
							mantener el equilibrio mientras se baja y se levanta con una sola pierna, lo que lo hace
							ideal para mejorar la fuerza, la estabilidad y la flexibilidad de las piernas. Además, la
							sentadilla búlgara se puede realizar con o sin peso adicional, lo que la convierte en una
							opción versátil para cualquier nivel de habilidad. Sin embargo, es importante tener cuidado
							al realizar este ejercicio y asegurarse de mantener una buena técnica para evitar lesiones.
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card" id="tarjeta5">
					<img src="https://i.blogs.es/310362/elevacion2/1366_2000.webp" class="card-img-top" alt="Elevaciones de talones">
					<div class="card-body">
						<h5 class="card-title">Elevaciones de talones</h5>
						<p class="card-text">Las elevaciones de talones son un excelente ejercicio para trabajar los
							músculos de las pantorrillas. Párate con los pies separados al ancho de los hombros y coloca
							los talones en una superficie elevada, como una plataforma o un bloque. Levanta los talones
							del suelo y luego baja lentamente.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card" id="tarjeta6">
					<img src="https://i.blogs.es/1fd119/sentadilla/1366_2000.webp" class="card-img-top" alt="Sentadilla con barra">
					<div class="card-body">
						<h5 class="card-title">Curl de pierna acostado</h5>
						<p class="card-text">El curl de pierna acostado es un ejercicio que se centra principalmente en
							los músculos de los muslos, específicamente en los cuádriceps. El movimiento se realiza
							acostado boca abajo en un banco plano con los tobillos asegurados en un rodillo de espuma.
							Luego, se levanta el peso del rodillo de espuma al flexionar las rodillas y llevar los
							talones hacia los glúteos, y se baja lentamente el peso al estirar las piernas. Este
							ejercicio es especialmente útil para desarrollar la fuerza y el tamaño de los cuádriceps</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>