<?php

if($pagina == 1){
  require_once 'config/parameters.php';
  require_once 'config/conexionDB.php';

}elseif ($pagina_admin == 2) {
  require_once '../config/parameters.php';
  require_once '../config/conexionDB.php';

}elseif($pagina_modificacion == 1){
  require_once '../../config/parameters.php';
}elseif ($pagina_admin == 1) {
  require_once '../../config/parameters.php';
  require_once '../../config/conexionDB.php';
}else{
  require_once '../config/parameters.php';
  require_once '../config/conexionDB.php';
}

?>
<!DOCTYPE html>
<html lang="es-Mx">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>DayCode.MX</title>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- css -->
  <link rel="stylesheet" href="<?= base_url?>assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="<?= base_url?>assets/css/styles.css" />
</head>
<!-- Modal -->
<?php 
if($modal == 0){

}else {
  
?>
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
  aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">¡Rebajas en agradecimiento a tu preferencia!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col">
              <div class="modal-body">
                <p class="txt-anuncio">
                  Descuentos especiales para ti furuto programador. Consigue un 15 % de descuento sobre el precio de
                  nuestros cursos. <br> Si, asi como lo escuchaste... ¡En todos nuestros cursos!
                </p>
              </div>
            </div>
            <div class="col">
              <!-- Modal body with image -->
              <div class="modal-body">
                <img src="<?= base_url?>assets/IMG/img_modal.png" class="shadow-img img-styles" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Quizá luego...</button>
        <a href="user/create-Account.html" type="button" class="btn btn-primary">Obtener descuento</a>
      </div>
    </div>
  </div>
</div>
<?php

 }
?>
<!-- navbar -->
<div>
  <header class="">
    <nav class="navbar navbar-expand-md navbar-light  bg-light shadow navbar-main ">
      <div class="container-fluid">
        <!-- branding -->
        <a href="" class="navbar-brand ">
          <img src="<?= base_url?>assets/IMG/DAYCODE-nav.png" alt="brand DAYCODE.mx" class=" ms-md-0">
        </a>
        <!-- btn -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav"
          aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- items -->
        <div class="collapse navbar-collapse" id="mainNav">
          <div class="nav ms-auto ">
            <!-- links -->
            <?php
              if (isset($_SESSION['login'])==1) { ?>
            <a href="<?= base_url?>" class="nav-link nav-link_n active m-2">Home</a>
            <a href="./services.html" class="nav-link nav-link_n m-2">Cursos</a>
            <a href="./Academy.html" class="nav-link nav-link_n m-2">Mi Aprendisaje</a>
            
            <?php  
          } else{?>
            <a href="<?= base_url?>" class="nav-link nav-link_n active m-2">Home</a>
            <a href="./services.html" class="nav-link nav-link_n m-2">Servicios</a>
            <a href="./Academy.html" class="nav-link nav-link_n m-2">Academy</a>
            <a href="" class="nav-link nav-link_n m-2">Contacto</a>
            <?php
            }
            ?>


           
            <?php
           if (isset($_SESSION['login'])==1) { ?>
            <li class="nav-item dropdown m-2">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <?php 
                  echo $_SESSION['nombre'].' '.$_SESSION ['apellidos'];
                ?>
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">settings</a></li>
                <li><a class="dropdown-item" href="#">perfil</a></li>
                <li><a class="dropdown-item" href="#">ayuda</a></li>
                <li><a class="dropdown-item" href="<?= base_url?>User/procesos/salir.php">exit</a></li>
              </ul>
            </li>
            <?php
          }else {  ?>

            <a href="<?= base_url?>User/login.php"  class="nav-link btn  m-2 d-grid-md-2 mt-md-2 nav-link_btn">Iniciar sesion</a>
            <a  href="<?= base_url?>User/login.php" class="nav-link btn  m-2 d-grid-md-2 mt-md-2 nav-link_btn-up">Crear cuenta</a>
            <?php
            }
           ?>



          </div>
    </nav>
  </header>
</div>