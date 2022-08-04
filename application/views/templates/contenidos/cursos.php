<?php

if ( ! defined("BASEPATH")) exit("No direct script access allowed");

?>

<html>
<head>
<!--<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">    -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <link href="/sitio_web/application/assets/css/contenido/ams.css?v=0.0.9" rel="stylesheet">
</head>
    <?php include_once("analyticstracking.php") ?>
    <div class="row seccion">
        <div id="videos" style="width: 100%">
            <img style="width: 100%" src="/sitio_web/application/assets/img/contenido/Titulos/banner_drones.jpg" alt="Curso de drones">
        </div>
        <br>
        <div class="container">
            <div class="blog-posts">
                <div class="post featured row">
                    <div class="image col-lg-6 col-md-12 col-sm-12 col-xs-12" >
                         <a data-fancybox="videoGaleria" class="thumbnail" href="https://youtu.be/mHW-l-Sm1W0">
                            <img style="height: 100%; width: 100%;" src="/sitio_web/application/assets/img/contenido/cursos/cursoDronesSesion1y2.png" alt="">
                        </a>
                    </div>
                    <div class="content col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <br>
                        <h4>Curso: Drones Para la Gestión de Riesgos en el Valle de Aburrá</h4>
                        <p>Sesiones 1 y 2</p>
                        <br>
                        <p>Curso dirigido a personal de Bomberos y de las Unidades Municipales de Gestión del Riesgo, para informar acerca de los equipos VANT (Vehículos Aéreos no Tripulados) con los que cuenta el AMVA-SIATA, el  proceso para la solicitud de vuelos, los productos de cada monitoreo y los nuevos desarrollos disponibles para apoyar la labor de gestión del riesgo en el Valle de Aburrá.</p>
                    </div>
                </div> 
                <br>
            </div>
            <div class="blog-posts">
                <div class="post featured row">
                    <div class="image col-lg-6 col-md-12 col-sm-12 col-xs-12" >
                         <a data-fancybox="videoGaleria" class="thumbnail" href="https://youtu.be/GhXtLEq-ARg">
                            <img style="height: 100%; width: 100%;" src="/sitio_web/application/assets/img/contenido/cursos/cursoDronesSesion1y2.png" alt="">
                        </a>
                    </div>
                    <div class="content col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <br>
                        <h4>Curso: Drones Para la Gestión de Riesgos en el Valle de Aburrá</h4>
                        <p>Sesiones 3 y 4</p>
                        <br>
                        <p>Curso dirigido a personal de Bomberos y de las Unidades Municipales de Gestión del Riesgo, para informar acerca de los equipos VANT (Vehículos Aéreos no Tripulados) con los que cuenta el AMVA-SIATA, el  proceso para la solicitud de vuelos, los productos de cada monitoreo y los nuevos desarrollos disponibles para apoyar la labor de gestión del riesgo en el Valle de Aburrá.</p>
                    </div>
                </div> 
                <br>
            </div>
        </div>
    </div>

    <?php $this->view("templates/header/importScripts") ?>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script type="text/javascript" charset="utf-8">
    </script>
</body>
</html>
