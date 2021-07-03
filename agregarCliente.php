<?php

        session_start();
        if(!isset($_SESSION['nombreusuario'])){
          header("location: login.php");
        }else if($_SESSION['admin']==0){
            header("location: listarJuguetesClientes.php");
          }
       // echo $_SESSION['nombreusuario']; 
    
?>
<?php
include("recursos/header.php")
?>

<div class="container">

<form action="reCliente.php" method="POST">
    
     <div class="form-group">
        <label for="formGroupExampleInput">Nombre</label>
        <input type="text" class="form-control" id="formGroupExampleInput" name="nombre">
    </div>
  <div class="form-group">
        <label for="formGroupExampleInput2">Apellidos</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" name="apellidos">
  </div>
  <div class="form-group">
        <label for="formGroupExampleInput2">Telefono</label>
        <input type="number" class="form-control" id="formGroupExampleInput2" name="telefono">
  </div>
  <div class="form-group">
        <label for="formGroupExampleInput2">Correo</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" name="correo">
  </div>
  <div class="form-group">
        <label for="formGroupExampleInput2">Direccion</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" name="direccion">
  </div>

  <div class="form-group">
        <label for="formGroupExampleInput2">proveedor</label>
        <input type="number" class="form-control" id="formGroupExampleInput2" name="prov">
  </div>
<input type="submit" class="btn btn-primary" name="guarda" value="Guardar">

</form>
</div>

<?php
include("recursos/body.php")
?>
