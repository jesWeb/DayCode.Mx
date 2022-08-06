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
    <!-- Descripcion -->
    <div class="container">
      <section class="mt-5">
        <div class="mt-5">
          <div class="row ">
            <div class="col-md-6 mt-5 img-course">
              <img src="./IMG/card-programa-1.jpg" alt="" class="img-fluid rounded-3">
            </div>
            <div class="col-md-6 mt-5">
              <h1>Introducción a la Programación</h1>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias dicta, voluptate provident
                exercitationem aspernatur voluptatibus similique architecto vel quo obcaecati quas perspiciatis nobis
                libero, explicabo dolorem, expedita error ipsam enim.</p>
              <p class="card-txt_cost">$5,000 <span class="card-txt_divi">MXN</span></p>
              <a href="#" class="btn btn-primary">COMPRAR</a>

            </div>
          </div>
        </div>
      </section>
      </section>
      <!-- Recomended -->
      <section class="mt-3 mb-4 bg-primary">
        <h3 class="h4">Recomendado para ti</h3>
        <!-- cards -->
        <section class="mt-3 mb-5">
          <div class="row">
            <!-- card 1 -->
            <div class="col-sm-4 mt-md-4">
              <a href="" class="text-decoration-none">
                <div class="card">
                  <!-- img  card-->
                  <div class="card-Rc">
                    <img src="./IMG/card-programa-1.jpg" class="card-Rc_img img-fluid" alt="">
                  </div>
                  <!-- description -->
                  <div class="card-body">
                    <!-- title -->
                    <h4 class="card-title h5 text-dark">
                      JAVA
                    </h4>
                    <!-- descr -->
                    <p class="card-text_p">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis impedit dolorem natus.
                      <br>
                      <span class="card-precio">$11,000</span>
                    </p>
                    <!-- precio -->
                    <p class="card-txt_cost">$5,000 <span class="card-txt_divi">MXN</span></p>
                  </div>
                </div>
              </a>
            </div>
            <!-- card -->
            <div class="col-md-4 mt-md-4">
              <a href="" class="text-decoration-none">
                <div class="card">
                  <!-- img  card-->
                  <div class="card-Rc">
                    <img src="./IMG/card-maqueta-2.jpg" class="card-Rc_img img-fluid" alt="">
                  </div>
                  <!-- description -->
                  <div class="card-body">
                    <!-- title -->
                    <h4 class="card-title h5 text-dark">
                      Desarrollo Web
                    </h4>
                    <!-- descr -->
                    <p class="card-text_p">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis impedit dolorem
                      natus.
                      <br>
                      <span class="card-precio">$11,000</span>
                    </p>
                    <!-- precio -->
                    <p class="card-txt_cost">$5,000 <span class="card-txt_divi">MXN</span></p>
                  </div>
                </div>
              </a>
            </div>
            <!-- card -->
            <div class="col-md-4 mt-md-4">
              <a href="" class="text-decoration-none">
                <div class="card">
                  <!-- img  card-->
                  <div class="card-Rc">
                    <img src="./IMG/card-programa-2.jpg" class="card-Rc_img img-fluid" alt="">
                  </div>
                  <!-- description -->
                  <div class="card-body">
                    <!-- title -->
                    <h4 class="card-title h5 text-dark">
                      Base de Datos
                    </h4>
                    <!-- descr -->
                    <p class="card-text_p">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis impedit dolorem
                      natus.
                      <br>
                      <span class="card-precio">$11,000</span>
                    </p>
                    <!-- precio -->
                    <p class="card-txt_cost">$5,000 <span class="card-txt_divi">MXN</span></p>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </section>
      </section>
    </div>

  </body>
</main>

<?php 
require_once '../includes/footer.php';
?>