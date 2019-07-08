<?php
session_start();
require_once "conexion.php";
$conexion = conexion();

$rut = $_POST['rut'];
$password = $_POST['password'];

$rut=str_replace(',','',str_replace('.','',str_replace('/','',str_replace('-','',$rut))));
$sub_rut=substr($rut,0,strlen($rut)-1);//rut
$sub_dv=substr($rut,-1);//dv

$sql="select * from usuario where rut='$sub_rut' and dv='$sub_dv' and password='$password'";

$result =  mysqli_query($conexion,$sql);

if($ver=mysqli_fetch_assoc($result)){
    $nombre = $ver["nombre"];
    $_SESSION['nombre'] = $nombre;
    echo 1;
}
?>