<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Empresa</title>
		<link rel="stylesheet" href="src/css/materialize.min.css">
		<link rel="stylesheet" href="../src//css/materialize.min.css">
		<link rel="stylesheet" href="../src/fonts/material-design-icons/material-icons.css">
		<script src="../src/js/jquery.js"></script>
		<script src="../src/js/materialize.min.js"></script>
	</head>
	<body class="grey lighten-2">
	<div class="col m12 teal">
  			<br>
  			<br>
  	</div>
  	<div class="container">
  		<div class="row">
  			<div class="col m4 push-m4">
  				<div class="card-panel white z-depth-4">
  					<div class="row">
  						<h4 class="center">Iniciar sesión</h4>
					    <div class="row">
  							<div class="col m4 push-m4">
  								<a href="#registrar.html">

  								</a>
  							</div>
  						</div>
					    <form class="col s12" enctype="multipart/form-data" action="admin/inicio.php">
					     	<div class="row">
					        	<div class="input-field col s12">
					          		<input id="usuario" type="text" class="validate" name="usuario">
					          		<label class="active" for="usuario">Usuario</label>
					        	</div>
					      	</div>
					      	<div class="row">
					        	<div class="input-field col s12">
					          		<input id="password" type="password" class="validate" name="password">
					          		<label class="active" for="password">Contraseña</label>
					        	</div>
					      	</div>
					      	<button class="btn waves-effect waves-light right" name="action">Accesar
  							</button>
					    </form>

					</div>
        		</div>
  			</div>
  		</div>
  	</div>
</body>
</html>
