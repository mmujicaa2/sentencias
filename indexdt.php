<!DOCTYPE html>
<html>
	<meta charset="utf-8">
	<head>
		


<!-- Fucking Popper previous Jquery-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

<!-- Jquery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


<!-- Fileinput  krajee-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.6/js/fileinput.js" integrity="sha256-gBMxvh5TatVGO6+k+QUIsmB2hoDh9C4QDmARBh1fLt8=" crossorigin="anonymous"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.6/js/locales/es.js" integrity="sha256-JlMWwWbsL9wOJJPB2+JQyNfNwb+bY/MxdcZw0zdJN2g=" crossorigin="anonymous"></script>

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.6/css/fileinput.css" integrity="sha256-DQU6yrp4ySroKr/kpZm7c03Ac483k2L3NpoKmwdOlcc=" crossorigin="anonymous" />
		

<!--Calendario-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.es.min.js"></script>
		<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css" rel="stylesheet"/>

<!-- Viewport -->	
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

<!-- Bootstrap -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">


<!-- Datatables -->
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
		<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>

<!--Estilos CSS-->
		<link rel="stylesheet" href="css/estilo.css">

<!--Scripts-->
		<script src="js/eventos.js"></script>


<!--Bootstrap Multiselect CSS y JS y lenguajes-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.11/css/bootstrap-select.min.css">

		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.11/js/bootstrap-select.min.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.11/js/i18n/defaults-es_CL.js" integrity="sha256-tjUcUjAb8ZD4wFw6K6gB1WGIl7tQRzBFXIv909raSZo=" crossorigin="anonymous"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.11/js/i18n/defaults-es_CL.min.js" integrity="sha256-LKDclYxOa739YTov76uNDqeux8SIf3Wl69FclD8xOxk=" crossorigin="anonymous"></script>


<!-- Inicializa krajee File input -->


<!--  Inicaliza krajee desde script pero mejor desde propiedades de etiqueta
<script>
$('#input-b2').fileinput({
    language: 'es',
    showRemove:false,
    showUpload:false,
    uploadUrl: "/file-upload-batch/2",
    allowedFileExtensions: ["jpg", "png", "gif"]
});

</script>
 -->
 

<!-- Inicializa Datatables -->
		<script>

		$(document).ready( function () {
			$('#tabladatos')
				.addClass( 'nowrap' )
				.DataTable( {
				"deferRender": true,
				"dom": '<"top"f>rt<"bottom"ip><"clear">',
				"language": {
				"searchPlaceholder": "Buscar por cualquier criterio",
            "lengthMenu": "Mostrar _MENU_ filas por página",
            "zeroRecords": "No se encontro filas",
            "info": "Página _PAGE_ de _PAGES_",
            "infoEmpty": "No hay registros disponibles",
            "infoFiltered": "(Filtrado de _MAX_ total de filas)",
            "sSearch":         "Buscar:",
            "oPaginate": {
                    "sFirst":    "Primero",
                    "sLast":     "Último",
                    "sNext":     "Siguiente",
                    "sPrevious": "Anterior"
                },
        			},
					responsive: true,
					columnDefs: [
						{ targets: [2, -3], className: 'dt-body-right' }
					]
				} );
		} );
	
	
		</script>
		
				<?php
					define('NUM_ITEMS_BY_PAGE', 15);
					require 'conexion/db.php';
					$query="SELECT * FROM sentencia ORDER BY id_oficio DESC";
					
					$resultado=mysqli_query($conn, $query);

					$querytotal="SELECT count(*) as total_filas FROM sentencia";
					$resultadototal=mysqli_query($conn, $querytotal);
					$total_filas=mysqli_fetch_assoc($resultadototal);
					$num_total_rows=$total_filas['total_filas'];
					
				?>


		<title>Sentencias</title>
	</head>	

		<body>
			<div class="container">
				<div class="form-group">
					<div class="row">
						<div class="col-sm">
							<img src="images/salir2.png" alt="salir">
						</div>
						
						<div class="col-lg">
							<h2>Búsqueda de sentencias</h2>
						</div>
						
						<div class="col-sm float-right">
							<img src="images/usuario.png" alt=" usuario" class="float-right">	
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				</div>
				
			<div class="container">
				
				<div class="form-group">
					<button type="button"  class="btn btn-primary btn-lg col-lg" data-toggle="modal" data-target="#ingresaoficio">Ingresar Sentencia</button>
				</div>

				<div class="modal fade " id="ingresaoficio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      
				      <div class="modal-header  bg-light mb-3">
							<h5>Ingrese datos de sentencia</h5>
				        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				        	  <span aria-hidden="true">&times;</span>
				       		 </button>
				      </div>
				      
				      <div class="modal-body" id="inserta">
			
		
		<form id="ffolio" action="ingsentencia.php" method="post" >
							
								
								<input type="text" class="form-control form-group" name="rit"  placeholder="Rol Corte" pattern="[0-9]{1,4}" maxlength="4" required>
								
						 		<div class="input-group form-group">
									<input  id="datepicker2" class="form-control form-group" name="anio" required>
									<span class="input-group-text" id="basic-addon2" for="datepicker2" ><i class="fa fa-calendar" for="datepicker2"></i></span>
								</div>


<!-- Aca va un select con los minitros -->


				<select name="slMinistro[]" id="slMinistro[]" class="selectpicker mb-3 form-control form-group " data-live-search="true" multiple data-max-options="3"  title="Seleccione ministros" data-lang="es_ES" required>
						<!-- Carga select de tabla ministro -->
						<?php
						require 'conexion/db.php';
						$mensaje = "";

								$ministros="SELECT * FROM ministro";
								//echo $query;
								$query= mysqli_query($conn,$ministros);

								while($campo = mysqli_fetch_array($query)) {
									$idMinistro = $campo['id_ministro'];
									$nombreMinistro = $campo['nombre_ministro'];
									$apMinistro= $campo['apaterno_ministro'];
									//$amMinistro = $campo['amaterno_ministro'];

									echo '<option value="'.$nombreMinistro.'">'.$nombreMinistro.'</option>';

								};//Fin while $resultados

						?>						

					</select> <!-- fin select ministros -->


					<select name="materia" id="materia" class="form-control mb-3" required >
														<option  name="" value=""></option>
														<option  name="Civil" value="Civil">Civil</option>
														<option name="Ejecutivas" value="Ejecutivas">Ejecutivas</option>
														<option name="Penal" value="Penal">Penal</option>
														<option name="Laboral" value="Laboral">Laboral</option>
														<option name="Familia" value="Familia">Familia</option>
														<option name="Proteccion" value="Proteccion">Protección</option>
														<option name="jlp" value="jlp">Juzgado Policia Local</option>
					</select>


					<div  id="submateria"></div> <!-- Carga el select con las submaterias -->
								
<!-- Prueba file input krajee -->


					<input id="input-b2" class="file" name="input-b2" type="file" data-show-preview="false" data-language="es" data-show-remove="false" data-show-cancel="false" data-show-upload="false" data-required="true">
<!-- fin prueba file unput -->

<!-- Comentado para probar funcionamient de krajee

								<div class="custom-file mb-3" id="customFile" lang="es">
							  		<input type="file" class="custom-file-input" id="fileName" required>
							  		<label class="custom-file-label" for="fileName" data-browse="Abrir">Seleccione Sentencia</label>
								</div>
 -->						

							
					 <div class="modal-footer">
				       		<button type="button bnt" class="btn btn-primary" >Enviar</button>
				     </div>
						</form>


					<div id="resultadoinsert"></div> <!-- Eliminar -->
				      </div>
				     
				    </div>
				  </div>
				</div>
			
			
			</div><!-- cierre div -->
		
<!-- Carga de datos en la tabla -->

		<table  id="tabladatos" class="table table-hover table-striped container table-sm order-column compact">  
		  <thead>  
		    <tr class="active table-info">  
		      <th>N°</th>  
		      <th>Letra</th>  
		      <th>RIT</th>  
		      <th>Año</th>
		      <th>Origen</th>
		      <th>Destino</th>
		      <th>Descripción</th>
		      <th>F.Ingreso</th>
		      <th>Usuario</th>
		      <th>Doc.</th>
			</tr>  
		  </thead> 

		   <tbody>  
		
			<?php


			if ($num_total_rows > 0) {
			    $page = false;
			 
			    
			    $result = $conn->query('SELECT * FROM sentencia ORDER BY id_oficio DESC');

			 
			    if ($result->num_rows > 0) {
			        echo '<tr class="table  table-sm">';
			        while ($row = $result->fetch_assoc()) {
			            echo '<td><p class="font-weight-bold">'.$row['id_oficio']."-".date("Y",strtotime($row['fechaingreso'])).'</td>';
			            echo '<td>'.$row['letra'].'</td>';
			            echo '<td>'.$row['rit'].'</td>';
			            echo '<td>'.$row['anio'].'</td>';
			            echo '<td>'.$row['origen'].'</td>';
			            echo '<td>'.$row['destino'].'</td>';
			            echo '<td>'.$row['descripcion'].'</td>';
			           	echo '<td>'.$row['fechaingreso'].'</td>';
			            echo '<td>'.$row['usuario'].'</td>';
			            echo '<td>'.$row['documento'].'</td>';
			        	echo '</tr>';    
			        }
			    
			    }
		echo "</tbody>"; //cierre tbody
		echo "</table>";
				
    			
			}

			?>
			
	</body>		
</html>
