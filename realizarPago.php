<?php
session_start();
if(!isset($_SESSION['nombreusuario'])){
  header("location: login.php");
}?>
<?php include('recursos/header.php')?>
<?php include('recursos/body.php')?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  
<div class="container">

                                          
<form method="POST">
     <div class="form-group">
     <div class="row">
    <!-- <div class="col">
      <input type="text" class="form-control" id="formGroupExampleInput" name="tipo" type="text" placeholder="Nombre">   
     </div>
     <br>
     <div class="col">
        <input type="text" class="form-control" id="formGroupExampleInput" name="tipo" type="text" placeholder="Apellidos">
     </div>
     -->
     </div>
<br>
        <input type="text" class="form-control" id="formGroupExampleInput" name="tipo" type="text" placeholder="Calle">
    <br>    <input type="text" class="form-control" id="formGroupExampleInput" name="tipo" type="text" placeholder="Colonia">
     
     <br>   <div class="row">
     <div class="col">
        <input type="text" class="form-control" id="formGroupExampleInput" name="tipo" type="number" placeholder="Codigo postal">   
     </div>
     <div class="col">
        <input type="text" class="form-control" id="formGroupExampleInput" name="tipo" type="text" placeholder="Ciudad">
     </div>
     
     </div>
     <br>   <div class="row">
        <div class="col">
        <select class="form-control">
  <option>Estado</option>
</select>
        </div>
        <div class="col">
        <select class="form-control">
  <option>Pais/Region</option>
</select>
        </div>
        </div>

        
    </div>
    <h3></h3>
<input type="submit" class="btn btn-primary" name="guarda" value="continuar">

</form>

</div>