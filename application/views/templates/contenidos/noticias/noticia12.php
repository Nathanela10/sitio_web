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
    <h1>¿Qué está pasando hoy? Calidad del aire</h1>
    <!-- Fecha -->
    <p><span class="fa fa-clock-o"></span> Fecha de publicación: 25 de agosto de 2016</p>
    <!-- Autor -->
    <p class="lead"> by <a href="https://twitter.com/siatamedellin?lang=es">@siatamedellin</a></p>


    <!-- Contenido -->
    <p style="text-align: justify;">
        El 24 de agosto se registró un evento de lluvias en el territorio metropolitano que comenzó a las 1:00 p.m. y se
        disipó hacia las 5:30 p.m. Los eventos de lluvia que tienen lugar en estos horarios afectan la calidad del aire
        en el área metropolitana pues las condiciones meteorológicas posteriores dificultan el ascenso de aire y por
        ende el ascenso de contaminantes en el Valle de Aburrá. Lo anterior, sumado a la humedad en la atmósfera,
        aspecto que influye en la absorción de humedad por parte del material particulado (crecimiento higroscópico),
        hacen que el resultado de la calidad del aire en nuestro territorio sean delicadas el día de hoy.
        <br>
        Algunos aspectos meteorológicos que aportarían a la mejora de la calidad del aire
        durante el día de hoy son:
    <ul>
        <li>Influencia en la superficie terrestre de alta radiación solar</li>
        <li>Baja cobertura de nubes</li>
        <li>Lluvias prolongadas</li>
    </ul>

    Para conocer la información de monitoreo visita nuestro geoportal y descarga la aplicación móvil de Siata para <a
            target="_blank" href="http://goo.gl/kxTg3J" style="color: black;">iOS</a>

    <h3 style="font-weight: bold;">Algunas imágenes para entender lo que pasa</h3>

    <div style="text-align: center;"><h3>Condiciones atmosféricas del Valle de Aburrá</h3>
        <img src="/sitio_web/application/assets/img/contenido/Noticias/calidad_aire_valle.jpg"
             class="img-responsive" alt="Nuestro valle">
    </div>
    <br><br>
    <div style="text-align: center;"><h3>Convenciones para interpretar la información del ICA</h3>
        <img style="text-align: center;"
             src="/sitio_web/application/assets/img/contenido/Noticias/tabla_ICA.jpg" class="img-responsive"
             alt="Interpretación ICA">
    </div>
    <div align="left">
        <a class="btn btn-primary" href="https://siata.gov.co/sitio_web/index.php/noticias"><span
                    class="fa fa-chevron-left" aria-hidden="true">&nbsp&nbspRegresar</span></a>
    </div>
    </p>
</div>
    <?php $this->view('templates/header/importScripts') ?>
</body>
</html>