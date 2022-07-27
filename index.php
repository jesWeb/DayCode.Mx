<!-- soy un comentario -->
<?php

if (session_start ()) {
    # code...
}
else {session_start ();
    # code...
}

 $nombre_pagina = "inicio";
 $pagina_admin = 0;     
 $pagina_modificacion= 0;
 $nombre_pagina = "Home";
 $pagina =1;
 $modal = 1;
require_once 'includes/header.php';

?>

<!-- Main -->
<main>
<body>
<!-- img-prom -->
<div class="prom container mb-5">
  <!-- img -->
  <div class="prom-img">
    <img src="./IMG/prueba.png" class="img-fluid" alt="">
  </div>
</div>
<div class="container">
  <!-- daycode descrip  -->
  <div class="row bg-light mb-4">
    <!--  -->
    <div class="col">
      <img src="./IMG/DAYCODE-logo.png" class=" mt-3 img-fluid" alt="">
    </div>
    <!--  -->
    <div class="col">
      <p><span class="h3">DayCode.mx</span> es una agencia digital mexicana especializada en IT.
        <br>Conocemos a
        nuestras audiencias de principio a fin, Esto nos permite desarrollar posibilidades en el
        ámbito
        digital y
        multiplicar las oportunidades </p>
    </div>
  </div>
  <!-- services -->
  <section class="mb-5 mt-4 ">
    <div class=" mb-5">
      <div class="col-7">
        <h3>titulo</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla odit ipsa officia qui vero a ut quisquam ex tenetur enim iste consequuntur, quasi et nemo possimus doloremque ducimus earum sed explicabo eveniet eaque! Obcaecati blanditiis esse, nam itaque illum magnam reprehenderit. Assumenda eaque sapiente maxime explicabo libero nulla odit earum.</p>
      </div>
    </div>
    <!--cards-->
    <div class="mt-5">
      <div class="row  align-items-center ">
        <div class="col">
          <div class="card border-0">
            <div class=" text-center p-3">
              <img src="./IMG/icons/SEO-icon.svg" alt="">
            </div>
            <div class="card-body text-center">
              <h3 class="card-titulo">seo</h3>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam aliquid facere quis possimus maiores accusamus.</p>
            </div>

          </div>
        </div>
        <div class="col">
          <div class="card border-0">
            <div class=" text-center p-3">
              <img src="./IMG/icons/web-icon.svg" alt="">
            </div>
            <div class="card-body text-center">
              <h3 class="card-titulo">web</h3>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam aliquid facere quis possimus maiores accusamus.</p>
            </div>

          </div>
        </div>
        <div class="col">
          <div class="card border-0">
            <div class=" text-center p-3">
              <img src="./IMG/icons/Data-icon.svg" alt="">
            </div>
            <div class="card-body text-center">
              <h3 class="card-titulo">Data Base</h3>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam aliquid facere quis possimus maiores accusamus.</p>
            </div>

          </div>
        </div>
      </div>
      <div class="col m-3 text-end">
        <a href="" class="btn btn-primary">Conoce mas</a>
      </div>
    </div>
  </section>
  <!-- Recomended -->
  <section class="mt-3 mb-4">
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
                <img src="./IMG/card-programa-2.jpg" class="card-Rc_img" alt="">
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
  <!-- Day academy -->
  <section class=" mb-4">
    <!-- academy content -->
    <div class="row justify-content-center aling-items-center">
      <!--Descr -->
      <div class="col-md-6 ">
        <div class=" ">
          <!-- title -->
          <h3>DayAcademy</h3>
          <!-- text -->
          <p class="">Vive como si fueses a morir mañana. <br> Aprende como si fueses a vivir para
            siempre.</p>
          <!-- btn -->
          <a href="" class="btn btn-primary "> Aprende ahora</a>
        </div>
      </div>
      <!-- Img -->
      <div class="col-md-6">
        <img src="./IMG/DayAcademy.png" class="img-fluid" alt="">
      </div>
    </div>
  </section>
  <!-- daycoders -->
  <section class=" mb-4">
    <!-- description -->
    <div class="Day-coders_desc  p-3">
      <!-- title -->
      <h3 class="">DayCoders</h3>
      <!-- desciption -->
      <p>Un buen proyecto con lleva una gran resposabilidad,<br>y nuestro equipo de "coders" te
        dejara
        satisfecho.
      </p>
    </div>
    <!-- cards coders -->
    <div class="coders-info  mt-3">
      <div class="row">
        <!-- card -->
        <div class="col-md-4">
          <div class="coder shadow-sm m-2">
            <!-- img -->
            <div class="coders-img">
              <img src="./IMG/coder-1.png" class="coders-img_picture" alt="">
            </div>
            <!-- info -->
            <div class="coder-info m-4">
              <h4 class="text-center h5 ">titulo</h4>
            </div>
            <!-- btn -->
            <div class="coder-social">
              <a href="" class="text-decoration-none"><img src="./IMG/icons/Vector-facebook.svg"
                  class="coder-social_link" alt=""></a>
              <a href="" class="text-decoration-none"><img src="./IMG/icons/Vector-linkedin.svg"
                  class="coder-social_link" alt=""></a>
              <a href="" class="text-decoration-none"><img src="./IMG/icons/Vector-insta.svg"
                  class="coder-social_link" alt=""></a>
            </div>
          </div>
        </div>
        <!-- card -->
        <div class="col-md-4">
          <div class="coder shadow-sm m-2">
            <!-- img -->
            <div class="coders-img">
              <img src="./IMG/coder-2.png" class="coders-img_picture" alt="">
            </div>
            <!-- info -->
            <div class="coder-info m-4">
              <h4 class="text-center h5 ">La sabelo Todo</h4>
            </div>
            <!-- btn -->
            <div class="coder-social">
              <a href="" class="text-decoration-none"><img src="./IMG/icons/Vector-facebook.svg"
                  class="coder-social_link" alt=""></a>
              <a href="" class="text-decoration-none"><img src="./IMG/icons/Vector-linkedin.svg"
                  class="coder-social_link" alt=""></a>
              <a href="" class="text-decoration-none"><img src="./IMG/icons/Vector-insta.svg"
                  class="coder-social_link" alt=""></a>
            </div>
          </div>
        </div>
        <!-- card -->
        <div class="col-md-4">
          <div class="coder shadow-sm m-2">
            <!-- img -->
            <div class="coders-img">
              <img src="./IMG/coder-3.png" class="coders-img_picture" alt="">
            </div>
            <!-- info -->
            <div class="coder-info m-4">
              <h4 class="text-center h5 ">El Genio</h4>
            </div>
            <!-- btn -->
            <div class="coder-social">
              <a href="" class="text-decoration-none"><img src="./IMG/icons/Vector-facebook.svg"
                  class="coder-social_link" alt=""></a>
              <a href="" class="text-decoration-none"><img src="./IMG/icons/Vector-linkedin.svg"
                  class="coder-social_link" alt=""></a>
              <a href="" class="text-decoration-none"><img src="./IMG/icons/Vector-insta.svg"
                  class="coder-social_link" alt=""></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- testimonials -->
  <section class=" mt-5 mb-5 text-center ">
    <!-- title -->
    <h3 class="aling-items-center">Testimonios DayAcademy</h3>
    <!-- slider -->
    <div class="testimonial-slider mt-5 ">
      <div class="row">
        <div class="col-md-12 ">
          <!-- carousel -->
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <!-- content-slider -->
            <div class="carousel-inner">
              <!-- items 1 corousel -->
              <div class="carousel-item active">
                <!-- fila-content -->
                <div class="row">
                  <div class="col-md-4 ">
                    <div class="single-box ">
                      <!-- content-img -->
                      <div class="img-area">
                        <!-- img -->
                        <img src="<?= base_url?>assets/IMG/testimonio-1.jpg" alt="">
                        <!-- img-text -->
                        <div class="img-text-sl">
                          <h3></h3>
                          <h6></h6>
                          <p>
                            
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- érson-2 -->
                  <div class="col-md-4">
                    <div class="single-box">
                      <!-- content-img -->
                      <div class="img-area">
                        <!-- img -->
                        <img src="<?= base_url?>assets/IMG/testimonio-2.jpg" alt="">
                        <!-- img-text -->
                        <div class="img-text-sl">
                       
                          <h3></h3>
                          <h6></h6>
                          <p>
                            
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- person 3 -->
                  <div class="col-md-4">
                    <div class="single-box">
                      <!-- content-img -->
                      <div class="img-area">
                        <!-- img -->
                        <img src="<?= base_url?>assets/IMG/testimonio-3.jpg" alt="">
                        <!-- img-text -->
                        <div class="img-text-sl">
                          
                          <h3></h3>
                          <h6></h6>
                          <p>
                            
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- items 2 corousel -->
              <div class="carousel-item ">
                <!-- fila-content -->
                <div class="row">
                  <!-- person4 -->
                  <div class="col-md-4">
                    <div class="single-box">
                      <!-- content-img -->
                      <div class="img-area">
                        <!-- img -->
                        <img src="<?= base_url?>assets/IMG/testimonio-4.jpg" alt="">
                        <!-- img-text -->
                        <div class="img-text-sl">
                          
                          <h3></h3>
                          <h6></h6>
                          <p>
                            
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- érson-5 -->
                  <div class="col-md-4">
                    <div class="single-box">
                      <!-- content-img -->
                      <div class="img-area">
                        <!-- img -->
                        <img src="<?= base_url?>assets/IMG/testimonio-5.jpg" alt="">
                        <!-- img-text -->
                        <div class="img-text-sl">
                          
                          <h3>titulo</h3>
                          <h6>titulo</h6>
                          <p>
                            seo
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- person 6 -->
                  <div class="col-md-4">
                    <div class="single-box">
                      <!-- content-img -->
                      <div class="img-area">
                        <!-- img -->
                        <img src="<?= base_url?>assets/IMG/testimonio-6.jpg" alt="">
                        <!-- img-text -->
                        <div class="img-text-sl">
                          <h3>nombre</h3>
                          <h6>seo</h6>
                          <p>
                           nombre
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- btn -->
    <div class="d-grid-2 text-end m-3 text-md-center text-sm-center ">
      <a href="" class="btn btn-primary">Compartir Experiencia</a>
    </div>
  </section>
  <!--formulario  -->
  <section class="mt-5">
    <h3 class="text-center">¿Cuentanos que podemos hacer juntos?</h3>
    <!-- form -->
    <form method="post" class="row g-3 mt-3 justify-content-center" id="" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
      <!--name  -->
      <div class="col-6">
        <label for="" class="form-label">Nombre</label>
        <input type="text" class="form-control" name="Nombre" id="" placeholder="@Nombre"
          minlength="4" maxlength="20" pattern="[a-zA-Z ]{4,20}" required>
      </div>
      <!--first-name -->
      <div class="col-6">
        <label for="" class="form-label">Primer apellido</label>
        <input type="text" class="form-control" name="Apellido_a" id="" placeholder="@Torres"
          minlength="4" maxlength="15" pattern="[a-zA-Z ]{4,15}" required>
      </div>
      <!--second-name  -->
      <div class="col-6">
        <label for="" class="form-label">Segundo apellido</label>
        <input type="text" class="form-control" name="Apellido_b" id="" placeholder="@Hernandez"
          minlength="4" maxlength="15" pattern="[a-zA-Z ]{4,15}" required>
      </div>
      <!--contact-->
      <div class="col-6">
        <label for="" class="form-label">Telefono</label>
        <input type="tel" name="Telefono" class="form-control" id="" placeholder="@Telefono"
          minlength="10" maxlength="10" required pattern="[0-9]+">
      </div>
      <!-- Name enterprice -->
        <div class="col-6 col-md-6">
        <label for="" class="form-label">Nombre de tu empresa</label>
        <input type="text" class="form-control" name="Empresa" id="" placeholder="Tu empresa"
          minlength="3" maxlength="20" pattern="[a-zA-Z ]{3,20}" required>
      </div>
      <!-- email -->
      <div class="col-6 col-md-6">
        <label for="" class="form-label">Email</label>
        <input type="email" class="form-control" name="Email" id="" placeholder="@gmail.com"
          minlength="12" maxlength="40" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 4}$" required value="<?php 
              if(isset($email)) echo $email
          ?>">
      </div>
      <!-- services opcion -->
      <div class="col-12 mt-4 form-floating">
        <select class="form-select" id="floatingSelect" aria-label="Servicios" name="Lista"
          required>
          <option value="Elige una opcion">Elige una opcion</option>
          <option value="Desarrollo Web">Desarrollo Web</option>
          <option value="Desarrollo de Software">Desarrollo de Software</option>
          <option value="Capacitación empresarial">Capacitación empresarial</option>
          <option value="Gestión de Base de Datos">Gestión de Base de Datos</option>
          <option value="SEO">SEO</option>
          <option value="Cursos">Cursos</option>
        </select>
        <label for="floatingSelect">Indica el servicio de interes</label>
      </div>
        <!-- message -->
        <div class="form-floating col-12 ">
        <textarea class="form-control" name="Area" placeholder="Mi @empresa es...."
          id="floatingTextarea" minlength="20" maxlength="150" pattern="[a-zA-Z ]{20,800}"></textarea>
        <label for="floatingTextarea">Tu esmpresa es:</label>
      </div>
      <!-- btn-form -->
      <div class="mb-3 text-center ">
        <input type="submit" name="subir" class="btn btn-primary rounded-2 col-4">
        <!-- <a href="" type="submit" class="btn btn-primary rounded-2 col-4">Enviar</a> -->
      </div>
    </form>
  </section>
</div>
</body>
</main>

<?php 

require_once 'includes/footer.php';


?>