<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

?>

<html>
<head>
</head>

<body>
<?php include_once("analyticstracking.php") ?>  
<div class="row seccion">
    <div id="aire"  style="width: 100%">
        <img style="width: 100%" src="/sitio_web/application/assets/img/contenido/Titulos/aire.jpg" alt="Aire SIATA">
    </div>
       <br>
            <div class="row col-xs-12">
                <p align="justify">
                        Somos investigación para el desarrollo local de ciencia y tecnología, modelación meteorológica e hidrológica, monitoreo en tiempo real de variables ambientales, difusión de la información en tiempo real y educación para fortalecer la gestión de riesgos de la región.   <br><br> 

                          En el SIATA contamos con más de 12 redes de monitoreo de distintas variables; una de estas redes es la de monitoreo de calidad del aire cuenta con 36 estaciones para la medición de distintos contaminantes como ozono, óxidos de nitrógeno, monóxido de carbono, PM 10, entre otros; de estas, 22 son automáticas y miden material particulado PM2.5, que es el contaminante crítico para el Valle de Aburrá.
                </p>
            <br>
            </div>
            
            

          <div  class="row">
            <div class="col-xs-6 col-md-3 col-ld-3" style="margin-bottom: 25px">
              <a href="https://siata.gov.co/sitio_web/index.php/reportes_pm25">
                <img style=" width: 100%;margin-center: auto;margin-right: auto;" src="https://siata.gov.co/sitio_web/application/assets/img/contenido/Aire/intro_aire1.png" class="img-responsive section" alt="Reportes Calidad del Aire">
              </a>
              </div>
            <div class="col-xs-6 col-md-3 col-ld-3" style="margin-bottom: 25px">
              <a href="https://siata.gov.co/sitio_web/index.php/calidad_aire">
                <img style=" width: 100%;margin-center: auto;margin-right: auto;" src="https://siata.gov.co/sitio_web/application/assets/img/contenido/Aire/intro_aire2.png" class="img-responsive section" alt="Equipo Calidad del Aire">
              </a>
              </div>
            <div class="col-xs-6 col-md-3 col-ld-3">
             <a href="https://siata.gov.co/sitio_web/index.php/tutoriales#reportes_ica">
               <img style=" width: 100%;margin-center: auto;margin-right: auto;" src="https://siata.gov.co/sitio_web/application/assets/img/contenido/Aire/intro_aire3.png" class="img-responsive section" alt="Tutoriales">
             </a>
              </div>
            <div class="col-xs-6 col-md-3 col-ld-3">
              <a href="https://siata.gov.co/sitio_web/index.php/educacion#ciudadanos_cientificos">
                <img style=" width: 100%;margin-center: auto;margin-right: auto;" src="https://siata.gov.co/sitio_web/application/assets/img/contenido/Aire/intro_aire4.png" class="img-responsive section" alt="Ciudadanos cinetifícos">
              </a>
            </div>
          </div>

          <br>
</div>
    <?php $this->view('templates/header/importScripts') ?>
</body>
</html>