<?php
session_start();
if(!isset($_SESSION['nombreusuario'])){
  header("location: login.php");
}
else if($_SESSION['admin']==0){
    header("location: listarJuguetesClientes.php");
  }?>

<?php
 include('conexion.php');

   $nombre=$_POST['nombre']; 
   $codigo=$_POST['codigo'];
   $descripcion=$_POST['descripcion'];
   $precio=$_POST['precio'];
   $categoria=$_POST['categoria'];
   $provedor=$_POST['provedor'];  
  $imagen=$_FILES['imagen'];
  $stock=$_POST['stock'];
 
  
 
  if(isset($_POST['idupdate'])){
    $idupdate=$_POST['idupdate'];

  }
  
   if($imagen["type"]=="image/jpg" or $imagen["type"] == "image/jpeg"){
      $nom_encriptado=md5($imagen["tmp_name"]).".jpg";
        $ruta="./img/juguetes/".$nom_encriptado;
        move_uploaded_file($imagen["tmp_name"], $ruta);

        if(isset($_POST['idupdate'])){
            $consulta="UPDATE juguete SET codigo='$codigo', nombre='$nombre', imagen='$nom_encriptado',descripcion='$descripcion',precio='$precio',categoria='$categoria',proveedor='$provedor',stock='$stock' WHERE id='$idupdate'";
            $result=mysqli_query($con,$consulta);
            if($result){
              echo("datos  actualizados");
    
            }else{
              echo("error no se ha posdido actualizar");
            }
          }else{
          $query="INSERT INTO juguete(codigo,nombre,imagen,descripcion,precio,categoria,proveedor,stock)VALUES
          ('$codigo','$nombre','$nom_encriptado','$descripcion','$precio','$categoria','$provedor',$stock)";
          $resultado=mysqli_query($con,$query);
          if($resultado){
            echo("datos  insertados");
  
          }else{
            echo("error");
          }
  
        }
      }

 
?>