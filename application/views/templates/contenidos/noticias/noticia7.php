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
    <h1>Efectos en la calidad del aire del Valle de Aburrá por incendio en el Cerro Quitasol</h1>
    <!-- Fecha -->
    <p><span class="fa fa-clock-o"></span> Fecha de publicación: 10 de febrero de 2018</p>
    <!-- Autor -->
    <p class="lead"> by <a href="https://twitter.com/siatamedellin?lang=es">@siatamedellin</a></p>

    <!-- Contenido -->
    <p style="text-align: justify;">
    <div style="text-align: center;">
        <img style=" width: 60%;margin-left: auto;margin-right: auto;"
             src="/sitio_web/application/assets/img/contenido/Noticias/2017_02_07_nota_incendio_1.jpg"
             class="img-responsive" alt="Incendio Quitasol 1">
    </div>
    <br>
    <div style="text-align: center;">
        <img style=" width: 60%;margin-left: auto;margin-right: auto;"
             src="/sitio_web/application/assets/img/contenido/Noticias/2017_02_07_nota_incendio_1.jpg"
             class="img-responsive" alt="Incendio Quitasol 1">
    </div>
    <br><br>
    <p style="text-align: justify;"> Descarga aquí el informe en PDF: </p>
    <ul>
        <li><a href="/sitio_web/application/assets/pdf/sitio_web/noticias/Incendio.pdf" style="color: blue;"
               download> Efectos de la calidad del aire del Valle de Aburrá por incendio en el cerro Quitasol</a></li>
    </ul>
    <div align="left">
        <a class="btn btn-primary" href="https://siata.gov.co/sitio_web/index.php/noticias"><span
                    class="fa fa-chevron-left" aria-hidden="true">&nbsp&nbspRegresar</span></a>
    </div>
    </p>
</div>
    <?php $this->view('templates/header/importScripts') ?>
</body>
</html>