<header>
    <div class="web-menu">
        <nav id="navbar" class="prueba nav-bar-principal">
            <div class="u-wrapper contenedor-navbar">
                <a class="logo_d" href="<?php echo SERVIDOR ?>">
                    <img src="<?php echo RUTA_IMG?>logo2.png" class="img-fluid wow pulse" />
                </a>
                <ul id="nav-menu2">
                    <li><a href="<?php echo RUTA_NOSOTROS ?>">SOBRE NOSOTROS</a></li>
                    <li><a href="<?php echo RUTA_SERVICIOS ?>">SERVICIOS</a>
                        <ul class="triangulo">
                            <li> <a href=""> <img src="<?php echo RUTA_IMG?>cuadro.png" class="img-fluid cuadro" />
                                    Vídeos explicativos</a> </li>
                            <li> <a href=""><img src="<?php echo RUTA_IMG?>cuadro.png" class="img-fluid cuadro" />Cursos
                                    virtuales</a></li>
                            <li> <a href=""><img src="<?php echo RUTA_IMG?>cuadro.png" class="img-fluid cuadro" />Vídeos
                                    animados 2d</a></li>
                            <li> <a href=""><img src="<?php echo RUTA_IMG?>cuadro.png" class="img-fluid cuadro" />Vídeo
                                    tutoriales</a></li>
                            <li> <a href=""><img src="<?php echo RUTA_IMG?>cuadro.png" class="img-fluid cuadro" />Vídeos
                                    corporativos</a></li>
                            <li> <a href=""><img src="<?php echo RUTA_IMG?>cuadro.png"
                                        class="img-fluid cuadro" />Branding </a></li>
                            <li> <a href=""><img src="<?php echo RUTA_IMG?>cuadro.png" class="img-fluid cuadro" />Diseño
                                    web </a></li>
                            <li> <a href=""><img src="<?php echo RUTA_IMG?>cuadro.png" class="img-fluid cuadro" />Social
                                    media </a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo RUTA_CONTACTO ?>">CONTACTO</a></li>
                </ul>
            </div>
        </nav>

    </div>
    <nav id="navbar-movil">
        <div id="toggleIcon" onclick="menuToggle()"></div>
        <div id="menu-overlay">
            <ul>
                <li><a href="<?php echo SERVIDOR ?>">INICIO</a></li>
                <li><a href="<?php echo RUTA_NOSOTROS ?>">SOBRE NOSOTROS</a></li>
                <li>
                    <a href="<?php echo RUTA_SERVICIOS ?>">SERVICIOS</a>
                    <ul>
                        <li><a href=""></a></li>
                        <li><a href=""></a></li>
                        <li><a href=""></a></li>
                        <li><a href=""></a></li>
                    </ul>
                </li>
                <li><a href="<?php echo RUTA_CONTACTO ?>">CONTACTO</a></li>
            </ul>
        </div>
    </nav>
</header>