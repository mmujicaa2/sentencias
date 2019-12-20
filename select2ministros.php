<!-- Carga select2 de tabla ministro -->
<?php
	require 'conexion/db.php';
	$mensaje = "";

		$ministros="SELECT * FROM ministro";
		//echo $ministros;
		$query= mysqli_query($conn,$ministros);
		$min =[];
		while($campo = mysqli_fetch_array($query)) {
			$idMinistro = $campo['id_ministro'];
			$nombreMinistro = $campo['nombre_ministro'];
			
			$min[] = ['id' => $idMinistro, 'nombre' => $nombreMinistro];

		};//Fin while $resultados
		//echo $min[];
/*
	foreach ($min as $result)  {
    echo nl2br($result['id']."  ".$result['nombre']."\n");
    
} 
*/

return json_encode($min);

?>						