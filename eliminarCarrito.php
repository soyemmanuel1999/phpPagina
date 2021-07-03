<?php
session_start();
if(!isset($_SESSION['nombreusuario'])){
  header("location: login.php");
}?>
<?php

session_start();
include("conexion.php");
$idusuario=$_SESSION['id'];

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query="DELETE FROM carrito WHERE id = $id AND idusuario=$idusuario";
    $resultado=mysqli_query($con,$query);

header("Location:listarCarrito.php");
}
?>