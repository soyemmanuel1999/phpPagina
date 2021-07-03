
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
<div class="container">

<form action="reUsuario.php" method="POST">
<div class="form-group">
        <label for="formGroupExampleInput">Nombre</label>
        <input type="text" class="form-control" id="formGroupExampleInput" name="nombre" aria-describedby="inputGroupPrepend2" required>
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Apellidos</label>
        <input type="text" class="form-control" id="formGroupExampleInput" name="apellidos" aria-describedby="inputGroupPrepend2" required>
    </div>
     
  <div class="form-group">
        <label for="formGroupExampleInput2">Nombre de usuario</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" name="correo" aria-describedby="inputGroupPrepend2" required>
  </div>
  <div class="form-group">
        <label for="formGroupExampleInput2">Contraseña</label>
        <input type="password" class="form-control" id="formGroupExampleInput2" name="contrasena" aria-describedby="inputGroupPrepend2" required>
  </div>
  <div class="form-group">
        <label for="formGroupExampleInput2">telefono</label>
        <input type="number" class="form-control" id="formGroupExampleInput2" name="telefono" aria-describedby="inputGroupPrepend2" required>
  </div>
  <div class="form-group">
        <label for="formGroupExampleInput2">fecha</label>
        <input type="date" class="form-control" id="formGroupExampleInput2" name="fecha" aria-describedby="inputGroupPrepend2" required>
  </div>
  <div class="form-group" >
        <label for="formGroupExampleInput2">sexo</label>
        <select class="custom-select" id="sexo" name="sexo" aria-describedby="inputGroupPrepend2" required>
 
    <option value="hombre">hombre</option>
    <option value="mujer">mujer</option>
    <option value="otro">otro</option>
    
    
    </select>
    
  </div>


  
<input type="submit" class="btn btn-primary" name="guarda" value="Registrarme">

</form>
</div>
</body>
</html>