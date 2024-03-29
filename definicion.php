<!DOCTYPE html>
<html lang="es">

<head>
  <?php
  session_start();
  ?>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>NED FITNESS</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="cuerpos.css">
</head>

<body class="bg-info">
  <div id="container">
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
  </div>
  <h1 class="text-center mt-4 text-white">Dieta para déficit calórico</h1>
  <div class="d-flex justify-content-center align-items-center">
    <table>
      <thead>
        <tr>
          <th>Dieta</th>
          <th>Desayuno</th>
          <th>Media mañana</th>
          <th>Comida</th>
          <th>Merienda</th>
          <th>Cena</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Dieta 1</td>
          <td>Claras de huevo<br>Espinacas<br>Té verde</td>
          <td>Pechuga de pollo<br>Ensalada de lechuga, tomate y cebolla<br>Nueces</td>
          <td>Salmón a la plancha<br>Arroz integral<br>Brócoli al vapor</td>
          <td>Yogur natural 0% grasa<br>Frutos secos</td>
          <td>Pollo a la plancha<br>Ensalada de espinacas, zanahoria y tomate cherry<br>Calabacín a la plancha</td>
        </tr>
        <tr>
          <td>Dieta 2</td>
          <td>Copos de avena<br>Leche de almendras sin azúcar<br>Proteína de suero<br>Canela</td>
          <td>Atún natural<br>Manzana</td>
          <td>Ensalada de garbanzos<br>Tomate, cebolla y pimiento verde<br>Pollo a la plancha</td>
          <td>Batido de proteínas<br>Cacahuetes sin sal</td>
          <td>Merluza a la plancha<br>Ensalada de espinacas y aguacate<br>Calabacín a la plancha</td>
        </tr>
        <tr>
          <td>Dieta 3</td>
          <td>Tortilla de claras de huevo<br>Ensalada de espinacas, tomate y pepino<br>Fruta del bosque</td>
          <td>Quinoa<br>Pollo a la plancha<br>Pimiento rojo asado</td>
          <td>Ternera a la plancha<br>Ensalada de lechuga, tomate y cebolla<br>Brócoli al vapor</td>
          <td>Batido de proteínas<br>Almendras sin sal</td>
          <td>Salmón al horno<br>Ensalada de rúcula, tomate y pepino<br>Calabacín a la plancha</td>
        </tr>
        <tr>
          <td>Dieta 4</td>
          <td>Huevos revueltos<br>Tostada integral<br>Queso fresco 0%<br>Tomate natural</td>
          <td>Barrita de proteína<br>Nueces</td>
          <td>Ensalada de pollo y espinacas<br>Aceite de oliva</td>
          <td>Yogur desnatado con proteínas<br>Fresas</td>
          <td>Pescado blanco<br>Verduras a la plancha</td>
        </tr>
        <tr>
          <td>Dieta 5</td>
          <td>Tortilla de claras de huevo<br>Lechuga<br>Tomate natural<br>Aceite de oliva</td>
          <td>Arroz integral<br>Atún natural</td>
          <td>Pavo a la plancha<br>Verduras al vapor</td>
          <td>Barrita de proteína<br>Frutas del bosque</td>
          <td>Ternera<br>Ensalada verde</td>
        </tr>
      </tbody>
    </table>
  </div>
  <br>
  <footer class="d-flex justify-content-center align-items-center footer fixed-bottom">
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
</body>

</html>