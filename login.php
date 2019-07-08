<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login Administrador</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">
    <!--  -->
    <script src="librerias/jquery-3.4.1.min.js"></script>
    <script src="librerias/bootstrap/js/bootstrap.js"></script>
    <script src="librerias/alertifyjs/alertify.js"></script>
</head>

<body>
    <br><br><br>
    <div class="container">
        <div class="login-form col-md-4 offset-md-4">
            <h1 class="title">Inicio de Sesion</h1>
            <form action="" method="POST">
                <div class="form-group">
                    <div class="form-group">
                        <label for="">Rut</label>
                        <input type="text" id="rut" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Contraseña</label>
                        <input type="password" id="password" class="form-control">
                    </div>
                    <p></p>
                    <span class="btn btn-primary" id="iniciarSesion">Iniciar Sesión</span>
                    <a href="signin.php" class="btn btn-success">Registrarse</a>
                    <a href="index.php" class="btn btn-secondary">Inicio</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
<script text="text/javascript">
    $(document).ready(function() {
        $('#iniciarSesion').click(function() {
            if ($('#rut').val() == "") {
                alertify.alert("Ingresa un RUT");
                return false;
            } else if ($('#password').val() == "") {
                alertify.alert("Ingresa una Contraseña");
                return false;
            }

            cadena = "rut=" + $('#rut').val() +
            "&password=" + $('#password').val();

            $.ajax({
                type: "POST",
                url: "php/loginCheck.php",
                data: cadena,
                success: function(r) {
                    if (r == "1") {
                        window.location = "indexUsuario.php";
                    }else{
                        alertify.error("Error al iniciar sesion");
                    }
                }
            });
        });
    });
</script>