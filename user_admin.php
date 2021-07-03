<?php
session_start();
if(!isset($_SESSION['nombreusuario'])){
  header("location: login.php");
}else{
    $rol=$_SESSION['admin'];
    if ($rol==1){
        header("location: listarJuguetes.php");
    }else if($rol==0) {
        header("location: listarJuguetesClientes.php");    
    }
}?>