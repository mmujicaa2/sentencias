<!DOCTYPE html>
<html>
	<meta charset="utf-8">
	<head>
		


<!-- Fucking Popper previous Jquery-->
<script src="js/popper.min.js"></script>

<!-- Jquery -->	
<script src="js/jquery.min.js"></script>


<!-- Fileinput  krajee-->
<script src="js/fileinput.js"></script>
<script src="js/es.js"></script>
<link rel="stylesheet" href="css/fileinput.css"/>
		

<!--Datepicker bootstrap-->
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/bootstrap-datepicker.es.min.js"></script>
<link href="css/bootstrap-datepicker.css" rel="stylesheet"/>

<!-- Viewport -->	
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

<!-- Bootstrap -->
<link rel="stylesheet" href="js/bootstrap.min.css">
<script src="js/bootstrap.min.js"></script>
<link href="js/font-awesome.min.css" rel="stylesheet">


<!-- Datatables -->
<link rel="stylesheet" type="text/css" href="js/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="js/jquery.dataTables.js"></script>

<!--Estilos CSS-->
		<link rel="stylesheet" href="css/estilo.css">

<!--Scripts-->
		<script src="js/eventos.js"></script>


<!-- Alertify -->
	<!-- JavaScript -->
<script src="js/alertify.min.js"></script>

<!-- CSS -->
<link rel="stylesheet" href="css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="css/default.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="css/semantic.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<!-- Fin alertify -->


<!-- Inicializa krajee File input----inicializado en el input -->


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
	            "zeroRecords": "No se encontró filas",
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
						{ targets: [2, -3], className: 'dt-body-left' }
					]
				} );
		} );
	
	
		</script>
		
		<?php
					define('NUM_ITEMS_BY_PAGE', 15);
					require 'conexion/db.php';
					$query="SELECT * FROM materias ORDER BY materia DESC";
					
					$resultado=mysqli_query($conn, $query);

					$querytotal="SELECT count(*) as total_filas FROM sentencia";
					$resultadototal=mysqli_query($conn, $querytotal);
					$total_filas=mysqli_fetch_assoc($resultadototal);
					$num_total_rows=$total_filas['total_filas'];
					
				?> 


		<title>Materias</title>
	</head>	

		<body>
			<div class="container" style="width:50%" >
					<h2 class="text-center">Mantenedor de Materias</h2>
			</div>
			


			<!-- Comienzo mantenedores -->


<!--  Ingreso Ministro-->
			<div class="container"  style="width:50%">
				
				<div class="form-group">
					<button type="button"  class="btn btn-primary btn-lg col-lg" data-toggle="modal" data-target="#ingmateria">Ingresar Materia</button>
				</div>

				<div class="modal fade " id="ingmateria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog modal-dialog-centered" role="document">
				    <div class="modal-content">
				      
				      <div class="modal-header  bg-light mb-3">
							<h5>Ingrese Materia</h5>
				        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				        	  <span aria-hidden="true">&times;</span>
				       		 </button>
				      </div>
				      
				      <div class="modal-body" id="inserta">
			
		<!-- Formulario ingreso -->

				<form id="fimateria" action="ingmateria.php" method="post">
							
								
								<input type="text" class="form-control form-group" name="nmateria"  placeholder="Nombre Materia" 
								pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+" maxlength="200" required>

								 <div class="modal-footer">
							       		<button type="button bnt" class="btn btn-primary">Agregar</button>
							   </div>
						</form>


				      </div>
				     
				    </div>
				  </div>
				</div>
			
			
			</div><!-- cierre div -->

			<!-- Cierre ingreso de sentencias  -->


		
<!-- Carga de datos en la tabla -->
<div class="container">
		<table  id="tabladatos" class="table table-hover table-striped container table-sm order-column compact" style="width:50%">  
		  <thead>  
		    <tr class="active table-primary">  
		      <th>Nombre Materia</th>
		      
		      <td><img src="images/editar_titulo.svg" style="width:20px"/></td>
		      <td><img src="images/borrar_titulo.svg" style="width:30px"/></td>
			</tr>  
		  </thead> 

		   <tbody>  
		
			<?php

			    $result = $conn->query('SELECT DISTINCT materia FROM materia');

			 
			    if ($result->num_rows > 0) {
			        echo '<tr class="table  table-sm">';
			        
			         while ($row = $result->fetch_assoc()) {
			            echo '<td>'.$row['materia'].'</td>';
			            
			            //Modal editar 
			            echo '<td ><a  href="mant_submaterias.php?materia='.$row['materia'].'">
			            <img class="eimg" src="images/editar.svg" style="width:20px" /></a></td>';

			            
			            //Eliminar
			             echo '<td ><a  href="#"  data-href="delmateria.php?materia='.$row['materia'].'" class="eliminar" data-toggle="modal" data-target="#confirm-delete" ><img class="dimg" src="images/borrar.svg" style="width:20px"/></a></td>';
				      
				     	 echo '</tr>';    
				      } 
			       }
						
			    ?>
			    
		   </tbody>
		
	   </table>
<!-- fin tabla datos -->
				
   </div> 	
			

			


<!--  modal Editar-->			
<div class="modal fade" id="confirm-update" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            
                <div class="modal-header  bg-light mb-3">
                    <h4 class="modal-title" id="myModalLabel">Editar</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
				      <div class="modal-body" id="editar">
				
<!-- formulario editar -->
				<form id="eministro" action="#" method="post" enctype="multipart/form-data" >
					
					<input type="hidden" id="id" >

					<input type="text" class="form-control form-group" id="edministro" 
					pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+" maxlength="200" placeholder="Nombre Ministro" required >

          <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
											<button type="button btn" class="btn btn-success" id="btnedtmin">Editar</button>
                     <!-- <a class="btn btn-success btn-ok">Editar</a> -->
          </div>
        </form>

            </div>
        </div>
    </div>
</div>
</div>
			<!-- Fin modal delete -->




<!--  modal delete -->			
<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Eliminar</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    
                </div>
            
                <div class="modal-body">
                    <p>Esta a punto de eliminar.</p>
                    <p>Esta seguro que desea hacerlo?</p>
                    <p class="debug-url"></p>
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-danger btn-ok">Borrar</a>
                </div>
            </div>
        </div>
    </div>

			<!-- Fin modal delete -->

<!-- Scripy llama a eliminar el registro -->
 <script>
       
        $('#confirm-delete').on('show.bs.modal', function(e) {
            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
        });


    </script>
<!-- Fin script llama  eliminar -->

<div class="footer">
	<p class="rights"><a href="mailto:mmujica@pjud.cl">Desarrollado por Marcelo Mujica</a></p>
</div>

	</body>		
</html>
