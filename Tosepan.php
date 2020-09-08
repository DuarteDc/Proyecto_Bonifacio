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
		<title>Tosepan Kali, Puebla</title>
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
		<section class="hero-tosepan">
			<div class="container">
				<div class="content-center mt-5">
					<h1 >Tosepan kali, Puebla</h1>
					<p class="mt-5">¡Tosepan Kali, que significa “Nuestra Casa” en lengua nahuat, nuestra lengua materna, es una cooperativa de turismo alternativo que forma parte de Tosepan Titaniske.</p>
				</div>
			</div>
		</section>
		<section class ="info">
			<div class="container-fluid content-viajes">
				<div class="row content-row">
					<div class="col-sm-12 col-md-7 topmargin-lg">
						<div class="informacion">
							<h2>Tosepan Kali</h2>
							<p>Tosepan Kali, que significa “Nuestra Casa” en lengua nahuat, nuestra lengua materna, es una cooperativa de turismo alternativo que forma parte de Tosepan Titaniske, organización integrada por familias de campesinos indígenas de la Sierra Nororiental de Puebla que trabajamos unidas para mejorar nuestra calidad de vida. Nuestra propuesta turística se basa en compartir nuestras tradiciones y nuestra forma sustentable de trabajar, siempre ligadas a la naturaleza y al bien común.
							</p>
						</div>
						<div class="img-viajes mt-5">
							<img src="https://rutopia.com/wp-content/uploads/2020/03/cuetzalan_agriculture_story-102.jpg">
						</div><br>
						<hr class="div-act">
						<div class="Actividades_viaje">
							<div class="informacion">
								<h2>Actividades</h2>
							</div>
							<div class="actividades">
								 <a  data-toggle="collapse" href="#actividad1" role="button" aria-expanded="false" aria-controls="actividad1">
    								<p class="title-actividad h4"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-right-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
 								 <path d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/></svg>Recorrido por el orquidiario y galería de don Goyo</p>
								</a>
								<div class="collapse" id="actividad1">
								  <div class="card card-body">
								Don Goyo es un reconocido artista local, le llaman el "cronista visual de Cuetzalan", porque realmente se puede conocer mucho de la historia y la cultura regional a través de sus cuadros. En su galería él te va explicando el simbolismo de sus imágenes y el recorrido termina en su jardín donde tiene un bello orquidiario. Pregunta por sus talleres de pintura o la cena en su casa.
								  </div>
								</div>
							</div>
								<div class="actividades">
								 <a  data-toggle="collapse" href="#actividad2" role="button" aria-expanded="false" aria-controls="actividad2">
    								<p class="title-actividad h4"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-right-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  									<path d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/></svg>Corazón del bosque</p>
								</a>
								<div class="collapse" id="actividad2">
								  <div class="card card-body">
								  Para llegar a esta cascada hay que caminar 40 minutos através del bosque mientras respiras aire fresco, disfrutas los aromas, el cantar de las aves y verdes paisajes. Estando ahí podrás caminar por detrás de la cortina y rodearte de agua sin necesidad de sumergirte.
								  </div>
								</div>
							</div>
							<div class="actividades">
								 <a  data-toggle="collapse" href="#actividad2" role="button" aria-expanded="false" aria-controls="actividad2">
    								<p class="title-actividad h4"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-right-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  									<path d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/></svg>Conoterapia</p>
								</a>
								<div class="collapse" id="actividad2">
								  <div class="card card-body">
								  Limpieza de oídos por medio de un cono de cera y calor. Es muy relajante y los destapa por completo, quedan como nuevos y se agudiza el sentido auditivo, ¡estarás listo para escuchar el sonido envolvente de la naturaleza con todos sus detalles!
								  </div>
								</div>
							</div>
							<div class="actividades">
								 <a  data-toggle="collapse" href="#actividad2" role="button" aria-expanded="false" aria-controls="actividad2">
    								<p class="title-actividad h4"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-right-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  									<path d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/></svg>Práctica productiva de miel</p>
								</a>
								<div class="collapse" id="actividad2">
								  <div class="card card-body">
								  Sólo se puede hacer de marzo a mayo que es cuando se cosecha la miel de abeja melipona endémica (Scaptotrigona Mexicana). Estas abejas sin aguijón, hacen sus colmenas en unas ollas de barro y su miel y cera tienen distintos usos. En el taller se abren las ollas para sacar la miel y ver el panal por dentro, asimismo se explica el ciclo productivo de las abejas y ¡podrás degustar la más deliciosa miel!
								  </div>
								</div>
							</div>
							<div class="actividades">
								 <a  data-toggle="collapse" href="#actividad2" role="button" aria-expanded="false" aria-controls="actividad2">
    								<p class="title-actividad h4"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-right-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  									<path d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/></svg>Visita a la fábrica de bambú.</p>
								</a>
								<div class="collapse" id="actividad2">
								  <div class="card card-body">
								  Todos los hospedajes de Tosepan Kali han sido diseñados bajo el esquema de bioconstrucción. El bambú se utiliza tanto para las edificaciones como para los muebles y parte de la decoración. En la fábrica podrás ver las distintas especies de bambú y sus distintos usos, el tratamiento previo a su aprovechamiento, y los distintos diseños de objetos que se fabrican en esta fábrica por los talentosos carpinetos y artesanos locales.
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

									<input type="hidden" name="viaje" value="Tosepan kali, Puebla">
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
									<p id="precio">$1,299 MXN por personas</p>
								</div>
								<div class="form-section buscar">
									<input type="submit" name="" value="Reservar" class="btn btn-blanco">
								</div>
							</form>
						</div>	
						<div class="ubicacion">
							<p class="h2 mb-4">Ubicación</p>
							<iframe class="iframe-ubicacion" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3748.473602013503!2d-97.53005668592992!3d20.03059602647882!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85da8e80fdb43795%3A0x6528580bb97c9aaa!2sTosepan%20Kali!5e0!3m2!1ses-419!2sus!4v1597375236650!5m2!1ses-419!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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
				var precio = 1299;
				var cantidad = document.getElementById("cant-personas").value;
				var total=cantidad*precio;
				if (cantidad > 1){
			    document.getElementById("precio").innerHTML ="$"+total +" MXN "+" por "+cantidad+" personas";
				}else{
					document.getElementById("precio").innerHTML= "$1,299 MXN por persona";
				}
			}
		</script>

		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>