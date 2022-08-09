<?php

session_start();
     $pagina_admin = 2;     
     $pagina_modificacion= 0;
     $nombre_pagina = "Home";
     $pagina =0;
     $modal=0;
<<<<<<< HEAD

=======
>>>>>>> f241c944b3c1710b1adf54fd501c2a06216e4019
require_once '../includes/header.php';

?>

<script type="text/javascript">
        function confirmar() {
            return confirm('¿Realmente estas seguro de eliminar este registro?, los datos no podran ser recuperados...');
        }
</script>

<main>
    <?php
        // include("./config/conexionDB.php");
        include("../config/conexionDB.php");
        $sql="SELECT * FROM cliente";    
        $resul=mysqli_query($conexion, $sql);

        $sql_cur="SELECT * FROM cursos";    
        $resul_cur=mysqli_query($conexion, $sql_cur);

    ?>

<body>
    <div class="container">
<<<<<<< HEAD
        <h1 class="display-4 text-center">Lista de Clientes</h1>
=======
        <h1 class="display-4 text-center">Gestión de usuarios y cursos</h1>
>>>>>>> f241c944b3c1710b1adf54fd501c2a06216e4019
        <!-- BTN para agregar un nuevo cliente a la tabla "CLIENTES" -->

        <div class="row align-items-center">
          <div class="col">
            <a href="../crud/insert_c.php">
<<<<<<< HEAD
                <button type="button" class="btn btn-outline-dark" href="">Agregar cliente</button>
=======
                <button type="button" class="btn btn-outline-dark" href="">Agregar usuario</button>
>>>>>>> f241c944b3c1710b1adf54fd501c2a06216e4019
            </a>
          </div>
        </div>

        <section>
            <!-- Tabla CRUD -->
            <table class="table table-dark table-sm">
                <thead>
                    <tr>
<<<<<<< HEAD
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Primer Apellido</th>
                        <th>Segundo Apellido</th>
                        <th>Fecha de nacimiento</th>
                        <th>ID de Usuario</th>
                        <th>Correo electrónico</th>
                        <th>Teléfono</th>
                        <th>ID de Servicio</th>
                        <th>Estatus</th>
                        <th>Sexo</th>
                        <th>Contraseña</th>
=======
                        <th>Nombre</th>
                        <th>Primer Apellido</th>
                        <th>Segundo Apellido</th>
                        <th>Rol</th>
                        <th>Correo electrónico</th>
                        <th>Teléfono</th>
                        <th>Estatus</th>
>>>>>>> f241c944b3c1710b1adf54fd501c2a06216e4019
                        <th>Fecha de registro</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
            
                <tbody>
            
                    <?php
            
                        while($filas=mysqli_fetch_assoc($resul)){
                    ?>
                    <tr>
<<<<<<< HEAD
                        <td> <?php echo $filas['idCliente'] ?> </td>
                        <td> <?php echo $filas['nombre'] ?> </td>
                        <td> <?php echo $filas['apellido_a'] ?> </td>
                        <td> <?php echo $filas['apellido_b'] ?> </td>
                        <td> <?php echo $filas['fechaNac'] ?> </td>
                        <td> <?php echo $filas['idTUsuario'] ?> </td>
                        <td> <?php echo $filas['email'] ?> </td>
                        <td> <?php echo $filas['telefono'] ?> </td>
                        <td> <?php echo $filas['idServicio'] ?> </td>
                        <td> <?php echo $filas['Estatus'] ?> </td>
                        <td> <?php echo $filas['Sexo'] ?> </td>
                        <td> <?php echo $filas['Contra'] ?> </td>
=======
                        <td> <?php echo $filas['nombre'] ?> </td>
                        <td> <?php echo $filas['apellido_a'] ?> </td>
                        <td> <?php echo $filas['apellido_b'] ?> </td>
                        <td> <?php echo $filas['idTUsuario'] ?> </td>
                        <td> <?php echo $filas['email'] ?> </td>
                        <td> <?php echo $filas['telefono'] ?> </td>
                        <td> <?php echo $filas['Estatus'] ?> </td>
>>>>>>> f241c944b3c1710b1adf54fd501c2a06216e4019
                        <td> <?php echo $filas['dateCreacion'] ?> </td>
                        <td>
                            <?php echo "<a href='../crud/edit_c.php?idCliente=".$filas['idCliente']."'>EDITAR</a>"; ?>
                        </td>
                        <td>
                        <?php echo "<a href='../crud/delete_c.php?idCliente=".$filas['idCliente']."' onclick='return confirmar()'>ELIMINAR</a>"; ?>
                        </td>
                    </tr>
                    <?php
                        }
                    ?>
            
                </tbody>
            </table>
        </section>


        <div class="row align-items-center">
          <div class="col">
            <a href="../crud/inset_cur.php">
                <button type="button" class="btn btn-outline-dark" href="">Agregar Curso</button>
            </a>
          </div>
        </div>
        <section>
            <!-- Tabla CRUD -->
            <table class="table table-dark table-sm">
                <thead>
                    <tr>
<<<<<<< HEAD
                        <th>ID</th>
=======
>>>>>>> f241c944b3c1710b1adf54fd501c2a06216e4019
                        <th>Nombre</th>
                        <th>Categoria</th>
                        <th>Duracion</th>
                        <th>Descripción</th>
                        <th>Costo</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
            
                <tbody>
                    <?php
                        while($filas_cur=mysqli_fetch_assoc($resul_cur)){
                    ?>
                    <tr>
<<<<<<< HEAD
                        <td> <?php echo $filas_cur['ID'] ?> </td>
=======
>>>>>>> f241c944b3c1710b1adf54fd501c2a06216e4019
                        <td> <?php echo $filas_cur['Nombre'] ?> </td>
                        <td> <?php echo $filas_cur['Categoria'] ?> </td>
                        <td> <?php echo $filas_cur['Duracion'] ?> </td>
                        <td> <?php echo $filas_cur['Descripcion'] ?> </td>
                        <td> <?php echo $filas_cur['Costo'] ?> </td>
                        <td>
                            <?php echo "<a href='../crud/edit_cur.php?ID=".$filas_cur['ID']."'>EDITAR</a>"; ?>
                        </td>
                        <td>
                        <?php echo "<a href='../crud/delete_cur.php?ID=".$filas_cur['ID']."' onclick='return confirmar()'>ELIMINAR</a>"; ?>
                        </td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </section>
        <?php
            mysqli_close($conexion);
        ?>
    </div>
</body>
</main>

<?php 
require_once '../includes/footer.php';
?>