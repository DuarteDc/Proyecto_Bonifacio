<?php 
session_start();
if (!isset($_SESSION["usuario"])){
	header("loaction:login.php");
}elseif(isset($_SESSION["usuario"])){

}else{
	echo "Error de sistema";
}
?>

<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<title>El veinte Campeche</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="estilos1.css">
		<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@600&family=Red+Rose:wght@300&display=swap" rel="stylesheet">
	</head>
	<body>
		<header>
			<div class="fixed-top">
				<nav class="navbar navbar-expand-md  navbar-light bg-light">
	  					<a class="navbar-brand" href="paginaprincipal.php"> <img class="logo"src="img/logo.jpg"></a>
					 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="flase" aira-lable="Toggler-navegation">
					 	<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-justify" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
	  						<path fill-rule="evenodd" d="M2 12.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
						</svg>
			  		</button>
					<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
				 		<div class="navbar-nav mr-auto ">
							<li><a class="nav-item nav-link" href="paginaprincipal.php">Inicio</a></li>
							<li><a class="nav-item nav-link active" href="viajes.php" >Viajes</a></li>
							<li><a class="nav-item nav-link" href="Mis_viajes.php" >Mis viajes</a></li>
							<li><a class="nav-item nav-link" href="nosotros.php" >Nosotros</a></li>
						</div>
						<a href="Mi_perfil.php" class="btn btn-light"><?php echo $_SESSION["usuario"] ?></a>
	    				<br>
	    				<a class="btn btn-outline-danger btn-salir" href="logout.php">Cerrar sesión</a>
					</div>
				</nav>
			</div>
		</header>
		<section class="hero-veinte">
			<div class="container">
				<div class="content-center mt-5">
					<h1 >El veinte, Chiapas</h1>
					<p class="mt-5">Nuestra comunidad se encuentra dentro de la reserva de la Biosfera de Calakmul, donde habitan especies como jaguares, monos araña y tucanes.</p>
				</div>
			</div>
		</section>
		<section class ="info">
			<div class="container-fluid content-viajes">
				<div class="row content-row">
					<div class="col-sm-12 col-md-7 topmargin-lg">
						<div class="informacion">
							<h2>El Veinte</h2>
							<p>Nuestra comunidad se encuentra dentro de la reserva de la Biosfera de Calakmul, donde habitan especies como jaguares, monos araña y tucanes. Con nosotros podrás aprender a hacer arte con semillas, urdir hamacas y tallar maderas preciosas, aprovechando los recursos de la selva y en equilibrio con la naturaleza, nuestra casa. Podrás explorar Río Bec, parte de un asentamiento arqueológico menor, y descubrir las aves de la selva. En la noche, bajo las estrellas, te contaremos las historias y leyendas de nuestros ancestros.</p>
						</div>
						<div class="img-viajes mt-5">
							<img src="https://rutopia.com/wp-content/uploads/2020/02/Rutopia-Campeche-El_Veinte-Actividades-Paseo-por-la-selva-4.-El-Veinte_Selva_-@ponchoxv.jpg">
						</div><br>
						<hr class="div-act">
						<div class="Actividades_viaje">
							<div class="informacion">
								<h2>Actividades</h2>
							</div>
							<div class="actividades">
								 <a  data-toggle="collapse" href="#actividad1" role="button" aria-expanded="false" aria-controls="actividad1">
    								<p class="title-actividad h4"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-right-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
 								 <path d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/></svg>Talleres artesanales</p>
								</a>
								<div class="collapse" id="actividad1">
								  <div class="card card-body">
								 la comunidad está llena de artesanos, puedes tomar talleres de: acabado de maderas preciosas, fabricación de textiles (huipiles, bordados y hamacas), tallado de piedra, joyería con semillas de la selva y de plantas medicinales.
								  </div>
								</div>
							</div>
								<div class="actividades">
								 <a  data-toggle="collapse" href="#actividad2" role="button" aria-expanded="false" aria-controls="actividad2">
    								<p class="title-actividad h4"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-right-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  									<path d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/></svg>Ruinas mayas en la selva </p>
								</a>
								<div class="collapse" id="actividad2">
								  <div class="card card-body">
								   hay por lo menos cinco zonas arqueológicas desconocidas para turistas convencionales que puedes visitar, serán los únicos, perfecto para meditar.
								  </div>
								</div>
							</div>
								<div class="actividades">
								 <a  data-toggle="collapse" href="#actividad3" role="button" aria-expanded="false" aria-controls="actividad3">
    								<p class="title-actividad h4"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-right-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  									<path d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/></svg>Noche de leyendas bajo las estrellas</p>
								</a>
								<div class="collapse" id="actividad3">
								  <div class="card card-body">
								  disfruta de historias y música en la cima de un cerro con vista panorámica acompañado de un café y hamacas.
								  </div>
								</div>
							</div>
							<div class="actividades">
								 <a  data-toggle="collapse" href="#actividad3" role="button" aria-expanded="false" aria-controls="actividad3">
    								<p class="title-actividad h4"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-right-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  									<path d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/></svg>Producción de chicle orgánico</p>
								</a>
								<div class="collapse" id="actividad3">
								  <div class="card card-body">
								 Los mayas extraían chicle del árbol de chicozapote, en nuestra comunidad todavía hacemos extracción de chicle en temporada de lluvias.
								  </div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-5 col-sm-12 topmargin-lg">
						<div class="formulario-viaje">
							<form action="reservacion.php" method="Post" class="form-viaje">
								<p class="h3 text-center"> Reservar</p>
								<div class="form-section ">

									<input type="hidden" name="viaje" value="El veinte, Campeche">
									<br>
									<input type="text" name="nombre" placeholder="Nombre" required="">
								</div>
								<div class="form-section">
									<br>
									<input type="text" name="apellidos" placeholder="Apellidos" required="">
								</div>
								<div class="form-section">
									<br>
									<input type="text" name="correo" placeholder="Correo electrinico" required="">
								</div>
								<div class="form-section">
									<br>
									<input type="text" id="telefono" placeholder="Telefono" name="telefono" required="">
								</div> 
								<br>
								<div class="form-section">
									<input type="date" name="fecha" required="">
								</div>
								<br>
								<div class="form-section">
									<label ><p>¿Cuantos viajan?</p></label>
									<select name="personas" id="cant-personas" onclick="recargar();">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
									</select>
								</div>
								<br>
								<div class="form-section">
									<p id="precio">$1,249 MXN por personas</p>
								</div>
								<div class="form-section buscar">
									<input type="submit" name="" value="Reservar" class="btn btn-blanco">
								</div>
							</form>
						</div>	
						<div class="ubicacion">
							<p class="h2 mb-4">Ubicación</p>
							<iframe class="iframe-ubicacion" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3852477.7486493946!2d-90.052914!3d19.447576!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85f830defd47a3d3%3A0x4c676cbf98b0e437!2s20%20de%20Noviembre%2C%20Campeche%2C%20Camp.%2C%20M%C3%A9xico!5e0!3m2!1ses-419!2sus!4v1597372285511!5m2!1ses-419!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
						</div>					
					</div>
				</div>
				<div class="row content-row">
					<div class=" col-md-12 topmargin-lg mb-5">
						<div class="informacion">
							<p class="h2 content-center">Viajes que puden gustarte</p>
							<hr class="div-footer">
						</div>
					</div>
					<div class="col-sm-12 col-md-4 im-principal">
					<div class="img-content">
						<div class="detalles-img">
							<a href="tsomanotik_Chiapas.php"> <h2>Tsomanotik, Chiapas</h2></a>
							<a href="tsomanotik_Chiapas.php"><p>Precio por persona desde: $3,899.00 MXN </p></a>
						</div>
						<img class="img" src="https://cdn.shortpixel.ai/client/q_glossy,ret_img,w_1024/https://rutopia.com/wp-content/uploads/2020/03/Tsomanotik_Actividades_Montebello-1024x498.jpg">
					</div>
				</div>
				<div class="col-sm-12 col-md-4 im-principal">
					<div class="img-content">
						<div class="detalles-img">
							<a href="canto de la selva.php"> <h2>Canto de la Selva, Chiapas</h2></a>
							<a href="canto de la selva.php"><p>Precio por persona desde: $5,000 MXN</p></a>
						</div>
						<img class="img" src="https://cdn.shortpixel.ai/client/q_glossy,ret_img,w_1024/https://rutopia.com/wp-content/uploads/2020/02/DSC_0130-1024x683.jpg">
					</div>
				</div>
				<div class="col-sm-12 col-md-4 im-principal">
					<div class="img-content">
						<div class="detalles-img">
							<a href="cafeyquetzales.php"> <h2>Cafe y quetzales, Chiapas</h2></a>
							<a href="cafeyquetzales.php"><p>Precio por persona desde: $749.00 MXN</p></a>
						</div>
						<img class="img" src="https://cdn.shortpixel.ai/client/q_glossy,ret_img,w_1024/https://rutopia.com/wp-content/uploads/2020/07/WhatsApp-Image-2020-07-01-at-14.18.54.jpeg">
					</div>
				</div>
				</div>
			</div>
		</section>
		<br><br><br>
		<footer>
			<div class="main-footer row">
				<div class="footer1 col-md-12">
					<p class="footer text-center h2">THE BEST TRIP</p>
					<p class="text-center mt-5">Terminos y condiciones | Aviso de privacidad</p>
				</div>
				<hr class="div-footer">
				<div class="footer2 col-md-12">
					<div class="img-redes text-center">
						<img class="text-center inline-block" src="https://images.vexels.com/media/users/3/137253/isolated/	preview/90dd9f12fdd1eefb8c8976903944c026-icono-de-facebook-logo-by-vexels.png">
						<img class="text-center inline-block" src="https://logodownload.org/wp-content/uploads/2014/09/twitter-logo-6.png">
						<img class="text-center inline-block" src="https://cdn.icon-icons.com/icons2/1584/PNG/512/3721679-youtube_108064.png">
					</div>
					<p class="text-center mt-3">thebestrip@gmail.com - tel: 5847162485</p>
				</div>
		</footer>
		<script type="text/javascript">
			function recargar(){
				var precio = 1249;
				var cantidad = document.getElementById("cant-personas").value;
				var total=cantidad*precio;
				if (cantidad > 1){
			    document.getElementById("precio").innerHTML ="$"+total +" MXN "+" por "+cantidad+" personas";
				}else{
					document.getElementById("precio").innerHTML= "$1,249 MXN por persona";
				}
			}
		</script>

		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>