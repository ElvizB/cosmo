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
        <img class="img-fluid" src="<?php echo RUTA_IMG?>footer/cosmo.png" alt="cosmo" draggable="false" />
        <div class="u-descriptions">
            <p>
                Un equipo de profesionales especializados en la gestión y desarrollo de productos digitales y
                herramientas
                virtuales como soluciones para el sector corporativo y educativo, los cuales sumarán valor en el
                crecimiento
                organizacional de nuestros clientes.
            </p>
            <p>
                Comprado u obtenido. Campaña o presencia continua. Nuestro conocimiento de las redes sociales y su
                conocimiento de su industria, sus condiciones y su grupo objetivo: juntos construimos su marca,
                aumentamos
                el compromiso o impulsamos las ventas y la conversión en los canal.
            </p>

        </div>
    </div>
</section>

<section class="about-descriptions">
    <div class="container">
        <div class="content-about-descriptions">
            <div class="about-items">
                <p>CREATIVIDAD</p>
                <img class="img-fluid" src="<?php echo RUTA_IMG?>about/creatividad.png" alt="creatividad"
                    draggable="false" />
            </div>
            <div class="about-items">
                <p>VISIÓN</p>
                <img class="img-fluid" src="<?php echo RUTA_IMG?>about/vision.png" alt="vision" draggable="false" />
            </div>
            <div class="about-items">
                <img class="" src="<?php echo RUTA_IMG?>about/pro.png" alt="pro" draggable="false" />
            </div>
            <div class="about-items">
                <p>EFICIENCIA</p>
                <img class="img-fluid" src="<?php echo RUTA_IMG?>about/eficiencia.png" alt="eficiencia"
                    draggable="false" />
            </div>
            <div class="about-items">
                <p>Estrategia</p>
                <img class="img-fluid" src="<?php echo RUTA_IMG?>about/estrategia.png" alt="estrategia"
                    draggable="false" />
            </div>
        </div>
    </div>
</section>

<section class="teams">
    <div class="u-wrapper">
        <h6 class="team-title mb-5">TEAM_</h6>

        <div class="proyect-grid">
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
                        <p class="proyect-description-name">Diego Campó</p>
                        <p class="proyect-description-cargo">Dirección</p>
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