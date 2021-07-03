<?php
session_start();

if(!isset($_SESSION['nombreusuario'])){
  header("location: login.php");
}
else if($_SESSION['admin']==0){
    header("location: listarJuguetesClientes.php");
  }
  include("conexion.php");
if(isset($_POST['categoria'])){
   $categoria=$_POST['categoria'];
    
  
$query="INSERT INTO categoria(categoria)VALUES('$categoria')";
$resultado=mysqli_query($con,$query);
if(!$resultado){
    die("fallo algo");
}else{
$_SESSION['mensaje']='Datos guardados correctamente';
$_SESSION['color']='success';
header("Location: agregarCategoria.php");
}
}
?>