<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

?>

<html>

<head>
</head>


<body>
    <div class="row seccion">
        <?php include_once("analyticstracking.php") ?>
        <div id="quienes_somos" style="width: 100%">
            <img style="width: 100%" src="/sitio_web/application/assets/img/contenido/nosotros/bannerQuienesSomos.jpg" alt="Quienes Somos">
        </div>
        <br><br>
        <p align="justify">
            Somos un proyecto regional de ciencia, tecnología e innovación para la gestión ambiental
            y del riesgo en el Valle de Aburrá. En SIATA monitoreamos y pronosticamos fenómenos
            naturales y antrópicos -que alteren las condiciones ambientales o que puedan generar
            riesgos a la población- fortaleciendo la gestión del riesgo en el territorio.
        </p>
        <p align="justify">
            Posibilitamos la protección de la vida y el medio ambiente en el Valle de Aburrá mediante
            el desarrollo de tecnología para el monitoreo en tiempo real y modelación hidrológica,
            meteorológica, sísmica y geotécnica; la sistematización y entrega de información oportuna
            a la ciudadanía, autoridades locales y organismos de socorro; y el diseño y ejecución de
            procesos educativos y comunitarios en territorio.
        </p>
        <p align="justify">
            Trabajamos para fortalecer los procesos de conocimiento del riesgo mediante estrategias
            para la democratización y apropiación social del conocimiento, ejercicio que fortalece el
            proceso social estipulado en la Política Nacional de Gestión del Riesgo.
        </p>
        <p align="justify">
            Este proyecto hace parte de la subdirección ambiental, componente de gestión del riesgo
            y cambio climático del Área Metropolitana del Valle de Aburrá. Esta subdirección se
            enfoca en el cuidado y protección, gestión, vigilancia, control, y seguimiento ambiental y
            de riesgo, para fortalecer los elementos que apoyen la función viable de todos los
            elementos naturales del valle.
        </p>
        <br><br>
        <div style="text-align: center;">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/E8mdq6xNTfI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <br><br>

        <h3 class="h_titulo">
            <a style="color: #081f2c;" href="https://siata.gov.co/sitio_web/index.php/monitoreo">Monitoreo para la
                gestión de riesgos
            </a>
        </h3>
        <p align="justify">
            Contamos con una extensa red de sensores, instalados en todo el Valle de Aburrá, que
            monitorean las condiciones y variables ambientales del territorio.
        </p>
        <h3 class="h_titulo">Modelación numérica y estadística</h3>
        <p align="justify">
            Desarrollamos modelos que permiten conocer la probabilidad de ocurrencia de eventos de
            precipitación y su relación con el comportamiento de flujos en las cuencas del valle, como
            aumentos de nivel y manchas de inundación; estimar la amenaza sísmica determinística
            para ciertos escenarios de interés, a fin de conocer los posibles impactos que pueda
            generar un evento sísmico en el valle; desarrollamos mapas de susceptibilidad por
            movimientos en masa, con actualizaciones en tiempo real, los cuales permiten la
            generación de alertas tempranas. Esta información está disponible para otras instituciones
            y para el público en general, lo que agrega gran valor al desarrollo de nuevos
            conocimientos en la región.
        <h3 class="h_titulo">Investigación aplicada</h3>
        <p align="justify">
            Realizamos investigaciones que contribuyen al fortalecimiento del proyecto, soportadas
            por trabajos de grado, tesis de maestría y doctorado. Asimismo, le apostamos al
            desarrollo de tecnología local, es decir, el desarrollo y adaptación de sensores de acuerdo
            con las necesidades del territorio.
        </p>
        <h3 class="h_titulo">Desarrollo tecnológico y telecomunicaciones</h3>
        <p align="justify">
            Cada dato entregado a la ciudadanía pasa por un proceso riguroso que va desde la
            instalación de un sensor, la generación de los datos, la calidad de estos, hasta su
            procesamiento y visualización para los públicos. Todo esto es posible gracias al desarrollo
            de sensores y métodos de transmisión de los datos, diseñados de manera local
            innovando en el territorio.
        </p>
        <h3 class="h_titulo">Educación y trabajo comunitario</h3>
        <p align="justify">
            Generamos procesos educativos y de divulgación científica y tecnológica, a partir de una
            propuesta de apropiación social del conocimiento científico con niños, niñas, jóvenes y
            adultos. Además, en articulación con las comunidades, entregamos herramientas para
            que los habitantes de cada territorio en riesgo puedan responder de manera oportuna
            ante una emergencia.
        </p>
        <h3 class="h_titulo">Generación de Alertas tempranas</h3>
        <p align="justify">
            Entregamos información oportuna, en tiempo real, a gestores de riesgo, UMGRD,
            organismos de respuesta y aquellos actores que participan en la toma de decisiones, para
            anteponerse, atender o responder ante la ocurrencia de eventos extremos. Además,
            lideramos el proceso organizativo y formativo de los Sistemas de Alerta Temprana
            Comunitarios -SATC-, entendidos como estrategias territoriales que reconocen al
            ciudadano como protagonista de la gestión del riesgo.
        </p>
        <!--
        <h3 class="h_titulo">
            <a style="color: #081f2c;" href="https://siata.gov.co/sitio_web/index.php/estrategiasEducacion">Monitoreo para la
                Educación y trabajo comunitario
            </a>
        </h3>
        <p align="justify">
            Generamos procesos educativos y de divulgación científica y tecnológica, a partir de una propuesta de
            apropiación social del conocimiento científico. Además, trazamos directrices para que los habitantes de cada
            comunidad en riesgo, puedan responder de manera oportuna ante una emergencia.
        </p>
        <p>
            El desarrollo de estos procesos se enmarca dentro de los semilleros de ciudadanos científicos en
            instituciones educativas, Ciudadanos Científicos y los Sistemas de Alerta Temprana comunitarios.
        </p>-->

        <br><br>

    </div>
    <?php $this->view('templates/header/importScripts') ?>
</body>

</html>