<?php 

//$almacen=$_SESSION['almacen'];		
//$almacen=$_SESSION['1'];		
//$porcentajegasoil="SELECT * FROM ga_tanquetotal where CodAlmacen='$almacen'";

//$queryporcentaje=mysqli_query($conexion, $porcentajegasoil);
?>
				<div class="col-lg-2">
					<div class="informes-bar">
						<div class="row">
							<div class="col-12">
								<h3>Llenado tanque</h3>
							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<a onclick="informgasoilfecha();" href="#"><h4>Nuevo registro de llenado</h4></a>
							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<a onclick="informgasoilfecha();" href="#"><h4>Historico llenados</h4></a>
							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<h3>Informes</h3>
							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<a onclick="informgasoilfecha();" href="#"><h4>Gasoil entre fechas</h4></a>
							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<a onclick="informgasoilobra();" href="InformGasoilObra.php" target="_blank"><h4>Gasoil por obra</h4></a>
							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<h3>% Depósito</h3>

								<?php
								/*echo "<div class='row'><div class='col-12'>";

								while ($resultado2=mysqli_fetch_array($queryporcentaje)) {
									
									$deposito=($resultado2[2]*100)/$resultado2[1];

									$numero = number_format($deposito, 2, '.', '');

									echo "<h4>Depósito actual: ".$numero."%</h4>";
									echo "<h4>Litros: ".$resultado2[2]."</h4></div></div><div class='row'><div class='col-12'>";

									if($deposito>75)
									{
										echo "<img src='img/deposito100.png'>";
									}
									else
									{
										if ($deposito>50) {
											echo "<img src='img/deposito75.png'>";
										}
										else
										{
											if ($deposito>25) {
												echo "<img src='img/deposito50.png'>";
											}
											else
											{
												echo "<img src='img/deposito25.png'>";
											}
										}
									}

									echo "</div></div>";
								}

								*/
								?>
							</div>
						</div>
					</div>
				</div>