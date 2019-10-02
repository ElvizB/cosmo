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
            <h3 class="font-weight-bold mb-3 text-center text-md-left">¿QUIÉNES SOMOS?</h3>
            <!-- Excerpt -->
            <p class="black-text text-justify text-small"><strong>COSMO</strong> es un equipo de profesionales
                especializados en la gestión y desarrollo de productos digitales y herramientas virtuales como
                soluciones para el sector corporativo y educativo, los cuales sumarán valor en el crecimiento
                organizacional de nuestros clientes.</p> <!-- Post data -->
            <p class="black-text text-justify text-small">Trabajamos cada proyecto aplicando tres grandes principios:
            </p>
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-2 text-center text-md-left pb-3 pb-md-0">
                    <img class="img-fluid" src="img/nosotros/analisis.png" alt="Sample image">
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10 text-color-abaut text-center text-md-left">
                    <h5 class="font-weight-normal">Análisis </h5>
                    <p class="font-weight-normal text-small">Para conocer las necesidades de cada proyecto.
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-2 text-center text-md-left pb-3 pb-md-0">
                    <img class="img-fluid" src="img/nosotros/diseno.png" alt="Sample image">
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10 text-color-abaut text-center text-md-left">
                    <h5 class="font-weight-normal">Análisis </h5>
                    <p class="font-weight-normal text-small">Para lograr construir estrategias óptimas de comunicación.
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-2 text-center text-md-left pb-3 pb-md-0">
                    <img class="img-fluid" src="img/nosotros/story.png" alt="Sample image">
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10 text-color-abaut text-center text-md-left">
                    <h5 class="font-weight-normal">Análisis </h5>
                    <p class="font-weight-normal text-small">Para potenciar contenidos y generar interés constante
                    </p>
                </div>
            </div>

        </div>
        <!-- Grid column -->


        <!-- Grid column -->
        <div class="col-lg-6 col-xl-6">

            <!-- Featured image -->
            <div class="view overlay rounded mb-lg-0 mb-4">
                <img class="img-fluid" src="img/nosotros/about.png" alt="Sample image">
                <a>
                    <div class="mask rgba-white-slight"></div>
                </a>
            </div>

        </div>
        <!-- Grid column -->


    </div>
    <!-- Grid row -->

</section>
<!-- Section: Blog v.3 -->




<?php
  include_once 'plantillas/documento-cierre.inc.php';
?>