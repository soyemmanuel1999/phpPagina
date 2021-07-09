
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 
</head>
<body>

        <?php session_start();
        
        if (isset($_SESSION['error'])){
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">';
      echo  $_SESSION['error'];
     echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
        </button></div>';
        session_unset();}?>
     
    
<div class="container">



    <div class = "col d-flex justify-content-center">
        <div class="card" style="width: 30rem;" >   
         <img src="img/userlogin664.png" class="card-img-top" alt="la imagen no fue encontrada">
         <div class="card-body">
         <h5 class="card-title">JUGUETES OAXACA</h5>
         <form action="verificarLogin.php" method="POST">
        <div class="form-group">
        <label for="formGroupExampleInput">Correo electrónico</label>
        <input type="text" class="form-control" id="formGroupExampleInput" name="correo">
        </div>
        <div class="form-group">
        <label for="formGroupExampleInput">Contraseña</label>
        <input type="password" class="form-control" id="formGroupExampleInput" name="contrasena">
        </div>

        <input type="submit" class="btn btn-primary" name="guarda" value="Ingresar">

            </form>
            <label for="">¿no tienes una cuenta?</label><a href="registro.php"> registrarme</a>
            </div>
        </div>
    </div>

    
</body>
</html>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
