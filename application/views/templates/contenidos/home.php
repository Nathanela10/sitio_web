<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

?>

<html>
<head>
    <link href="/sitio_web/application/assets/css/contenido/home.css" rel="stylesheet">
    <meta name="google-site-verification" content="86CMQ8oWj8bisEFRVHGLZWZm6yz21WCeb70SqfOuQIg" />

</head>

<body>
    <?php include_once("analyticstracking.php") ?>
    <div id="contenidos" class= "row seccion">
        <!-- Half Page Image Background Carousel Header -->
        <div id="myCarousel" class="carousel slide">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <a href="/sitio_web/index.php/educacion#semilleros">
                        <div class="fill" style="background-image:url('/sitio_web/application/assets/img/contenido/home/sliderSemillierosCiudadanos.jpg');"></div>
                    </a>
                    <!-- <div class="carousel-caption">
                        <h1>A Full-Width Image Slider Template</h1>
                    </div> -->
                </div>
                <div class="item">
                    <a href="/sitio_web/index.php/monitoreo#radarMeteorologico">
                    <div class="fill" style="background-image:url('/sitio_web/application/assets/img/contenido/home/sliderRadar.jpg');"></div>
                   <!--  <div class="carousel-caption">
                        <h1>Caption 2</h1>
                    </div> -->
                    </a>
                </div>
                <div class="item">
                    <a href="/sitio_web/index.php/nosotros#quienes_somos">
                    <div class="fill" style="background-image:url('/sitio_web/application/assets/img/contenido/home/sliderQuenesSomos.jpg');"></div>
                    <!-- <div class="carousel-caption">
                        <h1>Caption 3</h1>
                    </div> -->
                </a>
                </div>
                <div class="item">
                    <a href="/sitio_web/index.php/educacion#ciudadanos_cientificos">
                    <div class="fill" style="background-image:url('/sitio_web/application/assets/img/contenido/home/sliderCiudadanosCientificos.jpg');"></div>
                   <!--  <div class="carousel-caption">
                        <h1>Caption 3</h1>
                    </div> -->
                </a>
                </div>
                <div class="item">
                    <a href="/sitio_web/index.php/aire">
                    <div class="fill" style="background-image:url('/sitio_web/application/assets/img/contenido/home/sliderCalidadDelAire.jpg');"></div>
                   <!--  <div class="carousel-caption">
                        <h1>Caption 3</h1>
                    </div> -->
                </a>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="icon-prev"></span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="icon-next"></span>
            </a>
        </div>

        <br><br>

        <div class="row divImagenesHome" style="height: 350px;" >
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div align="center" class="col-xs-3 col-md-3 col-md-3 col-lg-3">
                    <a href="https://siata.gov.co/sitio_web/index.php/noticias">
                        <img src="/sitio_web/application/assets/img/contenido/home/noticas.png" style="max-width: 100%; height: 100%">
                    </a>
                </div>
                <div align="center" class="col-xs-6 col-md-6 col-md-6 col-lg-6">
                    <a href="#">
                        <img src="/integraciones/face/animacion_pronostico.gif?v=0.0.1" style="max-width: 100%;height: 100%">
                    </a>
                </div>
                <div align="center" class="col-xs-3 col-md-3 col-md-3 col-lg-3">
                    <a href="https://siata.gov.co/sitio_web/index.php/galeria">
                        <img src="/sitio_web/application/assets/img/contenido/home/GALERIA.jpg"  style="max-width: 100%;height: 100%">
                    </a>
                </div>

            </div>
            <br><br>
        </div>



        <div class="row divImagenesHomeMoviles">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="col-xs-6 col-md-6 col-md-6 col-lg-6">
                    <a href="https://siata.gov.co/sitio_web/index.php/noticias">
                        <img src="/sitio_web/application/assets/img/contenido/home/noticas.png"  style="width: 100%; height: auto">
                    </a>
                </div>
                <div class="col-xs-6 col-md-6 col-md-6 col-lg-6">
                    <a href="https://siata.gov.co/sitio_web/index.php/galeria">
                        <img src="/sitio_web/application/assets/img/contenido/home/GALERIA.jpg"  style="width: 100%; height: auto">
                    </a>
                </div>
            </div>
<!--            <div class="row">-->
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center" style="padding: 35px;">
                <a href="#">
                    <img src="/integraciones/face/animacion_pronostico.gif?v=0.0.1" style="width: 100%; height: auto">
                </a>
            </div>
<!--            </div>-->
        </div>


<!--        <br><br><br>-->

<!---->
<!--        <p>-->
<!--            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc pretium dapibus enim, in ultrices velit scelerisque et. Vestibulum laoreet sem eu lacus cursus lobortis. Curabitur vulputate, nisl ut scelerisque fermentum, odio ipsum elementum dui, nec fringilla nisl lorem et velit. Aenean ex leo, tempor vel turpis in, facilisis semper magna. Fusce quis consequat enim. Aenean ornare nibh at sapien facilisis dapibus quis eu lacus. Duis pulvinar, nisl ac venenatis rhoncus, urna orci ultrices dui, vel facilisis leo leo eget odio. Etiam bibendum in tortor quis vestibulum. Etiam egestas mauris non ipsum ultrices, ut dapibus lacus ultrices. Nulla pellentesque euismod enim, id viverra enim eleifend vel. Phasellus mauris neque, venenatis eu cursus ac, posuere a libero. Fusce lobortis tempor faucibus. Donec iaculis quis justo sit amet sollicitudin. Sed sed lorem magna. Sed ut ante non neque lacinia pellentesque. Vestibulum suscipit mi eget arcu pellentesque, sed dictum risus fringilla.-->
<!--        </p>-->
<!--        <p>-->
<!--            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc pretium dapibus enim, in ultrices velit scelerisque et. Vestibulum laoreet sem eu lacus cursus lobortis. Curabitur vulputate, nisl ut scelerisque fermentum, odio ipsum elementum dui, nec fringilla nisl lorem et velit. Aenean ex leo, tempor vel turpis in, facilisis semper magna. Fusce quis consequat enim. Aenean ornare nibh at sapien facilisis dapibus quis eu lacus. Duis pulvinar, nisl ac venenatis rhoncus, urna orci ultrices dui, vel facilisis leo leo eget odio. Etiam bibendum in tortor quis vestibulum. Etiam egestas mauris non ipsum ultrices, ut dapibus lacus ultrices. Nulla pellentesque euismod enim, id viverra enim eleifend vel. Phasellus mauris neque, venenatis eu cursus ac, posuere a libero. Fusce lobortis tempor faucibus. Donec iaculis quis justo sit amet sollicitudin. Sed sed lorem magna. Sed ut ante non neque lacinia pellentesque. Vestibulum suscipit mi eget arcu pellentesque, sed dictum risus fringilla.-->
<!--        </p>-->
<!--        <p>-->
<!--            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc pretium dapibus enim, in ultrices velit scelerisque et. Vestibulum laoreet sem eu lacus cursus lobortis. Curabitur vulputate, nisl ut scelerisque fermentum, odio ipsum elementum dui, nec fringilla nisl lorem et velit. Aenean ex leo, tempor vel turpis in, facilisis semper magna. Fusce quis consequat enim. Aenean ornare nibh at sapien facilisis dapibus quis eu lacus. Duis pulvinar, nisl ac venenatis rhoncus, urna orci ultrices dui, vel facilisis leo leo eget odio. Etiam bibendum in tortor quis vestibulum. Etiam egestas mauris non ipsum ultrices, ut dapibus lacus ultrices. Nulla pellentesque euismod enim, id viverra enim eleifend vel. Phasellus mauris neque, venenatis eu cursus ac, posuere a libero. Fusce lobortis tempor faucibus. Donec iaculis quis justo sit amet sollicitudin. Sed sed lorem magna. Sed ut ante non neque lacinia pellentesque. Vestibulum suscipit mi eget arcu pellentesque, sed dictum risus fringilla.-->
<!--        </p>-->
<!--        <p>-->
<!--            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc pretium dapibus enim, in ultrices velit scelerisque et. Vestibulum laoreet sem eu lacus cursus lobortis. Curabitur vulputate, nisl ut scelerisque fermentum, odio ipsum elementum dui, nec fringilla nisl lorem et velit. Aenean ex leo, tempor vel turpis in, facilisis semper magna. Fusce quis consequat enim. Aenean ornare nibh at sapien facilisis dapibus quis eu lacus. Duis pulvinar, nisl ac venenatis rhoncus, urna orci ultrices dui, vel facilisis leo leo eget odio. Etiam bibendum in tortor quis vestibulum. Etiam egestas mauris non ipsum ultrices, ut dapibus lacus ultrices. Nulla pellentesque euismod enim, id viverra enim eleifend vel. Phasellus mauris neque, venenatis eu cursus ac, posuere a libero. Fusce lobortis tempor faucibus. Donec iaculis quis justo sit amet sollicitudin. Sed sed lorem magna. Sed ut ante non neque lacinia pellentesque. Vestibulum suscipit mi eget arcu pellentesque, sed dictum risus fringilla.-->
<!--        </p>-->
<!--        <p>-->
<!--            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc pretium dapibus enim, in ultrices velit scelerisque et. Vestibulum laoreet sem eu lacus cursus lobortis. Curabitur vulputate, nisl ut scelerisque fermentum, odio ipsum elementum dui, nec fringilla nisl lorem et velit. Aenean ex leo, tempor vel turpis in, facilisis semper magna. Fusce quis consequat enim. Aenean ornare nibh at sapien facilisis dapibus quis eu lacus. Duis pulvinar, nisl ac venenatis rhoncus, urna orci ultrices dui, vel facilisis leo leo eget odio. Etiam bibendum in tortor quis vestibulum. Etiam egestas mauris non ipsum ultrices, ut dapibus lacus ultrices. Nulla pellentesque euismod enim, id viverra enim eleifend vel. Phasellus mauris neque, venenatis eu cursus ac, posuere a libero. Fusce lobortis tempor faucibus. Donec iaculis quis justo sit amet sollicitudin. Sed sed lorem magna. Sed ut ante non neque lacinia pellentesque. Vestibulum suscipit mi eget arcu pellentesque, sed dictum risus fringilla.-->
<!--        </p>-->
    </div>



    <?php $this->view('templates/header/importScripts') ?>
    

    <script>
        $('.carousel').carousel({
            interval: 5000 //changes the speed
        })
    </script>

</body>
</html>
