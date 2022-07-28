<?php

    $idCliente=$_GET['idCliente'];

    include("./config/conexionDB.php");

    $sql_d="DELETE FROM cliente WHERE idCliente='".$idCliente."'";
    $resultado_d=mysqli_query($conexion, $sql_d);

    if($resultado_d){
        echo "<script language='JavaScript'>
            alert('Los datos FUERON ELIMINADOS');
            location.assign('./panel_control.php');
        </script>";
    }else{
        echo "<script language='JavaScript'>
            alert('ERROR');
        </script>";
    }

?>