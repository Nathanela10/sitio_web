<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

?>

<html>
    <head>
    </head>
    <body>
        <div class="row seccion">
            <?php include_once("analyticstracking.php") ?>  
            <!-- Titulo -->
            <h1>Resultados monitoreo RedRío agosto de 2019</h1>
            <!-- Fecha -->
            <p><span class="fa fa-clock-o"></s pan> Fecha de publicación: 25 de octubre de 2019</p>
            <!-- Autor -->
            <p class="lead"> by <a href="https://twitter.com/siatamedellin?lang=es">@siatamedellin</a></p>

            <!-- Contenido -->
            <p style="text-align: justify;">
                <div style="text-align: center;">
                    <img style=" width: 60%;margin-left: auto;margin-right: auto;"
                         src="/sitio_web/application/assets/img/contenido/Noticias/20191120-BOLETIN-RED-RIO.jpg"
                         class="img-responsive" alt="Incendio Quitasol 1">
                </div>
            </p>
        </div>
        <?php $this->view('templates/header/importScripts') ?>
    </body>
    <script type="text/javascript">
        $("#menu").css("display", "none");
    </script>
</html>