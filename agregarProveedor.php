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

<form action="reProveedor.php" method="POST" >
    
     <div class="form-group">
        <label for="formGroupExampleInput">Nombre</label>
        <input type="text" class="form-control" id="formGroupExampleInput" name="nombre" aria-describedby="inputGroupPrepend2" required>
    </div>
  <div class="form-group">
        <label for="formGroupExampleInput2">Apellidos</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" name="apellidos" aria-describedby="inputGroupPrepend2" required>
  </div>
  <div class="form-group">
        <label for="formGroupExampleInput2">Direccion</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" name="direccion" aria-describedby="inputGroupPrepend2" required>
  </div>
  <div class="form-group">
        <label for="formGroupExampleInput2">Codigo postal</label>
        <input type="number" class="form-control" id="formGroupExampleInput2" name="codigo" aria-describedby="inputGroupPrepend2" required>
  </div>
  <div class="form-group">
        <label for="formGroupExampleInput2">Estado</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" name="estado" aria-describedby="inputGroupPrepend2" required>
  </div>

  <div class="form-group" >
        <label for="formGroupExampleInput2">es un...</label>
        <select class="custom-select" id="cliente-proveedor" name="cliente-proveedor" aria-describedby="inputGroupPrepend2" required>
 
    <option value="0">cliente</option>
    <option value="1">proveedor</option>
    
    </select>
    <div class="form-group">
        <label for="formGroupExampleInput2">Nombre de la empresa</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" name="empresa" aria-describedby="inputGroupPrepend2" required>
  </div>
  </div>
<input type="submit" class="btn btn-primary btn-lg btn-block" name="guarda" value="Guardar">

</form>
</div>

<?php
include("recursos/body.php")
?>