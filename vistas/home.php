<?php
include_once 'app/config.inc.php';
include_once 'plantillas/documento-declaracion.inc.php';
?>


<!--Navbar-->
<header class="container navbar-background">
    <nav class="navbar navbar-background navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
        <div class="container">
            <!-- Navbar brand -->
            <a class="text-white font-weight-bold h2-responsive pl-md-5 pl-1" href="<?php echo SERVIDOR ?>">
                <img src="img/logo.png" class="LogoI wow pulse pb-2" />

            </a>

            <!-- Collapse button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
                aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Collapsible content -->
            <div class="collapse navbar-collapse" id="basicExampleNav">
                <!-- Links -->
                <ul class="navbar-nav ml-auto" id="botones">
                    <li class="nav-item">
                        <a class="nav-link font-weight-normal mx-3" href="">Inicio
                            <span class=" sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-normal mx-3" href="">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-normal mx-3" href="">Servicios</a>
                    </li>
                    <li class=" nav-item">
                        <a class="nav-link font-weight-normal mx-3" href="">Proyectos</a>
                    </li>
                    <li class=" nav-item">
                        <a class="nav-link font-weight-normal mx-3" href="">Contacto</a>
                    </li>
                </ul>
                <!-- Links -->
            </div>
            <!-- Collapsible content -->
        </div>
    </nav>
</header>
<!--/.Navbar-->

<div id="carousel-example-3" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators  data-interval="false"
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-3" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-3" data-slide-to="1"></li>
        <li data-target="#carousel-example-3" data-slide-to="2"></li>
    </ol>Indicators-->
    <!--Slides-->
    <div class="carousel-inner " role="listbox">
        <!-- First slide -->
        <div class="carousel-item banner_uno view active">
            <div class="flex-center slider-title">
                <ul class="list-style">
                    <li>
                        <h1 class="display-4 text-yellow font-weight-500 data-title animated fadeInDown delay-1s">
                            REVOLUCIONA<br>
                            TUS PROYECTOS
                        </h1>
                    </li>
                    <li>
                        <p class="h3-responsive data-sutitile font-weight-normal animated fadeInUp delay-2s text-white">
                            Solicite el
                            plan más adecuado para su empresa.</p>
                    </li>
                    <li class="pt-md-0 pt-5">
                        <a href="#" class="btn btn-info animated zoomIn btn-empezar delay-3s " rel="nofollow">EMPIEZA
                            YA</a>
                    </li>
                </ul>
            </div>
        </div>
        <!--/.First slide-->

    </div>
    <!--/.Slides-->

    <!--Controls
    <a class="carousel-control-prev" href="#carousel-example-3" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-3" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a> Controls-->
</div>


<!-- Section: Blog v.3 -->
<section class="my-5 container">

    <!-- Grid row -->
    <div class="row">

        <!-- Grid column -->
        <div class="col-lg-6 col-xl-6">

            <!-- Post title -->
            <div class="title-contacto">
                <h2 class="h2-responsive mb-3 text-center text-md-left pb-2 text-color-abaut font-cBol">¿QUIÉNES
                    SOMOS?</h2>
            </div>
            <!-- Excerpt -->
            <p class="black-text text-justify text-small font-cLight"><strong>COSMO</strong> es un equipo de
                profesionales
                especializados en la gestión y desarrollo de productos digitales y herramientas virtuales como
                soluciones para el sector corporativo y educativo, los cuales sumarán valor en el crecimiento
                organizacional de nuestros clientes.</p> <!-- Post data -->
            <p class="black-text text-justify text-small font-cLight">Trabajamos cada proyecto aplicando tres grandes
                principios:
            </p>
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-2 text-center text-md-left pb-3 pb-md-0">
                    <img class="img-fluid" src="img/nosotros/analisis.png" alt="Sample image">
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10 text-color-abaut text-center text-md-left font-cRegular">
                    <h5 class="">Análisis </h5>
                    <p class=" text-small">Para conocer las necesidades de cada proyecto.
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-2 text-center text-md-left pb-3 pb-md-0">
                    <img class="img-fluid" src="img/nosotros/diseno.png" alt="Sample image">
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10 text-color-abaut text-center text-md-left font-cRegular">
                    <h5 class="">Diseño </h5>
                    <p class=" text-small">Para lograr construir estrategias óptimas de comunicación.
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-2 text-center text-md-left pb-3 pb-md-0">
                    <img class="img-fluid" src="img/nosotros/story.png" alt="Sample image">
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10 text-color-abaut text-center text-md-left font-cRegular">
                    <h5 class="">Storytelling </h5>
                    <p class=" text-small">Para potenciar contenidos y generar interés constante.
                    </p>
                </div>
            </div>

        </div>
        <!-- Grid column -->


        <!-- Grid column -->
        <div class="col-lg-6 col-xl-6">

            <!-- Featured image -->
            <div class="view overlay rounded mb-lg-0 mb-4 pt-4">
                <img class="img-fluid" src="img/nosotros/about.png" alt="Sample image">
            </div>

        </div>
        <!-- Grid column -->


    </div>
    <!-- Grid row -->

</section>
<!-- Section: Blog v.3 -->

<!-- Section: Contact v.1 -->
<section class="my-5 container title">

    <!-- Section heading -->
    <h2 class="h2-responsive font-weight-bold text-center my-5 text-color-abaut font-cBol">SERVICIOS</h2>
    <!-- Section description -->
    <p class="text-center w-responsive mx-auto pb-5 font-cLight">Lorem ipsum dolor sit amet, consectetuer adipiscing
        elit, sed diam
        nonummy nibh euismod.</p>



</section>
<!-- Section: Contact v.1 -->

<section class="my-5 container-fluid">

    <!-- Grid row -->
    <div class="row ">
        <!-- Grid column -->
        <div class="col-lg-4 proyecto">
            <!-- Featured image -->
            <div class="flex-center slider-title">
                <ul class="list-style">
                    <li>
                        <h2 class="h2-responsive text-reel font-cBol animated fadeInDown delay-1s"> CAPTURA
                            DEL REEL </h2>
                    </li>
                </ul>
            </div>
        </div> <!-- Grid column -->


        <!-- Grid column -->
        <div class="col-lg-8 bg-proyecto">

            <!-- Featured image -->
            <div class="container">

                <!-- Grid row -->
                <div class="row my-5">

                    <!-- Grid column -->
                    <div class="col-lg-7 pt-1 pt-sm-5 pt-md-2 pl-7">

                        <!-- Post title -->
                        <div class="title-proyecto2">
                            <h2 class="h2-responsive font-cBol mb-3 text-center text-md-left text-white">
                                PROYECTOS - REEL</h2>
                        </div>
                        <!-- Excerpt -->
                        <p class="black-text text-justify text-small font-cLight">Lorem ipsum dolor sit amet,
                            consectetuer
                            adipiscing elit, sed diam nonummy nibh euismod
                            tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                            minim veniam, quis
                            nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex
                            ea commodo</p>
                        <!-- Post data -->
                        <div class="text-center text-sm-left ver-video">
                            <a href="#"
                                class="btn btn-info btn-ver-video font-cSemiBold animated zoomIn waves-effect waves-light"
                                rel="nofollow">VER VIDEO
                            </a>
                        </div>
                    </div>
                    <!-- Grid column -->


                    <!-- Grid column -->
                    <div class="col-lg-5">
                        <!-- Featured image -->
                        <div class="text-center">
                            <img class="img-fluid" src="img/proyectos/p_video.png" alt="Sample image">
                        </div>

                    </div>
                    <!-- Grid column -->


                </div>
                <!-- Grid row -->

            </div>

        </div>
        <!-- Grid column -->
    </div>
    <!-- Grid row -->

</section>


<section class="team-section text-center my-5 container">
    <!-- Section heading -->
    <div class="title pt-4 wow fadeInUp" data-wow-delay="0.2s">
        <h2 class="h2-responsive text-color-abaut font-cBol">CONFÍAN EN NOSOTROS</h2>

    </div>
    <!-- Section description -->

    <div class="row pt-3 flex-center">
        <!-- Grid column -->
        <div class="col-lg-3 col-md-6 py-5">
            <div class="wow zoomIn animated" data-wow-delay="0.5s">
                <img class="img-fluid" src="img/proyectos/entel.png" alt="entel">
            </div>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-lg-3 col-md-6 py-5">
            <div class="wow zoomIn animated" data-wow-delay="0.5s">
                <img class="img-fluid" src="img/proyectos/eip.png" alt="entel">
            </div>
        </div>
        <!-- Grid column -->
        <!-- Grid column -->
        <div class="col-lg-3 col-md-6 py-5">
            <div class="wow zoomIn animated" data-wow-delay="0.5s">
                <img class="img-fluid" src="img/proyectos/andean.png" alt="entel">
            </div>
        </div>
        <!-- Grid column -->
        <!-- Grid column -->
        <div class="col-lg-3 col-md-6 py-5">
            <div class="wow zoomIn animated" data-wow-delay="0.5s">
                <img class="img-fluid" src="img/proyectos/et.png" alt="entel">
            </div>
        </div>
        <!-- Grid column -->

    </div>


</section>


<!-- Section: Contact v.1 -->
<section class="bg-footer">

    <div class="container pb-5">
        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-lg-6">
                <div class="pt-3 title-contacto">
                    <h2 class="h2-responsive text-white mb-3 text-center text-md-left pt-5 pb-3 font-cBol">CONTACTO</h2>
                </div>
                <div class="border-form">
                    <h4 class=" text-yellow text-justify font-cRegular">¿En qué te podemos ayudar?</h4>
                    <p class="text-white text-justify text-small pb-2 font-cLight">Lorem ipsum dolor sit amet,
                        consectetuer
                        adipiscing
                        elit,
                        sed diam nonummy nibh euismod tincidunt ut
                        laoreet dolore magna aliquam erat volutpat.
                    </p>

                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" id="inputEmail4" placeholder="Nombre">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="password" class="form-control " id="inputPassword4" placeholder="Teléfono">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                placeholder="Comentario"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-enviar font-cSemiBold"><i
                                class="far fa-paper-plane pr-3"></i>ENVIAR</button>
                    </form>
                </div>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-lg-6 pl-0 pl-sm-5">
                <div class="pt-5"></div>
                <div class="pb-3 mb-lg-0 mb-4 pt-5 text-center text-sm-left">
                    <img class="img-fluid" src="img/contacto/cosmo.png" alt="cosmo">
                </div>
                <div class="text-center text-sm-left font-cLight">
                    <span class="text-white text-small">¿Tienes preguntas?</span>
                    <br>
                    <span class="text-white text-small">¡Contáctanos directamente!
                    </span>
                </div>

                <div class="row pt-3">
                    <div class="col-lg-2 col-md-2 col-sm-2 text-center text-sm-left pb-3 pb-md-0">
                        <img class="img-fluid" src="img/contacto/tel.png" alt="Sample image">
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-10 text-white text-center text-sm-left pt-3">
                        <p class="font-cRegular text-small">Teléfono: 949 403 400
                        </p>
                    </div>
                </div>

                <div class="row pt-4">
                    <div class="col-lg-2 col-md-2 col-sm-2 text-center text-md-left pb-3 pb-md-0">
                        <img class="img-fluid" src="img/contacto/email.png" alt="Sample image">
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-10 text-white text-center text-sm-left pt-3">
                        <p class="font-cRegular text-small">Email: info@somoscosmo.pe
                        </p>
                    </div>
                </div>

                <div class="row pt-4">
                    <div class="col-lg-2 col-md-2 col-sm-2 text-center text-md-left pb-3 pb-md-0">
                        <img class="img-fluid" src="img/contacto/ubi.png" alt="Sample image">
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-10 text-white text-center text-sm-left pt-3">
                        <p class="font-cRegular text-small">Oficinas: Benavides 140 - Of. 505
                        </p>
                    </div>
                </div>



            </div>
            <!-- Grid column -->
        </div>
        <!-- Grid row -->
        <div class="pb-5"></div>
    </div>
</section>
<!-- Section: Contact v.1 -->

<footer class="page-footer bg-footer border-footer">

    <div class=" text-center py-3 text-white font-small font-cLight">
        Cosmo - Todos los derechos resevados 2019
    </div>
    <!-- Copyright -->

</footer>


<?php
  include_once 'plantillas/documento-cierre.inc.php';
?>