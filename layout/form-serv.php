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
    <div class="container ">
      <div class="row bg-form">
        <div class="col-6">
          <!-- form -->
          <div class="box-form">
            <h1>¿Quien nos escribe?</h1>

            <form action="" class="">
              <!-- Name -->
              <input type="text" name="" id="" placeholder="Nombre" />

              <!-- Ape-parterno -->
              <input type="text" name="" id="" placeholder="Apellido Paterno" />

              <!-- Ape-Materno -->
              <input type="text" name="" id="" placeholder="Apellido Materno" />

              <!-- Telefono -->
              <input type="text" name="" id="" placeholder="Telefono" />

              <!-- Email -->
              <input type="email" name="" id="" placeholder="Correo electronico" />

              <!--Name-empresa-->
              <input type="text" name="" id="" placeholder="Nombre de tu empresa" />

              <!-- description -->
              <textarea name="" id="" cols="30" rows="10" placeholder="Compartenos sobre tu Empresa"> </textarea>
            </form>
            <!-- btn-form -->
            <a href="" class="btn btn-primary">Enviar</a>
          </div>
        </div>
        <!-- description-form -->
        <div class="col-6 Desc-form">
          <!-- descripcion -->
          <div class="bg-danger">
            <p>
              “Vemos a nuestros clientes como los invitados de <br />
              una fiesta en la que nosotros somos los anfitriones. <br />
              <br />
              Nuestro trabajo es hacer que cada aspecto importante<br />
              de la experiencia del consumidor sea un poco mejor”
            </p>
            <img src="./IMG/icons/undraw_add_to_cart_re_wrdo.svg" class="svg-form" alt="" />
          </div>
        </div>
      </div>
    </div>
  </body>
</main>

<?php 
require_once '../includes/footer.php';
?>