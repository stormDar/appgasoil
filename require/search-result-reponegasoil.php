<div class="col-lg-10">
					<div class="resultados-barra">
						<div class="row">							
							<div class="col-1">
							</div>
							<div class="col-1">
								<h4>Fecha</h4>
							</div>
							<div class="col-2">
								<h4>Cantidad Repostada</h4>
							</div>
							<div class="col-1">
								<h4>Precio</h4>
							</div>
							<div class="col-1">
								<h4>Total Litros</h4>
							</div>
							<div class="col-4">
								<h4>Notas</h4>
							</div>
							<div class="col-2">
								<h4>Usuario</h4>
							</div>
						</div>
					</div>
					<div class="resultados">

						<?php
							//mostramos los datos de la busqueda
							if (isset($_POST['token'])) {

							//Obtenemos los datos recibidos

								$fecha=$_POST["Fecha"];		
								$almacen=$_SESSION['almacen'];	
									
								
								if($fecha!="")
								{

									$query1="SELECT * FROM ga_llenadotanque WHERE CodAlmacen='$almacen' and FechaLlenado='$fecha' order by FechaLlenado desc";
								}
								else
								{

									$query1="SELECT * FROM ga_llenadotanque WHERE CodAlmacen='$almacen' order by FechaLlenado desc";
								}
																

								// mostramos los datos recogidos

								$resultado=mysqli_query($conexion,$query1) or die("Ha ocurrido un error");

								while($busqueda=mysqli_fetch_array($resultado))
								{
									echo "<div class='row'><div class='col-1'><a onclick='editrellenagasoil(".$busqueda[0].");'><img src='img/edit.png'></a><a onclick='borrarellenagasoil(".$busqueda[0].")'><img src='img/delete.png'></a></div><div class='col-1'><span>".$busqueda[2]."</span></div><div class='col-2'><span>".$busqueda[1]."</span></div><div class='col-1'><span>".$busqueda[3]."</span></div><div class='col-1'><span>".$busqueda[4]."</span></div><div class='col-4'><span>".$busqueda[5]."</span></div><div class='col-2'><span>".$busqueda[7]."</span></div></div>";

								}
							}
						?>

					</div>
				</div>
			</div>