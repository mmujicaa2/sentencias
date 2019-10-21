<html>
	<meta charset=utf-8>
	<head>
		<title>Generador de oficios</title>
		<link rel="stylesheet" href="css/estilo.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="js/grilla.js" ></script>

	</head>
	<body>
		<div class="modal">
		<div class="bodymodal">
		<form action="#">
			<h1>Ingreso folio</h1>
			<input type="text" name="letra" placeholder="Letra" pattern="[a-z]{1}" maxlength="1" size="4">
			<input type="text" name="rit" placeholder="RIT" pattern="[0-9]{1,3}" size="4" required>
			<input type="text" name="anio" placeholder="Año" pattern="[0-9]{4}" size="4" required>
			<input type="text" name="origen" placeholder="Origen" pattern="[a-zA-Z0-9]{1,50}" size="50" required>

			<input type="text" name="destino" placeholder="Destino" pattern="[a-zA-Z0-9]{1,50}" size="50" required>
			<input type="text" name="descripcion" placeholder="Descripción" pattern="[a-zA-Z0-9]{1,200}" size="50" required>
			<select name="tipo" id="">
				<option  name="oficio" value="Oficio">Oficio</option>
				<option name="exhorto" value="Exhorto">Exhorto</option>
			</select>
			<button id="enviar" type="button" >Enviar</button>
		</form>
		</div>	
		</div>
	</body>
</html>
