<?php

session_start();
     $pagina_admin = 2;     
     $pagina_modificacion= 0;
     $nombre_pagina = "Home";
     $pagina =0;
     $modal=0;

require_once '../includes/header.php';
?>

    <?php
        include("../config/conexionDB.php");
    ?>
    <?php
        if(isset($_POST['enviar'])){
            $id_i=$_POST['idCli_falso'];
            $nombre_i=$_POST['nombre_f'];
            $ape_a_i=$_POST['ape_a_f'];
            $ape_b_i=$_POST['ape_b_f'];
            $idUser_i=$_POST['opc'];
            $email_i=$_POST['email_f'];
            $telefono_i=$_POST['tele_f'];
            $estatus_i=$_POST['estatus_f'];
            $fechaC_i=$_POST['fechaC_f'];

            $sql_e_i="UPDATE cliente SET nombre='".$nombre_i."', apellido_a='".$ape_a_i."',  apellido_b='".$ape_b_i."',  idTUsuario='".$idUser_i."',  email='".$email_i."',  telefono='".$telefono_i."', Estatus='".$estatus_i."', dateCreacion='".$fechaC_i."' WHERE idCliente='".$id_i."'";

            $resultado_e_i=mysqli_query($conexion, $sql_e_i);

            if($resultado_e_i){
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
            $idCliente=$_GET['idCliente'];

            $sql_e="SELECT * FROM cliente WHERE idCliente='".$idCliente."'";

            $resultado_e=mysqli_query($conexion, $sql_e);

            $fila_e=mysqli_fetch_assoc($resultado_e);

            $nombre_e=$fila_e["nombre"];
            $ape_a_e=$fila_e["apellido_a"];
            $ape_b_e=$fila_e["apellido_b"];
            $idUser_e=$fila_e["idTUsuario"];
            $email_e=$fila_e["email"];
            $telefono_e=$fila_e["telefono"];
            $estatus_e=$fila_e["Estatus"];
            $fechaC_e=$fila_e["dateCreacion"];

            mysqli_close($conexion);
        }
    ?>

<main>

<body>
    <div class="container">
        <h1 class="display-4 text-center">Editar registro</h1>
        
        <section class="mt-5">
            <form action="<?=$_SERVER['PHP_SELF']?>" method="POST" class="row g-3 mt-3 justify-content-center" >
                <div class="col-6">
                    <label for="" class="form-label">Nombre:</label>
                    <input type="text" name="nombre_f" id="" placeholder="Nombre" value="<?php echo $nombre_e; ?>" class="form-control">
                </div>
                <div class="col-6">
                    <label for="" class="form-label">Primer apellido:</label>
                    <input type="text" name="ape_a_f" id="" placeholder="Primer apellido" value="<?php echo $ape_a_e; ?>" class="form-control">
                </div>
                <div class="col-6">
                    <label for="" class="form-label">Segundo apellido:</label>
                    <input type="text" name="ape_b_f" id="" placeholder="Segundo apellido" value="<?php echo $ape_b_e; ?>" class="form-control">
                </div>
                <div class="col-6">
                    <label for="" class="form-label">Email:</label>
                    <input type="email" name="email_f" id="" placeholder="email@gamil.com" value="<?php echo $email_e; ?>" class="form-control"> 
                </div>
                <div class="col-6">
                    <label for="" class="form-label">Telefono:</label>
                    <input type="tel" name="tele_f" id="" placeholder="7200000000" value="<?php echo $telefono_e; ?>" class="form-control">
                </div>
                <div class="col-6">
                    <label for="" class="form-label">Estatus:</label>
                    <input type="number" name="estatus_f" id="sta" value="<?php echo $estatus_e; ?>" class="form-control">
                </div>
                <div class="col-12 mt-4 form-floating">
                    <select name="opc" class="form-select" id="" aria-label="Servicios">
                        <option value="0">-Elige el rol-</option>
                        <option value="Admin" <?php if($idUser_e=='Admin'){echo 'selected';} ?>>Administrador</option>
                        <option value="User" <?php if($idUser_e=='User'){echo 'selected';} ?>>Usuario</option>
                    </select>
                    <label for="floatingSelect">Indica el tipo de usuario:</label>
                </div>
                <div class="col-6">
                    <label for="" class="form-label">Fecha y hora de registro:</label>
                    <input type="datetime-local" name="fechaC_f" id="" value="<?php echo $fechaC_e; ?>" class="form-control">
                </div>   
                <input type="hidden" name="idCli_falso" value="<?php echo $idCliente; ?>">
                <div class="mb-3 text-center ">
                    <input type="submit" value="ACTUALIZAR" id="enviar" name="enviar" class="btn btn-primary rounded-2 col-4">
                </div>
            </form>
        </section>

    </div>
</body>
</main>
<?php 
    require_once '../includes/footer.php';
?>
