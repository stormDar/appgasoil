<div class="col-lg-10">
					<div class="resultados-barra">
						<div class="row">							
							<div class="col-1">
							</div>
							<div class="col-1">
								<h4>Matrícula</h4>
							</div>
							<div class="col-1">
								<h4>Kilometraje</h4>
							</div>
							<div class="col-1">
								<h4>Particular</h4>
							</div>
							<div class="col-1">
								<h4>Fecha</h4>
							</div>
							<div class="col-1">
								<h4>Hora</h4>
							</div>
							<div class="col-1">
								<h4>Litros</h4>
							</div>
							<div class="col-1">
								<h4>Obra</h4>
							</div>
							<div class="col-1">
								<h4>Observaciones</h4>
							</div>
							<div class="col-1">
								<h4>Empresa</h4>
							</div>
							<div class="col-1">
								<h4>Almacen</h4>
							</div>
							<div class="col-1">
								<h4>Usuario</h4>
							</div>
						</div>
					</div>
					<div class="resultados">

						<?php

							//mostramos los datos de la busqueda
							if (isset($_POST['token'])) 
							{
								//Obtenemos los datos recibidos
								$matricula=$_POST["Matricula"];
								$ubicacion=$_POST["Ubicacion"];
								$fecha=$_POST["Fecha"];		
								//$almacen=$_SESSION['almacen'];	
													
								
								if($matricula!="")
								{
									//$query1="SELECT IdRepostaje,CantidadRepostaje,FechaRepostaje,HoraRepostaje,IdVehiculoRepostaje,NotasRepostaje,NombreObra,Usuario,KmVehiculo FROM ga_gasoil,ga_obra WHERE CodAlmacen='".$_SESSION['almacen']."' and (IdObraGasoil=IdObra) and (IdVehiculoRepostaje LIKE '%$matricula%') ORDER BY FechaRepostaje desc,HoraRepostaje desc";
									$query1="SELECT idsalida, vehiculos.MatriculaVehiculo, fecha, hora, litros, NombreCentro, codalmacen, notas, creador, empresa, kilometraje, particular FROM ga_salida, centros, vehiculos WHERE idobra=IdCentro and ga_salida.idvehiculo=vehiculos.IdVehiculo and (ga_salida.idvehiculo=vehiculos.IdVehiculo) and (vehiculos.MatriculaVehiculo LIKE '%$matricula%') ORDER BY fecha desc";
								}

									else{
										if($fecha!="")
										{
											//$query1="SELECT IdRepostaje,CantidadRepostaje,FechaRepostaje,HoraRepostaje,IdVehiculoRepostaje,NotasRepostaje,NombreObra,Usuario,KmVehiculo FROM ga_gasoil,ga_obra WHERE CodAlmacen='".$_SESSION['almacen']."' and (IdObraGasoil=IdObra) and (FechaRepostaje LIKE '%$fecha%') ORDER BY FechaRepostaje desc,HoraRepostaje desc";
											$query1="SELECT idsalida, vehiculos.MatriculaVehiculo, fecha, hora, litros, NombreCentro, codalmacen, notas, creador, empresa, kilometraje, particular FROM ga_salida, centros, vehiculos WHERE idobra=IdCentro and ga_salida.idvehiculo=vehiculos.IdVehiculo and (fecha LIKE '%$fecha%') ORDER BY fecha desc";

										}
										else
										{
											if($ubicacion!="")
											{
												//$query1="SELECT IdRepostaje,CantidadRepostaje,FechaRepostaje,HoraRepostaje,IdVehiculoRepostaje,NotasRepostaje,NombreObra,Usuario,KmVehiculo FROM ga_gasoil,ga_obra WHERE CodAlmacen='".$_SESSION['almacen']."' and (IdObraGasoil=IdObra) and (NombreObra LIKE '%$ubicacion%') ORDER BY FechaRepostaje desc,HoraRepostaje desc";
												$query1="SELECT idsalida, vehiculos.MatriculaVehiculo, fecha, hora, litros, NombreCentro, codalmacen, notas, creador, empresa, kilometraje, particular FROM ga_salida, centros, vehiculos WHERE idobra=IdCentro and ga_salida.idvehiculo=vehiculos.IdVehiculo and (Nombrecentro LIKE '%$ubicacion%') ORDER BY fecha desc";

											}
											else{

												//$query1="SELECT IdRepostaje,CantidadRepostaje,FechaRepostaje,HoraRepostaje,IdVehiculoRepostaje,NotasRepostaje,NombreObra,Usuario,KmVehiculo FROM ga_gasoil,ga_obra WHERE CodAlmacen='".$_SESSION['almacen']."' and (IdObraGasoil=IdObra) ORDER BY FechaRepostaje desc,HoraRepostaje desc";
												$query1="SELECT idsalida, vehiculos.MatriculaVehiculo, fecha, hora, litros, NombreCentro, codalmacen, notas, creador, empresa, kilometraje, particular FROM ga_salida, centros, vehiculos WHERE idobra=IdCentro and ga_salida.idvehiculo=vehiculos.IdVehiculo ORDER BY fecha desc";

											}
											
										}
								
							}
		
								

								// mostramos los datos recogidos

								$resultado=mysqli_query($conexion,$query1) or die("Ha ocurrido un error nigga!");

								while($busqueda=mysqli_fetch_array($resultado))
								{
									echo 
									"<div class='row'>
										<div class='col-1'>
											<a onclick='editagasoil(".$busqueda[0].");'><img src='img/edit.png'></a>
											<a onclick='borragasoil(".$busqueda[0].")'><img src='img/delete.png'></a>
										</div>
										<div class='col-1'><span>".$busqueda[1]."</span></div>
										<div class='col-1'><span>".$busqueda[10]."</span></div>
										<div class='col-1'><span>".$busqueda[11]."</span></div>
										<div class='col-1'><span>".$busqueda[2]."</span></div>
										<div class='col-1'><span>".$busqueda[3]."</span></div>
										<div class='col-1'><span>".$busqueda[4]."</span></div>
										<div class='col-1'><span>".$busqueda[5]."</span></div>
										<div class='col-1'><span>".$busqueda[7]."</span></div>
										<div class='col-1'><span>".$busqueda[9]."</span></div>
										<div class='col-1'><span>".$busqueda[6]."</span></div>
										<div class='col-1'><span>".$busqueda[8]."</span></div>
									</div>";

								}
							}
						?>

					</div>
				</div>
			</div>