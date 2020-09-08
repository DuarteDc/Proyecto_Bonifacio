<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<title>Página Principal</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="estilos1.css">
		<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@600&family=Red+Rose:wght@300&display=swap" rel="stylesheet">
	</head>
	<header>
			<div class="fixed-top">
				<nav class="navbar navbar-expand-md  navbar-light bg-light">
	  					<a class="navbar-brand" href="index.php"> <img class="logo"src="img/logo.jpg"></a>
					 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="flase" aira-lable="Toggler-navegation">
					 	<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-justify" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
	  						<path fill-rule="evenodd" d="M2 12.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
						</svg>
			  		</button>
					<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
				 		<div class="navbar-nav mr-auto ">
							<li><a class="nav-item nav-link active" href="index.php">Inicio</a></li>
						</div>
						<a class="btn btn-outline-warning" href="Administracion/login_usuario.php">Administrar</a>
					</div>

				</nav>
			</div>
		</header>
		<section class="hero-index" id="inicio">
			<div class="content-center title-index">	
				<h1 class="">THE BEST TRIP</h1>
				<p>Viaja y conoce lugares asombrososen todo mexico</p>
			</div>
			<div class="btn-sesion">
				<div class="form-registro">
			<button type="button" class="btn btn-blanco topmargin-md" data-toggle="modal" data-target="#exampleModal">
	  					Registrate
						</button>
					</div>
					<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header text-center">
									<h5 class="modal-title m-auto" id="exampleModalLabel">Unirse</h5>
									<button type="button" class="close btn-close ml-0" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body content-right">
									<form action="NuevaRespuesta.php" method="Post" class="formulario">
										<div class="form-section">
											<label class="label">Nombre de usuario</label>
											<br>
											<input type="text" id="usu" name="nombreusu" placeholder="Nombre de usuario" required>
										</div>
										<div class="form-section ">
											<label>Nombre</label>
											<br>
											<input type="text" id="nombre" name="nombre" placeholder="Nombre" required>
										</div>
										<div class="form-section">
											<label>Apellidos</label>
											<br>
											<input type="text" id="apellidos" name="apellidos" placeholder="Apellidos" required>
										</div>
										<div class="form-section">
											<label>Telefono</label>
											<br>
											<input type="text" id="telefono" name="telefono" placeholder="telefono" required>
										</div>
										<div class="form-section">
											<label>Correo</label>
											<br>
											<input type="text" id="correo" name="correo" placeholder="Correo electrinico" required>
										</div>
										<div class="form-section">
											<label>Contraseña</label>
											<br>
											<input type="password" id="pass" name="pass" placeholder="Contraseña" required>
										</div>
										<div class="form-section">
											<input type="checkbox"  id="terminos" name="terminos" value="Acepto" required>
											<p>Estoy de acuerdo con terminos y condiciones</p>
										</div>
										<div class="form-section buscar">
												<input type="submit" name="" value="Registrar" class="btn btn-blanco	">
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="form-login content-center">	
						<button type="button" class="btn btn-blanco topmargin-md" data-toggle="modal" data-target="#exampleModal1">
	  					Iniciar Sesión
						</button>
					</div>
					<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
							<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header text-center">
									<h5 class="modal-title m-auto" id="exampleModalLabel1">Iniciar Sesión</h5>
									<button type="button" class="close btn-close ml-0" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form action="logueo.php" method="Post" class="formulario text-center">
                       				
                       				 <div class="form-section">
                       				 	<label>Usuario</label>
                            			<br>
                            			<input type="text" name="usuario" placeholder="Usuario" required>
                        			</div>
                        			<div class="form-section">
                        				<label>Contraseña</label>
                            			<br>
                            			<input type="password"  name="pass" placeholder="Contraseña" required>
                        			</div>
                        			<div class="form-section buscar">
                            			<br>
                            			<input type="submit" name="" value="Iniciar Sesión" class="btn btn-blanco">
                       				</div>
				                    </form>
								</div>
							</div>
						</div>
					</div>
			</div>
		</section>
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
							<a href="#inicio"> <h2>El Almacén, Oaxaca</h2></a>
						</div>
						<img class="img" src="https://cdn.shortpixel.ai/client/q_glossy,ret_img,w_1024/https://rutopia.com/wp-content/uploads/2020/07/DSC00885-Copy-1024x576.jpg">
					</div>
				</div>
				<div class="col-sm-12 col-md-4 im-principal">
					<div class="img-content">
						<div class="detalles-img">
							<a href="#inicio"> <h2>Sierra Morena, Chiapas</h2></a>
						</div>
						<img class="img" src="https://cdn.shortpixel.ai/client/q_glossy,ret_img,w_1024/https://rutopia.com/wp-content/uploads/2020/07/f8cff502-d902-4152-a07e-b4ff4cca0537-1024x678.jpg">
					</div>
				</div>
				<div class="col-sm-12 col-md-4 im-principal">
					<div class="img-content">
						<div class="detalles-img">
							<a href="#inicio"> <h2>Acaxochitlán, Hidalgo</h2></a>
						</div>
						<img class="img" src="https://cdn.shortpixel.ai/client/q_glossy,ret_img,w_1024/https://rutopia.com/wp-content/uploads/2020/06/acaxochitlan-vive-textiles-nahuas-1024x683.jpg">
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


