
<?php

session_start();
include("conexion.php");
$idusuario=$_SESSION['id'];
$mensaje = $_POST['calle'];
echo "<script>console.log('".$mensaje."');</script>";

if(isset($_POST['calle'])){
    $callle =$_POST['calle'];
    $numero=$_POST['numero'];
    $colonia= $_POST['colonia'];
    $codigoPostal=$_POST['codigoPostal'];
    $ciudad=$_POST['ciudad'];
    $idEstado=$_POST['estado'];


    $query="INSERT INTO TAB_DIRECCIONES(
                    CALLE,      NUMERO_CALLE,       COLONIA,    CODIGO_POSTAL,      CIUDAD,   ID_ESTADO,    ID_USUARIO
            )VALUES('$callle',    '$numero',           '$colonia',   '$codigoPostal',      '$ciudad',  
            '$idEstado', 
            '$idusuario')";

    $resultado=mysqli_query($con,$query);

}

?>            