<?php
require("require/almacen-actual.php");

//sacar permisos de usuario

	$sentencia2="SELECT * FROM usuarios_login where usuario='".$_SESSION['usuario']."'";

	$query2=mysqli_query($conexion, $sentencia2);

	while ($fila2=mysqli_fetch_array($query2)) {
		
		$permisos=$fila2[3];


	}

	
 ?>
<section class="top-bar">
			<div class="row">
				<div class="col-lg-9 col-12">
					<h1>Gestión de Almacén - Control de Gasoil</h1>
				</div>
				<div class="col-lg-3">
					<img src="img/logo.jpg">
				</div>
			</div>
		</section>
		<section class="menu">
			<div class="row">
				<div class="col-10">
					<div class="menu-top" id="menu-top-id">
						<a href="../login.php" class="active">Inicio</a>
						<a href="../StockRopa/index.php">Entregar Ropa</a>
						<a href="../StockRopa/compraropa.php">Comprar Ropa</a>
						<a href="../StockGasoil/index.php">Suministrar Gasoil</a>
						<a href="../StockGasoil/reponergasoil.php">Reponer Gasoil</a>
						<a href="../Taller/index.php">Gestion taller</a>
						<a href="../StockGeneral/index.php">Archivos Maestros</a>
						<a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
					</div>
				</div>
				<?php 
				if($permisos==1)
					{
						echo "<div class='col-2'><div class='almacen'>".$_SESSION['nombrealmacen']."<form method='POST' action='require/cambioalmacen.php'><select name='almacen'><option value='1'>Almacen Redován</option><option value='2'>Almacen Olesa</option><option value='3'>Almacen Castellon</option><option value='4'>Almacen Palma</option></select></select><input type='submit' value='Ok' name='Ok'></form></div></div>";
					}

					?>
				
			</div>
		</section>