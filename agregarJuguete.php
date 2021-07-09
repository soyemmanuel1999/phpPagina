<?php

        session_start();
        if(!isset($_SESSION['nombreusuario'])){
          header("location: login.php");
        }else if($_SESSION['admin']==0){
          header("location: listarJuguetesClientes.php");
        }
       // echo $_SESSION['nombreusuario']; 
    
?>
<?php include("recursos/header.php")?>
<?php include('recursos/body.php')?>
<?php include('conexion.php');

$si=false;
if(isset($_GET['idupdate'])){
$idupdate=$_GET['idupdate'];

$consulta="SELECT * FROM juguete WHERE id=$idupdate";
$resultado=mysqli_query($con,$consulta);
while($row=mysqli_fetch_array($resultado)){
  $i=$row['id'];
  $co=$row['codigo'];
  $n=$row['nombre'];
  $img=$row['imagen'];
  $d=$row['descripcion'];
  $pre=$row['precio'];
  $ca=$row['categoria'];
  $pro=$row['proveedor'];
  $s=$row['stock'];
  $si=true;
  
}
}?> 
<script src="./jquery/jquery-3.6.0.min.js"></script>
<!--<script
  src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"
  integrity="sha256-xNjb53/rY+WmG+4L6tTl9m6PpqknWZvRt0rO1SRnJzw="
  crossorigin="anonymous"></script>
--><?php 
  $query="SELECT id,categoria FROM categoria";
  $result=mysqli_query($con,$query);
  
  $query="SELECT id,nombre,apellidos,empresa FROM proveedor";
  $result1=mysqli_query($con,$query);

  
  ?>
<div class="container">

<form name="formulario-envia" id="formulario-envia" method="post" enctype="multipart/form-data" >
<div class="form-group">
        <label for="formGroupExampleInput">Codigo barras</label>
        <input type="number" class="form-control" id="codigo" name="codigo" placeholder="<?php if($si){echo $co;}?>" aria-describedby="inputGroupPrepend2" required>
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="<?php if($si){echo $n;}?>" aria-describedby="inputGroupPrepend2" required>
    </div>
     
 
  <div class="form-group">
        <label for="formGroupExampleInput2">descripcion</label>
        <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="<?php if($si){echo $d;}?>" aria-describedby="inputGroupPrepend2" required>
  </div>
  <div class="form-group">
        <label for="formGroupExampleInput2">precio</label>
        <input type="number" step=".01" class="form-control" id="precio" name="precio" placeholder="<?php if($si){echo $pre;}?>" aria-describedby="inputGroupPrepend2" required>
  </div>
  <div class="form-group">
  <label for="formGroupExampleInput2">categoria</label>

  <select class="custom-select" id="menu-categoria" name="categoria" placeholder="<?php if($si){echo $ca;}?>" aria-describedby="inputGroupPrepend2" required>
  <?php while($row = mysqli_fetch_array($result)) {?>
    <option value="<?php echo $row['id'];?>" id="<?php echo $row['id'];?>" name="<?php echo $row['id'];?>"><?php echo $row['categoria'];?></option>
    <?php } ?>
    </select>
  </div>
  <div class="form-group" >
        <label for="formGroupExampleInput2">proveedor</label>
        <select class="custom-select" id="menu-provedor" name="provedor" placeholder="<?php if($si){echo $pro;}?>" aria-describedby="inputGroupPrepend2" required>
  <?php while($row = mysqli_fetch_array($result1)) {?>
    <option value="<?php echo $row['id'];?>" id="<?php echo $row['id'];?>" name=<?php echo $row['id'];?>><?php echo $row['nombre']." ".$row['apellidos']." empresa: ".$row['empresa'];?></option>
    <?php } ?>
    </select>
  </div>
  <div class="form-group">
        <label for="formGroupExampleInput">Cantidad(Stock)</label>
        <input type="number" class="form-control" id="stock" name="stock" placeholder="<?php if($si){echo $ca;}?>" aria-describedby="inputGroupPrepend2" required>
    </div>
  <div class="form-group">
        <label for="formGroupExampleInput2">imagen</label>
        <input type="file" class="form-control" id="imagen" name="imagen" aria-describedby="inputGroupPrepend2" required>
        <?php if($si){?>
          
          <div class=row>
  <div class=col-3>
  <div class="card">
    <img src="./img/juguetes/<?php echo $img?>" class="card-img-top" alt="..." width="100px">
</div>
  </div>
  
  <?php } ?>
  </div>
  <div class="row">
    <div class="col-12">
    <?php
    if($si){
?>      <button type="button" class="btn btn-primary btn-lg btn-block" onclick="jugueteNuevo(<?php echo $idupdate;?>)">ACTUALIZAR</button>
 <?php   }else{
    ?>

    <button type="button" class="btn btn-primary btn-lg btn-block" onclick="jugueteNuevo()">GUARDAR</button>
        
        <?php }?>
        </div>
</div>

</form>

</div>
<div id="div1"></div>

<script src="script.js"></script>
<script>
/*
jQuery(document).ready(
  function(){
    alert("hola mundo jaj")
    $.ajax({url: "https://jsonplaceholder.typicode.com/users.json", success: function(result){
    $("#div1").html(result);
  }});
  }
 
  
)*/

      function jugueteNuevo(update){
        //alert("hola")
        //#menu option:selectedJSON.stringify( objeto )


   var formData=new FormData();
   formData.append("codigo", $('input[name=codigo]').val());
    
   formData.append("nombre", $('input[name=nombre]').val());
   
   formData.append("precio", $('input[name=precio]').val());
   formData.append("stock", $('input[name=stock]').val());
   formData.append("descripcion", $('input[name=descripcion]').val());
   
   formData.append("categoria", $("#menu-categoria option:selected").val());
   
   formData.append("provedor", $("#menu-provedor option:selected").val());
   
   formData.append("imagen", $('input[name=imagen]')[0].files[0]); 
if(update){
   formData.append("idupdate",update)
}
//console.log(JSON.stringify(formData))
//console.log( formData.get('categoria') );
$.ajax({
          data: formData,
          url:"reJuguete.php",
          type:"POST",
          enctype:"multipart/form-data",
          contentType: false,
          processData: false,
          beforesend: function(){
              
          },
          success: function(response){
                alert(response);
              window.location='listarJuguetes.php';
          }
        });
       /* $.ajax({url: "demo_test.txt", success: function(result){
        $("#div1").html(result);
      }});*/
      }
 

</script>
