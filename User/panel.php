<?php

session_start();
     $pagina_admin = 2;     
     $pagina_modificacion= 0;
     $nombre_pagina = "Home";
     $pagina =0;
     $modal=0;

require_once '../includes/header.php';

?>

<script type="text/javascript">
    function confirmar() {
        return confirm('¿Realmente estas seguro de eliminar este registro?, los datos no podran ser recuperados...');
    }
</script>

<main>
    <?php
        // include("./config/conexionDB.php");
        include("../config/conexionDB.php");
        $sql="SELECT * FROM cliente";    
        $resul=mysqli_query($conexion, $sql);

        $sql_cur="SELECT * FROM cursos";    
        $resul_cur=mysqli_query($conexion, $sql_cur);

    ?>

    <body>
        <div class="container">

            <section class="m-3">
                <div class="row">
                    <h1 class="h3">
                        "Bienvenido <span class="p-1"> <?php 
                  echo $_SESSION['nombre'].' '.$_SESSION ['apellidos']; 
                ?> </span>"
                    </h1>
                    <div class="col-6"></div>
                    <!-- row seccion cursos -->
                    <div class="row justify-content-evenly">
                        <div class="col-4">
                            <h4></h4>
                            <p></p>
                            <a href="" class="btn  btn-primary">Continuar curso</a>
                        </div>
                        <div class="col-4">
                            <h4></h4>
                            <p></p>
                            <a href="" class="btn  btn-primary">Continuar curso</a>
                        </div>
                        <div class="col-4">
                            <h4></h4>
                            <p></p>
                            <a href="" class="btn  btn-primary">Continuar curso</a>
                        </div>
                    </div>
                </div>
            </section>
            <?php
            mysqli_close($conexion);
        ?>
        </div>
    </body>
</main>

<?php 
require_once '../includes/footer.php';
?>