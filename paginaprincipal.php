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
		<title>Inicio</title>
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
				 		<div class="navbar-nav mr-auto">
							<li><a class="nav-item nav-link active" href="paginaprincipal.php">Inicio</a></li>
							<li><a class="nav-item nav-link" href="viajes.php" >Viajes</a></li>
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
		<section class ="hero">
			<div class="container">
				<div class="content-center mt-4">
					<div class="txt-inicio">
						<h1 class="qwe">THE BEST TRIP</h1>
						<p class="mt-5">Viaja de manera segura y comoda con nosotros, te ofrecemos la mejor experiencia a tus pies.
						Somos la mejor agencia de viajes</p>
					</div>
				</div>
			</div>
		</section>
		<section class ="info">
			<div class="container-fluid content-viajes">
				<div class="content-center2">
					<h2 class="topmargin-lg">Viaja con la mejor experiencia</h2>
					<p>Los mejores destinos a tu disposición</p>
				</div>
			</div>
			<div class="row content-row">
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
		</section>
		<br><br><br><br>
		<hr>
		<section class="info">
			<div class="container-fluid content-viajes">
				<div class="content-center2">
					<div class="row">
						<div class="col-sm-12 col-md-4 info-inicio">
							<img src="https://cdn.icon-icons.com/icons2/67/PNG/512/plane_takeoff_13263.png">
							<div class="detalles-nosotros">
								<p>
									Viajaras de manera segura, poniendo a tu disposicion el transporte de tu mejor elección 
									incluido en tu pago inicial 
								</p>
							</div>
						</div>
						<div class="col-sm-12 col-md-4 info-inicio">
							<img src="https://image.flaticon.com/icons/png/512/38/38363.png">
							<div class="detalles-nosotros">
								<p>
									Te daremos acceso a los mejores hoteles, para que vias tu experiencia de manera segura, 
									con todo incluido 
								</p>
							</div>
						</div>
						<div class="col-sm-12 col-md-4 info-inicio">
							<img src="https://image.flaticon.com/icons/png/512/15/15659.png">
							<div class="detalles-nosotros">
								<p>
									Nos ponemos a tu servicio para que tengas la mejor experiencia de viajar y conocer México
								</p>
							</div>
					
						</div>
					</div>
					
				</div>
			</div>
		</section>
		<hr>
		<section class ="info">
			<div class="container-fluid content-viajes">
				<div class="content-center2">
					<h2 class="topmargin-lg">Viajes que pueden gustarte</h2>
				</div>
			</div>
			<div class="row content-row">
				<div class="col-sm-12 col-md-4 im-principal">
					<div class="img-content">
						<div class="detalles-img">
							<a href="Almacen_oaxaca.php"> <h2>El Almacén, Oaxaca</h2></a>
							<a href="Almacen_oaxaca.php"><p>Precio por persona desde: $1,699.00 MXN</p></a>
						</div>
						<img class="img" src="https://cdn.shortpixel.ai/client/q_glossy,ret_img,w_1024/https://rutopia.com/wp-content/uploads/2020/07/DSC00885-Copy-1024x576.jpg">
					</div>
				</div>
				<div class="col-sm-12 col-md-4 im-principal">
					<div class="img-content">
						<div class="detalles-img">
							<a href="Sierra_morena.php"> <h2>Sierra Morena, Chiapas</h2></a>
							<a href="Sierra_morena.php"><p>Precio por persona desde: $749.00 MXN</p></a>
						</div>
						<img class="img" src="https://cdn.shortpixel.ai/client/q_glossy,ret_img,w_1024/https://rutopia.com/wp-content/uploads/2020/07/f8cff502-d902-4152-a07e-b4ff4cca0537-1024x678.jpg">
					</div>
				</div>
				<div class="col-sm-12 col-md-4 im-principal">
					<div class="img-content">
						<div class="detalles-img">
							<a href="Acaxochitlan.php"> <h2>Acaxochitlán, Hidalgo</h2></a>
							<a href="Acaxochitlan.php"><p>Precio por persona desde: $2,599 MXN</p></a>
						</div>
						<img class="img" src="https://cdn.shortpixel.ai/client/q_glossy,ret_img,w_1024/https://rutopia.com/wp-content/uploads/2020/06/acaxochitlan-vive-textiles-nahuas-1024x683.jpg">
					</div>
				</div>
				<div class="col-sm-12 col-md-4 im-principal">
					<div class="img-content">
						<div class="detalles-img">
							<a href="Elveinte.php"> <h2>El Veinte, Campeche</h2></a>
							<a href="Elveinte.php"><p>Precio por persona desde: 1,249.00 MXN</p></a>
						</div>
						<img class="img" src="https://cdn.shortpixel.ai/client/q_glossy,ret_img,w_1024/https://rutopia.com/wp-content/uploads/2020/02/9.-Portada-Plataforma-El-Veinte-1024x683.jpg">
					</div>
				</div>
				<div class="col-sm-12 col-md-4 im-principal">
					<div class="img-content">
						<div class="detalles-img">
							<a href="Isla_arena.php"> <h2>Isla Arena, Campeche</h2></a>
							<a href="Isla_arena.php"><p>Precio por persona desde: $1,499.00 MXN</p></a>
						</div>
						<img class="img" src="https://rutopia.com/wp-content/uploads/2020/06/act3.jpg">
					</div>
				</div>
				<div class="col-sm-12 col-md-4 im-principal">
					<div class="img-content">
						<div class="detalles-img">
							<a href="Tosepan.php"> <h2>Tosepan Kali, Puebla </h2></a>
							<a href="Tosepan.php"><p>Precio por persona desde: $1,299.00 MXN</p></a>
						</div>
						<img class="img" src="https://rutopia.com/wp-content/uploads/2020/06/cascada.jpg">
					</div>
				</div>
		</section>
		<br><br><br><br>
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
