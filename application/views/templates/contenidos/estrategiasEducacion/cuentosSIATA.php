<?php

if (!defined("BASEPATH")) exit("No direct script access allowed");

?>

<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <link href="/sitio_web/application/assets/css/contenido/ams.css?v=0.0.9" rel="stylesheet">
</head>
<?php include_once("analyticstracking.php") ?>
<div class="row seccion">
    <div id="videos" style="width: 100%">
        <img style="width: 100%" src="/sitio_web/application/assets/img/contenido/estrategiasEducacion/bannnerCuentosSIATA.jpg?v=0.0.3" alt="Videos">
    </div>
    <br>
    <div class="container">
        <div class="blog-posts">

        <div class="post featured row">
                <div class="image col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <a data-fancybox="videoGaleria" class="thumbnail" href="https://www.youtube.com/embed/yqSvnd_WWw0">
                        <img style="height: 100%; width: 100%;" src="/sitio_web/application/assets/img/contenido/estrategiasEducacion/cuentosSIATA/PorQueTiemblaLATierra.png?v=0.0.1" alt="">
                    </a>
                </div>

                <div class="content col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <br><br><br>
                    <h4>¿Por qué tiembla la tierra?</h4>
                    <br>
                </div>
            </div>

        <div class="post featured row">
                <div class="image col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <a data-fancybox="videoGaleria" class="thumbnail" href="https://www.youtube.com/embed/kpJ9xThSJbw">
                        <img style="height: 100%; width: 100%;" src="/sitio_web/application/assets/img/contenido/estrategiasEducacion/cuentosSIATA/cuentosInteriorNube.jpg?v=0.0.1" alt="">
                    </a>
                </div>

                <div class="content col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <br>
                    <h4>¿Qué pasa al interior de una nube?</h4>
                    <br>
                    <p>
                        La formación de las nubes y de la lluvia implica una serie de procesos en los que participan diferentes componentes. 
                        En este cuento, conocerás un poco sobre lo ocurre con el agua desde que está en el suelo hasta que llega a formar gotas de nube o 
                        granizo, incluso podrás comprender algunas de sus interacciones con el aire y la temperatura.
                    </p>
                </div>
            </div>

            <div class="post featured row">
                <div class="image col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <a data-fancybox="videoGaleria" class="thumbnail" href="https://www.youtube.com/embed/7GOv3PZWreI">
                        <img style="height: 100%; width: 100%;" src="/sitio_web/application/assets/img/contenido/estrategiasEducacion/cuentosSIATA/cuentosVientos.jpg?v=0.0.1" alt="">
                    </a>
                </div>

                <div class="content col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <br>
                    <h4>Cuentos SIATA: La ZCIT ¡Donde los vientos se encuentran!</h4>
                    <br>
                    <p>
                    La ZCIT es la Zona de Convergencia Intertropical es el punto del planeta donde se encuentran los vientos alisios del norte y del sur respectivamente. 
                    En este cuento, te contamos sobre su formación y cómo afecta a nuestro territorio, generando dos temporadas de lluvias al año. 
                    </p>
                </div>
            </div>

            <div class="post featured row">
                <div class="image col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <a data-fancybox="videoGaleria" class="thumbnail" href="https://www.youtube.com/embed/zImxDYbzixw">
                        <img style="height: 100%; width: 100%;" src="/sitio_web/application/assets/img/contenido/estrategiasEducacion/cuentosSIATA/cuentosDescargas.jpg?v=0.0.1" alt="">
                    </a>
                </div>

                <div class="content col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <br>
                    <h4>¿Cómo se producen las descargas eléctricas?</h4>
                    <br>
                    <p>
                        Las descargas eléctricas son el resultado del rayo, el trueno y el relámpago. El rayo es la chispa que se ve a
                        lo lejos, el relámpago la luz incandescente y el trueno la energía que se genera durante la descarga eléctrica y
                        se convierte en sonido. En este cuento te contaremos cómo se genera cada uno de éstos.
                    </p>
                </div>
            </div>
            <br>
            <div class="post featured row">
                <div class="image col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <a data-fancybox="videoGaleria" class="thumbnail" href="https://www.youtube.com/embed/xU-RsEXlWRI">
                        <img style="height: 100%; width: 100%;" src="/sitio_web/application/assets/img/contenido/estrategiasEducacion/cuentosSIATA/cuentosRayoTruenRelampago.jpg" alt="">
                    </a>
                </div>
                <div class="content col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <br>
                    <h4>¿Es un rayo, trueno o un relámpago?</h4>
                    <br>
                    <p>
                        Las tormentas eléctricas se forman cuando el aire caliente y húmedo se eleva hasta encontrar aire frio. A medida
                        que esto sucede, el vapor de agua se condensa, formando enormes nubes cumulonimbus. El roce de las partículas
                        de hielo y agua líquida al interior de estas nubes, genera una separación de cargas que da lugar a las descargas
                        eléctricas.
                    </p>
                </div>
            </div>
            <br>
        </div>
    </div>
</div>

<?php $this->view("templates/header/importScripts") ?>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>