<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="session.css">
</head>

<body>
  <?php
  session_start();
  if (isset($_POST['login'])) {
    $conexion = mysqli_connect("localhost", "root", "") or die("Error al conectar a la bbdd");
    $db = mysqli_select_db($conexion, "nedfitness") or die("Error al conectar a la bbdd");
    $email = $_POST["email"];
    $password = $_POST["password"];
    $query = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='" . $email . "' AND contraseña ='" . $password . "'");
    $nr = mysqli_num_rows($query);
    if ($nr == 1) {
      $_SESSION['loggedin'] = true;
      $_SESSION['username'] = $email;
      header("Location: inicio.php");
    } else if ($nr == 0) {
      echo "<script>alert('Correo o contraseña incorrectos.');</script>";
    }
  }
  ?>
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="inicio.html"><img id="logo" src="img/logo.png" alt="NED FITNESS"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="text-end">
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="inicio.html">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Rutinas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Alimentación</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="login.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="register.php">Registro</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <form action="" method="post" class="needs-validation" novalidate="" autocomplete="off">
    <div class="bg-info d-flex justify-content-center align-items-center vh-100">
      <div class="bg-white p-5 rounded-5 text-secondary shadow" style="width: 25rem">
        <div class="d-flex justify-content-center">
          <img src="assets/login-icon.svg" alt="login-icon" style="height: 7rem" />
        </div>
        <div class="text-center fs-1 fw-bold">Login</div>
        <div class="input-group mt-4">
          <div class="input-group-text bg-info">
            <img src="assets/username-icon.svg" alt="username-icon" style="height: 1rem" />
          </div>
          <input class="form-control bg-light" type="email" name="email" placeholder="Correo" />
        </div>
        <div class="input-group mt-1">
          <div class="input-group-text bg-info">
            <img src="assets/password-icon.svg" alt="password-icon" style="height: 1rem" />
          </div>
          <input class="form-control bg-light" type="password" name="password" placeholder="Contraseña" />
        </div>
        <div>
          <input type="submit" name="login" class="btn btn-info text-white w-100 mt-4 fw-semibold shadow-sm" value="Login">
        </div>
        <div class="d-flex gap-1 justify-content-center mt-1">
          <div>¿No tienes cuenta?</div>
          <a href="register.php" class="text-decoration-none text-info fw-semibold">Registrate</a>
        </div>
      </div>
    </div>
  </form>
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
  <script src="js/login.js"></script>
</body>

</html>