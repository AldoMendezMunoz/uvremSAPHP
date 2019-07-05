<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="../img/logo.png"/>
    <title>UvremSA</title>
    <link href="../css/estilos.css" rel="stylesheet" />
    <link href="../css/menu.css" rel="stylesheet" />
    <link href="../css/all.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src='https://api.mapbox.com/mapbox-gl-js/v1.0.0/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v1.0.0/mapbox-gl.css' rel='stylesheet' />
</head>
<body>
    <?php include('../template/menuLogeado.php'); ?>

    <h3 class="text-center text-padding ">Registrar Mi Estacionamiento</h3>
    <br />
    <div class="container">
        <form action="">
            <div class="backgroud-white div-shadow text-padding">
                <input type="text" ID="TextBox1" class="form-control" runat="server" placeholder="Ingrese Hora Inicio">    
                <em class="text-gray">ej: 14:00</em><br />
                <input type="text" ID="TextBox2" class="form-control" runat="server" placeholder="Ingrese Hora Termino">
                <em class="text-gray">ej: 20:00</em><br />
                <input type="text" ID="TextBox3" class="form-control" runat="server" placeholder="Ingrese Cantidad de Horas que estará disponible el Estacionamiento"><br />
                <input type="text" ID="TextBox4" class="form-control" runat="server" placeholder="Ingresar Dirección"><br />
                <input type="text" ID="TextBox5" class="form-control" runat="server" placeholder="Ingresar Latitud"><br />
                <input type="text" ID="TextBox6" class="form-control" runat="server" placeholder="Ingresar Longitud"><br />
                <input class="btn btn-success" type="submit" value="Registrar mi estacionamiento">
                <input type="reset" value="Limpiar campos" class="btn btn-danger">
            </div>
        </form>
    </div>

    <?php include('../template/footer.php'); ?>
</body>
</html>