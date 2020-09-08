<?php 
session_start();
if (!isset($_SESSION["usuario"])){
	header("loaction:login.php");
}elseif(isset($_SESSION["usuario"])){

}else{
	echo "Error de sistema";
}?>
<?php 
    include("conexion.php");
    $usuario=$_SESSION["usuario"];
    $consulta = "SELECT * FROM reservaciones WHERE usuarioViaje = '$usuario'";
    $query = $bd->prepare($consulta);

    $query->execute();
    $us = $query->fetchAll();

?>

 <!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<title>Mis viajes</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="estilos1.css">
		<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@600&family=Red+Rose:wght@300&display=swap" rel="stylesheet">
	</head>
	<body class="body-mis-viajes">
		<header>
			<div class="fixed-top">
				<nav class="navbar navbar-expand-md  navbar-light bg-light">
	  					<a class="navbar-brand" href="paginaprincipal.php"> <img class="logo"src="img/	logo.jpg"></a>
					 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="flase" aira-lable="Toggler-navegation">
					 	<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-justify" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
	  						<path fill-rule="evenodd" d="M2 12.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
						</svg>
			  		</button>
					<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
				 		<div class="navbar-nav mr-auto ">
							<li><a class="nav-item nav-link" href="paginaprincipal.php">Inicio</a></li>
							<li><a class="nav-item nav-link" href="viajes.php" >Viajes</a></li>
							<li><a class="nav-item nav-link active" href="Mis_viajes.php" >Mis viajes</a></li>
							<li><a class="nav-item nav-link" href="nosotros.php" >Nosotros</a></li>
						</div>
						<a href="Mi_perfil.php" class="btn btn-light"><?php echo $_SESSION["usuario"] ?></a>
	    				<br>
	    				<a class="btn btn-outline-danger btn-salir" href="logout.php">Cerrar sesión</a>
					</div>
				</nav>
			</div>
		</header>
		<section class="hero-mis-viajes">
			<div class="container tabla-viaje">
				<div class="content-center">
					<table class="table table-viajes">
					<?php for ($i=0; $i< count($us); $i++) {?>
						 <tr><th colspan="2" style="background-color: #04B4AE">Mis Viajes</th></tr>
			             <tr><th style="background-color:#4F4931">Nombre Viaje</th><td><?php echo $us[$i]["nombreViaje"]; ?></td></tr>
			             <tr><th style="background-color:#4F4931">Nombre</th><td><?php echo $us[$i]["nombreRe"]; ?></td></tr>
			             <tr><th style="background-color:#4F4931">Apellidos</th>	<td><?php echo $us[$i]["apellidosRe"]; ?></td></tr>
			             <tr><th style="background-color:#4F4931">Telefono</th><td><?php echo $us[$i]["telefonoRe"]; ?></td></tr>
			             <tr><th style="background-color:#4F4931">Fecha</th><td><?php echo $us[$i]["fechaRe"]; ?></td></tr>
			             <tr><th style="background-color:#4F4931">No. Personas</th><td><?php echo $us[$i]["personasRe"]; ?></td></tr>
			        <?php } ?>
					</table>

				</div>
			</div>

		</section>
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>