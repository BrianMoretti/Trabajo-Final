<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<meta charset="utf-8">
	<!-- <link rel="stylesheet" type="text/css" href="bootstrap-grid.css"> -->
		<link rel="stylesheet" type="text/css" href="bootstrap.css">
      <link href="fonts/css/fontawesome.css" rel="stylesheet">
  <link href="fonts/css/brands.css" rel="stylesheet">
  <link href="fonts/css/solid.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
</head>
<body>
	<style type="text/css">
		body{background-color: #3e5f8a ;}
		body{text-align: center;width: 100%;}
		/*.col-1 {display: inline-block}*/
		footer{bottom: 0;position: fixed;width: 100%;height: 10%;}
		header{background-color: black;background: linear-gradient(bottom right, #A4E7E6, white);*/bottom: 0;position:all;width: 100%;height: 20%;}
		article{border: solid 1px white;margin: 10px;}
		/*a{float: right;margin-right: 10px;}*/
    iframe{background-color: white;}
    p{text-decoration-color: white;}
  .container-fluid{
       background-image: url(IMAGENES/4.jpg);
       background-repeat: no-repeat;
       background-size: cover;
       background-attachment: fixed;
    }
body{
  /*font-family:Garamond;*/
  font-family:Comic Sans;
font-size  :50px;
font-style :;
font-weight:;
}
	</style>
<script type="text/javascript">
	var myCarousel = document.getElementById('myCarousel')

myCarousel.addEventListener('slide.bs.carousel', function () {
  // do something...
})
</script>



<div class="container-fluid">
	
  <div class="row">
		<div class="col-11"></div>
			<div class="col-1 mt-3" style="position: fixed;right: 0;">
				



        <!-- <a class="btn btn-primary mb-3"  href="login.php">Iniciar Sesión</a> -->
<?php 
echo "<a title='INICIAR SESIÓN' href='login.php' style='text-decoration: none;'>
<span style='font-size: 40px;'>
  <span style='color: black;'>
<i class='fas fa-sign-in-alt'></i>
  </span>
</span>
</a><br><br><br>";
 ?>
			</div>
		
	</div>	

<div class="row p-5 mt-3 justify-content-center video">
<div class="col-4" style="margin-top: 50px;"><br><br>
          <h1><strong>ASOCIACIÓN CIVIL CAROLINA TOBAR GARCIA<br>Ayuda al Discapacitado</strong></h1>
     
</div>
<div class="col-4"><br><br>
       <img title="LOGO INSTITUCIONAL" src="logo.png" width="250px">
</div><br><br>
<!-- <br><br><br><br><br><br> -->
<!-- <hr style="margin: 50px;"> -->
	



</div>   	<!-- <hr> -->
<div class="row m-5 p-5">
	
</div>
<div class="row m-1 justify-content-center">
  <div class="col-6" style="width: 50%">
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img style="height:400px;" src="imagenes/nueva carpeta/6.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img style="height:400px;" src="imagenes/nueva carpeta/2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img style="height:400px;" src="imagenes/nueva carpeta/3.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img style="height:400px;" src="imagenes/nueva carpeta/7.jpg" class="d-block w-100" alt="...">
    </div>    
    <div class="carousel-item">
      <img style="height:400px;" src="imagenes/nueva carpeta/9.jpg" class="d-block w-100" alt="...">
    </div>    
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  </div>
 <div class="col-6 mt-5" style="font-size: 35px; font-family: arial ;">
 	<p>La asociación día a día y de a poco trabaja para las familias y niños acompañándolos, conteniéndolos y ayudando para una mejor calidad de vida.</p>
 </div>
</div>     <!-- div de row  -->

<div class="row m-5 pt-4 justify-content-center" >
	<div class="col-6" style=" font-size: 30px; text-align: left;font-family:arial;">
		
<?php 
include("db.php");



$consulta = "SELECT * FROM `materias` WHERE estado = '1'";
$resultado = mysqli_query($conexion,$consulta);


if (mysqli_num_rows($resultado) < 1) {
	
}else{
	$contador = 0;
	echo "<p style='text-align: center;font-family:arial;'>Algunos de nuestros talleres en actividad</p>";
			while ($row = $resultado->fetch_array()) {
	$contador++;
	$nombre = $row['nombre'];
	$fecha = $row['anio_lectivo'];
	// echo "Taller: ",$nombre,"<br>";
	if ($contador <= 4) {
		echo "<p>$contador) $nombre</p>";
	}
}
echo "<p style='font-size: 20px; text-align: center; font-family:arial;'>Para mas información comunicarse con la Asociación</p>";
}
?>		
</div>
	 <div class="col-6">
  	<video src="video.mp4" style="width: 100%" controls=""></video>
  </div>
  <!-- <div class="col-6"></div> -->
</div>
<div class="row justify-content-center">
  <div class="col-6">
    <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fpermalink.php%3Fstory_fbid%3D4834783406579024%26id%3D1226673877390013&show_text=true&width=500" width="500" height="737" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
  </div>
  <div class="col">
    <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fpermalink.php%3Fstory_fbid%3D4812733465450685%26id%3D1226673877390013&show_text=true&width=500" width="500" height="891" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
  </div>
</div>
        <div class="row bg-dark mt-5 pt-4">
    		<div class="col">
          <div class="row text-white">
            <div class="col-12 mb-5">
              <h1 style="font-size: 30px;"><strong>ASOCIACIÓN CIVIL CAROLINA TOBAR GARCIA<br>Ayuda al Discapacitado</strong></h1>
            </div>
            <div class="col">
                <span class="m-4" ><a title='FACEBOOK' target="blank" href='https://www.facebook.com/Asociacion-Civil-Carolina-Tobar-Garcia-Ayuda-al-Discapacitado-1226673877390013/?ref=page_internal' style='text-decoration: none;'><span style='font-size: 35px;'><span style='color: white;'><i class='fab fa-facebook-square'></i></span></span></a></span>
          <span class="m-4"  ><a title='MAIL' target="blank" href='https://www.facebook.com/Asociacion-Civil-Carolina-Tobar-Garcia-Ayuda-al-Discapacitado-1226673877390013/?ref=page_internal' style='text-decoration: none;'><span style='font-size: 35px;'><span style='color: white;'><i class="fas fa-envelope"></i></span></span></a></span>
          <span class="m-4"  ><a title='DIRECCION' target="blank" href='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1687.3650739577042!2d-65.80304734195408!3d-32.238431726575385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x86f129807814f5fe!2zMzLCsDE0JzE4LjQiUyA2NcKwNDgnMDcuMCJX!5e0!3m2!1ses-419!2sar!4v1638935523297!5m2!1ses-419!2sar' style='text-decoration: none;'><span style='font-size: 35px;'><span style='color: white;'><i class="fas fa-map-marked-alt"></i></span></span></a></span>    
            </div>  
          </div>	
    		</div>
        <div class="col text-white" style="font-size: 25px; text-align: left;">
          <p>Calle San José y 24 de Febrero.<br>Ciudad de Quines.<br>Provincia de San Luis.<br>República Argentina.<br>Teléfono: 2664 567896<br></p>
        </div>
    	<div class="col">
  <iframe title="UBICACIÓN" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1687.3650739577042!2d-65.80304734195408!3d-32.238431726575385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x86f129807814f5fe!2zMzLCsDE0JzE4LjQiUyA2NcKwNDgnMDcuMCJX!5e0!3m2!1ses-419!2sar!4v1638935523297!5m2!1ses-419!2sar" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>
    <div class="col-12 text-white">
          <p style="font-size: 20px; ">Copyright © 2021. Todos Los Derechos Reservados</p>
        </div>   		
 </div>
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="bootstrap.bundle.min.js"></script>
</body>
</html>