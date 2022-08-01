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
            $fechaN_i=$_POST['fechaN_f'];
            $idUser_i=$_POST['idU_f'];
            $email_i=$_POST['email_f'];
            $telefono_i=$_POST['tele_f'];
            $idServ_i=$_POST['IdS_f'];
            $estatus_i=$_POST['estatus_f'];
            $sexo_i=$_POST['sexo_f'];
            $contra_i=$_POST['contra_f'];
            $fechaC_i=$_POST['fechaC_f'];

            $sql_e_i="UPDATE cliente SET nombre='".$nombre_i."', apellido_a='".$ape_a_i."',  apellido_b='".$ape_b_i."', fechaNac='".$fechaN_i."',  idTUsuario='".$idUser_i."',  email='".$email_i."',  telefono='".$telefono_i."', idServicio='".$idServ_i."', Estatus='".$estatus_i."', Sexo='".$sexo_i."',  Contra='".$contra_i."', dateCreacion='".$fechaC_i."' WHERE idCliente='".$id_i."'";

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
            $fechaN_e=$fila_e["fechaNac"];
            $idUser_e=$fila_e["idTUsuario"];
            $email_e=$fila_e["email"];
            $telefono_e=$fila_e["telefono"];
            $idServ_e=$fila_e["idServicio"];
            $estatus_e=$fila_e["Estatus"];
            $sexo_e=$fila_e["Sexo"];
            $contra_e=$fila_e["Contra"];
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
                    <label for="" class="form-label">Fecha:</label>
                    <input type="date" name="fechaN_f" id="fechaN" value="<?php echo $fechaN_e; ?>" class="form-control">
                </div>
                <div class="col-6">
                    <label for="" class="form-label">ID de Usuario:</label>
                    <input type="number" name="idU_f" id="" value="<?php echo $idUser_e; ?>" class="form-control">
                </div>
                <div class="col-6">
                    <label for="" class="form-label">Email:</label>
                    <input type="email" name="email_f" id="" placeholder="email@gamil.com" value="<?php echo $email_e; ?>" class="form-control"> 
                </div>
                <div class="col-4">
                    <label for="" class="form-label">Telefono:</label>
                    <input type="tel" name="tele_f" id="" placeholder="7200000000" value="<?php echo $telefono_e; ?>" class="form-control">
                </div>
                <div class="col-4">
                    <label for="" class="form-label">Id de Servicio:</label>
                    <input type="number" name="IdS_f" id="IdSer" value="<?php echo $idServ_e; ?>" class="form-control">
                </div>
                <div class="col-4">
                    <label for="" class="form-label">Estatus:</label>
                    <input type="number" name="estatus_f" id="sta" value="<?php echo $estatus_e; ?>" class="form-control">
                </div>
                <div class="col-12 mt-4 form-floating">
                    <select name="sexo_f" class="form-select" id="floatingSelect" aria-label="Servicios">
                        <option value="0">Elige el sexo</option>
                        <option value="h" <?php if($sexo_e=='h'){echo 'selected';} ?> >Hombre</option>
                        <option value="m" <?php if($sexo_e=='m'){echo 'selected';} ?> >Mujer</option>
                    </select>
                    <label for="floatingSelect">Indica el genero del cliente:</label>
                </div>
                <div class="col-6">
                    <label for="" class="form-label">Contraseña:</label>
                    <input type="text" name="contra_f" id="" placeholder="Contraseña" value="<?php echo $contra_e; ?>" class="form-control">
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
