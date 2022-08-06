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
  <?php
        if(isset($_POST['subir'])){
            //ANTES DE ESTO DEBERIA IR UNA VALIDACION 
            $nombre_i=$_POST['nombre_f'];
            $ape_a_i=$_POST['ape_a_f'];
            $ape_b_i=$_POST['ape_b_f'];
            $email_i=$_POST['email_f'];
            $telefono_i=$_POST['tele_f'];
            $idServ_i=$_POST['IdS_f'];
            $sexo_i=$_POST['sexo_f'];
            $mensa_i=$_POST['mensa_f'];

            include("../config/conexionDB.php");

            $sql_ic="INSERT INTO cliente(nombre, apellido_a, apellido_b, email, telefono, idServicio, Sexo, mensaje) VALUES ('".$nombre_i."','".$ape_a_i."','".$ape_b_i."','".$email_i."','".$telefono_i."','".$idServ_i."','".$sexo_i."', '".$mensa_i."')";

            $resultado_ic=mysqli_query($conexion, $sql_ic);

            if($resultado_ic){
                echo "<script language='JavaScript'>
                    alert('Los datos fueron insertados');
                    location.assign('../index.php');
                </script>";
            }else{
                echo "<script language='JavaScript'>
                    alert('ERROR');
                </script>";
            }
            mysqli_close($conexion);

        }else{
        }
    ?>


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
              <input type="text" class="form-control" name="nombre_f" id="" placeholder="@Nombre" minlength="4"
                maxlength="20" pattern="[a-zA-Z ]{4,20}" required>
            </div>
            <!--first-name -->
            <div class="col-6">
              <label for="" class="form-label">Apellido Paterno</label>
              <input type="text" class="form-control" name="ape_a_f" id="" placeholder="@Apellido" minlength="4"
                maxlength="15" pattern="[a-zA-Z ]{4,20}" required>
            </div>
            <!--second-name  -->
            <div class="col-6">
              <label for="" class="form-label">Apellido Materno</label>
              <input type="text" class="form-control" name="ape_b_f" id="" placeholder="@Apellido" minlength="4"
                maxlength="15" pattern="[a-zA-Z ]{4,20}" required>
            </div>

            <div class="col-6 col-md-6">
              <label for="" class="form-label">Email</label>
              <input type="email" class="form-control" name="email_f" id="" placeholder="@gmail.com" minlength="12"
                maxlength="40" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 4}$" required>
            </div>
            <div class="col-6 col-md-6">
              <label for="" class="form-label">Telefono:</label>
              <input type="tel" class="form-control" name="tele_f" id="" placeholder="7200000000">
            </div>
            <div class="col-6 col-md-6">
              <label for="IdSer"  class="form-label">Id de Servicio</label>
              <input type="number" class="form-control" name="IdS_f" id="IdSer">
            </div>
            <!-- services opcion -->
            <div class="col mt-4 form-floating">
              <select class="form-select" id="floatingSelect" aria-label="Servicios" name="sexo_f" required>
                <option value="Elige una opcion">Elige el genero:</option>
                <option value="Desarrollo Web">Hombre</option>
                <option value="Desarrollo de Software">Mujer</option>     
              </select>
              <label for="floatingSelect">Sexo</label>
            </div>
            <!-- descripcion -->
            <div class="form-floating col-12 ">
              <textarea class="form-control" name="mensa_f" id="floatingTextarea"
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