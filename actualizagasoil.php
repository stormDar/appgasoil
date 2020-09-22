<?php

require("conexion.php");

session_start();
//$almacen=$_SESSION['almacen'];
$almacen='1';

$query="SELECT SUM(CantidadRepostaje) FROM ga_gasoil where CodAlmacen='$almacen'";


$totalgastado=mysqli_query($conexion,$query);

while ($resultado=mysqli_fetch_array($totalgastado)) {

	$gasoilgastado=$resultado[0];

	$query2="SELECT SUM(CantidadLlenado) FROM ga_llenadotanque where CodAlmacen='$almacen'";

	$totalrellenado=mysqli_query($conexion,$query2);

		while ($resultadofinal=mysqli_fetch_array($totalrellenado)) {
		
		$gasoilrellenado=$resultadofinal[0];
		}


	$actualizacion="UPDATE ga_tanquetotal SET ActualTanque=TotalTanque-'$gasoilgastado'+'$gasoilrellenado' where CodAlmacen='$almacen'";

	$ejecucion=mysqli_query($conexion,$actualizacion);

}


?>