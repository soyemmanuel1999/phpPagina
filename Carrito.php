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
    $find=0;
    $cons="SELECT*FROM carrito WHERE id=$id AND idusuario=$idusuario";
    $result=mysqli_query($con,$cons);
    while($fila=mysqli_fetch_array($result)){
        $cantidad=$fila['cantidad'];
        $find=1;

    };
    if($find){
        $cantidad=$cantidad+1;
        $consulta="UPDATE carrito SET cantidad=$cantidad WHERE id=$id AND idusuario=$idusuario";
        $resultado=mysqli_query($con,$consulta);
    }else{
       
    $query="INSERT INTO carrito(id,idusuario,cantidad)VALUES($id,$idusuario,'1')";
    $resultado=mysqli_query($con,$query);
    };


}
    header("Location:listarJuguetes.php");


?>            











