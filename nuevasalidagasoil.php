<?php
require("conexion.php");
//require("../seguridad.php");
?>
<!DOCTYPE html>
<html>
<head>

	<?php
	require("require/header.php");
	require("require/autocomplete-index.php");
	require("require/js-functions.php");

	?>
</head>
<body>
	<div class="container-fluid">
		<section class="stock">
			<div class="row">
				<div class="col-12">
					<div class="titulo-nuevo">
						<h1>Suministrar gasoil</h1>
					</div>
				</div>
			</div>
			<form action="nuevasalidagasoil.php" method="post" accept-charset="utf-8">
			<div class="toma-datos">
				<div class="row">
					<div class="col-12">
						<h2>Rellene los siguientes datos:</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-4">
						Matrícula: <br>
						<input type="text" name="Matricula" id="Matricula">
					</div>				
					<div class="col-4">
						Litros: <br>
						<input type="number" name="Cantidad" id="Cantidad" autocomplete="off">
					</div>
					<div class="col-4">
						Obra: <br>
						<input type="text" name="Ubicacion" id="Ubicacion">
					</div>
				</div>
				<div class="row">
					<div class="col-4">
						Fecha: <br>
						<input type="text" id="Fecha" data-date-format="yyyy-mm-dd" name="Fecha">
					</div>
					<div class="col-4">
						Hora: <br>
						<input type="time" id="Hora" name="Hora">
					</div>
					<div class="col-3">
						Kilometraje: <br>
						<input type="number" id="Kilometraje" name="Kilometraje">
					</div>
					<div class="col-4">
						Empresa: <br>
						<select name="Empresa">
							<option value="Zaragoza 2012">Zaragoza 2012</option>
							<option value="Odel">Odel</option>
							<option value="Integra">Integra</option>
							<option value="Cleanzcom">Cleanzcom</option>
							<option value="Momentum Alquiler">Momentum Alquiler</option>
							<option value="Automatismos Felipe">Automatismos Felipe</option>
						</select>
					</div>
					<div class="col-4">
						Particular: <br>
						<select name="Particular">
							<option value="No">No</option>
							<option value="Si">Si</option>
						</select>
					</div>
				</div>
				<div class="row"> 
					<div class="col-12">
						Notas: <br>
						<textarea name="Notas" id="Notas"></textarea>
					</div>
				</div>
			</div>
				<div class="row">
					<div class="botonesform">
						<div class="col-12">
							<input type="submit" name="Aceptar" value="Aceptar">
							<input type="reset" name="Borrar" value="Borrar">
							<input name="token" type="hidden" value="upload" />
						</div>
					</div>
				</div>
			</form>

								<?php 
								

								//mostramos los datos de la busqueda
								if (isset($_POST['token'])) {
								
									//Obtenemos los datos recibidos

									$matricula=$_POST["Matricula"];
									$notas=$_POST["Notas"];
									$cantidad=$_POST['Cantidad'];
									$fecha = $_POST['Fecha'];
									$ubicacion=$_POST['Ubicacion'];
									//$almacen=$_SESSION['almacen'];
									$almacen='1';
									//$usuario=$_SESSION['usuario'];
									$usuario='el_creador';
									$kilometraje=$_POST['Kilometraje'];
									$hora=$_POST['Hora'];
									$empresa=$_POST['Empresa'];
									$particular=$_POST['Particular'];

									//transformar el texto recibido en obra

		//							$sentencia="SELECT * FROM centros where NombreCentro='$ubicacion'";
									
		//							$rows=mysqli_query($conexion,$sentencia);

									/*if ($rows->num_rows == 0)
									{
										$insertar="INSERT INTO ga_obra (NombreObra,EstadoObra) values ('$ubicacion','abierta')";
										$meterobra=mysqli_query($conexion,$insertar);
									}*/

		//							if ($rows->num_rows == 0)
		//							{
		//								echo "<script>alert('Por favor, registra primero la obra antes de crear este registro!')</script>";
		//							}

		//							$sentenciacodigo="SELECT * FROM centros where NombreCentro='$ubicacion'";

		//							$ejecutarcodigo=mysqli_query($conexion, $sentenciacodigo);

		//							while ($fila=mysqli_fetch_array($ejecutarcodigo)) {
										
		//								$codobra=$fila[0];
		//							}



									//obtenemos el id del vehiculo modificado

									$sentenciavehiculo="SELECT IdVehiculo FROM vehiculos where MatriculaVehiculo='$matricula'";

									$resultadovehiculo=mysqli_query($conexion, $sentenciavehiculo);

									while($idvehiculomodificado=mysqli_fetch_array($resultadovehiculo))
									{
										$idvehiculomodificadoinsert=$idvehiculomodificado[0];
									}


									//obtenemos el id de la obra modificada

									$sentenciaobras2="SELECT IdCentro FROM centros where NombreCentro='$ubicacion'";

									$resultadoobras2=mysqli_query($conexion, $sentenciaobras2);

									while($obramodificada=mysqli_fetch_array($resultadoobras2))
									{
										$idobramodificada2=$obramodificada[0];
									}


									//ejecutamos la consulta de introducción de registro de datos
					
									$query="INSERT INTO ga_salida (idvehiculo,kilometraje,fecha,hora,litros,idobra,codalmacen,notas,creador,empresa, particular) values ('$idvehiculomodificadoinsert','$kilometraje','$fecha','$hora','$cantidad','$idobramodificada2','$almacen','$notas','$usuario','$empresa', '$particular')";

									echo "<script>alert('Ha introducido los datos correctamente')</script>";

									$resultado=mysqli_query($conexion,$query) or die ("Ha introducido datos erroneos");

									//require("actualizagasoil.php");



								}
							?>
		</section>	
	</div>
</body>
</html>