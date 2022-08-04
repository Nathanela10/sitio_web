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
            <img style="width: 100%" src="/sitio_web/application/assets/img/contenido/nosotros/bannerQuienesSomos.jpg"
                alt="Quienes Somos">
        </div>
        <br><br>
        <p align="justify">
            Somos el Sistema de Alerta Temprana de Medellín y el Valle de Aburrá - SIATA, un proyecto de Ciencia y
            Tecnología del Área Metropolitana del Valle de Aburrá, el Departamento Administrativo de Gestión del Riesgo
            de Desastres (DAGRD) y la Alcaldía de Medellín.
        </p>
        <p align="justify">
            En SIATA, hemos desarrollado una estrategia regional que se aborda desde el conocimiento científico, el
            desarrollo tecnológico y la innovación, para identificar y pronosticar la ocurrencia de fenómenos naturales
            y antrópicos que alteren las condiciones ambientales de la región o que puedan generar riesgos a la
            población.
        </p>
        <p align="justify">
            Todo esto lo hacemos a partir del monitoreo en tiempo real y la modelación hidrológica y meteorológica
            ajustada a nuestro territorio. De esta forma, logramos la entrega oportuna de información a la ciudadanía
            que, sumada a procesos educativos y al desarrollo de Sistemas de Alerta Temprana Comunitarios, posibilitan
            la protección de la vida y el medio ambiente en nuestra región.
        </p>
        <br><br>
        <div style="text-align: center;">
            <img style="width: 60%; margin-left: auto;margin-right: auto;"
                src="/sitio_web/application/assets/img/contenido/nosotros/mapaDeprocesos.png?v=1.0.2" class="img-responsive"
                alt="Información pública SIATA">
        </div>
        <br>
        <h3 class="h_titulo">
            <a style="color: #081f2c;" href="https://siata.gov.co/sitio_web/index.php/monitoreo">Monitoreo para la
                gestión de riesgos
            </a>
        </h3>
        <p align="justify">
            Contamos con una extensa red de sensores, instalados en todo el Valle de Aburrá, que monitorean las
            condiciones y variables ambientales del territorio.
        </p>
        <h3 class="h_titulo">Modelación numérica y estadística</h3>
        <p align="justify">
            Realizamos simulaciones basadas en modelos que determinan la probabilidad de eventos de lluvia próximos y la
            forma en que se traduce esto en términos de niveles y cuencas. La modelación hidrológica simula los procesos
            del suelo, en cuanto al flujo de agua, desde la caída de la lluvia hasta la salida por un punto de la
            cuenca. Para esto nos servimos de los datos de pendientes, tipos de suelo y coberturas.
        </p>
        <h3 class="h_titulo">Investigación aplicada</h3>
        <p align="justify">
            Desarrollamos diversas investigaciones que contribuyen al fortalecimiento del proyecto, soportadas por
            trabajos de grado, trabajos de maestría y tesis doctorales. Asimismo, trabajamos en el desarrollo de
            tecnología local, es decir, el desarrollo y adaptación de sensores de acuerdo a las necesidades del
            territorio.
        </p>
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
        </p>
        <h3 class="h_titulo">Generación de Alertas tempranas</h3>
        <p align="justify">
            <b>Los Sistemas de Alerta Temprana Comunitarios -SATC- </b> son estrategias territoriales que reconocen al
            ciudadano como protagonista de la gestión del riesgo. Nos integramos a esta estrategia, al entregar
            <b>información oportuna y eficaz</b> a las <b>comunidades en situación de vulnerabilidad</b>, y al apoyar la
            construcción
            de los <b>Planes Comunitarios de Gestión del Riesgo de Desastres - PCGRD-</b>, desarrollados por el Área
            Metropolitana del Valle de Aburrá.
        </p>
        <br><br>
        <div id="quienes_somos" style="width: 100%">
            <img style="width: 100%" src="/sitio_web/application/assets/img/contenido/nosotros/bannerMarcoLegal.png"
                alt="Quienes Somos">
        </div>
        <br>
        <div style="text-align: center;">
            <img style="width: 60%; margin-left: auto;margin-right: auto;"
                src="/sitio_web/application/assets/img/contenido/nosotros/marcoLegal.png" class="img-responsive"
                alt="Información pública SIATA">
        </div>
        <br>
    </div>
    <?php $this->view('templates/header/importScripts') ?>
</body>

</html>