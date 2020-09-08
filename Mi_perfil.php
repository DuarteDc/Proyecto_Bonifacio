<?php 
session_start();
if (!isset($_SESSION["usuario"])){
	header("loaction:login.php");
}elseif(isset($_SESSION["usuario"])){

}else{
	echo "Error de sistema";
}
?>

<?php
    include("conexion.php");

    $usuario = $_SESSION["usuario"];
    $consulta = "SELECT * FROM cliente where nombreUsuario= '$usuario'";

    //Paso 2.
    $query = $bd->prepare($consulta);

    //Paso 3.
    $query->execute();

    //Paso 4. Traer la información de la cosulta
    $us = $query->fetchAll();
?>

<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<title>Mi perfil</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="estilos1.css">
		<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@600&family=Red+Rose:wght@300&display=swap" rel="stylesheet">
	</head>
	<body>
		<header>
			<div class="fixed-top">
				<nav class="navbar navbar-expand-md  navbar-light bg-light">
	  					<a class="navbar-brand" href="index1.html"> <img class="logo"src="img/logo.jpg"></a>
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
							<li><a class="nav-item nav-link" href="nosotros.php" >Nosotros</a></li>
	    				</div>
	    				<a href="Mi_perfil.php" class="btn btn-light"><?php echo $_SESSION["usuario"] ?></a>
	    				<br>
	    				<a class="btn btn-outline-danger btn-salir" href="logout.php">Cerrar sesión</a>
					</div>
				</nav>
			</div>
		</header>
		<section class="miperfil">	
			<div class="container">
				<table class="table table-perfil">
					  <?php for ($i=0; $i< count($us); $i++) {?>
						<tr><th>Nombre Usuario</th><td><?php echo $us[$i]["nombreUsuario"]; ?></td></tr>
			            <tr><th>Nombre</th><td><?php echo $us[$i]["nombreCliente"]; ?></td></tr>
			            <tr><th>Apellidos</th><td><?php echo $us[$i]["apellidosCliente"]; ?></td></tr>
			            <tr><th>Telefono</th><td><?php echo $us[$i]["telefonoCliente"]; ?></td></tr>
			            <tr><th>Correo</th><td><?php echo $us[$i]["correoCliente"]; ?></td></tr>
			            <tr><th>Password</th><td><?php echo $us[$i]["passCliente"]; ?></td></tr>
			        <?php } ?>
				</table>
			</div>	
		</section>
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>