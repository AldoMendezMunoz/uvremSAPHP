<?php
function conexion() {
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "uvremDatabase";
    $conexion = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    return $conexion;
}
?>
