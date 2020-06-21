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
                <img src="<?php echo RUTA_IMG?>objetivos/obj-1.png" class="" draggable="false" />
            </div>
            <div class="obj-content-description">
                <div class="line-yellow"></div>
                <p>
                    Hoy, lanzamos nuevas agencias de medios suecas. Ahora con una versión de pago del Barómetro de
                    la
                    Oficina de Medios, donde hemos puesto mucho esfuerzo en desarrollar una herramienta realmente
                    inteligente donde los suscriptores puedan comparar fácilmente las estadísticas entre ...
                </p>
            </div>
            <div class="obj-items">
                <img src="<?php echo RUTA_IMG?>objetivos/obj-2.png" class="" draggable="false" />
            </div>
            <div class="obj-content-description">
                <div class="line-yellow"></div>
                <p>
                    Woo hoo !! Ahora es en vivo, nuevo sveafastigheter.se, y estamos realmente orgullosos 🙂. #
                    agencia digital #digitalagency #sveafastigheter #wonderfour #lovedigital
                </p>
            </div>
        </div>

        <div class="item2">
            <div class="obj-content-description">
                <div class="line-yellow"></div>
                <p>
                    Nuevo Sulky. Para cualquiera que ama el trote. Proyecto emocionante, desafiante y muy divertido
                    donde realmente pudimos mostrar nuestro conocimiento en WordPress y administrar API. La primera
                    parte del proyecto es en vivo. Ver más del caso...
                </p>
            </div>
            <div class=" obj-items">
                <img src="<?php echo RUTA_IMG?>objetivos/obj-3.png" class="" draggable="false" />
            </div>
            <div class="u-backyellow"></div>
            <div class="u-backyellow"></div>

        </div>

        <div class="item2-movil">
            <div class=" obj-items">
                <img src="<?php echo RUTA_IMG?>objetivos/obj-3.png" class="" draggable="false" />
            </div>
            <div class="obj-content-description">
                <div class="line-yellow"></div>
                <p>
                    Nuevo Sulky. Para cualquiera que ama el trote. Proyecto emocionante, desafiante y muy divertido
                    donde realmente pudimos mostrar nuestro conocimiento en WordPress y administrar API. La primera
                    parte del proyecto es en vivo. Ver más del caso...
                </p>
            </div>

            <div class="u-backyellow"></div>
            <div class="u-backyellow"></div>

        </div>

        <div class="item3">
            <div class=" obj-items">
                <img src="<?php echo RUTA_IMG?>objetivos/obj-4.png" class="" draggable="false" />
            </div>
            <div class="obj-content-description">
                <div class="line-yellow"></div>
                <p>
                    Saludos a Yuriko. Ella es CTO y desarrolladora con nosotros en Wonderfour. Ella sabe casi todo
                    sobre WordPress, paywalls, sistemas de publicidad y todo tipo de API. Entonces ahora lo sabes. -
                    # agencia digital # agencia web #lovedig ...
                </p>
            </div>
            <div class="u-backyellow">
                <div class="content-obj-title">
                    <h1>Entonces
                        alcanzamos tus
                        objetivos digitales</h1>
                </div>
            </div>

        </div>
        <div class="u-backyellow-movil">
            <div class="content-obj-title">
                <h1>Entonces
                    alcanzamos tus
                    objetivos digitales</h1>
            </div>
        </div>
    </div>
</section>

<section class="partner">
    <div class="u-wrapper ">
        <p class="partner-title">NUESTROS CLIENTES_</p>
        <p class="partner-subtitle">Confían en nuestras soluciones</p>
        <div class="partner-grid">
            <div class="img-partner">
                <img class="img-fluid" src="<?php echo RUTA_IMG?>partners/rimac.png" alt="rimac" draggable="false" />
            </div>
            <div class="img-partner">
                <img class="img-fluid" src=" <?php echo RUTA_IMG?>partners/entel.png" alt="entel" draggable="false" />
            </div>
            <div class="img-partner">
                <img class="img-fluid" src="<?php echo RUTA_IMG?>partners/sacosi.png" alt="sacosi" draggable="false" />
            </div>

            <div class="img-partner">
                <img class="img-fluid" src="<?php echo RUTA_IMG?>partners/andean.png" alt="andean" draggable="false" />
            </div>

            <div class="img-partner">
                <img class="img-fluid" src="<?php echo RUTA_IMG?>partners/galatel.png" alt="galatel"
                    draggable="false" />
            </div>
            <div class="img-partner">
                <img class="img-fluid" src="<?php echo RUTA_IMG?>partners/whitepoint.png" alt="whitepoint"
                    draggable="false" />
            </div>
        </div>
    </div>

</section>

<section class="u-padding">
    <div class="digital">
        <div class="u-wrapper content-digital">
            <div class="content-digital-min">
                <div class="digital-title">
                    <p>¿Estás buscando una agencia digital?
                        con consejo técnico?</p>
                </div>
                <div class="digital-descriptions">
                    <p>Entonces puedes dejar de mirar ahora. Póngase en contacto con Diego Campó, director de nuevos
                        negocios de la agencia digital Cosmo en Lima - Perú.</p>
                    <p><u>holadiego@cosmo.pe</u>
                        <br>
                        +51 949 403 400</p>
                </div>
                <button class="btn-contact">¡Contáctame!</button>
            </div>

        </div>
    </div>
</section>


<?php
    include_once 'plantillas/footer.php';    
    include_once 'plantillas/documento-cierre.inc.php';
?>