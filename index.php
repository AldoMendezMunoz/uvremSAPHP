<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="img/logo.png"/>
    <title>UvremSA</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/estilos.css" rel="stylesheet" />
    <link href="css/menu.css" rel="stylesheet" />
    <link href="css/all.css" rel="stylesheet" />
</head>
<body>
    <?php include('template/menuIndex.php'); ?>
    <!-- MODAL INICIO SECION -->
    <div class="container">
        <div class="modal fade" id="InicioSesion">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Header de la ventana -->
                    <div class="modal-header">
                        <h4 class="modal-title text-center">Iniciar Sesion</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>

                     <!-- Contenido de la ventana -->
                   <div class="modal-body">
                        <form action="">
                            <input class="form-control" type="text" name="name" value="" placeholder="Nombre de Usuario" />
                            <br />
                            <input class="form-control" type="text" name="name" value="" placeholder="Contraseña" />
                            <br />
                            <input class="btn btn-success" type="submit" value="Iniciar Sesión">
                            <a href="registro.aspx" class="text-red">¿No tienes cuenta?</a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL REGISTRAR -->
    <div class="container">
        <div class="modal fade" id="Registrar">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Header de la ventana -->
                    <div class="modal-header">
                        <h4 class="modal-title text-center">Registrarse</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>

                     <!-- Contenido de la ventana -->
                   <div class="modal-body">
                        <form action="">
                            <input type="text" class="form-control" ID="txtRut" runat="server" placeholder="Ingrese Rut" placeholder="Ingrese su rut">
                            <br />
                            <input type="text" class="form-control" ID="txtNombre" runat="server" placeholder="Ingrese Nombre" placeholder="Ingrese su nombre">
                            <br />
                            <input type="text" class="form-control" ID="txtApellido" runat="server" placeholder="Ingrese Apellido" placeholder="Ingrese su apelldio">
                            <br />
                            <input type="text" class="form-control" ID="txtTelefono" runat="server" placeholder="Ingrese Telefono" TextMode="Number" placeholder="Ingrese su numero telefono">
                            <br />
                            <input type="email" class="form-control" ID="txtCorreo" runat="server" placeholder="Ingrese Correo" TextMode="Email" placeholder="Ingrese su correo">
                            <br />
                            <input type="text" class="form-control" ID="txtDireccion" runat="server" placeholder="Ingrese Direccion Particular" placeholder="Ingrese su direccion particualr">
                            <br />
                            <input type="text" class="form-control" ID="txtTarjeta" runat="server" placeholder="Ingrese Tarjeta de Credito" TextMode="Number" placeholder="Ingrese su numero de tarjeta de credito">
                            <br />
                            <input type="text" class="form-control" ID="txtBanco" runat="server" placeholder="Ingrese Banco" placeholder="Ingrese su banco">
                            <br />
                            <input class="btn btn-success" type="submit" value="Registrarse">
                            <a href="inicioSesion.aspx" class="text-red">¿Ya tienes cuenta?</a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('template/footer.php'); ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>