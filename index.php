<!DOCTYPE html>
<html>
<head>
	<?php 
	
	error_reporting(0);

	//Archivo de conexión a la base de datos
	require("conexion.php");
	//Archivo de control de acceso a los archivos sin loguearse
	//require("../seguridad.php");
	//Cabecera con las llamas a CSS, JS y demás
	require("require/header.php");
	//Funciones de JS
	require("require/js-functions.php");
	//Autocompletar los parámetros de busqueda del Index
	require("require/autocomplete-index.php");
	//Actualizar gasoil
	//require("actualizagasoil.php");

	?>
</head>
<body onfocus="location.reload();">
	<div class="container-fluid">
		<?php 

		// Barra con titulo y logo (para todas las paginas)
		//require("require/tittle-bar.php");

		?>
		<section class="principal">
			<?php

			//Barra de busqueda horizontal unica de index
			require("require/search-bar-index.php");
			
			?>
			<div class="row">
				
				<?php 

				//Barra vertical de informes (para todas las páginas)
				require("require/inform-bar.php"); 

				//Muestra los resultados de la busqueda
				require("require/search-result-index.php");

				?>
			
		</section>
	</div>
</body>
</html>