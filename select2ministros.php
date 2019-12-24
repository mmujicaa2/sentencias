<?php
	require 'conexion/db.php';
	$mensaje = "";

		$ministros="SELECT * FROM ministro";
		//echo $ministros;
		$query= mysqli_query($conn,$ministros);
		$min =[];
		while($campo = mysqli_fetch_array($query)) {
			$nombreMinistro = $campo['nombre_ministro'];
			//$idMinistro=$campo['id_ministro'];
			 echo '<option value="'.$nombreMinistro.'">'.$nombreMinistro.'</option>';
			//$min[] = ['id' => $idMinistro,'nombre' => $nombreMinistro];

		};//Fin while $resultados
		//echo $min[];
/*
	foreach ($min as $result)  {
    echo nl2br($result['id']."  ".$result['nombre']."\n");
    
} 
*/

//echo json_encode($min);

?>						