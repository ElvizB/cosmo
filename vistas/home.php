<?php
include_once 'app/config.inc.php';
include_once 'plantillas/documento-declaracion.inc.php';
?>


<!--Navbar-->
<header class="container navbar-background">
    <nav class="navbar custom-navbar navbar-background navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
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
                        <a href="#home" class="smoothScroll nav-link font-weight-normal mx-3 inicio">Inicio
                            <span class=" sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#somos" class="smoothScroll nav-link font-weight-normal mx-3 ">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a href="#servicios" class="smoothScroll nav-link font-weight-normal mx-3 ">Servicios</a>
                    </li>
                    <li class=" nav-item">
                        <a href="#proyectos" class="smoothScroll nav-link font-weight-normal mx-3 ">Proyectos</a>
                    </li>
                    <li class=" nav-item">
                        <a href="#contacto" class="smoothScroll nav-link font-weight-normal mx-3 ">Contacto</a>
                    </li>
                </ul>
                <!-- Links -->
            </div>
            <!-- Collapsible content -->
        </div>
    </nav>
</header>
<!--/.Navbar-->

<div id="home carousel-example-3" class="carousel slide carousel-fade" data-ride="carousel">

    <div class="carousel-inner " role="listbox">
        <!-- First slide -->
        <div class="carousel-item banner_uno view active">
            <div class="flex-center slider-title">
                <ul class="list-style">
                    <li>
                        <h1 class="display-4 text-yellow data-title animated fadeInDown delay-1s font-cLight">
                            REVOLUCIONA<br>
                            TUS PROYECTOS
                        </h1>
                    </li>
                    <div class="flex-center mb-3 animated fadeInDown delay-2s">
                        <img class="img-fluid" src="img/servicios/line_inicio.png" alt="line">
                    </div>
                    <li>
                        <p
                            class="h3-responsive data-sutitile font-weight-normal animated fadeInUp delay-2s text-white font-cLight">
                            Solicite el
                            plan más adecuado para su empresa.</p>
                    </li>
                    <li class="pt-md-0 pt-5">
                        <a href="#" class="btn btn-info animated zoomIn btn-empezar delay-3s font-cSemiBold"
                            rel="nofollow">EMPIEZA YA</a>
                    </li>
                </ul>
            </div>
        </div>
        <!--/.First slide-->

    </div>

</div>

<!-- Section: QUIÉNES SOMOS -->
<section class="my-5 container sec-somos" id="somos">

    <!-- Grid row -->
    <div class="row">

        <!-- Grid column -->
        <div class="col-lg-6 col-xl-6">

            <!-- Post title -->
            <h2 class="h2-responsive text-center text-md-left text-color-abaut font-cBol bottom-reset wow fadeInUp"
                data-wow-delay="0.2s">¿QUIÉNES
                SOMOS?</h2>
            <div class="text-center text-md-left mb-2 wow fadeInUp" data-wow-delay="0.2s"><img class="img-fluid"
                    src="img/line.png" alt="line"></div>

            <!-- Excerpt -->
            <p class="black-text text-justify text-small font-cLight wow fadeInUp" data-wow-delay="0.2s">
                <strong>COSMO</strong> es un equipo de
                profesionales
                especializados en la gestión y desarrollo de productos digitales y herramientas virtuales como
                soluciones para el sector corporativo y educativo, los cuales sumarán valor en el crecimiento
                organizacional de nuestros clientes.</p> <!-- Post data -->
            <p class="black-text text-justify text-small font-cLight wow fadeInUp" data-wow-delay="0.2s">Trabajamos cada
                proyecto aplicando tres grandes
                principios:
            </p>
            <div class="row wow fadeInUp" data-wow-delay="0.2s">
                <div class="col-lg-2 col-md-2 col-sm-2 text-center text-md-left pb-3 pb-md-0">
                    <img class="img-fluid" src="img/nosotros/analisis.png" alt="Sample image">
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10 text-color-abaut text-center text-md-left font-cRegular">
                    <h5 class="">Análisis </h5>
                    <p class=" text-small">Para conocer las necesidades de cada proyecto.
                    </p>
                </div>
            </div>

            <div class="row wow fadeInUp" data-wow-delay="0.2s">
                <div class="col-lg-2 col-md-2 col-sm-2 text-center text-md-left pb-3 pb-md-0">
                    <img class="img-fluid" src="img/nosotros/diseno.png" alt="Sample image">
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10 text-color-abaut text-center text-md-left font-cRegular">
                    <h5 class="">Diseño </h5>
                    <p class=" text-small">Para lograr construir estrategias óptimas de comunicación.
                    </p>
                </div>
            </div>

            <div class="row wow fadeInUp" data-wow-delay="0.2s">
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
            <div class="view overlay rounded mb-lg-0 mb-4 pt-4 wow zoomIn" data-wow-delay="0.2s">
                <img class="img-fluid" src="img/nosotros/about.png" alt="Sample image">
            </div>

        </div>
        <!-- Grid column -->


    </div>
    <!-- Grid row -->

</section>
<!-- Section: QUIÉNES SOMOS -->

<!-- Section: Servicios -->
<section class="my-5 container title" id="servicios">

    <div>
        <!-- Section heading -->
        <h1 class=" h1-responsive font-weight-bold text-center text-color-abaut font-cBol bottom-reset wow fadeInUp"
            data-wow-delay="0.2s">SERVICIOS</h1>
        <div class="text-center mb-2 wow fadeInUp" data-wow-delay="0.3s"><img class="img-fluid" src="img/line.png"
                alt="line"></div>
        <!-- Section description -->
        <p class="text-center w-responsive mx-auto pb-4 font-cLight wow fadeInUp" data-wow-delay="0.4s">Lorem ipsum
            dolor
            sit amet, consectetuer adipiscing
            elit, sed diam
            nonummy nibh euismod.</p>

        <div class="cd-timeline js-cd-timeline">

            <div class=" cd-timeline__container">

                <div class="cd-timeline__block ">
                    <div class=" cd-timeline__img cd-timeline__img--picture wow zoomIn" data-wow-delay="0.2s">
                        <img src="img/servicios/icons/icon_v_e.png" alt="Picture">
                    </div> <!-- cd-timeline__img -->

                    <div class="cd-timeline__content text-component">

                        <img class="img-fluid z-depth-2 rounded wow fadeInUp" data-wow-delay="0.2s"
                            src="img/servicios/v_e.png" alt="Sample image">

                        <div class="cd-timeline__date wow fadeInUp" data-wow-delay="0.2s">
                            <h2
                                class="h2-responsive bottom-reset text-center text-md-left text-color-abaut font-cSemiBold">
                                VÍDEOS EXPLICATIVOS</h2>
                            <div class="mb-2"><img class="img-fluid" src="img/servicios/line_s.png" alt="line"></div>
                            <p class="text-justify bottom-reset font-cLight">Presentamos contenidos informativos e </p>
                            <p class="text-justify bottom-reset font-cLight">inductivos de manera dinámica y ordenada.
                            </p>

                        </div>
                    </div> <!-- cd-timeline__content z-depth-2-->
                </div> <!-- cd-timeline__block -->

                <div class="cd-timeline__block ">
                    <div class="cd-timeline__img cd-timeline__img--movie wow zoomIn" data-wow-delay="0.2s">
                        <img src="img/servicios/icons/icon_learning.png" alt="Learning">
                    </div> <!-- cd-timeline__img -->

                    <div class="cd-timeline__content text-component wow fadeInUp" data-wow-delay="0.2s">
                        <img class="img-fluid z-depth-2 rounded" src="img/servicios/learning.png" alt="Sample image">

                        <div class="cd-timeline__date">
                            <h2 class=" h2-responsive bottom-reset text-center text-md-left text-color-abaut
                        font-cSemiBold">
                                E-LEARNING</h2>
                            <div class="mb-2 text-left"><img class="img-fluid" src="img/servicios/line_s.png"
                                    alt="line">
                            </div>
                            <p class="text-justify bottom-reset font-cLight">Creamos cursos virtuales como </p>
                            <p class="text-justify bottom-reset font-cLight">herramientas de capacitación efectiva.</p>

                        </div>
                    </div> <!-- cd-timeline__content -->
                </div> <!-- cd-timeline__block -->

                <div class="cd-timeline__block ">
                    <div class="cd-timeline__img cd-timeline__img--picture wow zoomIn" data-wow-delay="0.2s">
                        <img src="img/servicios/icons/icon_d_cg.png" alt="diseño">
                    </div> <!-- cd-timeline__img -->

                    <div class="cd-timeline__content text-component wow fadeInUp" data-wow-delay="0.2s">
                        <img class="img-fluid z-depth-2 rounded" src="img/servicios/d_cg.png" alt="Sample image">

                        <div class="cd-timeline__date">
                            <h2
                                class="h2-responsive bottom-reset text-center text-md-left text-color-abaut font-cSemiBold">
                                DISEÑO Y COMUNICACIÓN GRÁFICA</h2>
                            <div class="mb-2 text-left"><img class="img-fluid" src="img/servicios/line_s.png"
                                    alt="line">
                            </div>
                            <p class="text-justify bottom-reset font-cLight">Creamos y diseñamos presentaciones</p>
                            <p class="text-justify bottom-reset font-cLight">guías gráficas e infografías de alto
                                impacto.
                            </p>

                        </div>
                    </div> <!-- cd-timeline__content -->
                </div> <!-- cd-timeline__block -->

                <div class="cd-timeline__block">
                    <div class="cd-timeline__img cd-timeline__img--location wow zoomIn" data-wow-delay="0.2s">
                        <img src="img/servicios/icons/icon_h_w.png" alt="Location">
                    </div> <!-- cd-timeline__img -->

                    <div class="cd-timeline__content text-component wow fadeInUp" data-wow-delay="0.2s">
                        <img class="img-fluid z-depth-2 rounded" src="img/servicios/h_w.png" alt="Sample image">

                        <div class="cd-timeline__date">
                            <h2
                                class="h2-responsive bottom-reset text-center text-md-left text-color-abaut font-cSemiBold">
                                HERRAMIENTAS WEB</h2>
                            <div class="mb-2 text-left"><img class="img-fluid" src="img/servicios/line_s.png"
                                    alt="line">
                            </div>
                            <p class="text-justify bottom-reset font-cLight">Implementamos herramientas web y </p>
                            <p class="text-justify bottom-reset font-cLight">plataformas digitales.</p>

                        </div>
                    </div> <!-- cd-timeline__content -->
                </div> <!-- cd-timeline__block -->
            </div>
        </div>
    </div>

</section>
<!-- Section: Servicios -->

<!-- Section: Proyectos - reel -->
<section class="my-5 " id="proyectos">

    <div class="container-fluid">
        <!-- Grid row -->
        <div class="row ">
            <!-- Grid column -->
            <div class="col-lg-4 proyecto">
                <!-- Featured image -->
                <div class="flex-center slider-title">
                    <ul class="list-style">
                        <li>
                            <h2 class="h2-responsive text-reel font-cBol wow fadeInUp" data-wow-delay="0.2s"> CAPTURA
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
                            <h2 class="h2-responsive font-cBol text-center text-md-left text-white bottom-reset wow fadeInUp"
                                data-wow-delay="0.2s">
                                PROYECTOS - REEL</h2>
                            <div class="text-center text-md-left mb-2 wow fadeInUp" data-wow-delay="0.2s"><img
                                    class="img-fluid" src="img/servicios/line_reel.png" alt="line"></div>

                            <!-- Excerpt -->
                            <p class="black-text text-justify text-small font-cLight wow fadeInUp"
                                data-wow-delay="0.2s">Lorem ipsum dolor sit amet,
                                consectetuer
                                adipiscing elit, sed diam nonummy nibh euismod
                                tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                                minim veniam, quis
                                nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex
                                ea commodo</p>
                            <!-- Post data -->
                            <div class="text-center text-sm-left ver-video wow fadeInUp" data-wow-delay="0.3s">
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
                            <div class="text-center wow zoomIn" data-wow-delay="0.2s">
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
    </div>

</section>
<!-- Section: Proyectos - reel -->

<!-- Section: En nosotros -->
<section class="team-section text-center my-5 container" id="nosotros">

    <div>
        <!-- Section heading -->
        <div class="pt-4 wow fadeInUp" data-wow-delay="0.2s">
            <h2 class="h2-responsive text-color-abaut font-cBol bottom-reset">CONFÍAN EN NOSOTROS</h2>
            <div class="text-center mb-2"><img class="img-fluid" src="img/line.png" alt="line"></div>

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
    </div>


</section>
<!-- Section: En nosotros -->

<!-- Section: Contact  -->
<section class="bg-footer" id="contacto">

    <div class="container pb-5">
        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="pt-3"></div>
                <h2 class="h2-responsive text-white text-center text-md-left pt-5 font-cBol bottom-reset">
                    CONTACTO
                </h2>
                <div class="text-center text-md-left mb-2"><img class="img-fluid" src="img/line.png" alt="line"></div>
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
            <div class="col-lg-6 pl-0 pl-sm-5 wow fadeInUp" data-wow-delay="0.4s">
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
<!-- Section: Contact -->

<footer class="page-footer bg-footer border-footer">

    <div class=" text-center py-3 text-white font-small font-cLight">
        Cosmo - Todos los derechos resevados 2019
    </div>
    <!-- Copyright -->

</footer>


<?php
  include_once 'plantillas/documento-cierre.inc.php';
?>