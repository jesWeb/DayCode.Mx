<?php
date_default_timezone_set('America/Mexico_City');
try {
  $PDO = new PDO('mysql:host=localhost; dbname=daycode','root','123456');
} catch (PDOException $e) {
  echo 'Error!!'.$e->getMessage();
}
  $conexion = new mysqli('localhost', 'root', '123456', 'daycode');
?>