<?php
include("conexion.php");

if(isset($_POST['guarda'])){
   $nombre=$_POST['nombre'];
    $apellidos=$_POST['apellidos'];
    $correo=$_POST['correo'];
    $contrasena=$_POST['contrasena'];
    $telefono=$_POST['telefono'];
    $fecha=$_POST['fecha'];
    $sexo=$_POST['sexo'];    
  
$query="INSERT INTO usuarios(nombre,apellidos,telefono,correo,contrasena,sexo,fecha,admin)VALUES('$nombre','$apellidos','$telefono','$correo','$contrasena','$sexo','$fecha','0')";
$resultado=mysqli_query($con,$query);
if(!$resultado){
    echo ("fallo algo");
    $_SESSION['error']='error creando la cuenta';
}
header("Location: login.php");
}
?>
