<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
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
    <br>
    <div class="container">
        <div class="login-form col-md-4 offset-md-4">
            <h1 class="title">Registro</h1>
            <form id="formClear">
                <div class="form-group">
                    <div class="form-group">
                        <label for="">RUT</label>
                        <input type="text" id="rut" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Nombre y Apellido</label>
                        <input type="text" id="nombre" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Telefono</label>
                        <input type="number" id="telefono" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Correo</label>
                        <input type="email" id="correo" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Direccion</label>
                        <input type="text" id="direccion" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Tarjeta</label>
                        <input type="text" id="tarjeta" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Banco</label>
                        <input type="text" id="banco" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Contraseña</label>
                        <input type="password" id="password" class="form-control">
                    </div>
                    <p></p>
                    <input type="submit" class="btn btn-primary" id="registrarUsuario" value="Registrarse">
                    <a href="index.php" class="btn btn-secondary">Inicio</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>

<script type="text/javascript">
    $(document).ready(function() {
        $('#registrarUsuario').click(function() {
            if ($('#rut').val() == "") {
                alertify.alert("Ingresa un rut");
                return false;
            } else if ($('#nombre').val() == "") {
                alertify.alert("Ingresa un nombre");
                return false;
            } else if ($('#telefono').val() == "") {
                alertify.alert("Ingresa un telefono");
                return false;
            } else if ($('#correo').val() == "") {
                alertify.alert("Ingresa un correo");
                return false;
            } else if ($('#direccion').val() == "") {
                alertify.alert("Ingresa una direccion");
                return false;
            } else if ($('#tarjeta').val() == "") {
                alertify.alert("Ingresa una tarjeta");
                return false;
            } else if ($('#banco').val() == "") {
                alertify.alert("Ingresa un banco");
                return false;
            }else if ($('#contrasena').val() == "") {
                alertify.alert("Ingresa una contraseña");
                return false;
            }
            cadena = "rut=" + $('#rut').val() +
                "&nombre=" + $('#nombre').val() +
                "&telefono=" + $('#telefono').val() +
                "&correo=" + $('#correo').val() +
                "&direccion=" + $('#direccion').val() +
                "&tarjeta=" + $('#tarjeta').val() +
                "&banco=" + $('#banco').val() +
                "&password=" + $('#password').val();

            $.ajax({
                type: "POST",
                url: "php/signinCheck.php",
                data: cadena,
                success: function(r) {
                    if (r == 1) {
                        alertify.success("Registrado exitosamente!");
                    } else {
                        alertify.error("Fallo al agregar!");
                    }
                }
            });
        });
    });
</script>