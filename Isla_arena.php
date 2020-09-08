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
		<title>Isla arena, Campeche</title>
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
		<section class="hero-arena">
			<div class="container">
				<div class="content-center mt-5">
					<h1 >Isla Arena, Campeche</h1>
					<p class="mt-5">¡Descubre al cocodrilo mexicano! Un reptil que habita solo en México y que es vital para mantener el equilibrio de los ecosistemas donde vive.</p>
				</div>
			</div>
		</section>
		<section class ="info">
			<div class="container-fluid content-viajes">
				<div class="row content-row">
					<div class="col-sm-12 col-md-7 topmargin-lg">
						<div class="informacion">
							<h2>Isla Arena</h2>
							<p>¡Descubre al cocodrilo mexicano! Un reptil que habita solo en México y que es vital para mantener el equilibrio de los ecosistemas donde vive. Aprende sobre esta especie en nuestra granja sustentable (UMA) de cocodrilo mexicano o de Morelet (Crocodylus moreletii), certificada por SEMARNAT. Recorrerás un sendero elevado entre un bosque de mangles y gozarás de la hermosa vista de la ría o podrás remar en kayak. Te deleitarás con deliciosos platillos en nuestro restaurante de pescados, mariscos y cocodrilo. Observarás cientos de luciérnagas al anochecer y descansarás en cómodas y limpias habitaciones. ¡Disfrutarás de una experiencia de conexión, relajación y aprendizaje únicos!
							</p>
						</div>
						<div class="img-viajes mt-5">
							<img src="https://rutopia.com/wp-content/uploads/2020/06/Exp1_viajeros1.jpg">
						</div><br>
						<hr class="div-act">
						<div class="Actividades_viaje">
							<div class="informacion">
								<h2>Actividades</h2>
							</div>
							<div class="actividades">
								 <a  data-toggle="collapse" href="#actividad1" role="button" aria-expanded="false" aria-controls="actividad1">
    								<p class="title-actividad h4"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-right-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
 								 <path d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/></svg>Visita la UMA de cocodrilos y pasea en el manglar	</p>
								</a>
								<div class="collapse" id="actividad1">
								  <div class="card card-body">
								 Después de tu arribo al Centro Ecoturístico Wotoch Aayin, aprenderás sobre la cría del cocodrilo mexicano -o de Morelet- en nuestra granja sustentable (UMA) en un increíble recorrido en el cual podrás conocer y platicar con “el señor de los cocodrilos”. Al terminar, será hora de una deliciosa comida tradicional en nuestro restaurante donde doña Cari te estará esperando para deleitar tu paladar. Después, ¡A reecontrarse con la naturaleza! Te aventurarás a una caminata con Sergio, entre los manglares en nuestro sendero elevado entre el verdor del bosque de manglar. Escucharás los cantos de las aves y contemplarás las intrincadas formas de las raíces de los árboles, las aguas tranquilas, los caracoles, cangrejos y aves. Al terminar la visita al manglar, tendrás tiempo libre y podrás subir al mirador al final del sendero y disfrutarás el hermoso paisaje de la ría de Isla Arena mientras te arrulla la brisa marina. Experimentarás un ambiente que invita a la contemplación, a cerrar los ojos y respirar profundamente el aire puro, es ideal para presenciar atardeceres espectaculares. A tu regreso la noche estará por caer y pacientemente esperaremos a que las luciérnagas hagan su aparición. Caminaremos junta y lentamente por el sendero en la noche. Respirarás y avanzarás, guardarás silencio y podrás atención para deleitarte con lo que experimentarás. Notarás cómo los insectos guiarán tus sentidos, te sentirás rodeado de una luz y sonido natural. Observarás a las luciérnagas titilantes en el entorno, respirarás y sentirás el aroma del ambiente, su esencia te sumergirá en la contemplación del espacio ¡Y con suerte, al final del sendero, podrás apreciar traviesos mapaches o la bioluminiscencia marina! ¡Toda una aventura! Por la noche, descansa en el Hospedaje Wotoch.
								  </div>
								</div>
							</div>
								<div class="actividades">
								 <a  data-toggle="collapse" href="#actividad2" role="button" aria-expanded="false" aria-controls="actividad2">
    								<p class="title-actividad h4"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-right-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  									<path d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/></svg>Explora la ría en kayak	</p>
								</a>
								<div class="collapse" id="actividad2">
								  <div class="card card-body">
								  Sin prisa por despertar, nos veremos en el restaurante a las 10 de la mañana para disfrutar de un delicioso desayuno. Con el corazón contento emprenderás un paseo en canoa en la Ría de Isla Arena, donde podrás retirar los remos y flotar en la tranquilidad del agua o atrévete a cruzar la ría y entrar a algún pequeño río entre los manglares. Disfruta la tranquilidad y la expresión maravillosa de la naturaleza. Después de ese paseo en canoa, disfrutarás de un delicioso almuerzo. Después, tendrás tiempo libre que podrás usar para refrescarte en la piscina y descansar en las hamacas. Cuando estes listo nos despediremos con gusto de haber compartido nuestra comida, naturaleza y tradiciones contigo.
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

									<input type="hidden" name="viaje" value="Isla arena, Campeche">
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
									<p id="precio">$1,499 MXN por personas</p>
								</div>
								<div class="form-section buscar">
									<input type="submit" name="" value="Reservar" class="btn btn-blanco">
								</div>
							</form>
						</div>	
						<div class="ubicacion">
							<p class="h2 mb-4">Ubicación</p>
							<iframe class="iframe-ubicacipn" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29857.302958711873!2d-90.4702874216669!3d20.703609865211845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85f8e7fc4dafd2c3%3A0xbf7a9d5a4f97f8d4!2sIsla%20Arena!5e0!3m2!1ses-419!2smx!4v1597373243561!5m2!1ses-419!2smx" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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
				var precio = 1499;
				var cantidad = document.getElementById("cant-personas").value;
				var total=cantidad*precio;
				if (cantidad > 1){
			    document.getElementById("precio").innerHTML ="$"+total +" MXN "+" por "+cantidad+" personas";
				}else{
					document.getElementById("precio").innerHTML= "$1,499 MXN por persona";
				}
			}
		</script>

		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>