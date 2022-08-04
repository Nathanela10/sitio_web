<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

?>

<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />

</head>
    <?php include_once("analyticstracking.php") ?>
    <div class="row seccion">
        <div id="videos" style="width: 100%">
            <img style="width: 100%" src="/sitio_web/application/assets/img/contenido/Titulos/videos.jpg" alt="Videos">
        </div>
        <br>

        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a data-fancybox="videoGaleria" class="thumbnail" href="https://www.youtube.com/watch?v=6vWsmOfp85M">
                <img class="img-responsive" src="/sitio_web/application/assets/img/contenido/videos/videoAlarmas.png" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a data-fancybox="videoGaleria" class="thumbnail" href="https://www.youtube.com/watch?v=f4upZmjDhMA">
                <img class="img-responsive" src="/sitio_web/application/assets/img/contenido/videos/videoCalidadDelAire.png" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a data-fancybox="videoGaleria" class="thumbnail" href="https://www.youtube.com/watch?v=8Ts-5jiGxwo">
                <img class="img-responsive" src="/sitio_web/application/assets/img/contenido/videos/videoCiudadanos.png" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a data-fancybox="videoGaleria" class="thumbnail" href="https://www.youtube.com/watch?v=y-lpGaob8lM">
                <img class="img-responsive" src="/sitio_web/application/assets/img/contenido/videos/videoEstabilidadAtmosferica.png" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
             <a data-fancybox="videoGaleria" class="thumbnail" href="https://www.youtube.com/watch?v=HQjtYbVUh4I">
                <img class="img-responsive" src="/sitio_web/application/assets/img/contenido/videos/videoMantenimiento.png" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a data-fancybox="videoGaleria" class="thumbnail" href="https://www.youtube.com/watch?v=bWJ1xVepVTM">
                <img class="img-responsive" src="/sitio_web/application/assets/img/contenido/videos/videoOperacional.png" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a data-fancybox="videoGaleria" class="thumbnail" href="https://www.youtube.com/watch?v=5lkNsIroYas">
                <img class="img-responsive" src="/sitio_web/application/assets/img/contenido/videos/viedoAlarmas360.png" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a data-fancybox="videoGaleria" class="thumbnail" href="https://www.youtube.com/watch?v=ueH02G9a5-s">
                <img class="img-responsive" src="/sitio_web/application/assets/img/contenido/videos/videoRadar.png" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a data-fancybox="videoGaleria" class="thumbnail" href="https://www.youtube.com/watch?v=07aBuHnHVTg">
                <img class="img-responsive" src="/sitio_web/application/assets/img/contenido/videos/videoReporteICA.png" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a data-fancybox="videoGaleria" class="thumbnail" href="https://www.youtube.com/watch?v=eguO9X_Tz1M">
                <img class="img-responsive" src="/sitio_web/application/assets/img/contenido/videos/videoTorre360.png" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a data-fancybox="videoGaleria" class="thumbnail" href="https://www.youtube.com/watch?v=uMIyDj7etUY">
                <img class="img-responsive" src="/sitio_web/application/assets/img/contenido/videos/videoTutorialAPP.png" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a data-fancybox="videoGaleria" class="thumbnail" href="https://www.youtube.com/watch?v=vg_PNgMov64">
                <img class="img-responsive" src="/sitio_web/application/assets/img/contenido/videos/videoTutorialCiudadanos.png" alt="">
            </a>
        </div>
    </div>
    <div>
        <p style="text-align:left;">Visita nuestro canal de <a href="https://www.youtube.com/user/siatamedellin">Youtube</a> para ver más videos.</p>
    </div>
    <?php $this->view('templates/header/importScripts') ?>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script type="text/javascript" charset="utf-8">
    </script>
</body>
</html>
