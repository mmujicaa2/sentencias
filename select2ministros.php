<?php
	require 'conexion/db.php';
	$mensaje = "";

		$ministros="SELECT * FROM ministro";
		//echo $ministros;
		$query= mysqli_query($conn,$ministros);
		$min =[];
		while($campo = mysqli_fetch_array($query)) {
			$nombreMinistro = $campo['nombre_ministro'];
			
			$min[] = ['nombre' => $nombreMinistro];

		};//Fin while $resultados
		//echo $min[];
/*
	foreach ($min as $result)  {
    echo nl2br($result['id']."  ".$result['nombre']."\n");
    
} 
*/

echo json_encode($min);

?>						