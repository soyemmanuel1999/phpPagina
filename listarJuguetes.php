
<?php

        session_start();
        if(!isset($_SESSION['nombreusuario'])){
          header("location: login.php");
        }else if($_SESSION['admin']==0){
          header("location: listarJuguetesClientes.php");
        }

       // echo $_SESSION['nombreusuario']; 
    
?>
<script src="./jquery/jquery-3.6.0.min.js"></script>

<?php include('recursos/header.php')?>
<?php include('recursos/body.php')?>
<?php include('conexion.php') ?> 
<div class="container" style=" z-index:0;">

  <?php 
  $query="SELECT * FROM juguete";
  $result=mysqli_query($con,$query);
  $cont=0;
 
  ?>
  <div class="row">
 
    
<?php while($row = mysqli_fetch_array($result)) {?>
  <div class=" col-sm-12 col-md-4">
  <div class="card" >
            <img src="./img/juguetes/<?php echo $row['imagen']?>" class="card-img-top" alt="..." width="100px">
            <div class="card-body">
         <h5 class="card-title"><?php echo $row['nombre']?></h5>
        <!--  <label for="">Descripcion: </label><?php echo $row['descripcion']?><br>
          --><label for="">Precio: </label><?php echo $row['precio']?> <label for=""> pesos</label><br>
          <!--<label for="">Categoria: </label><?php echo $row['categoria']?> <label for=""></label><br>
          </p>-->
          <a href="Carrito.php?id=<?php echo $row['id'] ?>" class="btn btn-primary" name="guarda" onclick="carrito()">agregar al carrito</a>        
          
         <!-- <input type="submit" class="btn btn-primary" name="guarda" onclick="masCarrito(<?php echo $row['id'] ?> )">
          --><a href="agregarJuguete.php?idupdate=<?php echo $row['id'] ?>" class="btn btn-success" name="guarda" >Editar</a> 
     
      <a href="eliminarJuguete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger" name="guarda" >Eliminar</a> 
      </div>
  </div>
      
</div>
  <?php }
  ?>
  
    
</div>

