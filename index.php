<!DOCTYPE html>
<html>
<head>
	<title>PtJson</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style>
		.scroll{
			height: 100vh;
			overflow-y: scroll;
		}
		.edit_btn { display: none; }
	</style>
</head>
<body>
	<section id="main2">
		
	</section>
	<section class="container">
		<article class="row">
			<div class="col-sm-6 scroll">
				<h3>Peticion get</h3>
				<section id="main"></section>
			</div>
			<div class="col-sm-6 scroll">
				<h3>Peticion post</h3>
				<form id="formulario formularioAgregar">
					<div class="form-group">
					    <label for="cedula">Cedula</label>
					    <input type="number" name="cedula_num" class="form-control" id="cedula" aria-describedby="cedulaAyuda" placeholder="Numero de identificacion" required>
					</div>
					<div class="form-group">
					    <label for="nombre">Nombre</label>
					    <input type="text" name="nombre_txt" class="form-control" id="nombre" placeholder="Tu nombre" required>
					</div>
					<div class="form-group">
					    <label for="direccion">Direccion</label>
					    <input type="text" name="direccion_txt" class="form-control" id="direccion" placeholder="Tu direccion" required>
					</div>
					<div class="form-group">
					    <label for="telefono">Telefono</label>
					    <input type="number" name="telefono_num" class="form-control" id="telefono" placeholder="Tu numero de telefono" required>
					</div>
					<div class="form-group">
					    <label for="email">Email</label>
					    <input type="email" name="email_txt" class="form-control" id="email" placeholder="Correo electronico" required>
					</div>
					<div class="form-group">
					    <label for="password">Contraseña</label>
					    <input type="password" name="password_txt" class="form-control" id="password" placeholder="Tu clave" required>
					</div>
					<button type="submit" class="btn btn-success" id="send_btn">Enviar</button>
					<button type="submit" class="btn btn-success edit_btn" id="edit_btn">Editar</button>
				</form>
			</div>
		</article>
		<article class="row">
			<div class="col-sm-6 scroll">
				<h3>Peticion DELETE</h3>
				<form id="delete">
					<div class="form-group">
					    <label for="cedulaDelete">Cdeula:</label>
					    <input type="number" name="cedula_num" class="form-control" id="cedulaDelete" placeholder="Numero de identificacion">
					</div>
					<button type="submit" class="btn btn-success">Eliminar</button>
				</form>
			</div>
		</article>
	</section>
</body>
	<script src="./index.js"></script>
</html>
