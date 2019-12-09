<!DOCTYPE html>
<html>
	<meta charset="utf-8">
	<head>
		


<!-- Fucking Popper previous Jquery-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

<!-- Jquery -->	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


<!-- Jquery mal 
<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
 -->



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


<!-- Alertify -->
	<!-- JavaScript -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
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
					$query="SELECT * FROM ministro ORDER BY nombre_ministro DESC";
					
					$resultado=mysqli_query($conn, $query);

					$querytotal="SELECT count(*) as total_filas FROM sentencia";
					$resultadototal=mysqli_query($conn, $querytotal);
					$total_filas=mysqli_fetch_assoc($resultadototal);
					$num_total_rows=$total_filas['total_filas'];
					
				?> 


		<title>Ministros</title>
	</head>	

		<body>
			<div class="container">
				<div class="form-group">
					<div class="row">
						<div class="col-sm">
						</div>
						
						<div class="col-lg-6">
							<h2>Mantenedor de Ministros</h2>
						</div>
						
						<div class="col-sm float-right">
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				</div>
			<!-- Comienzo mantenedores -->


<!--  Ingreso Ministro-->
			<div class="container">
				
				<div class="form-group">
					<button type="button"  class="btn btn-primary btn-lg col-lg" data-toggle="modal" data-target="#ingresaoficio">Ingresar Ministro</button>
				</div>

				<div class="modal fade " id="ingresaoficio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog modal-dialog-centered" role="document">
				    <div class="modal-content">
				      
				      <div class="modal-header  bg-light mb-3">
							<h5>Ingrese datos de Ministro</h5>
				        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				        	  <span aria-hidden="true">&times;</span>
				       		 </button>
				      </div>
				      
				      <div class="modal-body" id="inserta">
			
		<!-- Formulario ingreso -->

				<form id="fiministro" action="ingministro.php" method="post">
							
								
								<input type="text" class="form-control form-group" name="nministro"  placeholder="Nombre Ministro" pattern="[a-zA-Z0-9\s]{1,200}" maxlength="200" required>

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

		<table  id="tabladatos" class="table table-hover table-striped container table-sm order-column compact">  
		  <thead>  
		    <tr class="active table-primary">  
		      <th>Nombre Ministro</th>
		      
		      <td><img src="images/editar_titulo.svg" style="width:20px"/></td>
		      <td><img src="images/borrar_titulo.svg" style="width:30px"/></td>
			</tr>  
		  </thead> 

		   <tbody>  
		
			<?php

			    $result = $conn->query('SELECT * FROM ministro ORDER BY nombre_ministro DESC');

			 
			    if ($result->num_rows > 0) {
			        echo '<tr class="table  table-sm">';
			        
			         while ($row = $result->fetch_assoc()) {
			            echo '<td>'.$row['nombre_ministro'].'</td>';
			            
			            //Modal editar 
			            echo '<td ><a  href="#" class="edid"  data-toggle="modal" data-target="#confirm-update" >
			            <img class="eimg" src="images/editar.svg" style="width:20px"  onclick="ministroEditar('.$row['id_ministro'].',\''.$row['nombre_ministro'].'\')" /></a></td>';
			            
			            //Eliminar
			             echo '<td ><a  href="#"  data-href="delministro.php?idministro='.$row['id_ministro'].'" class="eliminar" data-toggle="modal" data-target="#confirm-delete" ><img class="dimg" src="images/borrar.svg" style="width:20px"/></a></td>';
				      
				     	 echo '</tr>';    
				      } 
			       }
						
			    ?>
			    
		   </tbody>
		
	   </table>

	
				
    	
			

			


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
					pattern="[a-zA-Z0-9\s]{1,200}" maxlength="200" placeholder="Nombre Ministro" required >

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

	</body>		
</html>
