<?php
    if (!defined('BASEPATH')) exit('No direct script access allowed');
?>

<html>
    <body>
        <div class="row seccion">
            <?php include_once("analyticstracking.php") ?>  
            <!-- Titulo -->
            <h1>La Niña podría favorecer la calidad del aire en el Valle de Aburrá.</h1>
            <!-- Fecha -->
            <p><span class="fa fa-clock-o"></span> Fecha de publicación: 12 de febrero de 2021</p>
            <br>
            <!-- Autor -->
            <p class="lead"> by <a href="https://twitter.com/siatamedellin?lang=es">@siatamedellin</a></p>
            <!-- Contenido -->
            <p>
                La concentración de contaminantes en las zonas bajas de la atmósfera de una región, depende de múltiples factores, 
                como son las emisiones locales asociadas a fuentes móviles y fijas; factores externos como las emisiones antrópicas 
                remotas asociadas a incendios en cobertura vegetal (como en el caso de los incendios en la Amazonía), tormentas de
                polvo (como las Arenas del Sahara provenientes de África) además de las condiciones climáticas, meteorológicas y 
                hasta la forma del territorio influyen en la calidad del aire que respiramos. 
            </p>
            <p>
                El Valle de Aburrá posee una topografía compleja, debido a eso, los procesos más importantes para la remoción de 
                contaminantes se traducen en: ascenso de aire desde la superficie y el lavado atmosférico a causa de lluvias nocturnas. 
                Cuando se presentan eventos prolongados de estabilidad atmosférica, las condiciones topográficas del terreno se convierten 
                en una barrera física para la dispersión de contaminantes, lo que implica condiciones críticas para la calidad del aire, sin embargo, 
                durante los meses anteriores, y previo al inicio del primer episodio crítico de 2021, las estaciones automáticas de PM2.5 evidencian 
                un <b>comportamiento típico durante condiciones La Niña</b>, con predominancia de ICA Bueno e ICA moderado.
            </p>
            <p>
                Con La Niña, o similares, las condiciones atmosféricas suelen ser favorables para la remoción de contaminantes en la zona, 
                debido al aumento de eventos de lluvia que facilitan el lavado atmosférico y mitigan los incendios de cobertura vegetal 
                en el país y la región vecina.
            </p>
            <p>
                El factor externo más relevante desde el punto de vista climático con respecto a la temporada crítica de calidad de aire 
                corresponde al estado del Océano Pacífico.  Durante el último mes se han evidenciado anomalías negativas de temperatura 
                en la lengua fría del pacífico, lo cual corresponde a condiciones La Niña. Dichas condiciones de temperatura no son sólo 
                superficiales; por el contrario, las anomalías están establecidas en los primeros 150 metros de profundidad, lo cual permite 
                afirmar que las condiciones La Niña no solo continúan establecidas de manera robusta, sino que estas perdurarán durante las 
                próximas semanas. De hecho, los pronósticos a partir de modelos globales, señalan que existe una posibilidad de más del 75%
                de mantenerse las condiciones La Niña para el trimestre febrero-marzo-abril, lo cual no sugiere una favorabilidad marcada 
                para la calidad del aire en el Valle de Aburrá desde el punto de vista de la acumulación de contaminantes.
            </p>
            <br>
            <div align="left">
                <a class="btn btn-primary" href="https://siata.gov.co/sitio_web/index.php/noticias"><span
                            class="fa fa-chevron-left" aria-hidden="true">&nbsp&nbspRegresar</span></a>
            </div>
        </div>
        <?php $this->view('templates/header/importScripts') ?>
    </body>
</html>