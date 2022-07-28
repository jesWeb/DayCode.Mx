<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css" />
    <title>Panel de control</title>
    <script type="text/javascript">
        function confirmar() {
            return confirm('¿Realmente estas seguro de eliminar este registro?, los datos no podran ser recuperados...');
        }
    </script>
</head>
<body>

    <?php

    include("./config/conexionDB.php");
    
    $sql="SELECT * FROM cliente";

    $resul=mysqli_query($conexion, $sql);
    ?>

    <!-- MENU -->
    <header>
        
    </header>
    
    <!-- Estructura del crud -->
    <main class="container">
        <h1 class="display-4 text-center">Lista de Clientes</h1>
        <!-- BTN para agregar un nuevo cliente a la tabla "CLIENTES" -->
        
        <div class="row align-items-center">
          <div class="col">
            <a href="">
                <button type="button" class="btn btn-outline-dark" href="">Agregar cliente</button>
            </a>
          </div>
        </div>
        


        <!-- Tabla CRUD -->
        <table class="table table-dark table-sm">
            <thead>
                <tr>
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
                    <td> <?php echo $filas['dateCreacion'] ?> </td>
                    <td>
                        <?php echo "<a href='./edit.php?idCliente=".$filas['idCliente']."'>EDITAR</a>"; ?>
                    </td>
                    <td>
                    <?php echo "<a href='./delete.php?idCliente=".$filas['idCliente']."' onclick='return confirmar()'>ELIMINAR</a>"; ?>
                    </td>
                </tr>
                <?php
                    }
                ?>

            </tbody>
        </table>
        <?php
            mysqli_close($conexion);
        ?>
    </main>
</body>
<script src="./js/bootstrap.bundle.min.js"></script>
</html>