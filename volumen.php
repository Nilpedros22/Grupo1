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
  <h1 class="text-center mt-4 text-white">Dieta para superávit calórico</h1>
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
          <td>Copos de avena<br>1 huevo entero y 5 claras de huevo<br>Frutos secos<br>Zumo de naranja</td>
          <td>Arroz integral<br>Pechuga de pavo<br>Plátano</td>
          <td>Pasta al huevo<br>Ternera<br>Verduras plancha</td>
          <td>Patata asada<br>Atún natural<br>Tomate frito sin azúcares añadido</td>
          <td>Atún plancha<br>Verdura a la plancha<br>Boniato</td>
        </tr>
        <tr>
          <td>Dieta 2</td>
          <td>Pan de cereales<br>Jamón York<br>Aceite de Oliva<br>Leche de soja<br>Kiwi</td>
          <td>Quinoa<br>Pechuga de pollo<br>Manzana</td>
          <td>Garbanzos<br>Cerdo<br>Verduras plancha</td>
          <td>Queso batido 0%<br>Nueces<br>Copos de avena</td>
          <td>Salmón plancha<br>Patata cocida</td>
        </tr>
        <tr>
          <td>Dieta 3</td>
          <td>Copos de maíz sin azúcares añadidos.<br>Leche de almendras sin azúcar<br>30 gramos de proteína de
            suero<br>Pomelo</td>
          <td>Arroz basmati<br>Atún natural<br>Aceite de oliva</td>
          <td>Lentejas<br>Cordero<br>Verduras plancha</td>
          <td>Tortitas de Arroz integral<br>Mantequilla de cacahuete<br>Fiambre de pavo</td>
          <td>Merluza al horno<br>Nueces<br>Verdura al horno</td>
        </tr>
        <tr>
          <td>Dieta 4</td>
          <td>Pan de centeno<br>Jamón Serrano<br>Aceite de coco<br>2 huevos enteros<br>Plátano</td>
          <td>Copos de avena<br>Leche de almendras<br>Naranja</td>
          <td>Pasta al huevo<br>Pechuga de pollo<br>Verduras plancha</td>
          <td>Boniato<br>Muslitos de pollo<br>Queso fresco 0%</td>
          <td>Sepia a la plancha<br>Ensalada de tomate y Aguacate<br>Aceite de oliva</td>
        </tr>
        <tr>
          <td>Dieta 5</td>
          <td>Harina de avena<br>Leche de arroz<br>1 huevo entero y 5 claras de huevo<br>Mantequilla de cacahuete<br>Dos
            rodajas de piña natural</td>
          <td>Copos de avena<br>Leche de almendras<br>Naranja</td>
          <td>Arroz blanco<br>Ternera<br>Verduras plancha</td>
          <td>Pan de cereales<br>Aguacate<br>Atún natural</td>
          <td>Salmón al horno<br>Verdura a la plancha<br>Tortas de arroz integral</td>
        </tr>
      </tbody>
    </table>
  </div>
  <br>
</body>

</html>