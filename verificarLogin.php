<?php
   
include("conexion.php");
if($_POST['correo'] && $_POST['contrasena']){

    if(isset($_POST['guarda'])){
        $correo=$_POST['correo'];
        $contrasena=$_POST['contrasena']; 
    $query="SELECT * FROM usuarios WHERE correo='$correo' AND contrasena='$contrasena'";
            $result=mysqli_query($con,$query);
            $correcto=0;
           
            while($row=mysqli_fetch_array($result)){
                $i=$row['id'];
                $n=$row['nombre'];
                $a=$row['apellidos'];
                $f=$row['fecha'];
                $u=$row['correo'];
                $s=$row['sexo'];
                $ad=$row['admin'];
                $correcto=1;
            }
            mysqli_close($con);
         if($correcto=1){
            session_start();
               $_SESSION['nombreusuario']=$n." ".$a; 
               $_SESSION['id']=$i; 
               $_SESSION['fecha']=$f; 
               $_SESSION['correo']=$u;
               $_SESSION['sexo']=$s;  
               $_SESSION['admin']=$ad;  
               
            header("Location: user_admin.php");

               
         }else{
             
            $_SESSION['error']='Usuario o contraseña incorrectos :(';
            header("Location: login.php");
            //session_unset();
         }          
        }
}else{
    
    $_SESSION['error']='Usuario o contraseña incorrectos :(';
    header("Location: login.php");
}

?>