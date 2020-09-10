<?php

$almacenactual=$_SESSION['almacen'];

$sentencialmacen="SELECT * from almacen where CodAlmacen='$almacenactual'";

$queryalmacen=mysqli_query($conexion, $sentencialmacen);

while($recorrealmacen=mysqli_fetch_array($queryalmacen))
{
	$nombrealmacen=$recorrealmacen[1];
	$_SESSION['nombrealmacen']=$nombrealmacen;
}
?>