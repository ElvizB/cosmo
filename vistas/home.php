<?php
    include_once 'app/config.inc.php';
    include_once 'plantillas/documento-declaracion.inc.php';
    include_once 'plantillas/Navbar/index.php';       
    include_once 'plantillas/slider/index.php';     
$titulo = 'Inicio';
?>

<section class="service">
    <div class="u-wrapper content-service">
        <p>HACEMOS_</p>
        <ul class="list-service">
            <li class="item">Producción de contenidos </li>
            <li class="item">Cursos Virtuales</li>
            <li class="item">Diseño web</li>
            <li class="item">Multimedia</li>
            <li class="item">Imagen corporativa</li>
        </ul>
    </div>
</section>

<section class="procesos">
    <div class="u-wrapper content-procesos">
        <h1>Nuestro proceso de virtualización</h1>
        <p>Transformamos contenidos complejos en contenidos fáciles de comprender.</p>
        <h2>¿Cómo lo hacemos?</h2>
    </div>
</section>

<section class="proceso-list">
    <div class="u-wrapper">
        <div class="procesos-grid">
            <div class="title-hide-why">
                <h2>¿Cómo lo hacemos?</h2>
            </div>
            <div class="procesos-item-grid">
                <div class="proceso-title">
                    <p>ANÁLISIS_</p>
                    <ul class="proceso-descriptions">
                        <h1>A</h1>
                        <li>Análisis de necesidades del cliente y proyecto.</li>
                        <li>Análisis del público objetivo.</li>
                        <li>Análisis de contenidos que el cliente desea impartir.</li>
                    </ul>
                </div>
            </div>
            <div class="procesos-item-grid">
                <div class="proceso-title">
                    <p>DISEÑO_</p>
                    <ul class="proceso-descriptions">
                        <h1>D</h1>
                        <li>Objetivos de aprendizaje.</li>
                        <li>Estructura y secuencia de contenido.</li>
                        <li>Estrategia de comunicación.</li>
                        <li>Estrategia pedagógica y de evaluación.</li>
                    </ul>
                </div>
            </div>
            <div class="procesos-item-grid">
                <div class="proceso-title">
                    <p>DESARROLLO_</p>
                    <ul class="proceso-descriptions">
                        <h1>D</h1>
                        <li>Desarrollo de entregables.</li>
                        <li>Desarrollo del guion gráfico (storyboard).</li>
                        <li>Producción del contenido en el formato de presentación deseado.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="objetivos">
    <div class="obj-grid">
        <div class="item1">
            <div class=" obj-items">
                <video class="video-back" autoplay loop muted>
                    <source src="<?php echo RUTA_VIDEO?>1.mp4" type="video/mp4">
                </video>
            </div>
            <div class="obj-content-description">
                <div class="line-yellow"></div>
                <p>
                    En el mundo empresarial transmitir un mensaje es sumamente importante.<br>
                    El enfoque en lo visual
                    marcará el punto de partida para la percepción que podamos generar con nuestros clientes.
                </p>
            </div>
            <div class="obj-items">
                <video class="video-back" autoplay loop muted>
                    <source src="<?php echo RUTA_VIDEO?>2.mp4" type="video/mp4">
                </video>
            </div>
            <div class="obj-content-description">
                <div class="line-yellow"></div>
                <p>
                    ¿Por qué no atreverse a innovar? Imagina las oportunidades que podrías generar potenciando tu marca,
                    generando contenido visual más atractivo y contando una historia para impartir conocimientos. Echa
                    un vistazo a nuestros servicios.
                </p>
            </div>
        </div>

        <div class="item2">
            <div class="obj-content-description">
                <div class="line-yellow"></div>
                <p>
                    En Cosmo, nos especializamos en el diseño digital, animación 2D, ilustración, cursos virtuales y
                    audiovisuales. Contamos con amplia experiencia en el desarrollo de contenido transmedia y decenas de
                    proyectos terminados satisfactoriamente.
                </p>
            </div>
            <div class=" obj-items">
                <video class="video-back" autoplay loop muted>
                    <source src="<?php echo RUTA_VIDEO?>3f.mp4" type="video/mp4">
                </video>
            </div>
            <div class="u-backyellow">
                <div class="objetivo-plant">
                    <img src="<?php echo RUTA_IMG?>objetivos/plant.png" class="img-fluid" draggable="false" />
                </div>
            </div>
            <div class="u-backyellow"></div>

        </div>

        <div class="item2-movil">
            <div class=" obj-items">
                <video class="video-back" autoplay loop muted>
                    <source src="<?php echo RUTA_VIDEO?>3f.mp4" type="video/mp4">
                </video>
            </div>
            <div class="obj-content-description">
                <div class="line-yellow"></div>
                <p>
                    En Cosmo, nos especializamos en el diseño digital, animación 2D, ilustración, cursos virtuales y
                    audiovisuales. Contamos con amplia experiencia en el desarrollo de contenido transmedia y decenas de
                    proyectos terminados satisfactoriamente.
                </p>
            </div>

            <div class="u-backyellow"></div>
            <div class="u-backyellow"></div>

        </div>

        <div class="item3">
            <div class=" obj-items">
                <video class="video-back" autoplay loop muted>
                    <source src="<?php echo RUTA_VIDEO?>4.mp4" type="video/mp4">
                </video>
            </div>
            <div class="obj-content-description">
                <div class="line-yellow"></div>
                <p>
                    Nos adaptamos a ti. Seas una pequeña, mediana o gran empresa, tenemos experiencia analizando las
                    necesidades de cada cliente. Las herramientas digitales que creamos son visualmente atractivas,
                    pero, sobre todo, alineadas siempre a los objetivos que necesitas.
                </p>
            </div>
            <div class="u-backyellow">
                <div class="content-obj-title">

                    <h1>Seremos tus aliados para lograr resultados impactantes en tus proyectos.</h1>
                </div>
            </div>

        </div>
        <div class="u-backyellow-movil">
            <div class="content-obj-title">
                <h1>Seremos tus aliados para lograr resultados impactantes en tus proyectos.</h1>
            </div>
        </div>
    </div>
</section>

<section class="partner">
    <div class="u-wrapper ">
        <p class="partner-title">NUESTROS CLIENTES_</p>
        <p class="partner-subtitle">Confían en nuestras soluciones</p>
        <div class="owl-carousel owl-theme">
            <div class="item">
                <div class="img-partner">
                    <img class="img-fluid" src=" <?php echo RUTA_IMG?>partners/entel.png" alt="entel"
                        draggable="false" />
                </div>
            </div>
            <div class="item">
                <div class="img-partner">
                    <img class="img-fluid" src="<?php echo RUTA_IMG?>partners/sacosi.png" alt="sacosi"
                        draggable="false" />
                </div>
            </div>
            <div class="item">
                <div class="img-partner">
                    <img class="img-fluid" src="<?php echo RUTA_IMG?>partners/andean.png" alt="andean"
                        draggable="false" />
                </div>
            </div>
            <div class="item">
                <div class="img-partner">
                    <img class="img-fluid" src="<?php echo RUTA_IMG?>partners/galatel.png" alt="galatel"
                        draggable="false" />
                </div>
            </div>
            <div class="item">
                <div class="img-partner">
                    <img class="img-fluid" src="<?php echo RUTA_IMG?>partners/whitepoint.png" alt="whitepoint"
                        draggable="false" />
                </div>
            </div>
            <div class="item">
                <div class="img-partner">
                    <img class="img-fluid" src="<?php echo RUTA_IMG?>partners/fong.png" alt="whitepoint"
                        draggable="false" />
                </div>
            </div>
            <div class="item">
                <div class="img-partner">
                    <img class="img-fluid" src="<?php echo RUTA_IMG?>partners/sanandres.png" alt="whitepoint"
                        draggable="false" />
                </div>
            </div>
        </div>
    </div>

</section>

<section class="u-padding">
    <div class="digital">
        <div class="u-wrapper content-digital">
            <div class="content-digital-min">
                <div class="digital-title">
                    <p>Somos el equipo que necesitas</p>
                </div>
                <div class="digital-descriptions">
                    <p>Nuestro equipo multidisciplinario te ofrece la posibilidad de completar tu estrategia de
                        marketing o comunicaciones con otros canales. Comparte con nosotros tus necesidades y
                        requerimientos. </p>
                    <p><u>info@somoscosmo.pe</u>
                    </p>
                </div>
                <button class="btn-contact">¡CONTÁCTANOS!</button>
            </div>

        </div>
    </div>
</section>


<?php
    include_once 'plantillas/footer.php';    
    include_once 'plantillas/documento-cierre.inc.php';
?>