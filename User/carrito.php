<?php

session_start();
     $pagina_admin = 2;     
     $pagina_modificacion= 0;
     $nombre_pagina = "Home";
     $pagina =0;
     $modal=0;

require_once '../includes/header.php';

include_once '../../config/ConexionDB.php';

if ($_SESSION['login']==1) {
  # code...
}else {header('Location: login.php');
  # code...
}

?>

<body>
  <section class="container">
    <h1>Mi carrito</h1>
    <div class="row mt-3">
      
      <div class="col-md-4">
        <table class="table table-primary">
          <thead>
            <tr>
              <th scope="col">Total del carrito</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <th scope="row">Subtotal</th>

            </tr>
          </tbody>


        </table>
      </div>
      <!-- tabla-shop -->
      <div class="col-md-8">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">Producto</th>
              <th scope="col">Precio</th>
              <th scope="col">Cantidad</th>
              <th scope="col">Total</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody class="">
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td colspan="2">Larry the Bird</td>
              <td>@twitter</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>




  </section>




</body>









<?php 

require_once '../includes/footer.php';


?>