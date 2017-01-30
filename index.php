<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulario dinamico pruebas</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.js"></script>
</head>
<body>
<form action="registro.php">
	<div class="Fcontent">
		<div class="Pform uno activo">
				<input type="text" placeholder="Nombre">
				<input type="text" placeholder="Apellido">
				<button type="button" id="botonUno">Siguiente</button>
		</div>
		<div class="Pform dos">
				<input type="number" placeholder="Edad">
				<input type="text" name="Nick">
				<button type="button" id="botonDos">Siguiente</button>
		</div>
		<div class="Pform tres">
				<select name="ciudad" id="">
					<option value="0" selected="selected">Cuidad</option>
					<option value="1">Santiago</option>
					<option value="2">Concepcion</option>
				</select>
				<input type="submit" value="Registrar">
		</div>
	</div>
</form>
<script type="text/javascript" src="script.js"></script>
</body>
</html>