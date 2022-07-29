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
            $nombre_cur=$_POST['nombre_cur_f'];
            $categoria_cur=$_POST['catego_cur_f'];
            $duracion_cur=$_POST['dura_cur_f'];
            $descrip_cur=$_POST['descri_cur_f'];
            $costo_cur=$_POST['costo_cur_f'];

            include("../config/conexionDB.php");

            $sql_i_cur="INSERT INTO cursos(Nombre, Categoria, Duracion, Descripcion, Costo) VALUES ('".$nombre_cur."','".$categoria_cur."','".$duracion_cur."','".$descrip_cur."','".$costo_cur."')";

            $resultado_i_cur=mysqli_query($conexion, $sql_i_cur);

            if($resultado_i_cur){
                echo "<script language='JavaScript'>
                    alert('Los datos fueron insertados');
                    location.assign('../User/panel.php');
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
        <h1 class="display-4 text-center">Insercion de datos</h1>
        
        <section class="mt-5">
            <form action="<?=$_SERVER['PHP_SELF']?>" method="POST" class="row g-3 mt-3 justify-content-center" >
                <div class="col-6">
                    <label for="" class="form-label">Nombre:</label>
                    <input type="text" name="nombre_cur_f" id="" placeholder="Nombre" class="form-control">
                </div>
                <div class="col-6">
                    <label for="" class="form-label">Categoria:</label>
                    <input type="text" name="catego_cur_f" id="" placeholder="Primer apellido" class="form-control">
                </div>
                <div class="col-6">
                    <label for="" class="form-label">Duración:</label>
                    <input type="time" name="dura_cur_f" id="" class="form-control" >
                </div>
                <div class="col-6">
                    <label for="" class="form-label">Costo:</label>
                    <input type="text" name="costo_cur_f" id="" class="form-control">
                </div>
                <div class="col-12">
                    <label for="floatingTextarea">Descripción:</label>
                    <textarea class="form-control" name="descri_cur_f" id="floatingTextarea"></textarea>
                </div>

                <div class="mb-3 text-center ">
                    <input type="submit" value="INSERTAR" id="enviar" name="enviar" class="btn btn-primary rounded-2 col-4">
                </div>
            </form>
        </section>

    </div>
</body>
</main>
<?php 
    require_once '../includes/footer.php';
?>
