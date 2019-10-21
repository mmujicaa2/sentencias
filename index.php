<html class="fondo">
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
					define('NUM_ITEMS_BY_PAGE', 10);
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

				<div class="modal fade" id="ingresaoficio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      
				      <div class="modal-header">
							<h5>Ingrese datos del oficio</h5>
				        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				        	  <span aria-hidden="true">&times;</span>
				       		 </button>
				      </div>
				      
				      <div class="modal-body">
				        <form id="ffolio" action="insertaoficio.php" method="post" >
							
								<input type="text" class="form-control form-group" name="letra" placeholder="Letra" pattern="[a-z,A-Z]{1}" maxlength="1">

								<input type="text" class="form-control form-group" name="rit"  placeholder="RIT" pattern="[0-9]{1,3}"  required>
								
						 		<div class="input-group input-group-append form-group">
									<input  class="form-control form-group" name="anio"  id="datepicker3"/><span class="input-group-text" id="basic-addon2"><i class="fa fa-calendar"></i></span>
								</div>
								
								<input type="text" class="form-control form-group" name="origen" placeholder="Origen" pattern="[a-zA-Z0-9]{1,50}"  required>

								<input type="text" class="form-control form-group" name="destino" placeholder="Destino" pattern="[a-zA-Z0-9]{1,50}" size="50" required>
								
								<input type="text" class="form-control form-group" name="descripcion" placeholder="Descripción" pattern="[a-zA-Z0-9]{1,200}" size="50" required>
								
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
						<label for="filtrar">Buscar:</label>
						<input name="filtrar" class="form-control" type="text"  id="filtrar" size="50" placeholder="Ingrese criterio de filtro" onKeyUp="buscar();">
					</div>
					<div class="form-group">
						<label for="datepicker">Entre fechas:</label>
						<div class="input-group ">
						 <div class="input-group-append">
							<input class="form-control form-group" id="datepicker" width="50" size="10"/> <span class="input-group-text" id="basic-addon2"><i class="fa fa-calendar"></i></span>
  						 </div>	
						</div>
						<label for="datepicker2">y</label>
						<div class="input-group ">
								<input class="form-control form-group" id="datepicker2" width="50" size="10"/><span class="input-group-text" id="basic-addon2"><i class="fa fa-calendar"></i></span>
  							</div>
  						</div>								
						<img src="images/excel.png" class="float-right">
						</div>
						<div class="clearfix"></div>
						
			
			
			</div>

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
		      <th>Usuario</th>
		      <th>Doc.</th>
			</tr>  
		  </thead> 

</div>


<div class="creditos">
	Desarrollado por Marcelo Mujica
</div>

		</body>
	
</html>
