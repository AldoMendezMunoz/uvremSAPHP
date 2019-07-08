<?php 
session_start();
require_once "conexion.php";
$conexion = conexion();

$latitud = $_GET["lat"];
$longitud = $_GET["lon"];


echo "latitud ".$latitud;
echo "<br>";
echo "longitud ".$longitud;
?>