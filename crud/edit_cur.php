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
            
            $id_cur=$_POST['id_cur_falso'];
            $nombre_cur=$_POST['nombre_cur_f'];
            $categoria_cur=$_POST['catego_cur_f'];
            $duracion_cur=$_POST['dura_cur_f'];
            $descrip_cur=$_POST['descri_cur_f'];
            $costo_cur=$_POST['costo_cur_f'];


            $sql_e_cur="UPDATE cursos SET Nombre='".$nombre_cur."', Categoria='".$categoria_cur."',  Duracion='".$duracion_cur."', Descripcion='".$descrip_cur."',  Costo='".$costo_cur."' WHERE ID='".$id_cur."'";

            $resultado_e_cur=mysqli_query($conexion, $sql_e_cur);

            if($resultado_e_cur){
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
            $id_cur_act=$_GET['ID'];

            $sql_cur_act="SELECT * FROM cursos WHERE id='".$id_cur_act."'";

            $resultado_cur_act=mysqli_query($conexion, $sql_cur_act);

            $fila_cur_actu=mysqli_fetch_assoc($resultado_cur_act);

            $nombre_e_a=$fila_cur_actu["Nombre"];
            $cat_e_a=$fila_cur_actu["Categoria"];
            $dur_e_a=$fila_cur_actu["Duracion"];
            $des_e_a=$fila_cur_actu["Descripcion"];
            $cost_e_a=$fila_cur_actu["Costo"];

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
                    <input type="text" name="nombre_cur_f" id="" placeholder="Nombre" value="<?php echo $nombre_e_a; ?>" class="form-control">
                </div>
                <div class="col-6">
                    <label for="" class="form-label">Categoria:</label>
                    <input type="text" name="catego_cur_f" id="" placeholder="Primer apellido" value="<?php echo $cat_e_a; ?>" class="form-control">
                </div>
                <div class="col-6">
                    <label for="" class="form-label">Duración:</label>
                    <input type="time" name="dura_cur_f" id="" value="<?php echo $dur_e_a; ?>"  class="form-control">
                </div>
                <div class="col-6">
                    <label for="" class="form-label">Costo:</label>
                    <input type="text" name="costo_cur_f" id="" value="<?php echo $cost_e_a; ?>" class="form-control">
                </div>
                <div class="col-12">
                    <label for="floatingTextarea">Descripción:</label>
                    <textarea class="form-control" name="descri_cur_f" id="floatingTextarea"><?php echo $des_e_a; ?></textarea>
                </div>

                <input type="hidden" name="id_cur_falso" value="<?php echo $id_cur_act; ?>">

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
