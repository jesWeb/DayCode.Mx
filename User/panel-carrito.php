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

// print_r($_SESSION['carrito']);

$ids_cursos = isset($_SESSION['carrito']) && is_array($_SESSION['carrito']) ? array_keys($_SESSION['carrito']) : [0];

$sql = 'select id, nombre, categoria, descripcion, costo from cursos where id in(' . implode(',', $ids_cursos) . ')';
$stmt = $PDO->prepare($sql);
$stmt->execute();
$cursos = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
          <?php if (0 == count($cursos)) {
            echo '<tr> <td colaspan="5" class="text-center"><b>Tu lista esta vacia </b></td> </tr>';
          } else {
            $total = 0;
            $subtotal = 0;
            foreach ($cursos as $curso) {
              $subtotal = $_SESSION['carrito'][$curso['id']] * $curso['costo'];
              $total += $subtotal;
          ?>

              <tr>

                <td><?php echo htmlentities($curso['nombre']) ?></td>
                <td><?php echo htmlentities($curso['categoria']) ?></td>
                <td><?php echo MONEDA . number_format($curso['costo'], 2, '.', '.'); ?></td>
                <td>
                  <div class="" id="subtotal_<?php echo $_id; ?>" name="subtotal[]">
                    <?php echo MONEDA . number_format($subtotal, 2, '.', '.',); ?>
                  </div>
                </td>

                <td><a href="#" id="eliminar" class="btn btn-warning btn-sm" data-bs-id="<?php echo $curso['id']; ?>" data-bs-toogle="modal" data-bs-target="eliminaModal">Eliminar</a></td>

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