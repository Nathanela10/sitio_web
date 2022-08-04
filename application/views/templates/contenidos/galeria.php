<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

?>

<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />

</head>
    <?php include_once("analyticstracking.php") ?>


    <!-- Page Content -->
    <div class="container seccion" style="padding: 20px 50px 10px 50px; background: white;">
        <div class="row">

            <div id="galeria" style="width: 100%">
                <img style="width: 100%" src="/sitio_web/application/assets/img/contenido/Titulos/galeria.jpg" alt="GAleria SIATA">
            </div>
            <br>

            <?php
            foreach ($imag as $img) {

                echo "<div class='col-lg-3 col-md-4 col-xs-6 thumb'>".
                "<a class='thumbnail' data-fancybox = 'gallery' href='/sitio_web/application/assets/img/contenido/Galeria/" .$img."'>"."<img  src='/sitio_web/application/assets/img/contenido/Galeria/" .$img."'>". "</img>"."</a></div>";
            } 
            ?>

        </div>
    </div>
    <?php $this->view('templates/header/importScripts') ?>
     <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>


</body>
</html>
