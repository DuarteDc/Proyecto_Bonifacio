<?php
    
    include("conexion.php");

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    $nombreUs = $_POST ["nombreusu"];
    $nombre = $_POST["nombre"];
    $apellidos=$_POST["apellidos"];   
    $telefono=$_POST["telefono"];
    $correo=$_POST["correo"];
    $pass=$_POST["pass"];
    $terminos=$_POST["terminos"];

    $sql= $bd->prepare("SELECT  * from cliente where nombreUsuario =?;");
    $sql->execute([$nombreUs]);
    $datos=$sql->fetch(PDO::FETCH_OBJ);

    if ($sql->rowCount() == 1){
         echo'<script type="text/javascript">
        alert("El usuario ya esta registrado /El correo ya esta registrado");
        window.location.href="index.php";
     </script>';
  die();
}
    $consulta = "INSERT INTO cliente (nombreUsuario, nombreCliente, apellidosCliente, telefonoCliente,correoCliente,  passCliente,terminosCliente) 
    VALUES ('".$nombreUs."','".$nombre."', '".$apellidos."','".$telefono."','".$correo."','".$pass."','".$terminos."')";

    //Segundo Paso - Prepara la consulta
    $query = $bd->prepare($consulta);

    //Tercer Paso - Ejecutar la consulta
    $query->execute();

    header("Location:index.php");
?>