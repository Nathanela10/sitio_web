<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

?>

<html>
<body>
    <div class="row seccion">
        <?php include_once("analyticstracking.php") ?>  
        <!-- Titulo -->
        <h1>¿Cómo estuvo la primera temporada de lluvias del 2021?</h1>
        <!-- Fecha -->
        <p style="text-align: justify;" ><span class="fa fa-clock-o"></span> Fecha de publicación: 10 de Junio de 2021</p>
        <br>
        <!-- Autor -->
        <p class="lead"> by <a href="https://twitter.com/siatamedellin?lang=es">@siatamedellin</a></p>

        <!-- Contenido -->
        <p style="text-align: justify;" >
            Típicamente en nuestra región, la primera temporada de lluvias del año ocurre entre los meses marzo-abril-mayo (MAM), siendo 
            junio un mes de transición a una temporada con menos acumulados de lluvia. Este año, se registraron acumulados de lluvia y 
            aumentos de nivel más altos que en la primera temporada del 2020.
        </p>
        <p style="text-align: justify;" >
            En general, según la información del radar meteorológico, los acumulados de precipitación durante la primera temporada de 
            lluvias de 2021, superaron el 100% de la climatología, es decir, el valor promedio esperado para la época, en particular en 
            la zona norte del Valle de Aburrá y el Oriente de Antioquia.
        </p>
        <br>
        <div style="text-align: center;">
            <img style=" width: 60%;margin-left: auto;margin-right: auto;"
                src="/sitio_web/application/assets/img/contenido/Noticias/Noticia 2_Acumulados de lluvia MAM 2021.png"
                class="img-responsive" alt="">
        </div>
        <br><br>
        <p style="text-align: justify;" >
            En total se presentaron 92 eventos de precipitación en el Valle de Aburrá (según datos históricos, el promedio son 70), 
            distribuidos según el acumulado máximo como lo muestra la figura, en la cual se observa un alto número de eventos que superaron 
            los 45 mm de acumulado de precipitación.
        </p>
        <div style="text-align: center;">
            <img style=" width: 30%;margin-left: auto;margin-right: auto;"
                src="/sitio_web/application/assets/img/contenido/Noticias/Noticia 2_Eventos MAM.png"
                class="img-responsive" alt="">
        </div>
        <br>
        <p style="text-align: justify;" >
            El 5 de abril, 4 estaciones de nivel ubicadas en el río Aburrá-Medellín (Aguacatala, Puente La 33, Acevedo y Machado-Bello) 
            superaron el máximo nivel observado en los últimos 9 años de registro . En la estación de nivel Aula Ambiental se registró el 
            segundo evento con mayor nivel en el mismo periodo histórico. 
        </p>
        <br>
        <div style="text-align: center;">
            <img style=" width: 60%;margin-left: auto;margin-right: auto;"
                src="/sitio_web/application/assets/img/contenido/Noticias/Noticia 2_Niveles Maximos.png"
                class="img-responsive" alt="">
        </div>
        <br>
        <p style="text-align: justify;" >
            Durante la temporada MAM, se realizaron 314 llamadas de alerta a comunidades y organismos de gestión de riesgo de los 
            municipios del valle. También se activaron 16 alarmas comunitarias (SATC) en todo el territorio, debido a aumentos a nivel 
            de riesgo rojo en las quebradas monitoreadas.
        </p>
        <br>
        <div style="text-align: center;">
            <img style=" width: 35%;margin-left: auto;margin-right: auto;"
                src="/sitio_web/application/assets/img/contenido/Noticias/Noticia 2_Activacion de Alarmas SATC.png"
                class="img-responsive" alt="">
        </div>
        <br><br>
        <div align="left">
            <a class="btn btn-primary" href="https://siata.gov.co/sitio_web/index.php/noticias"><span
                        class="fa fa-chevron-left" aria-hidden="true">&nbsp&nbspRegresar</span></a>
        </div>
    </div>
    <?php $this->view('templates/header/importScripts') ?>
</body>
</html>