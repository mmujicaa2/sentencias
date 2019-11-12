<?php
//Archivo de conexión a la base de datos
require 'conexion/db.php';
//Variable de búsqueda
$consultamateria = $_POST['bmateria'];
//echo $consultamateria;

$mensaje = "";


if (isset($consultamateria)) {

		$query="SELECT * FROM materia WHERE materia like '$consultamateria' ";
		//echo $query;
		$consulta = mysqli_query($conn,$query);

		//$mensaje .= "<select>";
		$mensaje .="<select id=\"submateria\" class=\"form-control mb-3\">";

		while($resultados = mysqli_fetch_array($consulta)) {
			$submateria = $resultados['submateria'];
			$name= $resultados['id_materia'];

			//Output
	$mensaje .= '<option  name="' .$submateria. '" value="'.$name.'">'.$submateria.'</option>';

			//$mensaje .="<option>aaaaa</option>";
		};//Fin while $resultados

	$mensaje .="</select >";
	}; //Fin else $filas


	echo $mensaje;

?>