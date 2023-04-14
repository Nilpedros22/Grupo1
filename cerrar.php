<!DOCTYPE html>
<html lang="es">

<head>
  <?php
  session_start();
  ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <title>NED FITNESS</title>
  <link rel="stylesheet" type="text/css" href="inicio.css">
</head>

<body>
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
              <a class="nav-link active" aria-current="page" href="inicio.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="rutinas.php">Rutinas</a>
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
  <div class="bg-info d-flex justify-content-center align-items-center vh-100">
    <div class="bg-white p-5 rounded-5 text-secondary shadow" style="width: 25rem">
      <div class="d-flex justify-content-center">
        <img src="assets/login-icon.svg" alt="login-icon" style="height: 7rem" />
      </div>
      <?php
      if (isset($_SESSION['loggedin'])) {
        echo "<div class='text-center fs-4 fw-bold'>" . $_SESSION['username'] . "</div>";
      }
      ?>
      <div class="input-group mt-1">
        <input type="button" onclick="location.href = 'editar.php'" name="edit" class="btn btn-info text-white w-100 mt-4 fw-semibold shadow-sm" value="Editar Usuario">
      </div>
      <div class="input-group mt-1">
        <input type="button" onclick="location.href = 'logout.php'" name="logout" class="btn btn-info text-white w-100 mt-4 fw-semibold shadow-sm" value="Cerrar Sesión">
      </div>
    </div>
  </div>
</body>

</html>