<?php 
	session_start();
	include("conexion.php");
	$usuario=$_POST["usuario"];
	$pass=$_POST["pass"];
	$consulta= $bd->prepare("select * from cliente where nombreUsuario = ? and passCliente = ?;");
	$consulta->execute([$usuario, $pass]);
	$datos=$consulta->fetch(PDO::FETCH_OBJ);

	if ($datos === FALSE ){
		header("location:index.php");
		echo'<script type="text/javascript">
  		  alert("Usuario y/o contraseña invalido");
   		  window.location.href="index.php";
    		</script>';
	}elseif($consulta->rowCount() == 1){
	 $_SESSION["usuario"] =$datos->nombreUsuario;	
	 header("location:paginaprincipal.php");
	}
 ?>