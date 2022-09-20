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
        <div id="videos" style="width: 100%">
            <img style="width: 100%" src="/sitio_web/application/assets/img/contenido/estrategiasEducacion/bannerAprenderJugando.png" alt="sopa de letras">
        </div>
        <br><br>
        <div class="container text-center">
            <div class="row display-flex" style="margin-left: 0px; margin-right: -5px">        
                <div class="col-xs-8 col-sm-4 col-md-3 col-lg-3">
                    <div class="card card-default">
                      <div class="card-img">
                          <a href="/sitio_web/application/assets/pdf/aprenderJugando/Poker.zip" class="thumbnail">
                              <img src="/sitio_web/application/assets/img/contenido/aprenderJugando/pokerMeteorologico.png" >
                          </a>
                      </div>
                      <div class="card-body">
                          <div class="card-right">
                          <h3>Póker Meteorológico</h3>
                          </div>
                      </div>
                    </div>
                </div>
                <div class="col-xs-8 col-sm-4 col-md-3 col-lg-3">
                    <div class="card card-default">
                      <div class="card-img">
                          <a href="/sitio_web/application/assets/pdf/aprenderJugando/Jenga.zip" class="thumbnail">
                              <img src="/sitio_web/application/assets/img/contenido/aprenderJugando/jengaDeGestionDelRiesgo.png" >
                          </a>
                      </div>
                      <div class="card-body">
                          <div class="card-right">
                          <h3>Jenga de gestión del riesgo</h3>
                          </div>
                      </div>
                    </div>
                </div>                
                <div class="col-xs-8 col-sm-4 col-md-3 col-lg-3">
                    <div class="card card-default">
                      <div class="card-img">
                          <a href="/sitio_web/application/assets/pdf/aprenderJugando/Investicake.zip" class="thumbnail">
                              <img src="/sitio_web/application/assets/img/contenido/aprenderJugando/investicake.png" >
                          </a>
                      </div>
                      <div class="card-body">
                          <div class="card-right">
                          <h3>Investicake</h3>
                          </div>
                      </div>
                    </div>
                </div>                
                <div class="col-xs-8 col-sm-4 col-md-3 col-lg-3">
                    <div class="card card-default">
                      <div class="card-img">
                          <a href="/sitio_web/application/assets/pdf/aprenderJugando/Dados.zip" class="thumbnail">
                              <img src="/sitio_web/application/assets/img/contenido/aprenderJugando/dadosDeVariablesMeteorologicas.png" >
                          </a>
                      </div>
                      <div class="card-body">
                          <div class="card-right">
                          <h3>Dados de variables meteorológicas</h3>
                          </div>
                      </div>
                    </div>
                </div>                
                <div class="col-xs-8 col-sm-4 col-md-3 col-lg-3">
                    <div class="card card-default">
                      <div class="card-img">
                          <a href="https://siata.gov.co/sitio_web/index.php/sopaDeLetras" class="thumbnail">
                              <img src="/sitio_web/application/assets/img/contenido/aprenderJugando/sopaDeLetras.png" >
                          </a>
                      </div>
                      <div class="card-body">
                          <div class="card-right">
                          <h3>Sopa del letras</h3>
                          </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="btn btn-primary" style="float:right; margin-right: 20px; color:white;" href="https://siata.gov.co/sitio_web/index.php/estrategiasEducacion#aprenderExperimentando" role="button">Volver</a>
    </div>
    <?php $this->view("templates/header/importScripts") ?>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script type="text/javascript" charset="utf-8"></script>
</html>

