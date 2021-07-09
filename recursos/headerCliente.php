
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


<script>
function buscar(){
    var palabra=$("#palabraBuscar").val();
    
   $.ajax({
        method: "POST",
        url: "./../buscador.php",
        data: { texto: palabra }
      })
        .done(function( msg ) {
          alert( "Data Saved: " + msg );
        })
}
</script>
     
        
       
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="listarJuguetesClientes.php"><i class="bi bi-house"></i>juguetes oaxaca</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
     
      <li class="nav-item active">
      <a href="listarCarrito.php"><button type="button" class="btn btn-default btn-lg" href="listarCarrito.php">
  <span class="bi bi-cart3" aria-hidden="true">Carrito</span> 
</button></a>

      </li>
      <li class="nav-item active">
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
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" id="palabraBuscar" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" onclick="buscar()">Buscar</button>
    </form>
  </div>
</nav></body>
