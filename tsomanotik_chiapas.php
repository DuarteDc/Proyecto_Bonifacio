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
		<title>Tsomanotik Chiapas</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="estilos1.css">
		<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@600&family=Red+Rose:wght@300&display=swap" rel="stylesheet">
	</head>
	<body>
		<header>
			<div class="fixed-top">
				<nav class="navbar navbar-expand-md  navbar-light bg-light">
	  					<a class="navbar-brand" href="index1.html"> <img class="logo"src="img/	logo.jpg"></a>
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
		<section class="hero-tsomanotki">
			<div class="container">
				<div class="content-center mt-5">
					<h1 >Tsomanotic, Chiapas</h1>
					<p class="mt-5">El Centro Agroecológico Tsomanotik se encuentra en Tzimol, es un pequeño pueblo cañero de origen maya, ubicado en el bosque cálido del municipio de Comitán, Chiapas. </p>
				</div>
			</div>
		</section>
		<section class ="info">
			<div class="container-fluid content-viajes">
				<div class="row content-row">
					<div class="col-sm-12 col-md-7 topmargin-lg">
						<div class="informacion">
							<h2>Tsomanotik</h2>
							<p>El Centro Agroecológico Tsomanotik se encuentra en Tzimol, es un pequeño pueblo cañero de origen maya, ubicado en el bosque cálido del municipio de Comitán, Chiapas. Aquí nace el río San Vicente que corre por decenas de cascadas que alimentan pozas de agua color turquesa, escondidas entre ceibas y ahuehuetes con cientos de años. Tsomanotik, es un complejo sustentable que cuenta con sus propios  huertos orgánicos, cabañas ecológicas y ecotécnias.</p>
						</div>
						<div class="img-viajes mt-5">
							<img src="https://rutopia.com/wp-content/uploads/2020/03/tsomanotik_experiencia_extrema_rio.jpg">
						</div><br>
						<hr class="div-act">
						<div class="Actividades_viaje">
							<div class="informacion">
								<h2>Actividades</h2>
							</div>
							<div class="actividades">
								 <a  data-toggle="collapse" href="#actividad1" role="button" aria-expanded="false" aria-controls="actividad1">
    								<p class="title-actividad h4"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-right-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
 								 <path d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/></svg>Tour del centro agroecológico y de dinámicas de sustentabilidad</p>
								</a>
								<div class="collapse" id="actividad1">
								  <div class="card card-body">
								    Conoce alternativas de sustentabilidad en un recorrido interactivo: huertos orgánicos, hortalizas, plantas aromáticas, frutas, plantas medicinales, champiñones y setas. Además diferentes compostas como lombricomposta o bokashi, tratamiento de agua, energía solar, baños secos (hemos logrado ahorras más de 8 millones de litros de agua), entre otras ecotecnias.
								  </div>
								</div>
							</div>
								<div class="actividades">
								 <a  data-toggle="collapse" href="#actividad2" role="button" aria-expanded="false" aria-controls="actividad2">
    								<p class="title-actividad h4"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-right-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  									<path d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/></svg>TCenote Chukumaltic</p>
								</a>
								<div class="collapse" id="actividad2">
								  <div class="card card-body">
								    Visitaremos el increíble Chukumaltic, un cenote abierto donde podrás aventarte clavados, nadar, asolearte, explorar los alrededores o simplemente disfrutar de la espectacular vista. Las aguas del cenote son tan cristalinas que permiten ver hasta 40 de sus 70 metros de profundidad, ¡ideal para tomar fotos bajo el agua!
								  </div>
								</div>
							</div>
								<div class="actividades">
								 <a  data-toggle="collapse" href="#actividad3" role="button" aria-expanded="false" aria-controls="actividad3">
    								<p class="title-actividad h4"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-right-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  									<path d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/></svg>Tour de pintorescas cascadas</p>
								</a>
								<div class="collapse" id="actividad3">
								  <div class="card card-body">
								    Haremos un tour por las bellas cascadas del río San Vicente dentro de Tzimol, dos pequeñas cascadas agradables para nadar y explorar. Estas se encuentran dentro de una unidad de manejo ambiental, en donde también se pueden ver venados y pavorreales.
								  </div>
								</div>
							</div>
							<div class="actividades">
								<a  data-toggle="collapse" href="#actividad4" role="button" aria-expanded="false" aria-controls="actividad4">
    							<p class="title-actividad h4"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-right-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
 								<path d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/></svg>Visita las Lagunas de Montebello</p>
								</a>
								<div class="collapse" id="actividad4">
								  <div class="card card-body">
								    Después de un delicioso café en Quetzal, tendrás el resto del día para explorar y descubrir las lagunas de Montebello. Podrás nadar, hacer senderismo, kayak, caballo o balsa según tu gusto y comer en cualquier restaurante local (no incluye actividades ni comida en Montebello).
								  </div>
								</div>
							</div>
							<div class="actividades">
								<a  data-toggle="collapse" href="#actividad5" role="button" aria-expanded="false" aria-controls="actividad5">
    							<p class="title-actividad h4"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-right-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
 								<path d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/></svg>Aventura y picnic en las Tres Tzimoleras</p>
								</a>
								<div class="collapse" id="actividad5">
								  <div class="card card-body">
								   Ángel o alguno de sus guías te llevarán en una camioneta 4x4 a subir la montaña hasta las cascadas. Ahí comienza el recorrido por el río caminando, nadando, saltando y disfrutando del majestusoso paisaje y del agua azul turquesa –fotos con go-pro incluídas. Si gustas, por un costoextra, es posible hacer un decenso a rappel de 40 metros junto a una cascada (en el punto de partida puedes decidir hacerlo o no). Al finali disfrutaremos de un picnic con platillos típicos.
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

									<input type="hidden" name="viaje" value="Tsomanotik, Chiapas">
									<br>
									<input type="text" name="nombre" placeholder="Nombre" required>
								</div>
								<div class="form-section">
									<br>
									<input type="text" name="apellidos" placeholder="Apellidos" required>
								</div>
								<div class="form-section">
									<br>
									<input type="text" name="correo" placeholder="Correo electrinico" required>
								</div>
								<div class="form-section">
									<br>
									<input type="text" id="telefono" placeholder="Telefono" name="telefono" required>
								</div> 
								<br>
								<div class="form-section">
									<input type="date" name="fecha" required>
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
									<p id="precio">$3899 MXN por personas</p>
								</div>
								<div class="form-section buscar">
									<input type="submit" name="" value="Reservar" class="btn btn-blanco">
								</div>
							</form>
						</div>	
						<div class="ubicacion">
							<p class="h2 mb-4">Ubicación</p>
							<iframe class="iframe-ubicacion" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15325.842515846136!2d-92.19635906787113!3d16.196742012126666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x858d4100e3b06a0d%3A0x6972447a68c5ed4e!2sTsomanotik!5e0!3m2!1ses-419!2smx!4v1596091988540!5m2!1ses-419!2smx" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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
				var precio = 3899;
				var cantidad = document.getElementById("cant-personas").value;
				var total=cantidad*precio;
				if (cantidad > 1){
			    document.getElementById("precio").innerHTML ="$"+total +" MXN "+" por "+cantidad+" personas";
				}else{
					document.getElementById("precio").innerHTML= "$3,899 MXN por persona";
				}
			}
		</script>

		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>