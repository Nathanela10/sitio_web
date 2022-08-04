<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

?>

<html>
<head>
</head>
<?php include_once("analyticstracking.php") ?>    
<div class="row seccion">
    <div id="" style="width: 100%">
        <img style="width: 100%" src="/sitio_web/application/assets/img/contenido/equipoSocial/territoriosSATC/RioAburraMedellinGuadalajara.png" alt="Rio Aburra - Guadalajara">
    </div>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-7 col-sm-7 col-xs-7">
                <div id="mapa_div" style="width: 100%; height:50%; display:inline-block"></div>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-5 col-xs-5" >
                <br>
                <p><b>MUNICIPIO:</b> Copacabana</p>
                <p><b>BARRIO O CORREGIMIENTO:</b> Guadalajara</p>
                <p><b>SECTOR:</b> Guadalajara</p>
                <p><b>CUENCA:</b> Río Aburrá - Medellín</p>
                <!-- <p><b>ÁREA:</b> 38,76 Km<sup>2</sup></p> -->
            </div>
        </div>
    </div>
    <!-- <br><br>
    <div id="" style="width: 100%">
        <img style="width: 100%" src="/sitio_web/application/assets/img/contenido/equipoSocial/territoriosSATC/titulo_recorrido.png" alt="">
    </div>
    <br><br>
        <div style="text-align: center;">
            <iframe style="width: 80%; height:70%;" src="https://www.youtube.com/embed/F3ZTQthPnro"
                    frameborder="0" allowfullscreen></iframe>
        </div> -->

</div>
    <?php $this->view('templates/header/importScripts')?>
     <script src="https://maps.google.com/maps/api/js?key=AIzaSyCdZacNTgf8PnJkGG-dKLXI_E9ZLP__nt4"></script>
     <script src="/sitio_web/application/assets/vendor/gmaps/gmaps.js"></script>
     <script src="/sitio_web/application/assets/js/contenido/mapTerritoriosSATC.js?v=0.0.4"></script>
</html>
