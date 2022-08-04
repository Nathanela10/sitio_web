<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

?>

<html>
<head>

</head>


<!-- Page Content -->
<body>
    <?php include_once("analyticstracking.php") ?>
    <div class="row seccion">
        <!-- Blog Entries Column -->
        <div class="col-md-12">

        <div id="noticias" style="width: 100%">
            <img style="width: 100%" src="/sitio_web/application/assets/img/contenido/Titulos/bannerArticulosExternos.jpg?v=0.0.1" alt="Noticias SIATA">
        </div>
                <div>
                <h2>
                    <a href="https://www.researchgate.net/publication/341821913_One-minute_integrated_rainfall_rate_statistics_from_a_rain_gauge_network_in_Colombia_accuracy_of_prediction_methods" target="_blank"> One-minute integrated rainfall rate statistics from a rain gauge network in Colombia: accuracy of prediction methods</a>
                </h2>
                <p>
                     L. Emiliani, L. Luini, and A. Rolon
                </p>
                <p>
                    Reliable rainfall rate complementary cumulative distributions are critical
                    for the design of microwave communications systems operating above
                    around 8 GHz. This letter presents the results of the analysis of more than
                    5 years of 1-minute integrated rainfall accumulation data for 12 stations.
                    This new dataset will prove useful considering the sharing analyses that
                    must be executed for IMT services in the 24.25-27.5, 37-43.5, 45.5-47,
                    47.2-48.2 and 66-71 GHz spectrum bands. The resulting statistics can
                    complement the entries in the database of ITU-R Study Group 3 for the
                    region.
                </p>
                <p>
                    <span class="fa fa-clock-o" aria-hidden="true"></span> Fecha de publicación: Junio de 2020
                </p>
                <p class="lead">
                    Publicado en: Electronics Letters
                </p>
                
            </div>
        </div>
        <hr>

    </div>
    <?php $this->view('templates/header/importScripts') ?>
</body>
</html>
