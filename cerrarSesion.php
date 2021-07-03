<?php
session_start();
if(!isset($_SESSION['nombreusuario'])){
  header("location: login.php");
}?>
<?php
session_start();
if(!isset($_SESSION['nombreusuario'])){
  header("location: login.php");
}
session_unset();
header("location: login.php");


?>