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
		<title>Sierra morena Chiapas</title>
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
		<section class="hero-sierra">
			<div class="container">
				<div class="content-center mt-5">
					<h1 >Sierra morena, Chiapas</h1>
					<p class="mt-5">Somos una comunidad rural ubicada en la Reserva de la Biosfera de La Sepultura, en el ejido de Sierra Morena, donde contamos con 1,700 hectáreas de terreno.  </p>
				</div>
			</div>
		</section>
		<section class ="info">
			<div class="container-fluid content-viajes">
				<div class="row content-row">
					<div class="col-sm-12 col-md-7 topmargin-lg">
						<div class="informacion">
							<h2>Sierra Morena</h2>
							<p>Somos una comunidad rural ubicada en la Reserva de la Biosfera de La Sepultura, en el ejido de Sierra Morena, donde contamos con 1,700 hectáreas de terreno. Nuestro centro ecoturístico, Sierra Morena, está a unos 100 metros de la comunidad, en el bosque. Ofrecemos caminatas a las montañas, adentrándote al bosque de niebla y mesófilo a través de varios senderos por donde se puede gozar de la exuberante naturaleza en familia. Hay senderos específicos para investigadores, para la observación de ranas, arañas y reptiles. También facilitamos talleres gastronómicos. Nuestra comunidad está conformada por diversos grupos, identificados según la actividad que realizan: palmeros, cafeteros y el de turismo. En nuestra reserva hay especies como jaguares, pumas y aves que están en peligro de extinción.</p>
						</div>
						<div class="img-viajes mt-5">
							<img src="https://rutopia.com/wp-content/uploads/2020/07/WhatsApp-Image-2020-07-14-at-10.31.44-1.jpeg">
						</div><br>
						<hr class="div-act">
						<div class="Actividades_viaje">
							<div class="informacion">
								<h2>Actividades</h2>
							</div>
							<div class="actividades">
								 <a  data-toggle="collapse" href="#actividad1" role="button" aria-expanded="false" aria-controls="actividad1">
    								<p class="title-actividad h4"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-right-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
 								 <path d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/></svg>Majestuosos árboles y atardecer</p>
								</a>
								<div class="collapse" id="actividad1">
								  <div class="card card-body">
								   Para empezar tu experiencia, comerás el tradicional caldo de gallina de la sierra. Tendrás un rato para descansar antes de empezar tu recorrido por el sendero “La Piedra Bola”, donde podrás observar gran variedad de flora y aprender sobre la fauna del lugar. En este recorrido hallarás un árbol grandioso, el más monumental que hemos encontrado hasta el momento. Al terminar la caminata podrás recuperar fuerzas hasta que sea la hora de ir a disfrutar del atardecer al mirador. A tu vuelta, Blanca y Bernardina te estarán esperando con una cena que te dejará listo para ir a descansar. Dormirás en las cabañas del centro ecoturístico, hechas con materiales de la región.
								  </div>
								</div>
							</div>
								<div class="actividades">
								 <a  data-toggle="collapse" href="#actividad2" role="button" aria-expanded="false" aria-controls="actividad2">
    								<p class="title-actividad h4"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-right-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  									<path d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/></svg>Aventúrate a contemplar Tonalá</p>
								</a>
								<div class="collapse" id="actividad2">
								  <div class="card card-body">
								   Al despertar te reunirás con Blanca y Bernardina, quienes te enseñarán todo acerca del proceso de maíz: cómo se desgrana la mazorca, el proceso del nixtamal y cómo hacer y tirar tu primera tortilla sobre el comal. También podrás elegir hacer tamales de chipilín típicos de la zona. Al finalizar el taller degustarás lo que has preparado y emprenderás una caminata bosque adentro para conocer más historias y fauna de la localidad. Al terminar el recorrido nos despediremos deseándote un buen regreso a casa o a tu siguiente destino.
								  </div>
								</div>
							</div>
								<div class="actividades">
								 <a  data-toggle="collapse" href="#actividad3" role="button" aria-expanded="false" aria-controls="actividad3">
    								<p class="title-actividad h4"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-right-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  									<path d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/></svg>Hospedaje en las cabañas del centro ecoturístico</p>
								</a>
								<div class="collapse" id="actividad3">
								  <div class="card card-body">
								   El hospedaje será en una habitación privada construida con materiales de la región. Los baños son comunitarios al igual que las regaderas, estas ofrecen agua fría o caliente.
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

									<input type="hidden" name="viaje" value="Sierra morena, Chiapas">
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
									<p id="precio">$749 MXN por personas</p>
								</div>
								<div class="form-section buscar">
									<input type="submit" name="" value="Reservar" class="btn btn-blanco">
								</div>
							</form>
						</div>	
						<div class="ubicacion">
							<p class="h2 mb-4">Ubicación</p>
							<iframe class="iframe-ubicacion"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3832.312940104715!2d-93.61130658599073!3d16.15280444148531!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85935d12e02788eb%3A0x4e9a8a00ac13593!2sMirador%20Sierra%20Morena%20Centro%20Ecoturistico!5e0!3m2!1ses-419!2sus!4v1597370062964!5m2!1ses-419!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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
							<a href=""> <h2>Acaxochitlán, Hidalgo</h2></a>
							<a href=""><p>Precio por persona desde: $2,599 MXN</p></a>
						</div>
						<img class="img" src="https://cdn.shortpixel.ai/client/q_glossy,ret_img,w_1024/https://rutopia.com/wp-content/uploads/2020/06/acaxochitlan-vive-textiles-nahuas-1024x683.jpg">
					</div>
				</div>
				<div class="col-sm-12 col-md-4 im-principal">
					<div class="img-content">
						<div class="detalles-img">
							<a href=""> <h2>El Veinte, Campeche</h2></a>
							<a href=""><p>Precio por persona desde: 1,249.00 MXN</p></a>
						</div>
						<img class="img" src="https://cdn.shortpixel.ai/client/q_glossy,ret_img,w_1024/https://rutopia.com/wp-content/uploads/2020/02/9.-Portada-Plataforma-El-Veinte-1024x683.jpg">
					</div>
				</div>
				<div class="col-sm-12 col-md-4 im-principal">
					<div class="img-content">
						<div class="detalles-img">
							<a href=""> <h2>Isla Arena, Campeche</h2></a>
							<a href=""><p>Precio por persona desde: $1,499.00 MXN</p></a>
						</div>
						<img class="img" src="https://rutopia.com/wp-content/uploads/2020/06/act3.jpg">
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
				var precio = 749;
				var cantidad = document.getElementById("cant-personas").value;
				var total=cantidad*precio;
				if (cantidad > 1){
			    document.getElementById("precio").innerHTML ="$"+total +" MXN "+" por "+cantidad+" personas";
				}else{
					document.getElementById("precio").innerHTML= "$749 MXN por persona";
				}
			}
		</script>

		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>