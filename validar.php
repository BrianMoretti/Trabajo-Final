<?php
	session_start();
	error_reporting(0);
	$usuario = $_POST['usuario'];
	$nivelname = $_POST['usuario'];
	$contrasena = $_POST['contrasena'];

	$_SESSION['usuario'] = $usuario;
	$_SESSION['name'] = $nivelname;
	$varsesion = $_SESSION['usuario'];

	if ($varsesion == null || $varsesion = '') {
		header("location:login.php");
		die();
	}

include('db.php');		
$consulta="SELECT * FROM usuarios where nombre='$usuario' and clave='$contrasena'";
$resultado = mysqli_query($conexion,$consulta); 
$filas = mysqli_num_rows($resultado); 
if($filas){
	while ($row = $resultado->fetch_array()) {
		    $nivel = $row['nivel'];
		    $_SESSION['n'] = $nivel;
		}	
header("location:registro cud/ver registro/ver-bien.php");
}else{
	include("login.php");
	?>
	<h1 class="bad">ERROR EN LA AUTENTICACION</h1>
	<?php
}
mysqli_free_result($resultado); 
mysqli_close($conexion);
?>
