<?php

    $id_cur=$_GET['ID'];

    include("../config/conexionDB.php");

    $sql_d_cur="DELETE FROM cursos WHERE ID='".$id_cur."'";
    $resultado_d_cur=mysqli_query($conexion, $sql_d_cur);

    if($resultado_d_cur){
        echo "<script language='JavaScript'>
            alert('Los datos FUERON ELIMINADOS');
            location.assign('../crud/panel_control.php');
        </script>";
    }else{
        echo "<script language='JavaScript'>
            alert('ERROR');
        </script>";
    }

?>