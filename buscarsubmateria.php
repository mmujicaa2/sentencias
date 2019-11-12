<?php
require 'conexion/db.php';
$consultamateria = $_POST['bmateria'];

$mensaje = "";


if (isset($consultamateria)) {

		$query="SELECT * FROM materia WHERE materia like '$consultamateria' ";
		//echo $query;
		$consulta = mysqli_query($conn,$query);

		$mensaje .="<select id=\"submateria\" class=\"form-control mb-3\">";

		while($resultados = mysqli_fetch_array($consulta)) {
			$submateria = $resultados['submateria'];
			$name= $resultados['id_materia'];

			
			$mensaje .= '<option  name="' .$submateria. '" value="'.$name.'">'.$submateria.'</option>';

		};//Fin while $resultados

	$mensaje .="</select >";
	}; //Fin else $filas

	echo $mensaje;

?>