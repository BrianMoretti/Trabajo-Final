<!DOCTYPE html>
<html>
<head>
	<title>Loign</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<style type="text/css">
		body{
			 background-color: #F1F7F1;
			 background-image: url(IMAGENES/5.png);
			 background-repeat: no-repeat;
			 background-size: cover;
		}
		.bg{
			background-color: #ffe259;
			background-image: url(IMAGENES/4.jpg);
			background-repeat: no-repeat;
			background-size: cover;
		}
	</style>
</head>
<body>
<div class="container bg mt-5 w-50">
	<div class="row justify-content-center">
		<div class="col-8">
			<div class="row text-center mt-3 ">  
				<div class="col-12">
					<h1 class="fw-bold text-center mb-4">Bienvenido<br> Inicio de Sesión  </h1>	 			
				</div>
				<div class="col">
					<img src="logo.png" width="60px">	
				</div>
			</div>
		</div>		
	</div>			
<div class="row justify-content-center " >
	<div class="col-8">
	<form action="validar.php" method="post">
		<div class="mb-4">
			<label for="email" class="from-label">Usuario</label>
			<input type="text" class="form-control" placeholder="Use su cuenta asignada" name="usuario">
		</div>
		<div class="mb-4">
			<label for="email" class="from-label">Clave</label>
			<input type="password" class="form-control" name="contrasena">
		</div>
		<div class="d-grid">
			<input type="submit" value="Ingresar" class="btn btn-outline-primary">
		</div>
		<div class="my-3">
			<span><a class="btn btn-outline-primary"  href="index.php">Volver</a></span><br>
		</div>
	</form>
	
</div>	
</div>


<script src="bootstrap.bundle.min.js"></script>
</body>
</html>
<!-- 
