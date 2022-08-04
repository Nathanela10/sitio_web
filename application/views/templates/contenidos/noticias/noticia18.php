<?php
    if (!defined('BASEPATH')) exit('No direct script access allowed');
?>

<html>
    <body>
        <div class="row seccion">
            <?php include_once("analyticstracking.php") ?>  
            <!-- Titulo -->
            <h1>¿Qué se espera para la segunda temporada de lluvias de 2021?</h1>
            <!-- Fecha -->
            <p><span class="fa fa-clock-o"></span> Fecha de publicación: 11 de Septiembre de 2021</p>
            <br>
            <!-- Autor -->
            <p class="lead"> by <a href="https://twitter.com/siatamedellin?lang=es">@siatamedellin</a></p>
            <!-- Contenido -->
            <p>
                <b>Septiembre, octubre y noviembre</b> son los meses en los que <b>se desarrolla la segunda temporada de lluvias 
                del año</b> en nuestro territorio, con acumulados de precipitación que, en promedio, oscilan entre 450 mm 
                en Medellín hasta 700-800 mm en Caldas y Barbosa respectivamente.
            </p>
            <p>
                Los pronósticos para el trimestre mencionado indican una <b>alta probabilidad en el incremento de las 
                lluvias en el norte de Sur América</b>, con una incidencia significativa en la región central de Colombia. 
                Las precipitaciones son variables y no se presentan de igual manera todos los años, pues <b> 
                diferentes fenómenos globales que condicionan el comportamiento del clima a nivel regional, como en 
                el caso de La Niña y el Niño</b>, dos eventos cuasi-periódicos que se asocian al enfriamiento o 
                calentamiento del océano Pacífico; en este caso, el pronóstico concuerda con el establecimiento 
                de condiciones asociadas al fenómeno de la Niña en la región.
            </p>
            <p>
                El fenómeno de La Niña (fase fría del fenómeno ENOS El Niño - Oscilación del Sur) es una condición del 
                sistema climático global que ocurre cada 4 - 7 años, y <b>se caracteriza por un enfriamiento de la 
                temperatura superficial del mar en ciertas regiones del Pacífico tropical</b> y cambios en la circulación 
                atmosférica. Normalmente, cuando se presenta el fenómeno de La Niña, se observa un aumento 
                significativo en los acumulados de precipitación en la región andina del territorio colombiano, 
                región en la que está ubicado el Valle de Aburrá.
            </p>
            <p>
                Durante el segundo semestre de 2020 se presentó un fenómeno de La Niña que finalizó en mayo del 2021 y 
                que generó lluvias por encima de lo esperado en la región. Sin embargo, en el reporte más reciente 
                (finales de agosto 2021), los centros de monitoreo del Pacífico Tropical <b> nuevamente una 
                alerta sobre una alta probabilidad (70%) de ocurrencia del fenómeno de La Niña finalizando este año 
                y extendiéndose hasta el 2022</b>.
            </p>
            <h3>Recomendaciones para la segunda temporada de lluvias</h3>
            <p>
                Desde SIATA, proyecto del Área Metropolitana del Valle de Aburrá, se realiza monitoreo en tiempo real 
                de las condiciones hidrometeorológicas de la región, y seguimiento a los fenómenos climáticos para 
                obtener datos que permitan comparar, año a año, lo que sucede en el territorio y comprender las 
                variaciones en la precipitación. Por ello, se brindan las siguientes recomendaciones:
            </p>
            <ul>
                <li>
                    Consulta constantemente los canales digitales de SIATA (redes sociales, geoportal y app), 
                    en los que se comparten diariamente los <b>reportes sobre los eventos que pueden poner en riesgo 
                    la seguridad de los habitantes y pronóstico de ocurrencia de precipitación</b>.
                </li>
                <br>
                <li>
                    <b>Identificar los sensores (de nivel de quebradas, pluviómetros, sirenas, etc) que están cercanos a tu 
                    lugar de vivienda</b>, para hacer monitoreo constante de las condiciones atmosféricas e identificar cuando 
                    las condiciones cambien de manera desfavorable y puedan derivar en una emergencia. La ubicación de estos 
                    sensores se puede encontrar en el <a href="https://siata.gov.co/" target="_blank">geoportal</a>.
                </li>
                <br>
                <li>
                    <b>Prestar atención al incremento en el nivel de las quebradas y avisar a los organismos de control en 
                    caso que sea necesario</b>, para evitar desastres. Tener en cuenta que las altas pendientes de las 
                    quebradas ayudan a que el agua viaje a mayor velocidad y arrastre sedimentos, aumentando la posibilidad 
                    de desbordarse; en pocos minutos pueden pasar de un nivel seguro a uno de alerta.
                </li>
                <br>
                <li>
                    <b>Evitar salir al aire libre durante eventos de lluvia</b> que presenten descargas eléctricas o granizo.
                </li>
                <br>
                <li>
                    <b>Revisar el estado de los bajantes y canaletas de tu hogar</b> procurando limpiarlos periódicamente para evitar 
                    inundaciones o filtraciones de agua.
                </li>
                <br>
                <li>
                    Si se han identificado <b>zonas con riesgo de deslizamiento, se debe estar atento a los cambios ocasionados por 
                    la lluvia</b>. De ser necesario, solicitar a las autoridades del municipio una visita de inspección por riesgo.
                </li>
                <br>
                <li>
                    Las <b>inundaciones urbanas </b> presentarse en vías o andenes y ocultar obstáculos en el camino. Ten cuidado al transitar.
                </li>

            </ul>
            <br>
            <div align="left">
                <a class="btn btn-primary" href="https://siata.gov.co/sitio_web/index.php/noticias"><span
                            class="fa fa-chevron-left" aria-hidden="true"></span>&nbsp&nbspRegresar</a>
            </div>
        </div>
        <?php $this->view('templates/header/importScripts') ?>
    </body>
</html>