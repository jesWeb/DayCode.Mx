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
                        <form action="" method="post" id="formulario-login-cuenta">

                            <div class="mb-4">
                                <label for="text" class="form-label">Nombre</label>
                                <input type="text" name="Nombre" id="" class="form-control" placeholder="Nombre"
                                    required>
                            </div>
                            <div class="mb-4">
                                <label for="text" class="form-label">Apellido Paterno</label>
                                <input type="text" name="apellidos" id="" class="form-control"
                                    placeholder="Primer apellido:">
                            </div>
                            <div class="mb-4">
                                <label for="text" class="form-label">Apellido Materno</label>
                                <input type="text" name="apellidos " id="" class="form-control"
                                    placeholder="Segundo apellido">
                            </div>

                            <div class="mb-4">
                                <label for="date">Fecha de Naciemiento</label>
                                <input type="date" name="Fecha" id="" class="form-control" required min="">
                            </div>
                            <!-- opcion  -->
                            <div class=" mb-4 form-floating">
                                <select class="form-select" id="floatingSelect" aria-label="Servicios" name="Lista"
                                    required>
                                    <option value="Elige una opcion">Elige una opcion</option>
                                    <option value="1">Linea</option>
                                </select>
                                <label for="floatingSelect">estudiante</label>
                            </div>
                            <!-- SEXO -->
                            <div class="mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sexos"
                                    id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Masculino
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sexos"
                                    id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Femenino
                                </label>
                            </div>
                            </div>
                            <!--  -->
                            <div class="mb-4">
                                <label for="email" class="form-label"> Correo Electronico</label>
                                <input type="email" name="Email" class="form-control" placeholder="Escribe tu correo"
                                    required id="">
                            </div>
                            <!--  -->
                            <div class="mb-4">
                                <label for="password">Contraseña</label>
                                <input type="password" name="Contraseña" class="form-control"
                                    placeholder="Escribe tu contraseña" required id="" minlength="8" maxlength="8">
                            </div>

                            <div class="mb-5">
                                <input type="checkbox" name="conected" class="form-check-input " id="">
                                <label for="conected" class="form-check-label">Matenerme conectado</label>
                            </div>

                            <div class="d-grid">
                                <input type="submit" class="btn btn-primary" name="subir" value="Crear cuenta">
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