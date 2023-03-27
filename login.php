<!DOCTYPE html>
<!-- Nil Pedrós Cabrillana -->
<html>

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="login.css">
</head>

<body>
    <?php
    session_start();
    if (isset($_POST['login'])) {
        $conexion = mysqli_connect("localhost", "root", "") or die("Error al conectar a la bbdd");
        $db = mysqli_select_db($conexion, "usuarios") or die("Error al conectar a la bbdd");
        $email = $_POST["email"];
        $password = $_POST["password"];
        $query = mysqli_query($conexion, "SELECT * FROM datos WHERE correo='" . $email . "' AND contraseña ='" . $password . "'");
        $nr = mysqli_num_rows($query);
        if ($nr == 1) {
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $email;
            header("Location: inicio.php");
        } else if ($nr == 0) {
            echo "Correo o contraseña incorrectos.";
        }
    }
    ?>
    <div>
        <h4 class="nuevo2">VIVE TU VIDA DE UNA MANERA DIFERENTE</h4>
        <h1 class="nuevo">ESTILO DE VIDA Y SALUD</h1>
        <img id="correo" src="img/correo.png">
        <input type="email" name="email" class="correo" value="" aria-label="Correo electrónico"
            placeholder="Correo electrónico" required>
        <img id="correo2" src="img/correo2.png">
        <img id="contraseña" src="img/contraseña.png">
        <input type="password" name="password" class="contraseña" minlength="6" value="" aria-label="Contraseña"
            placeholder="Contraseña" required>
        <img id="contraseña2" src="img/contraseña2.png">
        <input type="submit" value="Iniciar sesión" class="boton">
        <hr class="linea">
        <input type="button" onclick="location.href = 'registro.php'" value="Regístrate" class="boton-registro">
        <h1 id="nuevo">Soy nuevo/a</h1>
    </div>
</body>

</html>