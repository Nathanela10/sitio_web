<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

?>

<html>
<head>

</head>
<body>
<div class="row seccion">
    <?php include_once("analyticstracking.php") ?>  

    <!-- Titulo -->
    <h1>Conferencia Mathias Rotach Medellín</h1>

    <!-- Fecha -->
    <p><span class="fa fa-clock-o"></span> Fecha de publicación: 15 de agosto de 2018</p>
    <!-- Autor-->
    <p class="lead">
        Por <a href="https://twitter.com/siatamedellin?lang=es">@siatamedellin</a>
    </p>

    <!-- Contenido -->
    <p style="text-align: justify;">
        "A coordinated effort to investigate transport and exchange procces in the atmosphere over mountains" An
        overview on a recent development in mountain meteorology.
        <br><br>
        Mathias Rotach es PhD en ciencias naturales de la Escuela Politécnica Federal de Zurich. Actualmente se
        desempeña como profesor titular en la Universidad de Innsbruck, Austria, y es el director del Instituto de
        Ciencias Atmosféricas y Criosféricas de la misma universidad.

        <br><br>
        La dinámica atmosférica ha sido su tema de estudio a lo largo de su carrera académica, en la cual ha tenido
        aportes fundamentales en el conocimiento principalmente de las dinámicas sobre terrenos complejos.
        Con un total de 98 publicaciones, más de 3500 citaciones y un h-index de 33, el profesor Mathias es considerado
        uno de los investigadores más importantes a nivel internacional y es quien actualmente define el estado del arte
        de la turbulencia atmosférica en terrenos complejos.
    </p>

    <br>
    <div style="text-align: center;">
        <iframe style="width: 42vw; height:31.5vw;" src="https://www.youtube.com/embed/E5NLPJuRquk" frameborde="0"
                allowfullscreen></iframe>
    </div>
    <br>
    <div align="left">
        <a class="btn btn-primary" href="https://siata.gov.co/sitio_web/index.php/noticias"><span
                    class="fa fa-chevron-left" aria-hidden="true">&nbsp&nbspRegresar</span></a>
    </div>
</div>
    <?php $this->view('templates/header/importScripts') ?>
</body>
</html>