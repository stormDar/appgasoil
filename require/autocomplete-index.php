	<?php

	//Consulta de empleados
	$consultamatriculas = "SELECT * FROM ga_vehiculo";
	//Consulta de ropa
	$consulobra = "SELECT * FROM ga_obra";

	//resultadoempleados
	$resultadomatriculas = mysqli_query( $conexion, $consultamatriculas ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	//resultadomaterial
	$resultadoobra = mysqli_query( $conexion, $consulobra ) or die ( "Algo ha ido mal en la consulta a la base de datos");

?>

	<!-- Script para autocompletar matrículas -->
<script>
	$(function() {

<?php
		
	while($row= mysqli_fetch_array($resultadomatriculas)) {//se reciben los valores y se almacenan en un arreglo
    $elementos[]= '"'.$row[0].'"';
	  }

	$arreglo= implode(", ", $elementos);//junta los valores del array en una sola cadena de texto
		?>	
		
	var availableTags=new Array(<?php echo $arreglo; ?>);//imprime el arreglo dentro de un array de javascript
				
		$( "#Matricula" ).autocomplete({
			source: availableTags
		});
	});
	</script>

	<!-- Script para autocompletar material -->
	<script>
	$(function() {
		
		<?php
		
	while($row2= mysqli_fetch_array($resultadoobra)) {//se reciben los valores y se almacenan en un arreglo
    $elementos2[]= '"'.$row2[1].'"';
	  }

	$arreglo2= implode(", ", $elementos2);//junta los valores del array en una sola cadena de texto
		?>	
		
	var availableTags=new Array(<?php echo $arreglo2; ?>);//imprime el arreglo dentro de un array de javascript
				
		$( "#Ubicacion" ).autocomplete({
			source: availableTags
		});
	});
	</script>