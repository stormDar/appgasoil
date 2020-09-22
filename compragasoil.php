<?php
require("../conexion.php");
require("../seguridad.php");
?>

<!DOCTYPE html>
<html>
<head>
	<?php 

	require("../require/header.php");
	require("require/js-functions.php");
	require("require/autocomplete-index.php");

	?>

</head>
<body>
	<div class="container-fluid">
		<section class="stock">
			<div class="row">
				<div class="col-12">
					<div class="titulo-nuevo">
						<h1>Reponer gasoil</h1>
					</div>
				</div>
			</div>
			<form action="compragasoil.php" method="post" accept-charset="utf-8">
			<div class="toma-datos">
				<div class="row">
					<div class="col-12">
					<h2>Rellene los siguientes datos:</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-4">
						Cantidad repostaje: <br>
						<input type="number" name="Cantidad" id="Cantidad" autocomplete="OFF">
					</div>
					<div class="col-4">
						Precio Litro: <br>
						<input type="number" id="Precio" name="Precio" step="any" autocomplete="OFF">
					</div>
					<div class="col-4">
						Consumo Total: <br>
						<input type="number" id="Total" name="Total" step="any" autocomplete="OFF">
					</div>
					<div class="col-4">
						Fecha: <br>
						<input type="text" name="Fecha" id="Fecha" date-date-format="yyyy-mm-dd" >
					</div>
					<div class="col-8">
						Notas: <br>
						<input type="text" name="Notas" id="Notas">
					</div>
				</div>
			</div>
			<div class="botonesform">
				<div class="row">
					<div class="col-6">
						<input type="submit" name="Aceptar" value="Aceptar">
						<input type="reset" name="Borrar" value="Borrar">
						<input type="hidden" name="token" value="upload">
					</div>	
				</div>
			</div>
			</form>
							<?php 
								
							//mostramos los datos de la busqueda
								if (isset($_POST['token'])) {
									//Obtenemos los datos recibidos

									$cantidad=$_POST["Cantidad"];
									$fecha = $_POST["Fecha"];
									$precio=$_POST["Precio"];
									$total=$_POST["Total"];
									//$almacen=$_SESSION['almacen'];
									//$usuario=$_SESSION['usuario'];
									$almacen='1';
									$usuario='el_creador';
									$notas=$_POST["Notas"];

									//ejecutamos la consulta de introducción de registro de datos
								
										$query="insert into ga_llenadotanque (CantidadLlenado,FechaLLenado,PrecioLlenado,TotalLitrosLlenado,CodAlmacen,Usuario,Notas) values ('$cantidad','$fecha','$precio','$total','$almacen','$usuario','$notas')";

										$resultado=mysqli_query($conexion,$query) or die ("Ha introducido datos erroneos");

										require("actualizagasoil.php");

										echo "<script>alert('Ha introducido los datos correctamente')</script>";													
								}
							?>
		</section>	
	</div>
</body>
</html>