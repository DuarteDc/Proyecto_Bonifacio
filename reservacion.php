<?php 
	session_start();

	include ("conexion.php");


    $viaje=$_POST["viaje"];
	$nombre=$_POST["nombre"];
	$apellidos=$_POST["apellidos"];
	$correo=$_POST["correo"];
	$telefono=$_POST["telefono"];
	$fecha=$_POST["fecha"];
	$personas=$_POST["personas"];
	$usuario=$_SESSION["usuario"];


	$consulta = "INSERT INTO reservaciones (nombreViaje,nombreRe, apellidosRe, correoRE,telefonoRe,fechaRe,personasRe,usuarioViaje) 
    VALUES ('".$viaje."', '".$nombre."', '".$apellidos."','".$correo."','".$telefono."','".$fecha."','".$personas."', '".$usuario."')";
    $query = $bd->prepare($consulta);

    //Tercer Paso - Ejecutar la consulta
    $query->execute();

    header("location:viajes.php");

 ?>