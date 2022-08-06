<?php

session_start();
$pagina_admin = 2;
$pagina_modificacion = 0;
$nombre_pagina = "Home";
$pagina = 0;
$modal = 0;

require_once '../includes/header.php';

include_once '../config/ConexionDB.php';

if ($_SESSION['login'] == 1) {
  # code...
} else {
  header('Location: login.php');
  # code...
}


$Producto = isset($_SESSION['carrito']['productos']) ? $_SESSION['carrito']['productos'] : null;

//arreglo de lista///
$lista_shop = array();

//VALIDACION DE PRODUCTO //
if ($Producto != null) {
  foreach ($Producto as $clave => $cantidad);
   $productos = $PDO->prepare("SELECT id,Nombre,categoria,Descripcion, Costo,$cantidad as cantidad from cursos where id=? AND activo=1");
   $productos->execute([$clave]);
   $lista_shop[] = $productos->fetch(PDO::FETCH_ASSOC);
}


?>

<body>
  <section class="container">
    <h1>Mi carrito</h1>
    <div class="table-responsive">
      <table class="table ">
        <thead>
          <tr>
            <th>Producto </th>
            <th>Nombre curso </th>
            <th>Costo </th>
            <th></th>
          </tr>
        </thead>

        <tbody>
          <?php if ($lista_shop == null) {
            echo '<tr> <td colaspan="5" class="text-center"><b>Tu lista esta vacia </b></td> </tr>';
          } else {
            $total = 0;
            foreach ($lista_shop as $Producto) {
              $_id = $Producto['id'];
              $name = $Producto['Nombre'];
              $cat = $Producto['categoria'];
              $precio = $Producto['Costo'];
              $cantidad = $Producto['cantidad'];
              $subtotal = $cantidad * $precio;
              $total += $subtotal;

              print_r($lista_shop);
              // print_r($Producto);
          ?>

              <tr>

                <td><?php echo $name ?></td>
                <td><?php echo $cat ?></td>
                <td><?php echo MONEDA . number_format($precio, 2, '.', '.'); ?></td>

                <div class="" id="subtotal_<?php echo $_id; ?>" name="subtotal[]">
                  <?php echo MONEDA . number_format($subtotal, 2, '.', '.',); ?>
                </div>
                </td>

                <td><a href="#" id="eliminar" class="btn btn-warning btn-sm" data-bs-id="<?php echo $_id; ?>" data-bs-toogle="modal" data-bs-target="eliminaModal">Eliminar</a></td>

              </tr>
            <?php  } ?>
            <tr>
              <td colspan="3"></td>
              <td colspan="2">
                <p class="h3" id="total" <?php echo MONEDA . number_format($total, 2, '.', '.',) ?>></p>
              </td>
            </tr>
        </tbody>
      <?php  } ?>

      </table>
    </div>
    <!-- btn-pay -->
    <div class="row">
      <div class="col-md-5 offset-md-7 d-grid gap-2">
        <button class="btn btn-primary btn-lg">Realizar pago</button>
      </div>
    </div>
  </section>

</body>

<?php

require_once '../includes/footer.php';


?>