<?php
require("conexion.php");
//require("../seguridad.php");

error_reporting(0);

	$codigo=$_GET["cod"];

	// sentencia que busca los datos referentes al codigo que recibe para modificar
	//$query1="SELECT CantidadRepostaje, FechaRepostaje, HoraRepostaje, IdVehiculoRepostaje, NotasRepostaje,IdRepostaje,NombreObra,IdObra,KmVehiculo,Empresa FROM ga_gasoil,ga_obra WHERE IdObra=IdObraGasoil and IdRepostaje='$codigo' ";
	$query1="SELECT idsalida, idvehiculo, fecha, hora, litros, NombreCentro, codalmacen, notas, creador, empresa FROM ga_salida, centros WHERE idobra=IdCentro and idsalida='$codigo'";
	
	$resultado=mysqli_query($conexion,$query1) or die("Algo ha salido mal");

	//sentencia que busca las obras

	//$sentenciaobras="SELECT * FROM ga_obra";

	//$resultadoobras=mysqli_query($conexion, $sentenciaobras);

?>

<!DOCTYPE html>
<html>
<head>
	<?php 

	// Llamada a funciones JS, CSS y varios
	require("require/header.php");

	// Funciones JS
	require("require/js-functions.php");

	// Autocompletar
	//require("require/autocomplete-index.php");
	?>
		
</head>
<body>
	<div class="container-fluid">
		<section class="stock">
			<div class="row">
				<div class="col-12">
					<div class="titulo-nuevo">
						<h1>Modificar</h1>
					</div>
				</div>
			</div>
			<div class="toma-datos">
						<h2>Su selección:</h2>
						

						<?php

						while ($anterior=mysqli_fetch_array($resultado)) {
							
							/*echo "<div class='row'><div class='col-3'>Matricula</div><div class='col-9'>".$anterior[3]."</div></div><div class='row'><div class='col-3'>Fecha</div><div class='col-9'>".$anterior[1]."</div></div><div class='row'><div class='col-3'>Hora</div><div class='col-9'>".$anterior[2]."</div></div><div class='row'><div class='col-3'>Cantidad</div><div class='col-9'>".$anterior[0]."</div></div><div class='row'><div class='col-3'>Obra</div><div class='col-9'>".	$anterior[6]."</div></div><div class='row'><div class='col-3'>Notas</div><div class='col-9'>".$anterior[4]."</div></div>";*/

							echo "<div class='row'><div class='col-3'>Matricula</div><div class='col-9'>".$anterior[1]."</div></div><div class='row'><div class='col-3'>Fecha</div><div class='col-9'>".$anterior[2]."</div></div><div class='row'><div class='col-3'>Hora</div><div class='col-9'>".$anterior[3]."</div></div><div class='row'><div class='col-3'>Litros</div><div class='col-9'>".$anterior[4]."</div></div><div class='row'><div class='col-3'>Obra</div><div class='col-9'>".	$anterior[5]."</div></div><div class='row'><div class='col-3'>Notas</div><div class='col-9'>".$anterior[7]."</div></div>";

							/*$matricula=$anterior[3];
							$fecha=$anterior[1];
							$hora=$anterior[2];
							$cantidad=$anterior[0];
							$nombreobra=$anterior[6];
							$notas=$anterior[4];
							$codigo=$anterior[5];
							$codigoobra=$anterior[7];
							$kilometraje=$anterior[8];
							$empresa=$anterior['Empresa'];*/

							$matricula=$anterior[1];
							$fecha=$anterior[2];
							$hora=$anterior[3];
							$cantidad=$anterior[4];
							$nombreobra=$anterior[5];
							$notas=$anterior[7];
							$codigo=$anterior[0];
							//$codigoobra=$anterior[];
							//$kilometraje=$anterior[8];
							//$empresa=$anterior['Empresa'];
							$empresa=$anterior[9];

							//obtenemos el id de la obra modificada

									//$sentenciaobras3="SELECT IdCentro FROM centros where Nombreobra='$nombreobra'";

									//$resultadoobras3=mysqli_query($conexion, $sentenciaobras3);

									//while($resultadoobra4=mysqli_fetch_array($resultadoobras3))
									//{
									//	$obramodificada5=$obramodificada4[0];
									//	echo $obramodificada5;
									//}
						}
							

							?>
					</div>
				
				
					<div class="modifregistros">
							<h2>Introduzca los nuevos datos</h2>
						<form action="editsalidagasoil.php" method="post" accept-charset="utf-8">
							<div class='row'>
								<div class='col-2'>Matrícula</div>
								<div class='col-4'>
									<input type="text" name="Matricula" id="Matricula" value="<?php echo "$matricula" ?>">
								</div>
							</div>
							<div class="row">
								<div class='col-2'>Fecha</div>
								<div class='col-4'>
									<input type="text" name="Fecha" id="Fecha" value="<?php echo "$fecha"; ?>"></div>
							</div>
							<div class='row'>
								<div class='col-2'>Hora</div>
								<div class='col-4'>
									<input type="text" name="Hora" id="Hora" value="<?php echo "$hora"; ?>"></div>
							</div>
							<div class="row">
								<div class='col-2'>Litros</div>
								<div class='col-4'>
									<input type="number" name="Cantidad" id="Cantidad" value="<?php echo "$cantidad"; ?>">
								</div>
							</div>
							<!--<div class="row">
								<div class='col-2'>Kilometraje</div>
								<div class='col-4'>
									<input type="number" name="Kilometraje" id="Kilometraje" value="<?php echo "$kilometraje"; ?>">
								</div>
							</div>-->
							<div class='row'>
								<div class='col-2'>Obra</div>
								<div class='col-4'>
									<input type="text" name="Ubicacion" id="Ubicacion" value="<?php echo "$nombreobra"; ?>">
								</div>
							</div>
							<div class='row'>
								<div class='col-2'>Empresa</div>
								<div class='col-4'>
									<input type="text" name="Empresa" id="Empresa" value="<?php echo "$empresa"; ?>">
								</div>
							</div>
							<div class='row'>
								<div class='col-2'>Notas</div>
								<div class='col-4'>
									<input type="text" name="Notas" id="Notas" value="<?php echo "$notas"; ?>">
									<input type="hidden" name="Codigo" id="Codigo" value="<?php echo "$codigo"; ?>">
								</div>
							</div>
					</div>
								
							<div class="row">
								<div class="botonesform">
									<div class="col-12">
										<input type="submit" name="Aceptar" value="Aceptar">
										<input name="token" type="hidden" value="upload" />
										<input type="hidden" name="Codigo" value="<?php echo "$codigo"; ?>">
									</div>
								</div>
							</div>
						</form>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="detalles">
								* Si algun material, talla o nombre no sale en el listado, recordarle que tiene que darlo primero de alta en el menú correspondiente.
							</div>
						</div>
					</div>
			</section>
		</div>
</body>

<?php 
								
								//modificamos la base de datos con los parametros que recibimos
								if (isset($_POST['token'])) {



									$matriculanueva=$_POST["Matricula"];
									$horanueva=$_POST["Hora"];
									$obranueva=$_POST["Ubicacion"];
									$cantidadnueva=$_POST['Cantidad'];
									$fechanueva = $_POST['Fecha'];
									$notasnuevas=$_POST['Notas'];
									$codigonuevo=$_POST["Codigo"];
									//$kilometrajenuevo=$_POST["Kilometraje"];
									$empresanueva=$_POST['Empresa'];
									

									//obtenemos el id de la obra modificada

									$sentenciaobras2="SELECT idobra FROM ga_obra where Nombreobra='$obranueva'";

									$resultadoobras2=mysqli_query($conexion, $sentenciaobras2);

									while($obramodificada=mysqli_fetch_array($resultadoobras2))
									{
										$obramodificada2=$obramodificada[0];
									}



									//$consul="SELECT * FROM movimientostock where CodMovimientoStock='$codigonuevo'";
									$consul="SELECT * FROM ga_salida where idsalida='$codigonuevo'";

									$query3=mysqli_query($conexion, $consul);

									while($fila=mysqli_fetch_array($query3))
									{
									
										//consulta de modificación de registro
									
										$query2 = "UPDATE ga_salida SET litros='$cantidadnueva', fecha='$fechanueva', hora='$horanueva', idvehiculo='$matriculanueva', notas='$notasnuevas',idobra=$obramodificada2, empresa='$empresanueva' WHERE idsalida='$codigonuevo'";

										/*$modificar=mysqli_query($conexion, $query2) or die("Fallo del query2");

											//actualiza el stock
											require("actualizagasoil.php");*/

										echo "<script>alert('Datos modificados correctamente'); window.close();</script>";
									}
							}
							?>
</html>