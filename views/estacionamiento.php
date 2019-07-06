<?php 
    require_once "../conexion.php";
    $conexion = conexion();
?>

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
    <!-- MAPA -->
    <script src='https://api.mapbox.com/mapbox-gl-js/v1.0.0/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v1.0.0/mapbox-gl.css' rel='stylesheet' />
    <script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v2.3.0/mapbox-gl-geocoder.min.js'></script>
    <link rel='stylesheet' href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v2.3.0/mapbox-gl-geocoder.css' type='text/css' />
</head>
<body>
    <?php include('../template/menuLogeado.php'); ?>

    <div>
        <div class="container">
            <h1 class="text-center">Estacionamiento Disponibles</h1>
        </div>
    </div>
    <div class="container-fluid">
        <section class="main row">
            <aside style="margin-left:50px; margin-right: 50px; border-radius: 20px;" class="col-xs-8 col-sm-8 col-md-8 col-lg-8 backgroud-white div-shadow">
                <table class="table">
                    <tr>
                        <td class="text-center">Estacionamientos</td>
                        <td class="text-center">Accion</td>
                    </tr>

                    <?php 
                        $sql = "SELECT * FROM estacionamiento";
                        $result = mysqli_query($conexion, $sql);

                        while($mostrar = mysqli_fetch_array($result)){

                    ?>

                    <tr>
                            <td class="text-center"><?php echo $mostrar['direccion'] ?></td>
                            <td class="text-center"><button class="btn btn-danger "><i class="fas fa-clipboard-list"></i> Reservar</button> </td>
                    </tr>
                    

                    <?php 
                        }
                    ?>
                </table>

            </aside>
            <aside style="margin-right:10px; border-radius: 20px; width: auto;" class="col-xs-3 col-sm-3 col-md-3 col-lg-3 backgroud-white div-shadow">
                <div id='map' style='width: 450px; height: 430px; margin: auto; padding: 5px; border-radius: 20px;'></div>
            </aside>
        </section>
    </div>

    <script>
        mapboxgl.accessToken = 'pk.eyJ1IjoiY2hpbm9lbGN0bSIsImEiOiJjanhhazRnOGEwc252M3puMTk2empuMWo0In0.Nz9sUMpPCLcTv5VymZOWtw';

        
        var map = new mapboxgl.Map({
        container: 'map', // container id
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [-70.6506, -33.4372], // starting position
        zoom: 9 // starting zoom
        });

        // Buscador
        map.addControl(new MapboxGeocoder({
            accessToken: mapboxgl.accessToken
        }));
        
        // obtener ubicacion
        map.addControl(new mapboxgl.NavigationControl());
        map.addControl(new mapboxgl.FullscreenControl());
        map.addControl(new mapboxgl.GeolocateControl({
        positionOptions: {
            enableHighAccuracy: true
            },
            trackUserLocation: true
        }));
        

        var element = document.createElement('div')
        element.className = 'marker'

        var marker = new mapboxgl.Marker(element)
            .setLngLat({
                lng: -70.7842389,
                lat: -33.5393016
            }).addTo(map);

    </script>

    <?php include('../template/footer.php'); ?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>