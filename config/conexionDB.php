<?php
date_default_timezone_set("America/Mexico_City");
try {
   $PDO = new PDO('mysql:host=localhost; dbname=consul_old','root','');
   } catch (PDOException $e) {
       echo "Error!!".$e->getMessage();
  }
  $conexion = new mysqli("localhost", "root", "", "consul_old");
?>