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
        <div class="container text-center">
            <div class="row display-flex" style="margin-left: 170px; margin-right: -15px">        
                <div class="col-xs-12 col-sm-6 col-md-5 col-lg-5">
                    <div class="card card-default">
                    <div class="card-img">
                        <a href="https://localhost/sitio_web/index.php/territorioAlAireEnCasa" class="thumbnail">
                            <img src="/sitio_web/application/assets/img/contenido/estrategiasEducacion/territorioAlAire/territorio_al_aire_en_casa.png" >
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="card-right">
                        <h3>Territorio al aire en casa</h3>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-5 col-lg-5">
                    <div class="card card-default">
                    <div class="card-img">
                        <a href="https://localhost/sitio_web/index.php/territorioAlAire2022" class="thumbnail">
                            <img src="/sitio_web/application/assets/img/contenido/estrategiasEducacion/territorioAlAire/territorio_al_aire_2022.png" >
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="card-right">
                        <h3>Territorio al aire 2022</h3>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <a class="btn btn-primary" style="float:right; margin-right: 20px; color: white;" href="https://siata.gov.co/sitio_web/index.php/estrategiasEducacion#territorioAlAire" role="button">Volver</a>
        <br><br>
    </div>

    <?php $this->view("templates/header/importScripts") ?>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script type="text/javascript" charset="utf-8">
    </script>
</body>
</html>
