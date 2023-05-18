<!DOCTYPE html>
<html lang="es">

<head>
  <?php
  session_start();
  ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Rutinas</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="general.css">
</head>

<body class="bg-info">
  <?php
  $conexion = mysqli_connect("localhost", "root", "") or die("Error al connectar a la bbdd.");
  $db = mysqli_select_db($conexion, "nedfitness") or die("Error al connectar a la bbdd");
  if (!empty($_POST['nombre']) && !empty($_POST['descripcion']) && !empty($_POST['imagen']) && !empty($_POST['grupo_muscular'])) {
    $consulta = "INSERT INTO ejercicios (nombre, descripción, imagen, grupo_muscular) VALUES ('" . $_POST['nombre'] . "','" . $_POST['descripcion'] . "','" . $_POST['imagen'] . "','" . $_POST['grupo_muscular'] . "');";
    $resultado = mysqli_query($conexion, $consulta) or die("Error en la consulta SQL");
    if ($resultado) {
      echo "<script>alert('Ejercicio añadido a la rutina.');</script>";
    }
  }
  mysqli_close($conexion);
  ?>
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

  <div class="container my-4">
    <h1 class="titulo">Selecciona tu músculo</h1>
    <div class="row">
      <div class="col-md-4 mb-3">
        <div class="card">
          <img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/pectorales-1561054672.jpg" class="card-img-top" alt="Shoulders">
          <div class="card-body">
            <h5 class="card-title">Pecho</h5>
            <p class="card-text">Fortalece tus pectorales y mejora tu postura.</p>
            <a href="pecho.php" class="btn btn-info text-white fw-semibold">Acceder</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="card">
          <img src="https://manmedicalinstitute.com/wp-content/uploads/2022/05/Los-mejores-entrenamientos-para-conseguir-una-espalda-en-forma-de-V.jpg" class="card-img-top" alt="Back">
          <div class="card-body">
            <h5 class="card-title">Espalda</h5>
            <p class="card-text">Mejora tu postura y fortalece tus dorsales.</p>
            <a href="espalda.php" class="btn btn-info text-white fw-semibold">Acceder</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="card">
          <img src="https://entrenadorpersonal24.com/wp-content/uploads/2019/03/mejores-consejos-tr%C3%ADceps.jpg" class="card-img-top" alt="Chest">
          <div class="card-body">
            <h5 class="card-title">Tríceps</h5>
            <p class="card-text">Mejora tus tríceps y fortalece tus brazos en general.</p>
            <a href="triceps.php" class="btn btn-info text-white fw-semibold">Acceder</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="card">
          <img src="https://i.blogs.es/6eb52d/1366_2000---2022-10-14t090904.532/1366_2000.webp" class="card-img-top" alt="Shoulders">
          <div class="card-body">
            <h5 class="card-title">Hombros</h5>
            <p class="card-text">Entrena tus hombros con estos ejercicios para ganar fuerza y tamaño.</p>
            <a href="hombro.php" class="btn btn-info text-white fw-semibold">Acceder</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="card">
          <img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/body-building-in-progress-royalty-free-image-1590394269.jpg?crop=1.00xw:1.00xh;0,0&resize=980:*" class="card-img-top" alt="Biceps">
          <div class="card-body">
            <h5 class="card-title">Bíceps</h5>
            <p class="card-text">Define tus brazos y aumenta el tamaño de tus bíceps con estos ejercicios.</p>
            <a href="biceps.php" class="btn btn-info text-white fw-semibold">Acceder</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="card">
          <img src="https://i.blogs.es/30cdb6/pierna/1366_2000.webp" class="card-img-top" alt="Legs">
          <div class="card-body">
            <h5 class="card-title">Piernas</h5>
            <p class="card-text">Desarrolla piernas más fuertes y definidas con esta selección de ejercicios.</p>
            <a href="pierna.php" class="btn btn-info text-white fw-semibold">Acceder</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-3" id="nuevo">
        <div class="card">
          <form action="" method="post" novalidate="" autocomplete="off">
            <div class="card-body">
              <h1 class="fs-5 card-title fw-bold mb-4">Añadir un ejercicio a una rutina</h1>
              <div class="mb-3">
                <label class="mb-2" for="name">Nombre</label>
                <input id="nombre" type="text" maxlength="50" class="form-control" name="nombre" value="" required autofocus>
              </div>
              <div class="mb-3">
                <label class="mb-2" for="descripcion">Descripción</label>
                <textarea id="descripcion" type="text" maxlength="750" class="form-control" name="descripcion" value="" required autofocus></textarea>
              </div>
              <div class="mb-3">
                <label class="mb-2" for="imagen">URL de la imagen</label>
                <textarea id="imagen" type="text" maxlength="750" class="form-control" name="imagen" value="" required autofocus></textarea>
              </div>
              <div class="mb-3">
                <label class="mb-2" for="imagen">Grupo múscular</label>
                <select class="form-select" aria-label="Default select example" name="grupo_muscular" id="grupo_muscular">
                  <option value="Pecho" selected>Pecho</option>
                  <option value="Espalda">Espalda</option>
                  <option value="Tríceps">Tríceps</option>
                  <option value="Hombros">Hombros</option>
                  <option value="Bíceps">Bíceps</option>
                  <option value="Piernas">Piernas</option>
                </select>
              </div>
              <div class="mb-3">
                <input type="submit" id="update" class="btn btn-info text-white fw-semibold" value="Añadir ejercicio">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
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
  <!-- Enlace al archivo JS de Bootstrap -->
  <script src="js/login.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>