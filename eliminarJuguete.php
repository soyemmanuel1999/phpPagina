<?php
session_start();
if(!isset($_SESSION['nombreusuario'])){
  header("location: login.php");
}else if($_SESSION['admin']==0){
  header("location: listarJuguetesClientes.php");
}?>
<?php
include("conexion.php");

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query="DELETE FROM juguete WHERE id = '$id'";
    $resultado=mysqli_query($con,$query);

header("Location:listarJuguetes.php");
}
?>
