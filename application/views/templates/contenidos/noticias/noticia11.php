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
    <h1>¿Cómo afecta la disminución de la radiación la calidad del aire en el Valle de Aburrá?</h1>
    <!-- Fecha -->
    <p><span class="fa fa-clock-o"></span> Fecha de publicación: Diciembre de 2017</p>
    <!-- Autor -->
    <p class="lead"> by <a href="https://twitter.com/siatamedellin?lang=es">@siatamedellin</a></p>

    <!-- Contenido -->
    <p style="text-align: justify;">
        La radiación solar que llega a la superficie es un factor fundamental para el estado de la calidad del aire de
        nuestra región metropolitana, debido a que esta determina la eficiencia de la dispersión vertical de los
        contaminantes en la atmósfera.
    <div style="text-align: center; display:inline-block;">
        <img style=" height: 40%" src="/sitio_web/application/assets/img/contenido/Noticias/Radiacion-01.png"
             class="img-responsive" alt="Nuestro valle">
    </div>
    <br><br>

    La anterior gráfica, que representa la radiación recibida por la superficie minuto a minuto el día 7 de septiembre,
    muestra una disminución importante de esa cantidad de energía con respecto a la del 6 de septiembre. Dicha reducción
    fue ocasionada por la alta nubosidad resultado del evento de precipitación principalmente estratiforme que tuvo
    lugar en el Valle de Aburrá, el cual se prolongó desde la madrugada y hasta el mediodía con intensidades bajas y
    moderadas de lluvia. Como consecuencia de esto, la tasa de dispersión fue baja y los Índices de Calidad del Aire
    (ICA) mayores a lo habitual.
    <br>
    Dado que las condiciones de radiación en superficie hoy, 8 de septiembre de 2016, hasta las 2:30 p.m., han mejorado
    considerablemente respecto al día de ayer (radiación a dicha hora ayer: 500w/m2.; hoy: 1100w/m2), la concentración
    horaria de PM2.5, para las estaciones de representatividad poblacional (tipo: suburbanas de fondo*), ha reducido con
    respecto a los primeros registros obtenidos en las horas de la mañana, tal y como se aprecia a continuación:
    <br>
    <div style="text-align: center;">
        <img style=" height: 40%" src="/sitio_web/application/assets/img/contenido/Noticias/pm25_itagui.png"
             class="img-responsive" alt="Nuestro valle">
    </div>

    <div style="text-align: center;">
        <img style=" height: 40%" src="/sitio_web/application/assets/img/contenido/Noticias/pm25_laye.png"
             class="img-responsive" alt="Nuestro valle">
    </div>
    <br><br>

    Adicionalmente tenemos probabilidad alta de lluvia para los municipios del área metropolitana, con excepción de
    Barbosa, La Estrella y Caldas donde la probabilidad es media. De consolidarse eventos de lluvia luego de las 5:00
    p.m., serán condiciones favorables que se espera permitan un lavado de la atmósfera en horas de estabilidad
    atmosférica**.
    <br>
    Desde el SIATA seguiremos monitoreando las condiciones meteorológicas y de calidad del aire en el Valle de Aburrá, y
    para conocer esta información en tiempo real, puedes visitar
    <a target="_blank" href="http://siata.gov.co" style="color: blue;text-align: center">www.siata.gov.co </a>
    o descargar en tus dispositivos móviles, de forma gratuita, la aplicación SIATA.
    <br><br>
    *Haz <a target="_blank" href="https://www.youtube.com/watch?v=sDihRssGLIE" style="color: blue;">click aquí</a>. para
    conocer sobre los tipos de estaciones de medición de calidad del aire, entre ellas las
    suburbanas de fondo.
    <br><br>
    **Para conocer más sobre la estabilidad atmosférica, da <a target="_blank"
                                                               href="https://www.youtube.com/watch?v=03N2ZxokjQA"
                                                               style="color: blue;">click aquí</a>.
    <br><br>
    <div align="left">
        <a class="btn btn-primary" href="https://siata.gov.co/sitio_web/index.php/noticias"><span
                    class="fa fa-chevron-left" aria-hidden="true">&nbsp&nbspRegresar</span></a>
    </div>
    </p>
</div>
    <?php $this->view('templates/header/importScripts') ?>
</body>
</html>