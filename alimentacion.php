<!DOCTYPE html>
<html lang="es">

<head>
  <?php
  session_start();
  ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Alimentación</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="general.css">
  <link rel="stylesheet" type="text/css" href="alimentacion.css">
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
              <a class="nav-link" href="rutinas.php">Rutinas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="alimentacion.php">Alimentación</a>
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

  <div id="fondo">

    </h2>
    <div class="container">
      <h1 class="titulo2">Selecciona tu dieta</h1>
      <div class="row">
        <div class="col-md-5">
          <div class="jumbotron">
            <div class="card"><img src="img/definido.jpg" class="card-img-top" alt="Dieta para déficit calórico">
              <div>
                <h1 class="card-title ">Dieta para déficit calórico</h1>
                <p class="card-text">Esta dieta es para aquellas personas que buscan perder peso y reducir su ingesta calórica.</p>
                <a href="definicion.php" class="btn btn-info text-white fw-semibold">Acceder</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-5">
          <div class="jumbotron">
            <div class="card"><img src="img/volumen.jpg" class="card-img-top" alt="Dieta para déficit calórico">
              <div>
                <h1 class="card-title1 ">Dieta para superávit calórico</h1>
                <p class="card-text1">Esta dieta es para aquellas personas que buscan aumentar de peso y aumentar su ingesta calórica.</p>
                <a href="volumen.php" class="btn btn-info text-white fw-semibold">Acceder</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>