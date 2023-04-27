<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="session.css">
</head>

<body class="bg-info">
    <?php
    session_start();
    if (isset($_SESSION['loggedin'])) {
        $conexion = mysqli_connect("localhost", "root", "") or die("Error al conectar a la bbdd");
        $db = mysqli_select_db($conexion, "nedfitness") or die("Error al conectar a la bbdd");
        $correo = $_SESSION["username"];
        if (isset($_POST['update'])) {
            $new_nombre = $_POST['nombre'];
            $new_apellido = $_POST['apellidos'];
            $new_fecha = $_POST['fecha'];
            $new_email = $_POST['email'];
            $new_password = $_POST['password'];

            $update_query = mysqli_query($conexion, "UPDATE usuarios SET nombre='$new_nombre', apellidos='$new_apellido', fecha_nacimiento='$new_fecha', correo='$new_email', contraseña='$new_password' WHERE correo='$correo'");
            if ($update_query) {
                header("Location: inicio.php");
            } else {
                echo "Error al modificar los datos";
            }
        }
        $query = "SELECT * FROM usuarios WHERE correo='$correo'";
        $get_query = mysqli_query($conexion, $query);
        while ($get_result = mysqli_fetch_array($get_query)) {
            $nombre = $get_result['Nombre'];
            $apellidos = $get_result['Apellidos'];
            $fecha = $get_result['Fecha_Nacimiento'];
            $email = $get_result['Correo'];
            $password = $get_result['Contraseña'];
        }
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
                                <a class="nav-link" href="rutinas.php">Rutinas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="alimentacion.php">Alimentación</a>
                            </li>
                            <li class="nav-item">
                                <?php
                                if (isset($_SESSION['loggedin'])) {
                                    echo  "<a class='nav-link active' aria-current='page' id='active' href='cerrar.php'>" . $_SESSION['username'] . "</a>";
                                }
                                ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <section class="h-100">
            <div class="container h-100">
                <div class="row justify-content-sm-center h-100">
                    <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
                        <div class="text-center my-5">
                            <img src="assets/login-icon.svg" alt="login-icon" style="height: 7rem" />
                        </div>
                        <div class="card shadow-lg">
                            <div class="card-body p-5">
                                <h1 class="fs-4 card-title fw-bold mb-4">Modificar Usuario</h1>
                                <form action="" method="post" class="needs-validation" novalidate="" autocomplete="off">
                                    <div class="mb-3">
                                        <label class="mb-2 text-muted" for="name">Nuevo Nombre</label>
                                        <input id="nombre" type="text" class="form-control" name="nombre" value="<?php echo $nombre; ?>" required autofocus>
                                        <div class="invalid-feedback">
                                            El nombre es obligatorio
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="mb-2 text-muted" for="name">Nuevo Apellido</label>
                                        <input id="apellidos" type="text" class="form-control" name="apellidos" value="<?php echo $apellidos; ?>" required autofocus>
                                        <div class="invalid-feedback">
                                            Los apellidos son obligatorios
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="mb-2 text-muted" for="name">Nueva fecha de nacimiento</label>
                                        <input id="fecha" type="date" class="form-control" name="fecha" value="<?php echo $fecha; ?>" aria-label="dd / mm / aaaa" placeholder="dd / mm / aaaa" required autofocus>
                                        <div class="invalid-feedback">
                                            La fecha de nacimiento es obligatoria
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="mb-2 text-muted" for="email">Nuevo Email</label>
                                        <input id="email" type="email" class="form-control" name="email" value="<?php echo $email; ?>" required>
                                        <div class="invalid-feedback">
                                            El correo es obligatorio
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="mb-2 text-muted" for="password">Nueva Contraseña</label>
                                        <input id="password" type="password" minlength="6" class="form-control" name="password" value="<?php echo $password; ?>" required>
                                        <div class="invalid-feedback">
                                            La contraseña es obligatoria
                                        </div>
                                    </div>

                                    <div class="align-items-center d-flex">
                                        <input type="submit" id="update" name="update" class="btn btn-info text-white w-100 mt-4 fw-semibold shadow-sm" value="Actualizar datos">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <br>
    <?php
    }
    ?>
    <script src="js/login.js"></script>
</body>

</html>