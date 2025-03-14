<?php
session_start();
if(!isset($_SESSION['nombreusuario'])){
  header("location: login.php");
}?>
<?php include('recursos/header.php')?>
<?php include('recursos/body.php')?>
<?php include('conexion.php') ?> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  
<div class="container">

                                          
<form action="registrarDireccion.php" method="POST">
   <div class="form-group">
   <div class="row"></div>
   <br>
   <div class="row">
      <div class="col">
         <input type="text" class="form-control" id="formGroupExampleInput" name="calle" type="text" placeholder="Calle o avenida">
      </div>
      <div class="col">
         <input type="text" class="form-control" id="formGroupExampleInput" name="numero" type="text" placeholder="Numero de edificio">
      </div>
   </div>
  <br>
   <div class="row">
      <div class="col">
         <input type="text" class="form-control" id="formGroupExampleInput" name="colonia" type="text" placeholder="Colonia o Barrio">
      </div>
      <div class="col">
         <input type="text" class="form-control" id="formGroupExampleInput" name="codigoPostal" type="text" placeholder="Codigo postal">
      </div>
   </div>

   <br>   
   <div class="row">
      <div class="col">
         <input type="text" class="form-control" id="formGroupExampleInput" name="ciudad" type="number" placeholder="Ciudad o municipio">   
      </div>

      <?php 
      $query="SELECT * FROM TAB_CIUDADES";
      $result=mysqli_query($con,$query);
      ?>
      <div class="col">
         <select class="form-control" placeholder="Estado o provincia" name ="estado">
         <?php while($row = mysqli_fetch_array($result)) {?>
               <option value="<?php echo $row['ID_TAB_CIUDAD'];?>"><?php echo $row['CIUDAD']?> </option>
               <?php }?>
         </select>
      </div>
   </div>
   <br>  
  
   <h3></h3>
   <input type="submit" class="btn btn-primary" name="guarda" value="continuar">
</form>

</div>