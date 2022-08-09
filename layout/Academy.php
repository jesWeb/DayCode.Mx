<?php

session_start();
     $pagina_admin = 2;     
     $pagina_modificacion= 0;
     $nombre_pagina = "Home";
     $pagina =0;
     $modal=0;
<<<<<<< HEAD

require_once '../includes/header.php';

?>

<main>

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
=======

require_once '../includes/header.php';

?>

<main>

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
>>>>>>> f241c944b3c1710b1adf54fd501c2a06216e4019
                    </div>
                </div>
            </div>
            <!-- ´section courses -->
            <section class="Academy-courses mt-5">
                <div class=" mt-5">
                    <h3 class="text-center mb-4">El viaje al futuro comienza aqui </h3>
                    <div class="row">
                        <!-- curso1 -->
                        <div class="col-md-4 mt-3">
                            <!-- ´card -->
                            <div class="card card-academy border-0">
                                <!-- card-img -->
                                <img src="https://picsum.photos/500/300" class="card-img-top rounded-2  " alt="">
                                <!-- card-content -->
                                <div class="card-body card-academy_content bg-ligth ">
                                    <!-- title-->
                                    <h4 class="card-title text-center">Seo y ADS</h4>
                                    <!-- ´texto -->
                                    <p class="card-text">Precio <span>$4,150</span></p>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Minima,
                                        maiores perspiciatis ipsum omnis incidunt veritatis!</p>
                                    <p class="card-text h3">$1200</p>
                                    <div class="mt-5 text-center">
                                        <!-- ´btn -->
                                        <a href="#" class="card-link btn btn-primary rounded-pill3">Comprar</a>
                                        <a href="#" class="card-link btn btn-primary rounded-pill-3">Agregar carrito</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- curso1 -->
                        <div class="col-md-4 mt-3">
                            <!-- ´card -->
                            <div class="card card-academy border-0">
                                <!-- card-img -->
                                <img src="https://picsum.photos/500/300" class="card-img-top rounded-2  " alt="">
                                <!-- card-content -->
                                <div class="card-body card-academy_content bg-ligth ">
                                    <!-- title-->
                                    <h4 class="card-title text-center">Seo y ADS</h4>
                                    <!-- ´texto -->
                                    <p class="card-text">Precio <span>$4,150</span></p>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Minima,
                                        maiores perspiciatis ipsum omnis incidunt veritatis!</p>
                                    <p class="card-text h3">$1200</p>
                                    <div class="mt-5 text-center">
                                        <!-- ´btn -->
                                        <a href="#" class="card-link btn btn-primary rounded-pill3">Comprar</a>
                                        <a href="#" class="card-link btn btn-primary rounded-pill-3">Agregar carrito</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- curso1 -->
                        <div class="col-md-4 mt-3">
                            <!-- ´card -->
                            <div class="card card-academy border-0">
                                <!-- card-img -->
                                <img src="https://picsum.photos/500/300" class="card-img-top rounded-2  " alt="">
                                <!-- card-content -->
                                <div class="card-body card-academy_content bg-ligth ">
                                    <!-- title-->
                                    <h4 class="card-title text-center">Seo y ADS</h4>
                                    <!-- ´texto -->
                                    <p class="card-text">Precio <span>$4,150</span></p>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Minima,
                                        maiores perspiciatis ipsum omnis incidunt veritatis!</p>
                                    <p class="card-text h3">$1200</p>
                                    <div class="mt-5 text-center">
                                        <!-- ´btn -->
                                        <a href="#" class="card-link btn btn-primary rounded-pill3">Comprar</a>
                                        <a href="#" class="card-link btn btn-primary rounded-pill-3">Agregar carrito</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
<<<<<<< HEAD
                    <!-- curso1 -->
                    <div class="col-md-4 mt-3">
                        <!-- ´card -->
                        <div class="card card-academy border-0">
                            <!-- card-img -->
                            <img src="https://picsum.photos/500/300" class="card-img-top rounded-2  " alt="">
                            <!-- card-content -->
                            <div class="card-body card-academy_content bg-ligth ">
                                <!-- title-->
                                <h4 class="card-title text-center">Seo y ADS</h4>
                                <!-- ´texto -->
                                <p class="card-text">Precio <span>$4,150</span></p>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima,
                                    maiores perspiciatis ipsum omnis incidunt veritatis!</p>
                                <p class="card-text h3">$1200</p>
                                <div class="mt-5 text-center">
                                    <!-- ´btn -->
                                    <a href="#" class="card-link btn btn-primary rounded-pill3">Comprar</a>
                                    <a href="#" class="card-link btn btn-primary rounded-pill-3">Agregar carrito</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- curso1 -->
                    <div class="col-md-4 mt-3">
                        <!-- ´card -->
                        <div class="card card-academy border-0">
                            <!-- card-img -->
                            <img src="https://picsum.photos/500/300" class="card-img-top rounded-2  " alt="">
                            <!-- card-content -->
                            <div class="card-body card-academy_content bg-ligth ">
                                <!-- title-->
                                <h4 class="card-title text-center">Seo y ADS</h4>
                                <!-- ´texto -->
                                <p class="card-text">Precio <span>$4,150</span></p>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima,
                                    maiores perspiciatis ipsum omnis incidunt veritatis!</p>
                                <p class="card-text h3">$1200</p>
                                <div class="mt-5 text-center">
                                    <!-- ´btn -->
                                    <a href="#" class="card-link btn btn-primary rounded-pill3">Comprar</a>
                                    <a href="#" class="card-link btn btn-primary rounded-pill-3">Agregar carrito</a>
                                </div>
                            </div>
                        </div>
                    </div>
=======
>>>>>>> f241c944b3c1710b1adf54fd501c2a06216e4019
                </div>
            </section>

<<<<<<< HEAD
    </div>
</body>
=======
        </div>
    </body>
>>>>>>> f241c944b3c1710b1adf54fd501c2a06216e4019
</main>

<?php 
require_once '../includes/footer.php';
<<<<<<< HEAD
?>
=======
?>
>>>>>>> f241c944b3c1710b1adf54fd501c2a06216e4019
