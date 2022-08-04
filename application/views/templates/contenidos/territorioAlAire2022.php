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
            <img style="width: 100%" src="/sitio_web/application/assets/img/contenido/estrategiasEducacion/bannerTerritorioAlAire.png?v=0.0.1" alt="Videos">
        </div>
        <br><br>
        <div class="container">
            <div class="blog-posts">
                <div class="post featured row">
                    <div class="image col-lg-6 col-md-12 col-sm-12 col-xs-12" >
                        <a data-fancybox="videoGaleria" class="thumbnail" href="https://www.youtube.com/embed/rtLqhMACsww">
                            <img style="height: 97%; width: auto;" src="/sitio_web/application/assets/img/contenido/estrategiasEducacion/territorioAlAire/fenomenoDePrecipitacion.png" alt="">
                        </a>
                    </div>
                    <div class="content col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <br><br>
                        <h4>El fenómeno de la precipitación.</h4>
                        <p>Julián Sepúlveda Berrío, líder del equipo de Meteorología del SIATA.</p>
                        <br>
                        <p>Territorio al aire Una mirada al Valle de Aburrá desde las investigaciones del SIATA</p>
                    </div>
                </div> 
            </div>
        </div>
        <br><br>
    </div>
    <?php $this->view("templates/header/importScripts") ?>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script type="text/javascript" charset="utf-8">
    </script>
</body>
</html>
