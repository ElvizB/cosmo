<?php
    include_once 'app/config.inc.php';
    include_once 'plantillas/documento-declaracion.inc.php';
    include_once 'plantillas/NavbarAbout/index.php';    
       
$titulo = 'Contacto';
?>


<section class="u-content-padding">
    <div class="u-wrapper">
        <h6 class="u-title-small">CONTACTO_</h6>
        <div class="content-form">
            <div class="descriptions-form">
                <p>
                    Nuestras oficinas están ubicadas en el distrito de Surquillo (Lima, Perú). Para coordinar reuniones,
                    favor de contactarse con nosotros a través de nuestro correo electrónico.
                </p>
                <p>info@somoscosmo.pe</p>
                <p>Nuestros horarios de atención son:</p>
                <p>9 a. m. – 1 p. m. (GMT -5)</p>
                <p>2 p.m. – 5 p. m. (GMT -5)</p>
            </div>
            <div>
                <div class="form-back">
                    <form action="#">

                        <div class="md-form">
                            <input type="text" id="form-nameempresa" class="form-control">
                            <label for="form-nameempresa">Tu nombre (obligatorio)</label>
                        </div>

                        <div class="md-form">

                            <input type="text" id="form-page" class="form-control">
                            <label for="form-page">Tu correo electrónico (obligatorio)</label>
                        </div>


                        <div class="md-form">

                            <input type="text" id="form-email" class="form-control">
                            <label for="form-email">Asunto</label>
                        </div>

                        <div class="md-form">

                            <textarea id="form-text" class="form-control md-textarea" rows="3"></textarea>
                            <label for="form-text">Tu mensaje</label>
                        </div>

                        <button class="btn-enviar">
                            Enviar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="content-partner-contact">
    <div class="u-wrapper ">
        <div class="owl-carousel owl-theme">
            <div class="item">
                <div class="img-partner">
                    <img class="img-fluid" src="<?php echo RUTA_IMG?>contacto/c-rimac.png" alt="rimac"
                        draggable="false" />
                </div>
            </div>
            <div class="item">
                <div class="img-partner">
                    <img class="img-fluid" src=" <?php echo RUTA_IMG?>contacto/c-entel.png" alt="entel"
                        draggable="false" />
                </div>
            </div>
            <div class="item">
                <div class="img-partner">
                    <img class="img-fluid" src="<?php echo RUTA_IMG?>contacto/c-sacosi.png" alt="sacosi"
                        draggable="false" />
                </div>
            </div>
            <div class="item">
                <div class="img-partner">
                    <img class="img-fluid" src="<?php echo RUTA_IMG?>contacto/c-andean.png" alt="andean"
                        draggable="false" />
                </div>
            </div>
            <div class="item">
                <div class="img-partner">
                    <img class="img-fluid" src="<?php echo RUTA_IMG?>contacto/c-galatel.png" alt="galatel"
                        draggable="false" />
                </div>
            </div>
            <div class="item">
                <div class="img-partner">
                    <img class="img-fluid" src="<?php echo RUTA_IMG?>contacto/c-white.png" alt="whitepoint"
                        draggable="false" />
                </div>
            </div>

        </div>
    </div>

</section>
<?php
    include_once 'plantillas/footer.php';
    include_once 'plantillas/documento-cierre.inc.php';
?>