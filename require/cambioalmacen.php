<?php

require("../../conexion.php");
require("../../seguridad.php");

@session_start();

$almacen=$_POST['almacen'];

$sentencia="SELECT NomAlmacen FROM almacen where CodAlmacen=$almacen";
$query=mysqli_query($conexion,$sentencia);

while($nombrealmacen=mysqli_fetch_array($query))
{
    $_SESSION['nombrealmacen']=$nombrealmacen[0];
}

$_SESSION['almacen']=$almacen;

echo "<script> window.history.back();</script>";

?>
