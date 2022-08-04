<?php

if ( ! defined("BASEPATH")) exit("No direct script access allowed");

?>

<html>
<head>
<!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">    -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<link href="/sitio_web/application/assets/css/contenido/ams.css?v=0.0.9" rel="stylesheet">
<link href="/sitio_web/application/assets/vendor/wfgame/src/style.css" rel="stylesheet">

</head>
    <?php include_once("analyticstracking.php") ?>
    <div class="row seccion">
        <div id="videos" style="width: 100%">
            <img style="width: 100%" src="/sitio_web/application/assets/img/contenido/estrategiasEducacion/bannerAprenderJugando.png" alt="sopa de letras">
        </div>
        <div class="container">
            <div id='puzzle'></div>
            <div id='words'></div>
            <br><br>
            <div>
                <button class="btn btn-primary" id='solve'>Resolver sopa de letras</button>
                <button class="btn btn-primary" id='new'>Iniciar nuevo juego</button>
            </div>
        </div>
        <br><br>
        <a class="btn btn-primary" style="float:right; margin-right: 20px; color:white;" href="https://siata.gov.co/sitio_web/index.php/estrategiasEducacion#aprenderExperimentando" role="button">Volver</a>
        <br><br>
    </div>

    <?php $this->view("templates/header/importScripts") ?>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script src="/sitio_web/application/assets/vendor/wfgame/src/wordfind.js"></script>
    <script src="/sitio_web/application/assets/vendor/wfgame/src/wordfindgame.js"></script>
    <script type="text/javascript" charset="utf-8"></script>

    <script>

     /* var words = {
        'cow':"a large female farm animal kept to produce meat and milk.",
        'tracks':'one of several songs or pieces of music on a CD or other musical recording.',
        'division':'the act of separating something into parts or groups, or the way that it is separated.',
        'speed':'how fast something moves',
        'bear':'a large, strong mammal with thick fur that lives esp. in colder parts of the world.',
        'osmosis':'the process in animals and plants by which a liquid passes gradually from one part to another through a membrane (= tissue that covers cells).'
      }*/

      /*  var words = ['cows', 'tracks', 'arrived', 'located', 'sir', 'seat',
               'division', 'effect', 'underline', 'view', 'annual',
               'anniversary', 'centennial', 'millennium', 'perennial',
               'artisan', 'apprentice', 'meteorologist', 'blizzard', 'tornado',
               'intensify','speed','count','consonant','someone',
               'sail','rolled','bear','wonder','smiled','angle', 'absent',
               'decadent', 'excellent', 'frequent', 'impatient', 'cell',
               'cytoplasm', 'organelle', 'diffusion', 'osmosis',
               'respiration'];*/

      var words = ['SIATA','NUBES','SISMOS','QUEBRADA','INCENDIO','ALERTA','RIO','HUMEDAD','ATMOSFERA','SUELO','LLUVIA','CUENCA','VIENTO','RAYOS','RADAR','MONITOREO','CIENCIA','PLUVIOMETRO','CONTAMINACION','SENSORES','INVESTIGACION','TECNOLOGIA','RADIACION','DESLIZAMIENTOS','AREAMETROPOLITANA','VALLEDEABURRA','GESTIONDERIESGOS','CALIDADDELAIRE','METEOROLOGIA','DESLIZAMIENTOS','INUNDACIONES','TEMPERATURA','PRECIPITACION','HIDROLOGIA'];


      // start a word find game
      var gamePuzzle = wordfindgame.create(words, '#puzzle', '#words');

      $('#solve').click( function() {
        wordfindgame.solve(gamePuzzle, words);
      });

      $('#new').click( function() {
        wordfindgame.create(words, '#puzzle', '#words');
      });

      $('#puzzle').bind("touchmove", function(e){
          e.preventDefault();
      });

    </script>
</body>
</html>
