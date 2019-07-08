<html>
<head>
    <title>Agregar Estacionamiento</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../librerias/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../librerias/alertifyjs/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="../librerias/alertifyjs/css/themes/default.css">
    <!--  -->
    <script src="../librerias/jquery-3.4.1.min.js"></script>
    <script src="../librerias/bootstrap/js/bootstrap.js"></script>
    <script src="../librerias/alertifyjs/alertify.js"></script>
    <style type="text/css">
        html, body { width:100%;padding:0;margin:0; }
        .container { width:95%;max-width:980px;padding:1% 2%;margin:0 auto }
        #lat, #lon { text-align:right }
        #map { width:100%;height:50%;padding:0;margin:0; }
        .address { cursor:pointer }
        .address:hover { color:#AA0000;text-decoration:underline }
    </style>
</head>
<body>
    <div class="container">




        <b>Ingrese su direccion</b>
        <div id="search">
            <input type="text" name="addr" value="" id="addr" size="58" />
            <button type="button" onclick="addr_search();">Search</button>
            <div id="results"></div>
        </div>
        <br>
        <div id="map"></div>
        <br>
        <form action="../php/registroEstacionamiento.php" method="GET">
            <!-- aqui estan las coordenadas para poder ser enviadas al backend -->
            <div id="results"></div>
            <input type="text" name="lat" id="lat" size=12 value="">
            <input type="text" name="lon" id="lon" size=12 value="">
            <input type="submit" name="enviar" id="enviar">
        </form>
    </div>
</body>
<script text="text/javascript">
    $(document).ready(function() {
        $('#enviar').click(function() {
            if ($('#addr').val() == "") {
                alertify.alert("Ingrese una direccion");
                return false;
            }
        });
    });
</script>
<script type="text/javascript">
    //latitud y longitud
    var startlat = -33.43779680;
    var startlon = -70.65044510;
    //centra el mapa a las latitudes de arriba
    var options = {
        center: [startlat, startlon],
        zoom: 11.4
    }

    document.getElementById('lat').value = startlat;
    document.getElementById('lon').value = startlon;

    var map = L.map('map', options);
    var nzoom = 12;

    L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {attribution: 'OSM'}).addTo(map);

    var myMarker = L.marker([startlat, startlon], {title: "Coordinates", alt: "Coordinates", draggable: true}).addTo(map).on('dragend', function() {
        var lat = myMarker.getLatLng().lat.toFixed(8);
        var lon = myMarker.getLatLng().lng.toFixed(8);
        var czoom = map.getZoom();
        if(czoom < 18) { nzoom = czoom + 2; }
        if(nzoom > 18) { nzoom = 18; }
        if(czoom != 18) { map.setView([lat,lon], nzoom); } else { map.setView([lat,lon]); }
        document.getElementById('lat').value = lat;
        document.getElementById('lon').value = lon;
        myMarker.bindPopup("Lat " + lat + "<br />Lon " + lon).openPopup();
    });

    function chooseAddr(lat1, lng1)
    {
        myMarker.closePopup();
        map.setView([lat1, lng1],18);
        myMarker.setLatLng([lat1, lng1]);
        lat = lat1.toFixed(8);
        lon = lng1.toFixed(8);
        document.getElementById('lat').value = lat;
        document.getElementById('lon').value = lon;
        myMarker.bindPopup("Lat " + lat + "<br />Lon " + lon).openPopup();
    }

    function myFunction(arr)
    {
        var out = "<h3>Seleccione su direccion y luego presione el boton</h3>";
        var i;

        if(arr.length > 0)
        {
            for(i = 0; i < arr.length; i++)
            {
                out += "<div class='address' title='Show Location and Coordinates' onclick='chooseAddr(" + arr[i].lat + ", " + arr[i].lon + ");return false;'>" + arr[i].display_name + "</div><br><br>";
            }
            document.getElementById('results').innerHTML = out;
        }
        else
        {
            document.getElementById('results').innerHTML = "Ingrese una direccion Válida";
        }

    }

    function addr_search()
    {
        var inp = document.getElementById("addr");
        var xmlhttp = new XMLHttpRequest();
        var url = "https://nominatim.openstreetmap.org/search?format=json&limit=3&q=" + inp.value;
        xmlhttp.onreadystatechange = function()
        {
            if (this.readyState == 4 && this.status == 200)
            {
                var myArr = JSON.parse(this.responseText);
                myFunction(myArr);
            }
        };
        xmlhttp.open("GET", url, true);
        xmlhttp.send();
    }

</script>

</html>