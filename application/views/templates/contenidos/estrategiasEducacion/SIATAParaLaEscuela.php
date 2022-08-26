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
            <img style="width: 100%" src="/sitio_web/application/assets/img/contenido/estrategiasEducacion/bannerSIATAParaLaEscuela.png" alt="Siata para la escuela">
        </div>
        <br>
        <div class="container text-center">
            <div class="row display-flex" style="margin-left: 170px; margin-right: -15px">        
                <div class="col-xs-12 col-sm-6 col-md-5 col-lg-5">
                    <div class="card card-default">
                        <div class="card-img">
                            <a href="https://siata.gov.co/sitio_web/index.php/cienciaEnUnMinuto" class="thumbnail">
                                <img src="/sitio_web/application/assets/img/contenido/estrategiasEducacion/siataParaLaEscuela/cienciaEnUnMinuto.png" >
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="card-right">
                                <h3>Ciencia en un minuto</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-5 col-lg-5">
                    <div class="card card-default">
                        <div class="card-img">
                            <a href="https://siata.gov.co/sitio_web/index.php/aprendeSIATA" class="thumbnail">
                                <img src="/sitio_web/application/assets/img/contenido/estrategiasEducacion/siataParaLaEscuela/aprendeSIATA.png" >
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="card-right">
                                <h3>Aprende SIATA</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="btn btn-primary" style="float:right; margin-right: 20px; color: white;" href="https://siata.gov.co/sitio_web/index.php/estrategiasEducacion#SIATAParaLaEscuela" role="button">Volver</a>
        <br><br>
    </div>

    <?php $this->view("templates/header/importScripts") ?>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script src="/sitio_web/application/assets/js/contenido/siataParaLaEscuela.js?v=0.0.4"></script>
    <script type="text/javascript" charset="utf-8">
    </script>
</body>
</html>
