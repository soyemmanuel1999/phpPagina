<?php
session_start();
if(!isset($_SESSION['nombreusuario'])){
  header("location: login.php");
}?>
<?php

include("conexion.php");

if(isset($_POST['guarda'])){
   $nombre=$_POST['nombre'];
    $apellidos=$_POST['apellidos'];
    $direccion=$_POST['direccion'];
    $codigo=$_POST['codigo'];
    $estado=$_POST['estado'];
 
    $cliente=$_POST['cliente-proveedor'];
    $empresa=$_POST['empresa'];
    

$query="INSERT INTO proveedor(nombre,apellidos,direccion,codigo,estado,administrador,empresa)VALUES('$nombre','$apellidos','$direccion','$codigo','$estado','$cliente','$empresa')";
$resultado=mysqli_query($con,$query);
if(!$resultado){
    die("fallo algo");
}else{
header("Location: listarProveedores.php");
}
}
?>