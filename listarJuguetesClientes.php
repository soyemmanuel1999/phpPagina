
<?php

session_start();
if(!isset($_SESSION['nombreusuario'])){
  header("location: login.php");

}
if(isset($_SESSION['agregado'])){
 echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">'." ".$_SESSION['agregado']." ".'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
}
?>
<?php include('recursos/headerCliente.php')?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<?php include('recursos/body.php')?>
<?php include('conexion.php') ?> 
<div class="container" style=" z-index:0;">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <?php 
    $cont=0;
    
$query="SELECT * FROM juguete";
$result2=mysqli_query($con,$query);
    while($row2 = mysqli_fetch_array($result2)) {
      if ($cont == 0) {
        echo '<div class="carousel-item active">';
        //echo($cont);
    } else {
        echo '<div class="carousel-item">';
        //echo($cont." demas");
    }
    echo '
    <div class="carousel-caption d-none d-md-block">
      <h5>en oferta</h5>
      <p>'.$row2['precio'].'</p>
    </div>';
    echo '<div class="carousel-caption">';
    echo $row2["descripcion"];
    echo ' | Nombre: ' . $row2['nombre'];
      echo '</div>';//Caption
     echo '<img style=" width: 100%; " src="./img/juguetes/'. $row2['imagen'] .'" alt="en oferta"/>';
     echo '</div>';//ITEM
     $cont=$cont+1;
    }
    ?>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>




<?php 
$query="SELECT * FROM juguete";
$result=mysqli_query($con,$query);
?>

<div class="row">
<?php while($row = mysqli_fetch_array($result)) {?>
<div class=" col-sm-12 col-md-4">
<div class="card" >
    <img src="./img/juguetes/<?php echo $row['imagen']?>" class="card-img-top" alt="..." width="100px">
    <div class="card-body">
 <h5 class="card-title"><?php echo $row['nombre']?> </h5>
  <label for=""></label>$<?php echo " ".$row['precio']." "?>MXN <label for=""></label><br>
  
  <a href="Carrito.php?id=<?php echo $row['id'] ?>" class="btn btn-primary" name="guarda" >agregar al carrito</a>        
  <button type="button" class="btn btn-info" >Info</button>
  
  </div>
</div>

</div>
<?php }
?>
</div>


