<?php
require_once "conexion.php";
$conexion = conexion();

$rut = $_POST['rut'];
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$direccion = $_POST['direccion'];
$tarjeta = $_POST['tarjeta'];
$banco = $_POST['banco'];
$estado = 1;
$password = $_POST['password'];

$rut=str_replace(',','',str_replace('.','',str_replace('/','',str_replace('-','',$rut))));
$sub_rut=substr($rut,0,strlen($rut)-1);//rut
$sub_dv=substr($rut,-1);//dv

$query="INSERT INTO usuario(rut, dv, nombre, telefono, correo, direccionParticular, tarjeta, banco, estado, password) VALUES('$sub_rut','$sub_dv','$nombre','$telefono','$correo','$direccion','$tarjeta','$banco','$estado','$password')";

echo $result = mysqli_query($conexion, $query);



?>
