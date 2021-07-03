
<?php

session_start();
if(!isset($_SESSION['nombreusuario'])){
  header("location: login.php");
}
// echo $_SESSION['nombreusuario']; 

?>

<?php include('recursos/header.php')?>
<?php include('recursos/body.php')?>
<?php include('conexion.php') ?>
<div class="container">

  <?php 
  $idusuario=$_SESSION['id'];
 // $query="SELECT j.nombre AS nombre, j.precio AS precio FROM juguete AS j  WHERE j.id=carrito.id ";
  $query="SELECT j.imagen, j.id, j.nombre ,j.precio, c.cantidad, j.precio*c.cantidad AS totalProducto FROM juguete AS j, carrito AS c WHERE c.id=j.id AND c.idusuario=$idusuario";
   
 $result=mysqli_query($con,$query);
 $sumatotal=0;


  
  ?>
  <?php while($row = mysqli_fetch_array($result)){?>
 
 
  <div class="card "style="width: 18rem;">
  
    <img src="./img/juguetes/<?php echo $row['imagen']?>" class="card-img-top" alt="..." width="100px">
</div>
 

  
    <div class=card style="width: 18rem;">
      
    <h5 class="card-title"><?php echo $row['nombre']?> </h5>
    <h6 class="card-subtitle mb-2 text-muted"></label>$<?php echo " ".$row['precio']?></h6>
    <h6 class="card-subtitle mb-2 text-muted"></label>cantidad:<?php echo " ".$row['cantidad']?></h6>
    <h6 class="card-subtitle mb-2 text-muted"></label>total: <?php echo " ".number_format((float)$row['totalProducto'], 2, '.', '');  ?></h6>
   
    <a href="eliminarCarrito.php?id=<?php echo $row['id'] ?>" type="button">eliminar</a>
 
  </div>
 
  

   

<br>
  <?php 
  $sumatotal=$sumatotal+$row['totalProducto'];
}
   ?>



    <div class=card>
        
   
    <h6 class="card-subtitle mb-2 text-muted"></label>subtotal: <?php echo $sumatotal?></h6>
    <h6 class="card-subtitle mb-2 text-muted"></label>descuento:</h6>
    <h6 class="card-subtitle mb-2 text-muted"></label>costo de envio</h6>
    <h6 class="card-subtitle mb-2 text-muted"></label>total(iva includo)<?php
    $iva=$sumatotal*.16;
    $totaliva=$sumatotal+$iva;
    echo " ".number_format((float)$totaliva, 2, '.', '');
    
    ?></h6>
   <?php  if(isset($_GET['ok'])){
  
    include('config.php');
$currency = "MXN";
$productPrice = number_format((float)$totaliva, 2, '.', '');
$_SESSION['totalCompra']=$productPrice;
?>
          <?php include 'paypalCheckout.php'; ?>
<?php
   }else{
     
     ?>
    <a href=realizarPagoubi.php>
    <button type="button" class="btn btn-primary">Comprar con Mi Ubicacion </button>
    
 </a>
 </br>
 <a href=realizarPago.php>
    <button type="button" onclick="activarUbicacion()" class="btn btn-primary">Comprar usando una direccion </button>
 </a><?php }?>
    </div>
 

</div>
