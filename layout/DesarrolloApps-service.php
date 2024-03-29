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

    <body>
        <section class="">
            <!-- video en presentacion o pantalla para el curso -->
            <div class="container">

                <div class="ratio ratio-4x3">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/yoeV4Ex8C8U"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
            <div class="container">
                <div class="row mt-4">
                    <div class="col col-sm-4">
                        <!-- Descripcion del curso -->
                        <h4>Desarrollo de Apps</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem odio similique quam
                            at
                            maiores laborum quaerat vero cumque placeat tenetur?</p>
                    </div>
                    <!-- inicia el acordeon para las secciones de los videos -->
                    <div class="col">
                        <div class="accordion" id="accordionExample">
                            <!-- inicia el acordeon para la primera seccion de los videos -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Sección 1: Introduccion a Desarrollo de Apps
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the first item's accordion body.</strong> It is shown by
                                        default,
                                        until the collapse plugin adds the appropriate classes that we use to style each
                                        element. These classes control the overall appearance, as well as the showing
                                        and
                                        hiding via CSS transitions. You can modify any of this with custom CSS or
                                        overriding
                                        our default variables. It's also worth noting that just about any HTML can go
                                        within
                                        the <code>.accordion-body</code>, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                            <!-- inicia el acordeon para la segunda seccion de los videos -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Sección 2: SEO: Conceptos Básicos de Desarrollo y Apps
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the second item's accordion body.</strong> It is hidden by
                                        default,
                                        until the collapse plugin adds the appropriate classes that we use to style each
                                        element. These classes control the overall appearance, as well as the showing
                                        and
                                        hiding via CSS transitions. You can modify any of this with custom CSS or
                                        overriding
                                        our default variables. It's also worth noting that just about any HTML can go
                                        within
                                        the <code>.accordion-body</code>, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                            <!-- inicia el acordeon para la tercera seccion de los videos -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Sección 3: Lenguajes existentes de Apps
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the third item's accordion body.</strong> It is hidden by
                                        default,
                                        until the collapse plugin adds the appropriate classes that we use to style each
                                        element. These classes control the overall appearance, as well as the showing
                                        and
                                        hiding via CSS transitions. You can modify any of this with custom CSS or
                                        overriding
                                        our default variables. It's also worth noting that just about any HTML can go
                                        within
                                        the <code>.accordion-body</code>, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                            <!-- inicia el acordeon para la cuarta seccion de los videos -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Sección 4: Practicas con desarrollo
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the first item's accordion body.</strong> It is shown by
                                        default,
                                        until the collapse plugin adds the appropriate classes that we use to style each
                                        element. These classes control the overall appearance, as well as the showing
                                        and
                                        hiding via CSS transitions. You can modify any of this with custom CSS or
                                        overriding
                                        our default variables. It's also worth noting that just about any HTML can go
                                        within
                                        the <code>.accordion-body</code>, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

    </body>
</main>

<?php 
require_once '../includes/footer.php';
?>