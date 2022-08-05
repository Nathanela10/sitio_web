<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

?>

<html>
<head>
    <link href="/sitio_web/application/assets/css/contenido/experimentosCienciasDeLaTierra.css?v=0.0.0" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
</head>
<?php include_once("analyticstracking.php") ?>    
<div class="row seccion">
    <div id="experienciasSIATA" style="width: 100%">
        <img style="width: 100%" src="/sitio_web/application/assets/img/contenido/estrategiasEducacion/bannerExperienciasSIATA.png" alt="Información de Interés">
    </div>
    <br>
    <p>
        En SIATA, proyecto del Área Metropolitana del Valle de Aburrá, creemos en la importancia de 
        crear recursos educativos propios, que permitan comprender los fenómenos hidrometeorológicos, 
        las ciencias de la tierra y la calidad del aire, situados en nuestro territorio. Es así como 
        surge <b>experiencias SIATA</b>, una herramienta que busca compartir con la ciudadanía, 
        algunas prácticas experimentales con las que queremos explicar dichos temas. En este 
        espacio encontrarás las cartillas que hemos construido, y en las que están incluídos 
        los objetivos de la experiencia, los conceptos a trabajar y otras fuentes que pueden ser 
        útiles en la profundización de los contenidos. 
    </p>
    <br>
    <div class="container">
          <div class="row display-flex">
            
            <div class="col-xs-12 col-md-4 col-md-offset-1">
              <div class="card card-default">
                <div class="card-img">
                  <a href="#" id="kitPlacasTectonicas" class="open_fancybox">
                    <img src="/sitio_web/application/assets/img/contenido/estrategiasEducacion/experienciasSIATA/kitPlacasTectonicas/kitPlacasTentonicas_page-0001.jpg" class="img-responsive">
                  </a>
                </div>
                <div class="card-body">
                  <div style="text-align: center;">
                    <h3>Kit de placas tectónicas</h3>
                    <p></p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xs-12 col-md-4 col-md-offset-1">
              <div class="card card-default">
                <div class="card-img">
                  <a href="#" id="estacionesMeteorlogicasEducativas" class="open_fancybox">
                    <img src="/sitio_web/application/assets/img/contenido/estrategiasEducacion/experienciasSIATA/estacionesMeteorologicasEducativas/EstacionesMeteorlogicasEducativas_page-0001.jpg" class="img-responsive">
                  </a>
                </div>
                <div class="card-body">
                  <div  style="text-align: center;">
                    <h3>Estaciones meteorológicas educativas</h3>
                    <p></p>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-xs-12 col-md-4 col-md-offset-1">
              <div class="card card-default">
                <div class="card-img">
                  <a href="#" id="mesaOscilatoria" class="open_fancybox">
                    <img src="/sitio_web/application/assets/img/contenido/estrategiasEducacion/experienciasSIATA/mesaOscilatoria/mesa-oscilatoria1.jpg" class="img-responsive">
                  </a>
                </div>
                <div class="card-body">
                  <div style="text-align: center;">
                    <h3>Mesa oscilatoria</h3>
                    <p></p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xs-12 col-md-4 col-md-offset-1">
              <div class="card card-default">
                <div class="card-img">
                  <a href="#" id="cajaProcesosHidrologicos" class="open_fancybox">
                    <img src="/sitio_web/application/assets/img/contenido/estrategiasEducacion/experienciasSIATA/cajaProcesosHidrologicos/CajaProcesosHidrologicos-01.jpg" class="img-responsive">
                  </a>
                </div>
                <div class="card-body">
                  <div  style="text-align: center;">
                    <h3>Caja de procesos hidrológicos</h3>
                    <p></p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xs-12 col-md-4 col-md-offset-1">
              <div class="card card-default">
                <div class="card-img">
                  <a href="#" id="cajaDelCicloHidrologico_2" class="open_fancybox">
                    <img src="/sitio_web/application/assets/img/contenido/estrategiasEducacion/cajaDelCicloHidrologico_2/cajaDelCicloHidrologico_2-01.png" class="img-responsive">
                  </a>
                </div>
                <div class="card-body">
                  <div style="text-align: center;">
                    <h3>Caja del ciclo hidrológico</h3>
                    <p></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    <br><br>
    <a class="btn btn-primary" style="float:right; margin-right: 20px;" href="https://siata.gov.co/sitio_web/index.php/estrategiasEducacion#experienciasSIATA" role="button">Volver</a>
    <br><br>
</div>
    <?php $this->view('templates/header/importScripts') ?>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script src="/sitio_web/application/assets/js/contenido/experienciasSIATA.js?v=0.0.4"></script>
</html>
