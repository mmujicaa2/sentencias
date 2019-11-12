<?php
//Archivo de conexión a la base de datos
require 'conexion/db.php';
//Variable de búsqueda
$consultaBusqueda = $_POST['valorBusqueda'];

//Filtro anti-XSS
//$caracteres_malos = array("<", ">", "\"", "'", "/", "<", ">", "'", "/");
//$caracteres_buenos = array("& lt;", "& gt;", "& quot;", "& #x27;", "& #x2F;", "& #060;", "& #062;", "& #039;", "& #047;");
//$consultaBusqueda = str_replace($caracteres_malos, $caracteres_buenos, $consultaBusqueda);

//Variable vacía (para evitar los E_NOTICE)
$mensaje = "";
$query="SELECT * FROM materia ORDER BY materia DESC";


//Comprueba si $consultaBusqueda está seteado
if (isset($consultaBusqueda)) {

	if (isset($fiBusqueda)) {

		$query="SELECT * FROM materia WHERE submateria LIKE '%$consultaBusqueda%')";
		//$mensaje .= $query;
	}
	
	$consulta = mysqli_query($conn,$query);



	//Obtiene la cantidad de filas que hay en la consulta
	$filas = mysqli_num_rows($consulta);

	//Si no existe ninguna fila que sea igual a $consultaBusqueda, entonces mostramos el siguiente mensaje
	if ($filas == 0) {
		//$mensaje = "<p>No se encontraron coincidencias</p>";
		
	} else {

		//Si existe alguna fila que sea igual a $consultaBusqueda, entonces mostramos el siguiente mensaje
		//echo 'RESULTADOS PARA <strong>'.strtoupper($consultaBusqueda).'</strong>';
		//echo '<hr>';
		
		//La variable $resultado contiene el array que se genera en la consulta, así que obtenemos los datos y los mostramos en un bucle
		while($resultados = mysqli_fetch_array($consulta)) {

			$folio = $resultados['id_oficio'];
			$fechaingreso = $resultados['fechaingreso'];
			$letra = $resultados['letra'];
			$rit = $resultados['rit'];
			$anio = $resultados['anio'];
			$origen = $resultados['origen'];
			$destino = $resultados['destino'];
			$descripcion = $resultados['descripcion'];
			$fingreso = $resultados['fechaingreso'];
			$usuario = $resultados['usuario'];
			$fingreso = $resultados['fechaingreso'];
			
			//Output
			$mensaje .= '
			
			
				<tr class="table  table-sm" >;
				<td><p class="font-weight-bold">'.$folio."-".date("Y",strtotime($fechaingreso)).'</p></td>;
			    <td>'.$letra.'</td>;
			    <td>'.$rit.'</td>;
			    <td>'.$anio.'</td>;
				<td>'.$origen.'</td>;
				<td>'.$destino.'</td>;
				<td>'.$descripcion.'</td>;
				<td>'.$fingreso.'</td>;
				<td>'.$usuario.'</td>;
				<td>'.$documento.'</td>;
		    	</tr>';

		};//Fin while $resultados

	}; //Fin else $filas

};//Fin isset $consultaBusqueda

//Devolvemos el mensaje que tomará jQuery
echo $mensaje;
//echo $query;
?>