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
    <h1>Segunda Temporada de lluvias 2018</h1>
    <!-- Fecha -->
    <p><span class="fa fa-clock-o"></span> Fecha de publicación: 11 de Octubre de 2018</p>
    <br>
    <!-- Autor -->
    <p class="lead"> by <a href="https://twitter.com/siatamedellin?lang=es">@siatamedellin</a></p>

    <!-- Contenido -->
    <p style="text-align: justify;">
        Aproximadamente a la media noche se presentó una descarga tipo nube tierra, de polaridad positiva, un valor de
        corriente alto y en una zona en donde no se presentaba una alta intensidad de lluvia. A continuación se presenta
        una explicación de la física que rodea este fenómeno:
        <br><br>
        En general, todas las nubes están electrificadas hasta cierto punto. No obstante, aquellas que tiene asociado
        una tasa de descargas altas son las que presentan un alto desarrollo vertical. Esto es debido a que la
        electrificación de la nube requiere una región de fase mixta en la nube de tormenta. Esta es una capa de nubes
        entre 0 y -20 ° C , que contiene altas concentraciones de agua sobreenfriada, pequeños cristales de hielo y
        diferentes tipos de partículas de hielo. En esta zona las diferentes corrientes de viento que se presentan, y el
        colapso de estas particulas debido a esto, generan una inducción de carga (positiva o negativa) en estas
        partículas y la formación de un campo eléctrico. Con la ionización de estas cargas, al interior de la nube se
        comienzan a distribuir de una manera preferente: las cargas positivas se ubican en la parte superior, las
        negativas en la zona de principal de carga y en la base de la nube de tormenta. Sin embargo, diferentes estudios
        han demostrados que hay una pequeña zona localizada en la base de la nube debido al calentamiento localizado que
        se presenta por la lluvia en esa región.
        <br><br>
        Normalmente los rayos tipo nube tierra se desarrollan en la zona principal de carga (negativa), por lo que son
        de polaridad negativa, aproximadamente el 80% de los rayos que se han registrado desde el 2012 en la cobertura
        del radar son de polaridad negativa. Los rayos de polaridad positiva por lo tanto, aunque sí sucedan, no son
        comunes y están asociados a valores de corrientes muy altos. El rayo que se registró anoche se encuentra en el
        5% de los valores más altos de corriente registrados desde el 2012. Cuando se presentan este tipo de rayos,
        usualmente estos rayos se generan desde la región superior de la nube de tormenta (lo que se denomina el
        yunque), por lo que, aunque este asociado a un sistema de lluvia de alto desarrolo vertical, no necesariamente
        sucede en la zona en donde se localiza la máxima intensidad de lluvia. Tal y como se muestra en la imagen del
        GOES (canal 13), en donde los valores mas bajos representan nubes de alto desarrollo vertical (colores negros),
        cerca de la media noche habia un sistema de lluvia de gran desarrollo cerca del Valle de Aburrá y el rayo
        presentado se asocia a este.
    <div style="text-align: center;">
        <img style=" width: 50%;margin-left: auto;margin-right: auto;"
             src="/sitio_web/application/assets/img/contenido/Noticias/20180502_infografia_descargas.jpg"
             class="img-responsive" alt="Descargas eléctricas">
    </div>

    <br>
    <b>Figura 1: </b> Esquema de formación de las descargas tipo nube-tierra. Estas descargas están asociados a sistemas
    convectivos de gran intensidad y espesor que polarizan la parte alta, media y baja de las nubes provocando descargas
    negativas (en la nube, positivas en tierra) y descargas positivas (en la nube, negativas en tierra). Estas últimas
    son poco comunes pero generalmente más enérgicas.
    <br>

    <div style="text-align: center;">
        <img style=" width: 50%;margin-left: auto;margin-right: auto;"
             src="/sitio_web/application/assets/img/contenido/Noticias/descarga_2demayo.jpg"
             class="img-responsive" alt="Alborada">
    </div>

    <br>
    <b>Figura 2:</b> Imagen satelital GOES-East que muestra el sistema convectivo asociado a la descarga eléctrica de la
    madrugada del 2 de mayo. Los colores grises y rosados embebidos en el negro corresponden a nubes de mayor espesor,
    propias de sistemas intensos. A la derecha se muestra el histograma de la corriente asociada a las descargas
    registradas desde el 2012. Se observa que típicamente este valor oscila alrededor de -20kA y que la descarga del 2
    de mayo tuvo uno corriente de 81kA, lo cual lo hace excepcionalmente intenso.
    <br><br>

    <p>Puedes descargar el comunicado completo: <a target="_blank"
                                                   href="https://siata.gov.co/sitio_web/application/assets/img/sitio_web/noticias/agu2017/agu2017_temperatura_superficial.pdf"
                                                   style="color: blue;">Descarga eléctrica 2 de mayo de 2018</a>
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