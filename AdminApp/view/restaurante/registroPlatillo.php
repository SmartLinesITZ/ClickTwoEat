
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Guardar</title>
	<link rel="stylesheet" href="../src//css/materialize.min.css">
	<link rel="stylesheet" href="../src/fonts/material-design-icons/material-icons.css">
	<script src="../src/js/jquery.js"></script>
	<script src="../src/js/materialize.min.js"></script>
</head>
<body class="grey lighten-2">
	<form class="" action="index.html" method="">
		<div class="row">
			<div class="col s12">
				<div class="col s6 offset-s3 card-panel ">
					<div class="col s12"><h3 class="center-align">Agregar Platillo</h3></div>
					<div class="row">
						<div class="col s6">
							<label>Cetgorira</label>
 							<select class="browser-default">
	 							<option value="" disabled selected>Entra</option>
	 							<option value="1">Ensalada</option>
	 							<option value="2">Botana</option>
	 							<option value="3">Platillo fuerte</option>
 							</select>
							</div>
							<div class="input-field col s6">
								<input id="last_name" type="text" class="validate">
								<label for="last_name">Agregar Categoria</label>
							</div>
							</div>

						<div class="row">
							<div class="input-field col s6">
								<input name="calle" id="calle" type="text" class="validate">
								<label class="active" for="Usuario">Nombre del platillo</label>
						</div>

						<div class="row">
							<div class="input-field col s6">
								<input name="calle" id="calle" type="number" class="validate">
								<label class="active" for="Usuario">Precio</label>
						</div>

						<div class="row">
							<div class="input-field col s12">
          			<textarea id="textarea1" class="materialize-textarea"></textarea>
          			<label for="textarea1">Descripcion</label>
        		</div>
						</div>
					</div>
				</div>
			</div>

<?php//################################################### MENU #############################################################?>
			<div class="col s6 offset-s3  card-panel ">
				<div class="col s12"><h3 class="center-align">Menu</h3></div>

			</div>

<?php//################################################### Ingredientes #############################################################?>

		<div class="col s6 offset-s3 card-panel ">
			<div class="col s12"><h3 class="center-align">Ingredientes del platillo latillo</h3></div>
			<div class="row">

				<div class="input-field col s6">
					<input id="last_name" type="text" class="validate">
					<label for="last_name">Ingrediente 1</label>
				</div>
				<div class="input-field col s6">
					<input id="last_name" type="text" class="validate">
					<label for="last_name">Ingrediente 2</label>
				</div>
				<div class="input-field col s6">
					<input id="last_name" type="text" class="validate">
					<label for="last_name">Ingrediente 3</label>
				</div>
				<div class="input-field col s6">
					<input id="last_name" type="text" class="validate">
					<label for="last_name">Ingrediente 4</label>
				</div>
				<div class="input-field col s6">
					<input id="last_name" type="text" class="validate">
					<label for="last_name">Ingrediente 5</label>
				</div>
				<div class="input-field col s6">
					<input id="last_name" type="text" class="validate">
					<label for="last_name">Ingrediente 6</label>
				</div>

			</div>
		</div>
		</form>
		</body>
</html>
