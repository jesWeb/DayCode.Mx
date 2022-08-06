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

  <body>
    <section class="container mt-5 ">
      <div class="d-flex mt-5 align-content-center">
        <div class="bg-light  p-3 shadow mt-5 ">
          <h3 class="text-center">Comparte tu historia con la comunidad Daycode </h3>
          <form method="post" class="row g-3 mt-3 justify-content-center" id=""
            action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
            <!--name  -->
            <div class="col-6">
              <label for="" class="form-label">Nombre</label>
              <input type="text" class="form-control" name="Nombre" id="" placeholder="@Nombre" minlength="4"
                maxlength="20" pattern="[a-zA-Z ]{4,20}" required>
            </div>
            <!--first-name -->
            <div class="col-6">
              <label for="" class="form-label">Apellido Paterno</label>
              <input type="text" class="form-control" name="Apellido_a" id="" placeholder="@Apellido" minlength="4"
                maxlength="15" pattern="[a-zA-Z ]{4,20}" required>
            </div>
            <!--second-name  -->
            <div class="col-6">
              <label for="" class="form-label">Apellido Materno</label>
              <input type="text" class="form-control" name="Apellido_b" id="" placeholder="@Apellido" minlength="4"
                maxlength="15" pattern="[a-zA-Z ]{4,20}" required>
            </div>

            <div class="col-6 col-md-6">
              <label for="" class="form-label">Email</label>
              <input type="email" class="form-control" name="Email" id="" placeholder="@gmail.com" minlength="12"
                maxlength="40" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 4}$" required>
            </div>

            <!-- services opcion -->
            <div class="col mt-4 form-floating">
              <select class="form-select" id="floatingSelect" aria-label="Servicios" name="Lista" required>
                <option value="Elige una opcion">Elige una opcion</option>
                <option value="Desarrollo Web">Desarrollo Web</option>
                <option value="Desarrollo de Software">Desarrollo de Software</option>
                <option value="Capacitación empresarial">Capacitación empresarial</option>
                <option value="Gestión de Base de Datos">Gestión de Base de Datos</option>
                <option value="SEO">SEO</option>
                <option value="Cursos">Cursos</option>
              </select>
              <label for="floatingSelect">Curso</label>
            </div>
            <!-- descripcion -->
            <div class="form-floating col-12 ">
              <textarea class="form-control" name="Area" placeholder="Mi @empresa es...." id="floatingTextarea"
                minlength="20" maxlength="150"></textarea>
              <label for="floatingTextarea">Mi experiencia en DayCode fue:</label>
            </div>
            <!-- btn-form -->
            <div class="mb-3 mt-4 text-center ">
              <input type="submit" name="subir" class="btn btn-primary rounded-2  col-4">
              <!-- <a href="" type="submit" class="btn btn-primary rounded-2 col-4">Enviar</a> -->
            </div>
          </form>
        </div>
      </div>
    </section>
  </body>

</main>

<?php 
require_once '../includes/footer.php';
?>