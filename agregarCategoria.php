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

<form action="reCategoria.php" method="POST">
     <div class="form-group">
        <label for="formGroupExampleInput">Categoria</label>
        <input type="text" class="form-control" id="formGroupExampleInput" name="categoria">
    </div>
<input type="submit" class="btn btn-primary" name="guarda" value="Guardar">

</form>
</div>

<?php
include("recursos/body.php")
?>
