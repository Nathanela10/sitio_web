<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

?>

<html>
<head>
</head>
<?php include_once("analyticstracking.php") ?>    
<div class="row seccion">

    <!-- <div id="estrategiasEducacion" style="width: 100%">
        <img style="width: 100%" src="/sitio_web/application/assets/img/contenido/equipoSocial/bannerComoFuncionanSATC.png" alt="Que son los SATC">
    </div> -->
    <div id="" style="width: 100%">
        <img style="width: 100%" src="/sitio_web/application/assets/img/contenido/equipoSocial/territoriosSATC/titulo_QuebradaLaLopez.png" alt="La Lopez">
    </div>
    <br><br>
    <div class="container">
        <div class="row">
        <div class="col-lg-8 col-md-7 col-sm-7 col-xs-7">
                <div id="mapa_div" style="width: 100%; height:50%; display:inline-block"></div>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-5 col-xs-5" >
                <br><br><br>
                <p><b>MUNICIPIO:</b> Barbosa</p>
                <p><b>BARRIO:</b> Buenos Aires</p>
                <p><b>ÁREA:</b> 1,9 Km<sup>2</sup></p>
            </div>
        </div>
    </div>
    <br><br>
    <div id="" style="width: 100%">
        <img style="width: 100%" src="/sitio_web/application/assets/img/contenido/equipoSocial/territoriosSATC/titulo_recorrido.png" alt="">
    </div>
    <br><br>
        <div style="text-align: center;">
            <iframe style="width: 80%; height:70%;" src="https://www.youtube.com/embed/F3ZTQthPnro"
                    frameborder="0" allowfullscreen></iframe>
        </div>

</div>
    <?php $this->view('templates/header/importScripts')?>
     <script src="https://maps.google.com/maps/api/js?key=AIzaSyCdZacNTgf8PnJkGG-dKLXI_E9ZLP__nt4"></script>
     <script src="/sitio_web/application/assets/vendor/gmaps/gmaps.js"></script>
     <script src="/sitio_web/application/assets/js/contenido/mapTerritoriosSATC.js?v=0.0.1"></script>
     <script>
        cargar_mapa('https://siata.gov.co/sitio_web/application/assets/kml/equipoSocial/hojaDeVidaSATC/kml_LaLopez.kml');
     </script>

</html>
