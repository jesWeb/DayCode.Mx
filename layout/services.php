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
        <div class="container">
            <div class="services-Daycode-img">
                <img src="./IMG/bg-services.png" style="width: 80vmax;" alt="">
            </div>

            <div class="bg-light">
                <h1>Servicios Digitales</h1>
                <p>Los servicios con los que contamos están principalmente orientados al Desarrollo Web,
                    Publicidad y el Desarrollo de Software, sin embargo, puedes encontrar la Capacitación digital
                    orientada a empresas y los cursos, para que tú y tus socios se adecuen al uso correcto de las
                    tecnologías.</p>

                <div class="services-content mt-5 ">
                    <div class="row box-serv mb-3">
                        <div class="col-md-3 box-serv-icon ">
                            <div class="box-serv-icon_img">
                                <img src="<?= base_url?>assets/IMG/serv-icons/base-datos.svg" alt="" class="icono"
                                    width="100" height="100">
                            </div>
                            <p>Desarrollo Web </p>
                            <a href="" class="btn btn-primary">Contratar</a>
                        </div>
                        <div class="col-md-9 box-serv-info ">
                            <p>¿Sabe que es la presencia digital? Esta conlleva estar presente por medio de publicidad,
                                o
                                sitio
                                web,
                                en
                                internet, tal es el caso del Gigante Amazon, todos sabemos de la existencia de esta
                                gigantesca
                                marca
                                debido a su enorme presencia digital, exacto gracias a su sitio web. El contar con una
                                página en
                                internet
                                para su negocio o negocios le permitirá tener presencia digital sumado al gran aumente
                                en el
                                alcance
                                al
                                público en general, o al que su marca se oriente.</p>
                        </div>
                    </div>

                    <div class="row box-serv  mb-3">
                        <div class="col-md-3 box-serv-icon ">
                            <div class="box-serv-icon_img">
                                <img src="<?= base_url?>assets/IMG/serv-icons/capacitacion.svg" alt="" class="icono"
                                    width="100" height="100">
                            </div>
                            <p>Desarrollo de software </p>
                            <a href="" class="btn btn-primary">Contratar </a>
                        </div>
                        <div class="col-md-9 box-serv-info ">
                            <p>¿Sabe que es la presencia digital? Esta conlleva estar presente por medio de publicidad,
                                o
                                sitio
                                web,
                                en
                                internet, tal es el caso del Gigante Amazon, todos sabemos de la existencia de esta
                                gigantesca
                                marca
                                debido a su enorme presencia digital, exacto gracias a su sitio web. El contar con una
                                página en
                                internet
                                para su negocio o negocios le permitirá tener presencia digital sumado al gran aumente
                                en el
                                alcance
                                al
                                público en general, o al que su marca se oriente.</p>
                        </div>
                    </div>

                    <div class="row box-serv  mb-3">
                        <div class="col-md-3 box-serv-icon ">
                            <div class="box-serv-icon_img">
                                <img src="<?= base_url?>assets/IMG/serv-icons/marketing.svg" alt="" class="icono"
                                    width="100" height="100">
                            </div>
                            <p>Desarrollo Web </p>
                            <a href="" class="btn btn-primary">Contratar</a>
                        </div>
                        <div class="col-md-9 box-serv-info ">
                            <p>¿Sabe que es la presencia digital? Esta conlleva estar presente por medio de publicidad,
                                o
                                sitio
                                web,
                                en
                                internet, tal es el caso del Gigante Amazon, todos sabemos de la existencia de esta
                                gigantesca
                                marca
                                debido a su enorme presencia digital, exacto gracias a su sitio web. El contar con una
                                página en
                                internet
                                para su negocio o negocios le permitirá tener presencia digital sumado al gran aumente
                                en el
                                alcance
                                al
                                público en general, o al que su marca se oriente.</p>
                        </div>
                    </div>

                    <div class="row box-serv  mb-3">
                        <div class="col-md-3 box-serv-icon ">
                            <div class="box-serv-icon_img">
                                <img src="<?= base_url?>assets/IMG/serv-icons/software.svg" alt="" class="icono"
                                    width="100" height="100">
                            </div>
                            <p>Desarrollo Web </p>
                            <a href="" class="btn btn-primary">Contratar</a>
                        </div>
                        <div class="col-md-9 box-serv-info ">
                            <p>¿Sabe que es la presencia digital? Esta conlleva estar presente por medio de publicidad,
                                o
                                sitio
                                web,
                                en
                                internet, tal es el caso del Gigante Amazon, todos sabemos de la existencia de esta
                                gigantesca
                                marca
                                debido a su enorme presencia digital, exacto gracias a su sitio web. El contar con una
                                página en
                                internet
                                para su negocio o negocios le permitirá tener presencia digital sumado al gran aumente
                                en el
                                alcance
                                al
                                público en general, o al que su marca se oriente.</p>
                        </div>
                    </div>

                    <div class="row box-serv  mb-3">
                        <div class="col-md-3 box-serv-icon ">
                            <div class="box-serv-icon_img">
                                <img src="<?= base_url?>assets/IMG/serv-icons/web.svg" alt="" class="icono" width="100"
                                    height="100">
                            </div>
                            <p>Desarrollo Web </p>
                            <a href="" class="btn btn-primary">Contratar</a>
                        </div>
                        <div class="col-md-9 box-serv-info ">
                            <p>¿Sabe que es la presencia digital? Esta conlleva estar presente por medio de publicidad,
                                o
                                sitio
                                web,
                                en
                                internet, tal es el caso del Gigante Amazon, todos sabemos de la existencia de esta
                                gigantesca
                                marca
                                debido a su enorme presencia digital, exacto gracias a su sitio web. El contar con una
                                página en
                                internet
                                para su negocio o negocios le permitirá tener presencia digital sumado al gran aumente
                                en el
                                alcance
                                al
                                público en general, o al que su marca se oriente.</p>
                        </div>
                    </div>

                    <div class="row box-serv  mb-3">
                        <div class="col-md-3 box-serv-icon ">
                            <div class="box-serv-icon_img">
                                <img src="<?= base_url?>assets/IMG/serv-icons/cursos.svg" alt="" class="icono"
                                    width="100" height="100">
                            </div>
                            <p>Desarrollo Web </p>
                            <a href="" class="btn btn-primary">Contratar</a>
                        </div>
                        <div class="col-md-9 box-serv-info ">
                            <p>¿Sabe que es la presencia digital? Esta conlleva estar presente por medio de publicidad,
                                o
                                sitio
                                web,
                                en
                                internet, tal es el caso del Gigante Amazon, todos sabemos de la existencia de esta
                                gigantesca
                                marca
                                debido a su enorme presencia digital, exacto gracias a su sitio web. El contar con una
                                página en
                                internet
                                para su negocio o negocios le permitirá tener presencia digital sumado al gran aumente
                                en el
                                alcance
                                al
                                público en general, o al que su marca se oriente.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </body>
</main>

<?php 
require_once '../includes/footer.php';
?>