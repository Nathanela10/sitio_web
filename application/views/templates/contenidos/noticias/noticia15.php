<?php
    if (!defined('BASEPATH')) exit('No direct script access allowed');
?>

<html>
    <body>
        <div class="row seccion">
            <?php include_once("analyticstracking.php") ?>  
            <!-- Titulo -->
            <h1>¿Qué se espera para el Valle de Aburrá en temporada de menos lluvias?</h1>
            <!-- Fecha -->
            <p><span class="fa fa-clock-o"></span> Fecha de publicación: 12 de Julio de 2021</p>
            <br>
            <!-- Autor -->
            <p class="lead"> by <a href="https://twitter.com/siatamedellin?lang=es">@siatamedellin</a></p>

            <!-- Contenido -->
            <p>
                La segunda temporada de menos lluvias en el año se extiende entre junio, julio y agosto (JJA) con acumulados de lluvia inferiores 
                al trimestre anterior, pero no tan bajos como en los meses diciembre, enero y febrero, correspondientes a la primera temporada de 
                menos lluvias.
            </p>
            <p>
                En general los acumulados durante estos 3 meses varían desde 600 mm de acumulado de precipitación, en Barbosa, disminuyen a 350 mm 
                en Medellín y vuelven a aumentar hacia el sur, alcanzando 550 mm en Caldas (según los registros históricos de la red de estaciones 
                pluviográficas de EPM).
            </p>
            <p>
                Durante junio, julio y agosto, las lluvias ocurren principalmente en la noche y la madrugada. Esto se conoce como ciclo diurno de 
                precipitación y muestra cómo varía (en promedio) la lluvia para cada hora del día (esta información la obtenemos del radar 
                meteorológico). De acuerdo con los pronósticos globales, se espera, con una probabilidad entre el 50-60%, que durante esta temporada, 
                los acumulados de lluvias estén por encima de los valores históricos promedio.
            </p>
            <br>
            <div style="text-align: center;">
                    <img style=" width: 50%;margin-left: auto;margin-right: auto;"
                        src="/sitio_web/application/assets/img/contenido/Noticias/Noticia 3_ Ciclo Diurno.png"
                        class="img-responsive" alt="">
            </div>
            <br>
            <p>
                Recuerda tener en cuenta, que si bien durante esta temporada las lluvias disminuyen, se pueden presentar eventos de precipitación
                 intensos que pueden generar emergencias en el Valle de Aburrá. 
            </p>
            <br><br>
            <div align="left">
                <a class="btn btn-primary" href="https://siata.gov.co/sitio_web/index.php/noticias"><span
                            class="fa fa-chevron-left" aria-hidden="true">&nbsp&nbspRegresar</span></a>
            </div>
        </div>
        <?php $this->view('templates/header/importScripts') ?>
    </body>
</html>