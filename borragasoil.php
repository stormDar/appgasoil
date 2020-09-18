<?php

	require("conexion.php");
	error_reporting(0);
	
	$codigo=$_GET["cod"];

	//sentencia de borrado

	$query = "DELETE FROM ga_salida WHERE idsalida='$codigo'";

	//ejecutamos sentencias

	$borrado = mysqli_query($conexion,$query);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<img src="img/loading.gif">
	<script>
		window.setTimeout("window.close('_self','','')",1200);
	</script>
</body>
</html>