
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>juguetes oaxaca</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    crossorigin=""/>
  </head>
<body>
    

<div class="container"  >
<div class="row">
  
     <div class="col-sm-5"><h2>JUGUETES OAXACA</h2>
  </div>
  
 </div>


<div class=row>
<div class="col-sm-4">
 <a href="listarCarrito.php"><button type="button" class="btn btn-default btn-lg" href="listarCarrito.php">
  <span class="bi bi-cart3" aria-hidden="true"></span> 
</button></a>
  </div>
  <div class="col-sm-4">
  <div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle  btn-lg"
          data-toggle="dropdown"><span class="bi bi-person-circle" aria-hidden="true"></span> bienvenido <?php echo " ".$_SESSION['nombreusuario'];?>
  </button>

  <ul class="dropdown-menu" role="menu">
    <li><a href="Perfil.php">Mi Cuenta</a></li>
    <li><a href="#">Mis Pedidos</a></li>
  
    <li class="divider"></li>
    <li><a  href="cerrarSesion.php">Cerrar Sesion</a></li>
  </ul>
</div>
  </div>

</div>
</div>

<div class= "container">
    <div class="row">
        <div class="col">
            <ul class="nav nav-tabs">
              <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Juguetes</a>
                    <div class="dropdown-menu">
                     <a class="dropdown-item" href="listarJuguetes.php">Ver juguetes</a>
                          <a class="dropdown-item" href="agregarJuguete.php">Agregar juguetes</a>
                       <a class="dropdown-item" href="agregarCategoria.php">Agregar Categoria</a>
   
                </li>
  
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Personal</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="listarProveedores.php">Proveedores/clientes</a>
      <a class="dropdown-item" href="agregarProveedor.php">Agregar</a>
    </li>
    
  <!--<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Proveedores</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="listarProveedores.php">Ver Proveedores</a>
      <a class="dropdown-item" href="agregarProveedor.php">Agregar Proveedores</a>
  </li>-->
   


</ul>
</div>
<div class="col-sm-12 col-md-4 ">
<div class="input-group">
  <input type="search" class="form-control rounded" placeholder="Buscar" aria-label="Search"
    aria-describedby="search-addon" />
  <button type="button" class="btn btn-outline-primary">Buscar</button>
</div>
</div>
</div>
</div>



<script src="script.js"></script>