
<?php

session_start();
if(!isset($_SESSION['nombreusuario'])){
  header("location: login.php");
}else if($_SESSION['admin']==1){
  include('recursos/header.php');
  
}else if($_SESSION['admin']==0){
  include('recursos/headerCliente.php');
}
// echo $_SESSION['nombreusuario']; 

?>

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
  <?php 
  
    echo '<div class="row">';
  while($row = mysqli_fetch_array($result)){?>
  <div class="col col-lg-4">
    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./img/juguetes/<?php echo $row['imagen']?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?php echo $row['nombre']?></h5>
    <p class="card-text">$<?php echo " ".$row['precio']." "?>MXN</p>
    <p class="card-text"><?php echo " ".$row['cantidad']." "?>pieza</p>
    <p class="card-text">total: <?php echo " ".number_format((float)$row['totalProducto'], 2, '.', '')." ";  ?>MXN</p>
    <a href="eliminarCarrito.php?id=<?php echo $row['id'] ?>"  class="btn btn-danger"><i class="bi bi-trash"></i>Quitar del carrito</a>
  </div>
</div>
</div>
<br>
  <?php 
  $sumatotal=$sumatotal+$row['totalProducto'];
}
echo '</div>'
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
    <button type="button" class="btn btn-primary"><i class="bi bi-geo-alt"></i>Comprar con Mi Ubicacion </button>
    
 </a>
 </br>
 <a href=realizarPago.php>
    <button type="button" onclick="activarUbicacion()" class="btn btn-primary"><i class="bi bi-input-cursor-text"></i>Comprar usando una direccion </button>
 </a><?php }?>
    </div>
 

</div>
