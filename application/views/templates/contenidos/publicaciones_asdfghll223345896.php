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
            <?php foreach ($investigaciones['data'] as $documento): ?>

                <div>
                <h2>
                    <a href="<?php echo ($documento['enlace']);?>" target="_blank"><?php echo ($documento['titulo']);?></a>
                </h2>
                <p>
                    <?php echo ($documento['autor']);?>
                </p>
                <p>
                    <span class="fa fa-clock-o" aria-hidden="true"></span> Fecha de publicación:  <?php setlocale(LC_TIME, 'es_CO.UTF-8'); echo (strftime("%d de %B de %Y", strtotime($documento['fecha_publicacion'])));?>
                </p>
                <p class="lead">
                    Publicado en: <?php echo ($documento['publicado_en']);?>
                </p>
                
            </div>
            <hr>

           <?php endforeach; ?>
            <!-- <?php echo $html_tabla_estaciones;?> -->

            <!-- Noticia 1 -->
          <!--  <div>
                <h2>
                    <a href="https://rdcu.be/bXK91" target="_blank">Characterization of the atmospheric boundary layer in a narrow tropical valley using remote‐sensing and radiosonde observations and the WRF model: the Aburrá Valley case‐study</a>
                </h2>
                <p>
                    Laura Herrera Mejía, Carlos D. Hoyos
                </p>
                <p>
                    <span class="fa fa-clock-o" aria-hidden="true"></span> Fecha de publicación: 07 de Junio de 2019
                </p>
                <p class="lead">
                    Publicado en: <a href="https://rmets.onlinelibrary.wiley.com/doi/abs/10.1002/qj.3712" target="_blank">Quaterly Journal of the Royal Meteorological Society</a>
                </p>
                <B>Abstract</B>
                <p>
                    The spatiotemporal evolution of the atmospheric boundary layer (ABL), in a narrow, highly complex terrain located in the Colombian Andes, is studied using radiosondes and remote‐sensing equipment. Different techniques are implemented to automatically estimate the ABL height using ceilometer backscattering profiles and a combination of a radar wind profiler and microwave radiometer retrievals. The large aerosol load from anthropogenic emissions within the valley allows the use of ceilometer‐based ABL height detection methods, especially under stable atmospheric conditions. However, convective atmospheres favour aerosol dispersion, increasing the uncertainty associated with the estimation of the convective boundary layer using ceilometers. In contrast, the multisensor technique is more robust, performing better in stable and unstable conditions. All ceilometer‐based methods and the multisensor scheme capture the observed ABL height diurnal cycle. The main difference among ABL height retrievals occurs in the afternoon and during the night when Richardson number estimates tend to detect the top‐down contraction of the residual layer, while ceilometer‐based estimates detect the sudden bottom‐up onset of the nocturnal stable layer. The results also show that intra‐annual and annual variations of cloudiness strongly condition the ABL expansion, leading to a modulation of the ABL height diurnal cycle. The amount of aerosol particles near the surface is influenced by the evolution of the ABL, modifying the available control volume for the pollutants to interact and disperse. The evolution of ABL over the slopes and at the valley floor differs as a result of the local thickening associated with upslope winds. Weather Research and Forecasting model simulations, from a climatological point of view, skilfully simulate the observed ABL height for both the diurnal and annual cycles; the model skill is higher over the valley floor than over the slopes.
                </p>
            </div> -->
            <hr>
        </div>
        <div class="col-md-4">
           <div class="well">
              <h4>Buscar publicaciones</h4>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn">
                      <button class="btn btn-default" type="button">
                         <span class="glyphicon glyphicon-search"></span>
                      </button>
                  </span>
                </div>
            </div>
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
