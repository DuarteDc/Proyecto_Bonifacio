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
		<title>Nosotros</title>
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
							<li><a class="nav-item nav-link" href="viajes.php" >Viajes</a></li>
							<li><a class="nav-item nav-link" href="Mis_viajes.php" >Mis viajes</a></li>
							<li><a class="nav-item nav-link active" href="nosotros.php" >Nosotros</a></li>
	    				</div>
	    				<a href="Mi_perfil.php" class="btn btn-light"><?php echo $_SESSION["usuario"] ?></a>
	    				<br>
	    				<a class="btn btn-outline-danger btn-salir" href="logout.php">Cerrar sesión</a>
					</div>
				</nav>
			</div>
		</header>
		<section class="hero-nosotros">
			<div class="container">
				<div class="content-center mt-5">
					<h1 >THE BEST TRIP</h1>
					<p class="mt-5 sm-h4 md-h3">Comprometidos para mejorar tu viaje, conoce mas sobre nosotros y descubre que somos la mejor opcion </p>
				</div>
			</div>
		</section>
		<section class="info">
			<div class="container">
			<div class="row content-row">
				<div class="col-md-12 topmargin-lg">
					<div class="informacion">
						<h2 class="content-center">LA EMPRESA</h2>
						<p>The best trip es una empresa totalmente nueva, creada en el presente año
						ubicada en el centro de la ciudad.
						Desarrollada principalmente por nosotros, buscando satisfacer las necesidades del
						usuario para que pueda divertirse de una manera segura con los viajes
						experienciales o de cualquier otro tipo, donde puede adquirir varias opciones en
						diferentes ámbitos ya sea, trasporte, hospedaje y una gran variedad de paquetes
						que sin duda será de una gran utilidad al usuario.
						</p>
					</div>
				</div>
				<hr class="div-footer">
				<div class="col-sm-12 col-md-4 info-nosotros">
					<img src="https://image.flaticon.com/icons/png/512/1310/1310587.png">
					<div class="detalles-nosotros">
						<p>
						Viajaras de manera segura, poniendo a tu disposicion el transporte de tu mejor elección 
						incluido en tu pago inicial 
						</p>
					</div>
					</div>
						<div class="col-sm-12 col-md-4 info-nosotros">
							<img src="https://image.flaticon.com/icons/png/512/1370/1370310.png">
							<div class="detalles-nosotros">
								<p>
								Te daremos acceso a los mejores hoteles, para que vias tu experiencia de manera segura, 
								con todo incluido 
								</p>
							</div>
						</div>
						<div class="col-sm-12 col-md-4 info-nosotros">
							<img src="https://image.flaticon.com/icons/png/512/1628/1628441.png">
							<div class="detalles-nosotros">
								<p>
									Nos ponemos a tu servicio para que tengas la mejor experiencia de viajar y conocer México
								</p>
							</div>
						</div>
						<div class="col-md-12 contacto content-center">
						<form action="Administracion/Contacto.php" method="Post" class="form-contacto	">
								<p class="h3 text-center"> Contactanos</p>
								<div class="form-section ">
									<br>
									<input type="text" name="nombre" placeholder="Nombre">
								</div>
								<div class="form-section">
									<br>
									<input type="text" name="apellidos" placeholder="Apellidos">
								</div>
								<div class="form-section">
									<br>
									<input type="text" name="correo" placeholder="Correo electrinico">
								</div>
								<div class="form-section">
									<br>
									<textarea class="Comentarios-contacto" name="comentarios" placeholder="Comentarios"></textarea>
								</div>
								<div class="form-section buscar">
									<br>
									<input type="submit" name="" value="Enviar" class="btn btn-blanco">
								</div>
								<br>
							</form>
					</div>
					</div>
				</div>
			</div>
		</section>
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

		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>
				
					