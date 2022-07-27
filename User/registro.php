<?php 

    
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


<body>
    <section class="container">
        <div class="mt-5 d-flex align-content-center justify-content-center ">
            <div class="  shadow h-25 w-75">
                <div class="row justify-content-center">
                    <!-- form -->
                    <div class="col-md-8 col-sm-12 p-5">
                        <!-- img    -->
                        <div class="text-center border-bottom border-primary border-2">
                            <img src="<?= base_url?>assets/IMG/DAYCODE-nav.png" class="img-fluid mb-3 " alt="">
                        </div>
                        <!--  -->
                        <h2 class="fw-bl text-center pt-4 mb-4">Crear una cuenta</h2>

                        <!-- form -->
                        <form action="" method="post" >

                            <div class="mb-4">
                                <label for="text" class="form-label">Nombre</label>
                                <input type="text" name="Nombre" id="" class="form-control" placeholder="Nombre"
                                    required>
                            </div>
                            <div class="mb-4">
                                <label for="text" class="form-label">Apellido Paterno</label>
                                <input type="text" name="Apellido_a" id="" class="form-control"
                                    placeholder="Primer apellido:">
                            </div>
                            <div class="mb-4">
                                <label for="text" class="form-label">Apellido Materno</label>
                                <input type="text" name="Apellido_b" id="" class="form-control"
                                    placeholder="Segundo apellido">
                            </div>

                            <div class="mb-4">
                                <label for="date">Fecha de Naciemiento</label>
                                <input type="date" name="Fecha" id="" class="form-control" required min="">
                            </div>

                            <div class="mb-4">
                                <label for="email" class="form-label"> Correo Electronico</label>
                                <input type="email" name="Email" class="form-control" placeholder="Escribe tu correo"
                                    required id="">
                            </div>

                            <div class="mb-4">
                                <label for="password">Contraseña</label>
                                <input type="password" name="Contraseña" class="form-control"
                                    placeholder="Escribe tu contraseña" required id="" minlength="8" maxlength="8"
                                    pattern="[a-z A-Z 0-9]{8,8}">
                            </div>

                            <div class="mb-5">
                                <input type="checkbox" name="conected" class="form-check-input " id="">
                                <label for="conected" class="form-check-label">Matenerme conectado</label>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary" name="subir">Crear cuenta</button>
                            </div>

                            <div class="my-4">
                                <!--usuario -->
                                <p class="text-center ">¿Ya tienes una cueta? <a href="./login.html"> ir </a></p>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

















<?php 
require_once '../includes/footer.php';

?>