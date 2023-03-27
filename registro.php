<!DOCTYPE html>
<!-- Nil Pedrós Cabrillana -->
<html>

<head>
    <title>Registro</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="registro.css">
</head>

<body>
    <?php
    $conexion = mysqli_connect("localhost", "root", "") or die("Error al connectar a la bbdd.");
    $db = mysqli_select_db($conexion, "usuarios") or die("Error al connectar a la bbdd");
    if (!empty($_POST['nombre']) && !empty($_POST['apellidos']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['sexo'])) {
        $consulta = "INSERT INTO datos (nombre, apellidos, fecha_nacimiento, correo, contraseña) VALUES ('" . $_POST['nombre'] . "','" . $_POST['apellidos'] . "','" . $_POST['email'] . "','" . $_POST['password'] . "','" . $_POST['sexo'] . "');";
        $resultado = mysqli_query($conexion, $consulta) or die("Error en la consulta SQL");
    }
    mysqli_close($conexion);
    ?>
    <div>
        <h1 class="nuevo">Soy Nuevo/a</h1>
        <img id="nombre" src="img/nombre.png">
        <input type="text" name="nombre" class="nombre" value="" aria-label="Nombre" placeholder="Nombre" required>
        <img id="apellidos" src="img/apellidos.png">
        <input type="text" name="apellidos" class="apellidos" value="" aria-label="Apellidos" placeholder="Apellidos" required>
        <img id="correo" src="img/correo3.png">
        <input type="email" name="email" class="correo" value="" aria-label="Correo electrónico" placeholder="Correo electrónico" required>
        <img id="contraseña" src="img/contraseña3.png">
        <input type="password" name="password" class="contraseña" minlength="6" value="" aria-label="Contraseña" placeholder="Contraseña" required>
        <h2 class="sexo">Selecciona tu Sexo</h2>
        <label>
            <input type="radio" name="sexo" value="Hombre" class="hombre">
            <p id="hombre">Hombre</p>
        </label>
        <label>
            <input type="radio" name="sexo" value="Mujer" class="mujer">
            <p id="mujer">Mujer</p>
        </label>
        <input type="submit" class="registro" value="Regístrate">
        <hr>
        <h1 class="bienvenida">Te damos la bienvenida</h1>
        <input type="button" onclick="location.href = 'login.php'" class="login" value="Iniciar sesión">
    </div>
</body>

</html>