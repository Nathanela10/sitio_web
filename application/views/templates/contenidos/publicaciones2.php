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
        <div class="col-md-8">

        <div id="noticias" style="width: 100%">
            <img style="width: 100%" src="/sitio_web/application/assets/img/contenido/Titulos/articulos_interes.jpg" alt="Noticias SIATA">
        </div>

            <!-- Noticia 1 -->
            <div>
                <h2>
                    <a href="https://rdcu.be/bXK91" target="_blank">Characterization of the atmospheric boundary layer in a narrow tropical valley using remote‐sensing and radiosonde observations and the WRF model: the Aburrá Valley case‐study</a>
                </h2>
                <p>
                    Laura Herrera Mejía, Carlos D. Hoyos
                </p>
                <p>
                    Publicado en: <a href="https://doi.org/10.1002/qj.3583" target="_blank">Quaterly Journal of the Royal Meteorological Society</a>
                </p>
                <p>
                    <span class="fa fa-clock-o" aria-hidden="true"></span> Fecha de publicación: 07 de Junio de 2019
                </p>                
            </div>
            <hr>
        </div>
        <div class="col-md-4">
           <!-- <div class="well">
              <h4>Buscar publicaciones</h4>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn">
                    <button class="btn btn-secondary" type="button">Go!</button>
                  </span>
                </div>
            </div>-->
            <!-- Blog Categories Well -->
            <div class="well" style="text-align: center;">
                <h4>#SIATAnoticias en Twitter</h4>
                <div class="row">
                    <a class="twitter-timeline" data-width="800" data-height="800"
                       href="https://twitter.com/siatamedellin?ref_src=twsrc%5Etfw">Tweets by siatamedellin</a>
                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
            </div>
        </div>

        <hr>

    </div>
    <?php $this->view('templates/header/importScripts') ?>
</body>
</html>
