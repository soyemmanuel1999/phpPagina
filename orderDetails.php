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


      
       $paymentID = $_GET['paymentID'];
        $payerID = $_GET['payerID'];
        $token = $_GET['token'];
     
         
        ?>
        <div class="alert alert-success">
          <strong>Success!</strong> Your order processed successfully.
        </div>
      <?php 
      $idusuario=$_SESSION['id'];
      $query="SELECT  j.id,j.nombre, c.cantidad,j.precio ,j.precio*c.cantidad AS totalProducto FROM juguete AS j, carrito AS c WHERE c.id=j.id AND c.idusuario=$idusuario";
      $result=mysqli_query($con, $query);
      ?>
      <div class="container">   
      <table class="table">
      <thead>
           <tr>
             <th scope="col">nombre producto</th>
             <th scope="col">presio producto</th>
             <th scope="col">cantidad producto</th>
             <th scope="col">total producto</th>
           </tr>
         </thead>
         <tbody>
           <tr><?php
    while ($row = mysqli_fetch_array($result)){
      $totalProducto=number_format((float)$row['totalProducto'], 2, '.', '');//para calcular la llegada del producto =(kmtotales de punto a punto/ horas de trabajo*kilometros-hora)si esto es igual a 1 quiere decir que se llevara undia 
      $presio=number_format((float)$row['precio'], 2, '.', '');
            $productos=  $row['nombre'].",".$presio.",".$row['cantidad'].",".$totalProducto."/";
         ?>  <table class="table">
         
             <td><?php echo $row['nombre']?></td>
             <td><?php echo $row['precio']?></td>
             <td><?php echo $row['cantidad']?></td>
             <td><?php echo $totalProducto?></td>           
   <?php }  
      ?>
       </tr>
       <tr>
       <td>numero de pago Id:  <?php echo $paymentID; //esto me retorna paypal?></td>
       <td>pagador  Id: <?php echo $payerID; ?></td>
       <td>token de pago: <?php echo  $token; ?></td>
       <td>total(iva incluido): <?php echo $_SESSION['totalCompra']; ?></td>
      
    </tr>
         </tbody>
         </table>
         <?php 
         $query="INSERT INTO "
         
         ?>


         <button type="button" class="btn btn-success">descargar factura</button>
         </div>