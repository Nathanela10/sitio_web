<?php
    if (!defined('BASEPATH')) exit('No direct script access allowed');
?>

<html>
    <body>
        <div class="row seccion">
            <?php include_once("analyticstracking.php") ?>  
            <h1>¿Por qué se generan dos períodos de altas concentraciones de PM2.5 en el Valle de Aburrá?  </h1>
            <p><span class="fa fa-clock-o"></span> Fecha de publicación: 18 de abril de 2022 </p>
            <br>
            <p class="lead"> by <a href="https://twitter.com/siatamedellin?lang=es">@siatamedellin</a></p>
            <div class="row">
                <div class="col-md-4 col-md-offset-4" style="text-align: center; padding: 20px;">
                    <img style=" width: 100%;margin-left: auto;"
                    src="/sitio_web/application/assets/img/contenido/Noticias/noticia20.png"
                    class="img-responsive" alt="territorioAlAire">
                </div>
            </div>
            <br>
            <p>
            Las condiciones meteorológicas propias de Colombia y particularmente del Valle de Aburrá explican por qué, 
            el PM2.5 -contaminante crítico para nuestro territorio-, tiene un comportamiento anual que se caracteriza por tener dos picos: 
            uno más evidente en marzo, y otro entre los meses de octubre y noviembre. 
            </p>
            <p>
            La transición entre las temporadas secas y las de lluvias durante el primer y segundo semestre del año, 
            da lugar a la presencia de nubes de baja altura en nuestro territorio, disminuyendo la radiación solar incidente en superficie. 
            Como consecuencia, se reduce la energía disponible para que se presente un ascenso de parcelas de aire que transporten los contaminantes 
            -para su eficiente remoción en las partes más altas de la atmósfera-, generando una atmósfera estable. 
            </p>
            <p>
            Esto lo conversamos en el tercer episodio del programa radial Territorio Al Aire. Esta es una estrategia del Área Metropolitana, 
            a través de su proyecto SIATA, para la divulgación, apropiación y comunicación pública de la ciencia.  
            </p>

            <br>
            <div align="left">
                <a class="btn btn-primary" href="https://siata.gov.co/sitio_web/index.php/noticias"><span
                            class="fa fa-chevron-left" aria-hidden="true"></span>&nbsp&nbspRegresar</a>
            </div>
        </div>
        <?php $this->view('templates/header/importScripts') ?>
    </body>
</html>