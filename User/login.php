<?php 

    session_start();
     $pagina_admin = 2;     
     $pagina_modificacion= 0;
     $nombre_pagina = "Home";
     $pagina =0;
     $modal=0;
     require_once '../includes/header.php';



    if (session_start ()) {
        # code...
    }
    else {session_start ();
        # code...
    }

    $nombre_pagina = "inicio";
    require_once '../includes/header.php';
?>

<section class="container  mt-5 pt-5 shadow">
        <div class="row  align-items-stretch form-main ">
            
            <!-- FORM -->
            <div class="col ">
                <!-- img  -->
                <div class="text-center border-bottom border-primary border-2">
                    <img src="./IMG/DAYCODE-nav.png" class="img-fluid mb-2 " alt="">
                </div>
                <!-- title -->
                <h2 class="fw-bl text-center pt-4 mb-4">Iniciar Seción</h2>
                <!-- form -->
                <form id="formulario-login">

                    <div class="mb-4">
                        <label for="email" class="form-label"> Correo Electronico</label>
                        <input type="email" name="correo-electronico" class="form-control"
                            placeholder="Escribe tu correo" required id="">
                    </div>

                    <div class="mb-4">
                        <label for="password">Contraseña</label>
                        <input type="password" name="contraseña" class="form-control"
                            placeholder="Escribe tu contraseña" required id="">
                    </div>

                    <div class="d-grid">
                        <input  type="submit" class="btn btn-primary" value="Inciar sesion">
                    </div>


                    <div class="my-5">
                        <!-- password -->
                        <p class="text-center "><a href="">¿Olvidaste tu Contraseña? </a></p>
                    </div>
                </form>
            </div>
        </div>
</section>


<?php 
require_once '../includes/footer.php';

?>