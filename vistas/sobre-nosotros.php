<?php
    include_once 'app/config.inc.php';
    include_once 'plantillas/documento-declaracion.inc.php';
    include_once 'plantillas/NavbarAbout/index.php';    
       
$titulo = 'Sobre Nosotros';
?>

<section class="u-content-padding">
    <div class="u-wrapper content-about">
        <h6 class="u-title-small">NOSOTROS_</h6>
        <div class="u-subtitle">
            <h1>Un equipo creativo<br>
                Para tu empresa</h1>
        </div>

        <div class="u-descriptions">
            <p>
                Un equipo de profesionales especializados en la gestión y desarrollo de productos digitales y
                herramientas
                virtuales como soluciones para el sector corporativo y educativo, los cuales sumarán valor en el
                crecimiento
                organizacional de nuestros clientes.
            </p>
            <p>
                Nuestro objetivo es ser un aliado en la producción de contenidos digitales que brinden soluciones de
                comunicación efectivas e innovadoras

            </p>

        </div>
    </div>
</section>

<section class="about-descriptions">
    <div class="u-wrapper">
        <div class="content-about-descriptions">
            <div class="about-items">
                <p>VISIÓN</p>
                <img class="img-fluid" src="<?php echo RUTA_IMG?>about/vision.png" alt="vision" draggable="false" />
            </div>
            <div class="about-items">
                <p>ESTRATEGIA</p>
                <img class="img-fluid" src="<?php echo RUTA_IMG?>about/estrategia.png" alt="estrategia"
                    draggable="false" />
            </div>


            <div class="about-items-pro">
                <img class="" src="<?php echo RUTA_IMG?>about/pro.png" alt="pro" draggable="false" />
            </div>
            <div class="about-items">
                <p>CREATIVIDAD</p>
                <img class="img-fluid" src="<?php echo RUTA_IMG?>about/creatividad.png" alt="creatividad"
                    draggable="false" />
            </div>
            <div class="about-items">
                <p>EFICIENCIA</p>
                <img class="img-fluid" src="<?php echo RUTA_IMG?>about/eficiencia.png" alt="eficiencia"
                    draggable="false" />
            </div>

        </div>
    </div>
</section>

<section class="teams">
    <div class="u-wrapper">
        <h6 class="team-title mb-5">TEAM_</h6>

        <div class="about-grid">
            <div>
                <div class="content-about-item content-team">
                    <div class="content-team-img ">
                        <div class="rectangulo"></div>
                        <div class="content-team-title">
                            <p>
                                Experto en desarrollo y gestión de contenidos digitales.
                                Fundador de COSMO
                            </p>
                        </div>
                        <img src="<?php echo RUTA_IMG?>team/team-1.png" alt="" draggable="false">
                    </div>
                </div>
                <div class="content-proyect-description">
                    <div class="wrapper-description">
                        <p class="proyect-description-name">Diego Campó</p>
                        <p class="proyect-description-cargo">Dirección</p>
                    </div>
                </div>
            </div>


            <div>
                <div class="content-about-item content-team">
                    <div class="content-team-img ">
                        <div class="rectangulo"></div>
                        <div class="content-team-title">
                            <p>
                                Experto en desarrollo y gestión de contenidos digitales.
                                Fundador de COSMO
                            </p>
                        </div>
                        <img src="<?php echo RUTA_IMG?>team/team-1.png" alt="" draggable="false">
                    </div>
                </div>
                <div class="content-proyect-description">
                    <div class="wrapper-description">
                        <p class="proyect-description-name">Paul Saucedo</p>
                        <p class="proyect-description-cargo">Marketing</p>
                    </div>
                </div>
            </div>


            <div>
                <div class="content-about-item content-team">
                    <div class="content-team-img ">
                        <div class="rectangulo"></div>
                        <div class="content-team-title">
                            <p>
                                Experto en desarrollo y gestión de contenidos digitales.
                                Fundador de COSMO
                            </p>
                        </div>
                        <img src="<?php echo RUTA_IMG?>team/team-1.png" alt="" draggable="false">
                    </div>
                </div>
                <div class="content-proyect-description">
                    <div class="wrapper-description">
                        <p class="proyect-description-name">Miguel Chahuara</p>
                        <p class="proyect-description-cargo">Diseño</p>
                    </div>
                </div>
            </div>

            <div>
                <div class="content-about-item content-team">
                    <div class="content-team-img ">
                        <div class="rectangulo"></div>
                        <div class="content-team-title">
                            <p>
                                Experto en desarrollo y gestión de contenidos digitales.
                                Fundador de COSMO
                            </p>
                        </div>
                        <img src="<?php echo RUTA_IMG?>team/team-1.png" alt="" draggable="false">
                    </div>
                </div>
                <div class="content-proyect-description">
                    <div class="wrapper-description">
                        <p class="proyect-description-name">Diego Díaz</p>
                        <p class="proyect-description-cargo">Audiovisuales</p>
                    </div>
                </div>
            </div>


            <div>
                <div class="content-about-item content-team">
                    <div class="content-team-img ">
                        <div class="rectangulo"></div>
                        <div class="content-team-title">
                            <p>
                                Experto en desarrollo y gestión de contenidos digitales.
                                Fundador de COSMO
                            </p>
                        </div>
                        <img src="<?php echo RUTA_IMG?>team/team-1.png" alt="" draggable="false">
                    </div>
                </div>
                <div class="content-proyect-description">
                    <div class="wrapper-description">
                        <p class="proyect-description-name">Elvis Barbarón</p>
                        <p class="proyect-description-cargo">Desarrollo</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<?php
    include_once 'plantillas/footer.php';
    include_once 'plantillas/documento-cierre.inc.php';
?>