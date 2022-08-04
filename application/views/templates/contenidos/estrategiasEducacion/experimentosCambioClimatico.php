<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

?>

<html>
<head>
    <link href="/sitio_web/application/assets/css/contenido/experimentos.css?v=0.0.4" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
</head>
<?php include_once("analyticstracking.php") ?>    
<div class="row seccion">

    <div id="ciudadanos_cientificos" style="width: 100%">
        <img style="width: 100%" src="/sitio_web/application/assets/img/contenido/estrategiasEducacion/bannerExperimentosCambioClimatico.png" alt="Ciudadanos Científicos">
    </div>
    <br>
    <div>
        <p>
            En los procesos educativos de SIATA - proyecto del Área Metropolitana del Valle de Aburrá- la experimentación y producción de nuevas formas de pensamiento para la comprensión de fenómenos y 
            conceptos sobre meteorología, hidrología, ciencias de la tierra y calidad del aire, son fundamentales en el desarrollo de competencias científicas y apropiación social de la ciencia y la tecnología 
            para la gestión de riesgos. Aquí podrás encontrar vídeos y actividades experimentales que te permitirán entender mejor algunos temas. 
        </p>
        <br>
        <div class="container">
          <div class="row display-flex">
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
              <div class="card card-default">
                <div class="card-img">
                  <a href="#" id="deshieloCambioClimatico" class="open_fancybox">
                    <img src="/sitio_web/application/assets/img/contenido/estrategiasEducacion/experimentosCambioClimatico/01_deshieloCambioClimatico/deshieloCambioClimatico_01.png" class="img-responsive">
                  </a>
                </div>
                <div class="card-body">
                  <div class="card-right">
                    <h3>Deshielo - cambio climático</h3>
                    <p></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
              <div class="card card-default">
                <div class="card-img">
                  <a href="#" id="gasesEfectoInvernadero" class="open_fancybox">
                    <img src="/sitio_web/application/assets/img/contenido/estrategiasEducacion/experimentosCambioClimatico/02_gasesEfectoInvernadero/gasesEfectoInvernadero_01.png" class="img-responsive">
                  </a>
                </div>
                <div class="card-body">
                  <div class="card-right">
                    <h3>Gases de efecto invernadero</h3>
                    <p></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
              <div class="card card-default">
                <div class="card-img">
                  <a href="#" id="consecuenciasCambioClimatico" class="open_fancybox">
                    <img src="/sitio_web/application/assets/img/contenido/estrategiasEducacion/experimentosCambioClimatico/03_consecuenciasCambioClimatico/consecuenciasCambioClimatico_01.png" class="img-responsive">
                  </a>
                </div>
                <div class="card-body">
                  <div class="card-right">
                    <h3>Consecuencias del cambio climático</h3>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
              <div class="card card-default">
                <div class="card-img">
                  <a href="#" id="fenomenoNino" class="open_fancybox">
                    <img src="/sitio_web/application/assets/img/contenido/estrategiasEducacion/experimentosCambioClimatico/05_fenomenoNino/fenomenoNino_01.png" class="img-responsive">
                  </a>
                </div>
                <div class="card-body">
                  <div class="card-right">
                    <h3>Fenómeno del Niño (ENSO)</h3>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
              <div class="card card-default">
                <div class="card-img">
                  <a href="#" id="aguaEnAlimentos" class="open_fancybox">
                    <img src="/sitio_web/application/assets/img/contenido/estrategiasEducacion/experimentosCambioClimatico/04_aguaEnAlimentos/aguaEnAlimentos_01.png" class="img-responsive">
                  </a>
                </div>
                <div class="card-body">
                  <div class="card-right">
                    <h3>Importancia del agua en nuestros alimentos</h3>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
              <div class="card card-default">
                <div class="card-img">
                  <a href="#" id="hidroelectrica" class="open_fancybox">
                    <img src="/sitio_web/application/assets/img/contenido/estrategiasEducacion/experimentosCambioClimatico/06_hidroelectrica/hidroelectrica_01.png" class="img-responsive">
                  </a>
                </div>
                <div class="card-body">
                  <div class="card-right">
                    <h3>Hidroeléctrica</h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <br>
    <a class="btn btn-primary" style="float:right; margin-right: 20px;" href="https://siata.gov.co/sitio_web/index.php/estrategiasEducacion#aprenderExperimentando" role="button">Volver</a>
    <br><br>
</div>
    <?php $this->view('templates/header/importScripts') ?>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script src="/sitio_web/application/assets/js/contenido/experimentosCambioClimatico.js?v=0.1.0"></script>
</html>
