<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

?>

<html>
<head>

</head>

<body>
<div class="row seccion">.
    <?php include_once("analyticstracking.php") ?>  
    <!-- Titulo -->
    <h1>SIATA en Hidroituango - Información pública de monitoreo</h1>

    <!-- Fecha -->
    <p><span class="fa fa-clock-o"></span> Fecha de publicación: 2 de junio de 2018</p>
    <!-- Autor -->
    <p class="lead">Por <a href="https://twitter.com/siatamedellin?lang=es">@siatamedellin</a></p>
<!--    contenido-->
    <p style="text-align: justify;">
        SIATA realiza monitoreo InSitu y remoto de manera permanente del nivel del río Cauca y de las condiciones
        meteorológicas que pueden influir en la zona de la obra.
        <br><br>
        Con información pública 24/7, y sin interrupción, se han divulgado los datos disponibles. Todo el conocimiento
        es dispuesto para apoyar las labores de gestión de riesgo coordinadas desde el Puesto de Mando Unificado -PMU,
        de igual manera es de carácter público y se encuentra en el enlace <a
                href="http://siata.gov.co/choyos/MapRooms/Ituango/" style="color: blue;">http://siata.gov.co/choyos/MapRooms/Ituango/</a>
        para consulta por parte de la ciudadanía, organizaciones y medios de comunicación. Toda la información es
        concentrada en un solo lugar diseñado para la situación, favoreciendo la interpretación integral de las
        diferentes variables monitoreadas, la modelación hidrológica y meteorológica.
        <br><br>
        Se invita a toda la ciudadanía y organizaciones a hacer uso responsable y prudente de la información presentada
        para aportar a una adecuada gestión del riesgo.
        <br><br>
        SIATA es una estrategia regional que desde el conocimiento científico, el desarrollo tecnológico y la innovación
        aporta a la gestión de riesgos. Desde sus inicios ha entregado información pública, en tiempo real a través de
        diversas plataformas digitales. Teniendo como principio la apropiación social del conocimiento, aportando a la
        razón de ser del proyecto: la protección de la vida.
        <br><br>
        Para preguntas o comentarios: <a href="contacto@siata.gov.co" style="color: blue;">contacto@siata.gov.co</a>
        <br><br>
        SIATA – Sistema de Alerta Temprana de Medellín y el Valle de Aburrá - es un proyecto de Área
        Metropolitana del Valle de Aburrá, Alcaldía de Medellín, con aportes de EPM e ISAGEN.
        <br><br>
    <li><b>Línea de tiempo apoyo de SIATA a contingencia en Hidroituango: </b><a target="_blank" href="https://siata.gov.co/sitio_web/application/assets/pdf/sitio_web/noticias/linea_de_tiempo_hidroituango.pdf"style="color: blue;"> Descargar infografía</a></li>
    <br>

    <li><b>Apoyo SIATA en Hidroituango: </b><a target="_blank"
                                               href="https://siata.gov.co/sitio_web/application/assets/pdf/sitio_web/noticias/Infografia_SIATA_hidroituango.pdf"
                                               style="color: blue;"> Descargar infografía</a></li>
    <br>


    <div style="text-align: center;">
        <img style=" width: 80%;margin-left: auto;margin-right: auto;"
             src="/sitio_web/application/assets/img/contenido/Noticias/linea_de_tiempo.jpg"
             class="img-responsive" alt="Información pública SIATA">
    </div>
    <br>
    <div style="text-align: center;">
        <img style=" width: 80%;margin-left: auto;margin-right: auto;"
             src="/sitio_web/application/assets/img/contenido/Noticias/siata_en_hidroituango.jpg"
             class="img-responsive" alt="SIATA en Hidroituango">
    </div>
    <br>
    </p>

    <div align="left">
        <a class="btn btn-primary" href="https://siata.gov.co/sitio_web/index.php/noticias"><span
                    class="fa fa-chevron-left" aria-hidden="true">&nbsp&nbspRegresar</span></a>
    </div>
</div>
    <?php $this->view('templates/header/importScripts') ?>
</body>
</html>