<!DOCTYPE html>
<html>
	<meta charset="utf-8">
	<head>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

		<!--Calendario-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.es.min.js"></script>
		<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css" rel="stylesheet"/>
		
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		
		

		<!--Estilos CSS-->
		<link rel="stylesheet" href="css/estilo.css">

		<!--Scripts-->
		<script src="js/eventos.js"></script>
		
				<?php
					define('NUM_ITEMS_BY_PAGE', 15);
					require 'conexion/db.php';
					$query="SELECT * FROM OFICIOS ORDER BY id_oficio DESC";
					
					$resultado=mysqli_query($conn, $query);

					$querytotal="SELECT count(*) as total_filas FROM OFICIOS";
					$resultadototal=mysqli_query($conn, $querytotal);
					$total_filas=mysqli_fetch_assoc($resultadototal);
					$num_total_rows=$total_filas['total_filas'];
					
				?>


		<title>Oficiador</title>
	</head>	

		<body>
			<div class="container">
				<div class="form-group">
					<div class="row">
						<div class="col-sm">
							<img src="images/salir2.png" alt="salir">
						</div>
						
						<div class="col-sm">
							<h1>Sistema de Oficios</h1>
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
					<button type="button"  class="btn btn-primary btn-lg col-lg" data-toggle="modal" data-target="#ingresaoficio">Generar N° oficio</button>
				</div>

				<div class="modal fade " id="ingresaoficio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      
				      <div class="modal-header  bg-light">
							<h5>Ingrese datos del oficio</h5>
				        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				        	  <span aria-hidden="true">&times;</span>
				       		 </button>
				      </div>
				      
				      <div class="modal-body" id="inserta">
				        <form id="ffolio" action="insertaoficio.php" method="post" >
							
								<input type="text" class="form-control form-group" name="letra" placeholder="Letra" pattern="[a-z,A-Z]{1}" maxlength="1">

								<input type="text" class="form-control form-group" name="rit"  placeholder="RIT" pattern="[0-9]{1,4}" maxlength="4" required>
								
						 		<div class="input-group form-group">
									<input  id="datepicker2" class="form-control form-group" name="anio"><span class="input-group-text" id="basic-addon2"><i class="fa fa-calendar"></i></span>
								</div>
								
								<input type="text" class="form-control form-group" name="origen" placeholder="Origen" pattern='[a-zA-Z0-9]+{1,50}'  required>

								<input type="text" class="form-control form-group" name="destino" placeholder="Destino" pattern='[a-zA-Z0-9]+{1,50}' required>
								
								<input type="text" class="form-control form-group" name="descripcion" placeholder="Descripción" pattern='[a-zA-Z0-9]+{1,200}' required>
								
								<select name="tipo" class="form-control">
									<option  name="oficio" value="Oficio">Oficio</option>
									<option name="exhorto" value="Exhorto">Exhorto</option>
									<option name="exhorto" value="Administrativo">Administrativo</option>
								</select>
							
							
					 <div class="modal-footer">
				       		<button type="button bnt" class="btn btn-primary" >Enviar</button>
				     </div>
						</form>

					<div id="resultadoinsert"></div>
				      </div>
				     
				    </div>
				  </div>
				</div>
			
			
					<div class="form-group form-inline">
					<div class="form-group">
						<label for="filtrar" >Buscar:</label>
						<input name="filtrar" class="ml-lg-2 form-control" type="text"  id="filtrar" size="50" placeholder="Ingrese criterio de filtro" onKeyUp="buscar();">
					</div>

					<div class="form-group ml-lg-2">
						<label for="datepicker ">Entre fechas:</label>
						    <div class=" ml-lg-2 input-daterange input-group" id="datepicker" >
					        
					        <input type="text" class="input-sm form-control" id="finicio" size="8" onchange="buscar();" ><span class="input-group-text" id="basic-addon2"><i class="fa fa-calendar"></i></span>
					        <label class='ml-lg-2'>y</label>
					        
					        <input type="text" class=" ml-lg-2 input-sm form-control" id="ffinal" size="8" onchange="buscar();" ><span class="input-group-text" id="basic-addon2"><i class="fa fa-calendar"></i></span>
    						</div>
  					</div>								
					
						<img src="images/excel.png" class="float-right">
					
					</div>
						<div class="clearfix"></div>
						
			
			
			</div><!-- cierre div -->
		
			
		<div id="tabladatos">
		
		<table class="table table-hover table-striped container table-sm">  
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
			 
			    //examino la pagina a mostrar y el inicio del registro a mostrar
			    if (isset($_GET["page"])) {
			        $page = $_GET["page"];
			    }
			 
			    if (!$page) {
			        $start = 0;
			        $page = 1;
			    } else {
			        $start = ($page - 1) * NUM_ITEMS_BY_PAGE;
			    }
			    //calculo el total de paginas
			    $total_pages = ceil($num_total_rows / NUM_ITEMS_BY_PAGE);

			    $result = $conn->query(
			        'SELECT * FROM OFICIOS ORDER BY id_oficio DESC LIMIT '.$start.', '.NUM_ITEMS_BY_PAGE);

			 
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
			            echo '<td>'.$row['doc'].'</td>';
			        	echo '</tr>';    
			        }
			    
			    }
		echo "</tbody>"; //cierre tbody
		echo "</table>";
				
    			echo '<nav>';
			    echo '<ul class="pagination justify-content-center">';
			 
			    if ($total_pages > 1) {
			        if ($page != 1) {
			            echo '<li class="page-item"><a class="page-link" href="index.php?page='.($page-1).'"><span aria-hidden="true">&laquo;</span></a></li>';
			        }
			 
			        for ($i=1;$i<=$total_pages;$i++) {
			            if ($page == $i) {
			                echo '<li class="page-item active"><a class="page-link" href="#">'.$page.'</a></li>';
			            } else {
			                echo '<li class="page-item"><a class="page-link" href="index.php?page='.$i.'">'.$i.'</a></li>';
			            }
			        }
			 
			        if ($page != $total_pages) {
			            echo '<li class="page-item"><a class="page-link" href="index.php?page='.($page+1).'"><span aria-hidden="true">&raquo;</span></a></li>';
			        }
			    }
				
				echo '</ul>';
				echo '</nav>'; 
			}

			?>
			
	
		</div>

			<table class="table table-hover table-striped container table-sm ">  
			
			  <thead id="tablabusqueda" style="display:none">  
			    <tr class="active table-info">  
			      <th>N°</th>  
			      <th>Letra</th>  
			      <th>RIT</th>  
			      <th>Año</th>
			      <th>Origen</th>
			      <th>Destino</th>
			      <th>Descripción</th>
			      <th>F.ingreso</th>
			      <th>Usuario</th>
			      <th>Doc.</th>
				</tr>  
			  </thead> 
					<tbody id="resultadoBusqueda">  
				</tbody>
			</table>
	</body>		
</html>
