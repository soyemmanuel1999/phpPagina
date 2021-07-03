<?php

        session_start();
        if(!isset($_SESSION['nombreusuario'])){
          header("location: login.php");
        }else if($_SESSION['admin']==0){
          header("location: listarJuguetesClientes.php");
        }
       // echo $_SESSION['nombreusuario']; 
    
?>
<?php include('recursos/header.php')?>
<?php include('recursos/body.php')?>
<?php include('conexion.php') ?>
<div class="container"><div class=row>
<div class=col>

<a href="listarClientes.php" class="btn btn-primary" >Clientes</a>

</div>

<div class=col>
<h3>PROVEEDORES</h3>
</div>
</div><table class="table table-responsive">
  <thead class="thead-light">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NOMBRE</th>
      <th scope="col">APELLIDOS</th>
      <th scope="col">DIRECCION</th>
      <th scope="col">CODIGO POSTAL</th> 
      <th scope="col">ESTADO</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  $query="SELECT * FROM proveedor";
  $result=mysqli_query($con,$query);
   while($row = mysqli_fetch_array($result)) {?>
        <tr>  
    <th><?php echo $row['id']?></th>
      <td><?php echo $row['nombre']?></td>
      <td><?php echo $row['apellidos']?></td>
      <td><?php echo $row['direccion']?></td>
      <td><?php echo $row['codigo']?></td>
      <td><?php echo $row['estado']?></td>
      <td> <a href="eliminarProveedor.php?id=<?php echo $row['id']?>" class="btn btn-primary" name="guarda" >Eliminar</a>
  </td>
    </tr>
  <?php }
  ?>
   
    
   
    
  </tbody>
</table>