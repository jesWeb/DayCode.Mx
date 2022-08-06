<?php

session_start();
     $pagina_admin = 2;     
     $pagina_modificacion= 0;
     $nombre_pagina = "Home";
     $pagina =0;
     $modal=0;

require_once '../includes/header.php';

?>

<main>
    <?php
        if(isset($_POST['enviar'])){
            //ANTES DE ESTO DEBERIA IR UNA VALIDACION 
            $nombre_i=$_POST['nombre_f'];
            $ape_a_i=$_POST['ape_a_f'];
            $ape_b_i=$_POST['ape_b_f'];
            $fechaN_i=$_POST['fechaN_f'];
            $idUser_i=$_POST['opc'];
            $email_i=$_POST['email_f'];
            $telefono_i=$_POST['tele_f'];
            $idServ_i=$_POST['IdS_f'];
            $estatus_i=$_POST['estatus_f'];
            $sexo_i=$_POST['sexo_f'];
            $contra_i=$_POST['contra_f'];
            $fechaC_i=$_POST['fechaC_f'];

            include("../config/conexionDB.php");

            $sql_i="INSERT INTO cliente(nombre, apellido_a, apellido_b, fechaNac, idTUsuario, email, telefono, idServicio, Estatus, Sexo, Contra, dateCreacion) VALUES ('".$nombre_i."','".$ape_a_i."','".$ape_b_i."','".$fechaN_i."','".$idUser_i."','".$email_i."','".$telefono_i."','".$idServ_i."','".$estatus_i."','".$sexo_i."','".$contra_i."','".$fechaC_i."')";

            $resultado_i=mysqli_query($conexion, $sql_i);

            if($resultado_i){
                echo "<script language='JavaScript'>
                    alert('Los datos fueron insertados');
                    location.assign('../crud/panel_control.php');
                </script>";
            }else{
                echo "<script language='JavaScript'>
                    alert('ERROR');
                </script>";
            }
            mysqli_close($conexion);

        }else{
        }
    ?>

<body>
    <div class="container">
        <h1 class="display-4 text-center">Inserccion de datos</h1>
        
        <form action="<?=$_SERVER['PHP_SELF']?>" method="POST" class="caja">
            <input type="text" name="nombre_f" id="" placeholder="Nombre">
            <input type="text" name="ape_a_f" id="" placeholder="Primer apellido">
            <input type="text" name="ape_b_f" id="" placeholder="Segundo apellido">
            <label for="fechaN">Fecha</label>
            <input type="date" name="fechaN_f" id="fechaN">
            <select name="opc" id="" class="selec-sex">
                <option value="0" selected>Selecciona el tipo de servicio:</option>
                <option value="Admin">Administrador</option>
                <option value="User">Usuario</option>
            </select>
            <input type="email" name="email_f" id="" placeholder="email@gamil.com">
            <input type="tel" name="tele_f" id="" placeholder="7200000000">
            <label for="IdSer">Id de Servicio</label>
            <input type="number" name="IdS_f" id="IdSer">
            <label for="sta">Estatus</label>
            <input type="number" name="estatus_f" id="sta">
            <select name="sexo_f" id="" class="selec-sex">
                <option value="0" selected>Selecciona el sexo:</option>
                <option value="m">Hombre</option>
                <option value="h">Mujer</option>
            </select>
            <input type="password" name="contra_f" id="" placeholder="Contraseña">
            <label for="fechaR">Fecha y hora de registro</label>
            <input type="datetime-local" name="fechaC_f" id="">

            <input type="submit" value="AGREGAR" id="enviar" name="enviar">
        </form>

    </div>
</body>
</main>
<?php 
    require_once '../includes/footer.php';
?>
