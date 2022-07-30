<?php
$pagina_admin = 2;     
$pagina_modificacion= 0;
$nombre_pagina = "Home";
$pagina =0;
$modal=0;

if (session_start ()) {
   # code...
}
else {session_start ();
   # code...
}

require '../config/parameters.php';

$nombre_pagina = "inicio";
require_once '../includes/header.php';
print_r($_SESSION);
include_once '../config/ConexionDB.php';
$productos = "SELECT * FROM cursos ";
//instrucciones de carrito//
$id = isset($_GET['id']) ? $_GET['id'] : '';
$token = isset($_GET['token']) ? $_GET['token'] : '';

if ($id == ' ' || $token == ' ' ) {
    echo 'Error al procesar la pericion';
    exit;
}else {

    $token_tmp = hash_hmac('sha1', $ID, KEY_TOKEN);

    if ($token == $token_tmp) {
        /*direccion a base de datos */
        $sql =$con->prepare("SELECT count(id) From cursos WHERE id=? AND activo1");
        $sql->execute([$ID]);
        if ($sql->fetchColumn() > 0) {
            $sql =$con->prepare("SELECT Nombre,categoria,Descripcion, Costo from cursos where id=? AND
            activo=1 LIMIT 1");
            $sql->execute([$ID]);
            $row = $sql->fetch(PDO::FETCH_ASSOC);
            $nombre = $row['Nombre'];
            $cate = $row['Categoria'];
            $des = $row['Descripcion'];
            $cost = $row['Costo'];
            $dir_images = 'images/courses/' . $ID .'/';
           /* imagenes */
            
           $rutaImg = $dir_images . 'Principal.png';
            
            if (!file_exists($rutaImg)) {
                $dir =dir($dir_images);
                /** tipos de archivo img */
                while (($archivo = $dir->read()) !=false ) {
                    if ($archivo != 'principal.jpg' && (strpos($archivo,'png') || strpos ($archivo, 'jpeg'))) {
                        $imagenes[] =$dir_images . $archivo ;
                    }
                }
                $dir->close();
            }
            else {
                echo 'error al procesar la peticion';
                exit;
            }
        }   else{
            echo 'error al procesar la peticion';
                exit;
        }
    }
}

?>

<body>
    <div class="container">
        <!-- ROW Presentación -->
        <div class="mt-5">
            <div class="row justify-content-center align-content-center ">
                <div class="col-md-6">
                    <h1>DayAcademy</h1>
                    <div class="daycode-academy_description mt-4 p-auto ">
                        <p>
                            Este espacio, es tu lugar para adquirir los conocimientos
                            básicos para la innovacion de tu negocio y potenciar el alcance
                            de tu marca.
                            Tu decides... ¿Qué es lo que quieres aprender?
                            DayAcademy.
                        </p>
                        <p>
                            “La mente es como un paracaídas: sólo funciona si se abre” <br>
                            ~ Albert Einstein.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <img src="./IMG/Academy.png" alt="" class="img-fluid " style="height: 480px;">
                </div>
            </div>
        </div>
        <!-- ´section courses -->
        <section class="Academy-course mt-5">
            <div class=" mt-5">
                <h3 class="text-center mb-4">El viaje al futuro comienza aqui </h3>

                <div class="grid-container">
                    <!-- ´card -->
                    <?php $resultado = mysqli_query($conexion,$productos);
                        while($row=mysqli_fetch_assoc($resultado)){
                        ?>
                    <div class="card-group grid-item">
                        <div class="card m-3">
                            <img src="https://picsum.photos/200" class="card-img-top" alt="">
                            <div class="card-body">
                                <h4 class="card-title text-center"><?php echo $row ["Nombre"];?></h4>
                                <!-- ´texto -->
                                <p class="card-text"><?php echo$row ["Descripcion"]; ?></p>
                                <p class="card-text">Precio <span>$<?php echo $row["Costo"];?></span> Mxn</p>
                                <p class="card-text ">Duracion <span><?php echo $row ["Duracion"]; ?></span>
                                </p>
                                <p class="card-text ">categoria:
                                    <span><?php echo $row ["Categoria"]; ?></span> </p>
                            </div>
                            <div class="card-footer">
                                <!-- ´btn -->
                                <a href="#" class="card-link btn btn-primary rounded-pill3">Comprar</a>
                                <button href="#" class=" btn btn-outline-primary rounded-pill-3"
                                    type="button"
                                    onclick="addProduct(<?php echo  $row['ID']; ?>, '<?php echo $token_tmp;  ?>' )">Agregar
                                    carrito</button>
                            </div>
                        </div>
                    </div>
                    <?php  } mysqli_free_result($resultado);  ?>
                </div>
        </section>

    </div>
</body>
<?php 

require_once '../includes/footer.php';


?>