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
    <div class="row">
<div class="col-2"></div>
    <div class="col"> 
<h4>Datos personales</h4>
<img src="./img/perfil/descarga.jpg" alt="..." class="rounded-circle" width="150" height="150">
</div>


    <div class="col-4">
        <h4>Mi cuenta</h4>
        <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Mis pedidos </h5>
    <a href="#" class="btn btn-outline-primary">Ver pedidos</a>
     
  </div>

</div>

</div>

    </div>
    <br>
    <div class="row">
    <div class="col-4"> 
<h6>Correo Electronico</h6>
<p><?php echo $_SESSION['correo']?></p>

<h6>Nombre</h6>
<p><?php echo $_SESSION['nombreusuario']?></p>


</div>
<div  div class="col-4">
<h6>Fecha de nacimiento</h6>
<p><?php echo $_SESSION['fecha']?></p>


<h6>Sexo</h6>
<p><?php echo $_SESSION['sexo']?></p>

</div>
    <div class="col-4" >
    <div class="card" style="width: 18rem;">

  <div class="card-body">
    <h5 class="card-title">Datos de mi cuenta</h5>
     <a href="#" class="btn btn-outline-primary">Actualizar Datos Personales</a>    
     <a href="#" class="btn btn-outline-primary">Cambiar Contraseña</a>
     <a href="#" class="btn btn-outline-primary">Direcciones de Entrega</a>
    
  </div>
</div>
    </div>
    </div>
</div>