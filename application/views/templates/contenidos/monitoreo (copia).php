<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

?>

<html>
<head>

    <link href="/sitio_web/application/assets/css/contenido/monitoreo.css" rel="stylesheet">

</head>

<body>
    <?php include_once("analyticstracking.php") ?>
        <div class= "row seccion">
        <!--    <div id="consolidadoEstaciones" style="width: 100%">
            <img style="width: 100%" src="/sitio_web/application/assets/img/contenido/Titulos/consolidado_estaciones.jpg" alt="Consolidado de estaciones">
        </div>
        <div class="table-responsive" style="width: 100%;">

            <?php echo $html_tabla_estaciones;?>    
        </div> <br>-->

        <div id="acelerografos" style="width: 100%">
            <img style="width: 100%" src="/sitio_web/application/assets/img/contenido/Titulos/redes.jpg" alt="Redes">
        </div>
        <br>

        <!-- INICIO YA -->
        <div id="acelerometros" class= "contenedor_redes row-eq-height">
            <div class="hidden-xs col-md-1 col-lg-1"></div>
            
            <div class="col-xs-12 col-md-3 col-lg-3 movilVertical" style="text-align: center"><br>                
                <img src="/sitio_web/application/assets/img/contenido/monitoreo/fotoAcelerografo.png" class ="imagen_red">
            </div>
            <div class="col-xs-4 col-md-3 col-lg-3 otros" style="text-align: center">
                <img src="/sitio_web/application/assets/img/contenido/monitoreo/fotoAcelerografo.png" class ="imagen_red">
            </div>
            <div id="acelerografos" class="col-xs-12 col-md-7 col-lg-7 movilVertical" >
                <div style="text-align: left">
                    <span class="tituloRedes">Acelerógrafos</span>
                    <span class="circuloConteoEstaciones"><?php echo $conteoEstaciones['acelerografica'];?></span>
                </div>
                <p style="text-align: justify">
                    La Red Acelerográfica de la ciudad de Medellín - RAM y del Área Metropolitana - RAVA fueron instaladas por el Grupo de Sismología de Medellín.
                    RAVA inicia en el año 2000 con un proyecto de microzonificación sísmica del Área Metropolitana, que permitió instalar equipos en Bello e Itagüí.
                    En 2008 se realizó el proyecto para zonificar los demás municipios que quedaron faltando (Caldas, La Estrella, Sabaneta, Envigado, Copacabana,
                    Girardota y Barbosa). Con un total son 25 equipos entre las dos redes RAM y RAVA, desde SIATA realizamos el monitoreo del comportamiento de los suelos ante eventos sísmicos que ocurren en Colombia.
                </p>
            </div>
            <div id="acelerografos" class="col-xs-8 col-md-7 col-lg-7 otros" >
                <div style="text-align: left">
                    <span class="tituloRedes">Acelerógrafos</span>
                    <span class="circuloConteoEstaciones"><?php echo $conteoEstaciones['acelerografica'];?></span>
                </div>
                <p style="text-align: justify">
                    La Red Acelerográfica de la ciudad de Medellín - RAM y del Área Metropolitana - RAVA fueron instaladas por el Grupo de Sismología de Medellín.
                    RAVA inicia en el año 2000 con un proyecto de microzonificación sísmica del Área Metropolitana, que permitió instalar equipos en Bello e Itagüí.
                    En 2008 se realizó el proyecto para zonificar los demás municipios que quedaron faltando (Caldas, La Estrella, Sabaneta, Envigado, Copacabana,
                    Girardota y Barbosa). Con un total son 25 equipos entre las dos redes RAM y RAVA, desde SIATA realizamos el monitoreo del comportamiento de los suelos ante eventos sísmicos que ocurren en Colombia.
                </p>
            </div>
            <div class="hidden-xs col-md-1 col-lg-1"></div>
        </div>
        <!-- FIN-->

        <!-- INICIO-->
        <div id="calidadAire" class= "contenedor_redes row-eq-height">
            <div class="hidden-xs col-md-1 col-lg-1"></div>
            <div class="col-xs-12 col-md-3 col-lg-3 movilVertical" style="text-align: center"><br>                
                <img src="/sitio_web/application/assets/img/contenido/monitoreo/fotoAcelerometro.png" class ="imagen_red">
            </div>
            <div class="col-md-7 col-lg-7 movilVertical" >
                <div style="text-align: right">
                    <span class="tituloRedes">Acelerómetros</span>
                    <span class="circuloConteoEstaciones"><?php echo $conteoEstaciones['acelerometrica'];?></span>
                </div>
                <p style="text-align: justify">
                    Monitorean los cambios en las tres componentes de la aceleración, vibración, orientación y dirección, además del ángulos de inclinación del suelo. Su información aporta al conocimiento de deslizamientos
                    superficiales.
                </p>
            </div>
            <div class="col-xs-8 col-md-7 col-lg-7 otros" >
                <div style="text-align: right">
                    <span class="tituloRedes">Acelerómetros</span>
                    <span class="circuloConteoEstaciones"><?php echo $conteoEstaciones['acelerometrica'];?></span>
                </div>
                <p style="text-align: justify">
                    Monitorean los cambios en las tres componentes de la aceleración, vibración, orientación y dirección, además del ángulos de inclinación del suelo. Su información aporta al conocimiento de deslizamientos
                    superficiales.
                </p>
            </div>
            <div class="col-xs-4 col-md-3 col-lg-3 otros" style="text-align: center">
                <img src="/sitio_web/application/assets/img/contenido/monitoreo/fotoAcelerometro.png" class ="imagen_red">
            </div>
            <div class="hidden-xs col-md-1 col-lg-1"></div>
        </div>
        <!-- FIN-->

        <!-- INICIO YA -->
        <div id="camaras" class= "contenedor_redes row-eq-height">
            <div class="hidden-xs col-md-1 col-lg-1"></div>
            <div class="col-xs-12 col-md-3 col-lg-3 movilVertical" style="text-align: center"><br>                
                <img src="/sitio_web/application/assets/img/contenido/monitoreo/fotoCalidadDelAire.png" class ="imagen_red">
            </div>
            <div class="col-xs-4 col-md-3 col-lg-3 otros" style="text-align: center">
                <img src="/sitio_web/application/assets/img/contenido/monitoreo/fotoCalidadDelAire.png" class ="imagen_red">
            </div>
            <div class="col-xs-12 col-md-7 col-lg-7 movilVertical" >
                <div style="text-align: left">
                    <span class="tituloRedes">Calidad del Aire</span>
                    <span class="circuloConteoEstaciones"><?php echo (int)$conteoEstaciones['calidad_aire']+6;?></span>
                </div>
                <p style="text-align: justify">
                    La Red de Calidad del Aire del Valle de Aburrá cuenta con estaciones para el monitoreo de distintos
                    contaminantes, como ozono O3, óxidos de nitrógeno, monóxido de Carbono CO, material particulado PM 10,
                    Pm 2.5 entre otros. Conoce más información aquí.
                </p>
            </div>
            <div class="col-xs-8 col-md-7 col-lg-7 otros" >
                <div style="text-align: left">
                    <span class="tituloRedes">Calidad del Aire</span>
                    <span class="circuloConteoEstaciones"><?php echo (int)$conteoEstaciones['calidad_aire'];?></span>
                </div>
                <p style="text-align: justify">
                    La Red de Calidad del Aire del Valle de Aburrá cuenta con estaciones para el monitoreo de distintos
                    contaminantes, como ozono O3, óxidos de nitrógeno, monóxido de Carbono CO, material particulado PM 10,
                    Pm 2.5 entre otros. Conoce más información aquí.
                </p>
            </div>
            <div class="hidden-xs col-md-1 col-lg-1"></div>
        </div>
        <!-- FIN -->

        <!-- INICIO YA-->
        <br>
        <div id="camarasTermicas" class= "contenedor_redes row-eq-height">
            <div class="hidden-xs col-md-1 col-lg-1"></div>
            <div class="col-xs-12 col-md-3 col-lg-3 movilVertical" style="text-align: center"><br>                
                <img src="/sitio_web/application/assets/img/contenido/monitoreo/fotoCamaras.png" class ="imagen_red">
            </div>
            <div class="col-md-7 col-lg-7 movilVertical" >
                <div style="text-align: left">
                    <span class="tituloRedes">Cámaras</span>
                    <span class="circuloConteoEstaciones"><?php echo $conteoEstaciones['camara'];?></span>
                </div>
                <p style="text-align: justify">
                    Cámaras del campo visible para el monitoreo en tiempo real de:  nubes y cobertura nubosa,
                    nivel visual del río y quebradas, columnas de humo, encharcamiento o inundaciones en pasos
                    a desnivel, seguimiento de movimientos en masa activos y monitoreo de la nubosidad en la
                    bóveda celeste, estas últimas con cámaras ojo de pez. Las imágenes de la Red de Cámaras están
                    disponibles en tiempo real en el geoportal www.siata.gov.co y la aplicación paara dispositivos
                    móviles SIATA.
                </p>
            </div>            
            <div class="col-xs-8 col-md-7 col-lg-7 otros" >
                <div style="text-align: right">
                    <span class="tituloRedes">Cámaras</span>
                    <span class="circuloConteoEstaciones"><?php echo $conteoEstaciones['camara'];?></span>
                </div>
                <p style="text-align: justify">
                    Cámaras del campo visible para el monitoreo en tiempo real de:  nubes y cobertura nubosa,
                    nivel visual del río y quebradas, columnas de humo, encharcamiento o inundaciones en pasos
                    a desnivel, seguimiento de movimientos en masa activos y monitoreo de la nubosidad en la
                    bóveda celeste, estas últimas con cámaras ojo de pez. Las imágenes de la Red de Cámaras están
                    disponibles en tiempo real en el geoportal www.siata.gov.co y la aplicación paara dispositivos
                    móviles SIATA.
                </p>
            </div>
            <div class="col-xs-4 col-md-3 col-lg-3 otros" style="text-align: center">
                <img src="/sitio_web/application/assets/img/contenido/monitoreo/fotoCamaras.png" class ="imagen_red">
            </div>
            <div class="hidden-xs col-md-1 col-lg-1"></div>
        </div>
        <!-- FIN.-->
        <br><br> 
        <!-- INICIO YA-->
        <div id="ceilometros" class= "contenedor_redes row-eq-height">
            <div class="hidden-xs col-md-1 col-lg-1"></div>
            <div class="col-xs-12 col-md-3 col-lg-3 movilVertical" style="text-align: center"><br>                
                <img src="/sitio_web/application/assets/img/contenido/monitoreo/fotoCamaraTermica.png" class ="imagen_red">
            </div>
            <div class="col-md-7 col-lg-7 movilVertical" >
                <div style="text-align: left;">
                    <span class="tituloRedes">Cámaras Térmicas</span>
                    <span class="circuloConteoEstaciones"><?php echo $conteoEstaciones['camaras_termicas'];?></span>
                </div>
                <p style="text-align: justify">
                    Con cámaras térmicas ubicadas en puntos estratégicos del Valle de Aburrá, monitoreamos
                    focos de calor en las laderas para detectar incendios forestales. Esta información es
                    transmitida a los organismos gestores de riesgos en tiempo real, a través de distintos
                    canales de comunicación.
                </p>
            </div>
            <div class="col-xs-4 col-md-3 col-lg-3 otros" style="text-align: center">
                <img src="/sitio_web/application/assets/img/contenido/monitoreo/fotoCamaraTermica.png" class ="imagen_red">
            </div>
            <div class="col-xs-8 col-md-7 col-lg-7 otros" >
                <div style="text-align: left">
                    <span class="tituloRedes">Cámaras Térmicas</span>
                    <span class="circuloConteoEstaciones"><?php echo $conteoEstaciones['camaras_termicas'];?></span>
                </div>
                <p style="text-align: justify">
                    Con cámaras térmicas ubicadas en puntos estratégicos del Valle de Aburrá, monitoreamos
                    focos de calor en las laderas para detectar incendios forestales. Esta información es
                    transmitida a los organismos gestores de riesgos en tiempo real, a través de distintos
                    canales de comunicación.
                </p>
            </div>
            <div class="hidden-xs col-md-1 col-lg-1"></div>
        </div>
        <!-- FIN-->

        <!-- INICIO YA-->
        <div id="ciudadanosCientificos" class= "contenedor_redes row-eq-height">
            <div class="hidden-xs col-md-1 col-lg-1"></div>
            <div class="col-xs-12 col-md-3 col-lg-3 movilVertical" style="text-align: center"><br>                
                <img src="/sitio_web/application/assets/img/contenido/monitoreo/fotoCeilometro.png" class ="imagen_red">
            </div>

            <div class="col-xs-12 col-md-7 col-lg-7 movilVertical" >
                <div style="text-align: right">
                    <span class="tituloRedes">Ceilómetros</span>
                    <span class="circuloConteoEstaciones"><?php echo $conteoEstaciones['ceilometro'];?></span>
                </div>
                <p style="text-align: justify">
                    Dispositivo láser diseñado para tomar perfiles verticales de la atmósfera,
                    que permiten detectar la capa límite atmosférica, su estructura y composición.
                    Información meteorológica importante para el estudio de la calidad del aire.
                    Esta medición tiene una resolución espacial de 10 m y una cobertura de hasta
                    15 Km en la vertical.
                </p>
            </div>
            <div class="col-xs-8 col-md-7 col-lg-7 otros" >
                <div style="text-align: right;">
                    <span class="tituloRedes">Ceilómetros</span>
                    <span class="circuloConteoEstaciones"><?php echo $conteoEstaciones['ceilometro'];?></span>
                </div>
                <p style="text-align: justify">
                    Dispositivo láser diseñado para tomar perfiles verticales de la atmósfera,
                    que permiten detectar la capa límite atmosférica, su estructura y composición.
                    Información meteorológica importante para el estudio de la calidad del aire.
                    Esta medición tiene una resolución espacial de 10 m y una cobertura de hasta
                    15 Km en la vertical.
                </p>
            </div>
            <div class="col-xs-4 col-md-3 col-lg-3 otros" style="text-align: center">
                <img src="/sitio_web/application/assets/img/contenido/monitoreo/fotoCeilometro.png" class ="imagen_red">
            </div>            
            <div class="hidden-xs col-md-1 col-lg-1"></div>
        </div>
        <!-- FIN-->

        <!-- INICIO YA-->

        <div id="disdrometros" class= "contenedor_redes row-eq-height">
            <div class="hidden-xs col-md-1 col-lg-1"></div>
            <div class="col-xs-12 col-md-3 col-lg-3 movilVertical" style="text-align: center"><br>                
                <img src="/sitio_web/application/assets/img/contenido/monitoreo/fotoCiudadanosCientificos.png" class ="imagen_red">
            </div>
            <div class="col-xs-4 col-md-3 col-lg-3 otros" style="text-align: center">
                <img src="/sitio_web/application/assets/img/contenido/monitoreo/fotoCiudadanosCientificos.png" class ="imagen_red">
            </div>            
            <div class="col-xs-12 col-md-7 col-lg-7 movilVertical" >
                <div style="text-align: left;">
                    <span class="tituloRedes">Ciudadanos Científicos</span>
                    <span class="circuloConteoEstaciones">400</span>
                </div>
                <p style="text-align: justify">
                    Iniciativa que entrega a ciudadanos del Valle de Aburrá un sensor de medición de calidad de aire
                    y una aplicación para dispositivos móviles, que se constituyen como herramientas pedagógicas para
                    realizar un proceso de educación en temas meteorológicos y de calidad del aire. Consulta más
                    información aquí.
                </p>
            </div>
            <div class="col-xs-8 col-md-7 col-lg-7 otros" >
                <div style="text-align: left;">
                    <span class="tituloRedes">Ciudadanos Científicos</span>
                    <!--<span class="circuloConteoEstaciones"><?php echo $conteoEstaciones['ciudadanos_cientificos'];?></span>-->
                    <span class="circuloConteoEstaciones">400</span>
                </div>
                <p style="text-align: justify">
                    Iniciativa que entrega a ciudadanos del Valle de Aburrá un sensor de medición de calidad de aire
                    y una aplicación para dispositivos móviles, que se constituyen como herramientas pedagógicas para
                    realizar un proceso de educación en temas meteorológicos y de calidad del aire. Consulta más
                    información aquí.
                </p>
            </div>

            <div class="hidden-xs col-md-1 col-lg-1"></div>
        </div>
        <!-- FIN -->

        <!-- INICIO YA-->
        <div id="humedad" class= "contenedor_redes row-eq-height">
            <div class="hidden-xs col-md-1 col-lg-1"></div>
            <div class="col-xs-12 col-md-3 col-lg-3 movilVertical" style="text-align: center"><br>                
                <img src="/sitio_web/application/assets/img/contenido/monitoreo/fotoDisdrometros.png" class ="imagen_red">
            </div>

            <div class="col-xs-12 col-md-7 col-lg-7 movilVertical" >
                <div style="text-align: right;">
                    <span class="tituloRedes">Disdrómetros</span>
                    <span class="circuloConteoEstaciones"><?php echo $conteoEstaciones['disdrometro'];?></span>
                </div>
                <p style="text-align: justify">
                    En el SIATA medimos la cantidad de gotas que caen en puntos específicos durante un evento de
                    lluvia, el diámetro de cada gota y la velocidad con la que cae, con sensores llamados
                    Disdrómetros; estas mediciones en cada instante de tiempo se conocen como el espectro de
                    precipitación. La información obtenida con los Disdrómetros es de suma importancia para
                    entender la física inherente al fenómeno de la precipitación en regiones tropicales como
                    la nuestra y se convierte en una herramienta fundamental para la calibración del Radar
                    Meteorológico, puesto que el espectro que resulta de las mediciones con el Disdrómetro
                    (medición en tierra), puede ser traducido en una reflectividad equivalente (la reflectividad es la unidad de medida del radar Meteorológico).
                </p>
            </div>
            <div class="col-xs-8 col-md-7 col-lg-7 otros" >
                <div style="text-align: right;">
                    <span class="tituloRedes">Disdrómetros</span>
                    <span class="circuloConteoEstaciones"><?php echo $conteoEstaciones['disdrometro'];?></span>
                </div>
                <p style="text-align: justify">
                    En el SIATA medimos la cantidad de gotas que caen en puntos específicos durante un evento de
                    lluvia, el diámetro de cada gota y la velocidad con la que cae, con sensores llamados
                    Disdrómetros; estas mediciones en cada instante de tiempo se conocen como el espectro de
                    precipitación. La información obtenida con los Disdrómetros es de suma importancia para
                    entender la física inherente al fenómeno de la precipitación en regiones tropicales como
                    la nuestra y se convierte en una herramienta fundamental para la calibración del Radar
                    Meteorológico, puesto que el espectro que resulta de las mediciones con el Disdrómetro
                    (medición en tierra), puede ser traducido en una reflectividad equivalente (la reflectividad es la unidad de medida del radar Meteorológico).
                </p>
            </div>
            <div class="col-xs-4 col-md-3 col-lg-3 otros" style="text-align: center">
                <img src="/sitio_web/application/assets/img/contenido/monitoreo/fotoDisdrometros.png" class ="imagen_red">
            </div>
            <div class="hidden-xs col-md-1 col-lg-1"></div>
        </div>
        <!-- FIN -->

        <!-- INICIO-->
        <div id="meteorologicas" class= "contenedor_redes row-eq-height">
            <div class="hidden-xs col-md-1 col-lg-1"></div>
            <div class="col-xs-12 col-md-3 col-lg-3 movilVertical" style="text-align: center"><br>                
                <img src="/sitio_web/application/assets/img/contenido/monitoreo/fotoHumedad.png" class ="imagen_red">
            </div>
            <div class="col-xs-4 col-md-3 col-lg-3 otros" style="text-align: center">
                <img src="/sitio_web/application/assets/img/contenido/monitoreo/fotoHumedad.png" class ="imagen_red">
            </div>
            <div class="col-md-7 col-lg-7 movilVertical" >
                <div style="text-align: left">
                    <span class="tituloRedes">Humedad</span>
                    <span class="circuloConteoEstaciones"><?php echo $conteoEstaciones['humedad'];?></span>
                </div>
                <p style="text-align: justify">
                    Las estaciones de humedad están ubicadas en algunas laderas del área metropolitana e indican el nivel
                    de saturación de humedad de los suelos, temperatura y conductividad eléctrica. Determinan, bajo
                    estudios y modelos hidrológicos en los cuales trabaja el Equipo de Hidrología, el nivel de riesgo
                    que representan para la ciudadanía, en términos de posibilidad de ocurrencia de deslizamientos.

                </p>
            </div>
            <div class="col-xs-8 col-md-7 col-lg-7 otros" >
                <div style="text-align: left">
                    <span class="tituloRedes">Humedad</span>
                    <span class="circuloConteoEstaciones"><?php echo $conteoEstaciones['humedad'];?></span>
                </div>
                <p style="text-align: justify">
                    Las estaciones de humedad están ubicadas en algunas laderas del área metropolitana e indican el nivel
                    de saturación de humedad de los suelos, temperatura y conductividad eléctrica. Determinan, bajo
                    estudios y modelos hidrológicos en los cuales trabaja el Equipo de Hidrología, el nivel de riesgo
                    que representan para la ciudadanía, en términos de posibilidad de ocurrencia de deslizamientos.

                </p>
            </div>
            <div class="hidden-xs col-md-1 col-lg-1"></div>
        </div>

        <!-- FIN -->

        <!-- INICIO YA-->
        <div id="nivel" class= "contenedor_redes row-eq-height">
            <div class="hidden-xs col-md-1 col-lg-1"></div>
            <div class="col-xs-12 col-md-3 col-lg-3 movilVertical" style="text-align: center">
                <img src="/sitio_web/application/assets/img/contenido/monitoreo/fotoMeteorologicas.png" class ="imagen_red">
            </div>
            <div class="col-xs-12 col-md-7 col-lg-7 movilVertical" >
                <div style="text-align: right">
                    <span class="tituloRedes">Meteorológicas</span>
                    <span class="circuloConteoEstaciones"><?php echo ((int)$conteoEstaciones['meteorologica']+(int)$conteoEstaciones['meteorologica_thiess']);?></span>
                </div>
                <p style="text-align: justify">
                    La red meteorológica está compuesta por sensores multiparamétricos, que proporcionan
                    información minuto a minuto de temperatura, humedad relativa, precipitación, presión
                    atmosférica, velocidad y dirección de vientos. Estos sensores tienen la capacidad de
                    diferenciar si la precipitación es líquida o sólida.
                </p>
            </div>
            <div class="col-xs-8 col-md-7 col-lg-7 otros" >
                <div style="text-align: right">
                    <span class="tituloRedes">Meteorológicas</span>
                    <span class="circuloConteoEstaciones"><?php echo ((int)$conteoEstaciones['meteorologica']+(int)$conteoEstaciones['meteorologica_thiess']);?></span>
                </div>
                <p style="text-align: justify">
                    La red meteorológica está compuesta por sensores multiparamétricos, que proporcionan
                    información minuto a minuto de temperatura, humedad relativa, precipitación, presión
                    atmosférica, velocidad y dirección de vientos. Estos sensores tienen la capacidad de
                    diferenciar si la precipitación es líquida o sólida.
                </p>
            </div>
            <div class="col-xs-4 col-md-3 col-lg-3 otros" style="text-align: center">
                <img src="/sitio_web/application/assets/img/contenido/monitoreo/fotoMeteorologicas.png" class ="imagen_red">
            </div>
            <div class="hidden-xs col-md-1 col-lg-1"></div>
        </div>
        <!-- FIN -->

        <!-- INICIO YA-->
        <div id="piranometros" class= "contenedor_redes row-eq-height">
            <div class="hidden-xs col-md-1 col-lg-1"></div>
            <div class="col-xs-12 col-md-3 col-lg-3 movilVertical" style="text-align: center"><br>                
                <img src="/sitio_web/application/assets/img/contenido/monitoreo/fotoNivel.png" class ="imagen_red">
            </div>
            <div class="col-xs-4 col-md-3 col-lg-3 otros" style="text-align: center">
                <img src="/sitio_web/application/assets/img/contenido/monitoreo/fotoNivel.png" class ="imagen_red">
            </div>            
            <div class="col-xs-12 col-md-7 col-lg-7 movilVertical" >
                <div style="text-align: left;">
                    <span class="tituloRedes">Nivel</span>
                    <span class="circuloConteoEstaciones"><?php echo $conteoEstaciones['nivel'];?></span>
                </div>
                <p style="text-align: justify">
                    Es un instrumento electromagnético que mide la distancia que existe entre él y la lámina
                    de agua del río o quebrada. Algunas de las estaciones trabajan con ondas electromagnéticas
                    y otras con ondas ultrasonido, lo cual permite conocer las fluctuaciones de los niveles del
                    río Medellín y algunas de las principales quebradas del Valle de Aburrá. Algunas de las
                    cuencas que se monitorean en este momento, son: río Medellín, quebradas La Presidenta,
                    La Hueso, Altavista, La Gómez – cuenca de La Iguaná, La Picacha, Santa Elena, La Ayurá y
                    La Doctora.
                </p>
            </div>
            <div class="col-xs-8 col-md-7 col-lg-7 otros" >
                <div style="text-align: left;">
                    <span class="tituloRedes">Nivel</span>
                    <span class="circuloConteoEstaciones"><?php echo $conteoEstaciones['nivel'];?></span>
                </div>
                <p style="text-align: justify">
                    Es un instrumento electromagnético que mide la distancia que existe entre él y la lámina
                    de agua del río o quebrada. Algunas de las estaciones trabajan con ondas electromagnéticas
                    y otras con ondas ultrasonido, lo cual permite conocer las fluctuaciones de los niveles del
                    río Medellín y algunas de las principales quebradas del Valle de Aburrá. Algunas de las
                    cuencas que se monitorean en este momento, son: río Medellín, quebradas La Presidenta,
                    La Hueso, Altavista, La Gómez – cuenca de La Iguaná, La Picacha, Santa Elena, La Ayurá y
                    La Doctora.
                </p>
            </div>
            <div class="hidden-xs col-md-1 col-lg-1"></div>
        </div>
        <!-- FIN-->        

        <!-- INICIO YA-->
        <div id="pluviometros" class= "contenedor_redes row-eq-height">
            <div class="hidden-xs col-md-1 col-lg-1"></div>
            <div class="col-xs-12 col-md-3 col-lg-3 movilVertical" style="text-align: center"><br>                
                <img src="/sitio_web/application/assets/img/contenido/monitoreo/fotoPiranometro.png" class ="imagen_red">
            </div>
            <div class="col-xs-12 col-md-7 col-lg-7 movilVertical" >
                <div style="text-align: right">
                    <span class="tituloRedes">Piranómetros</span>
                    <span class="circuloConteoEstaciones"><?php echo $conteoEstaciones['piranometro'];?></span>
                </div>
                <p style="text-align: justify">
                    El piranómetro es un instrumento utilizado para medir la cantidad de radiación
                    solar total que llega a la superficie, medida en cantidad de potencia por unidad
                    de área [w/m 2 ]. Cuantificar la radiación es de gran importancia para entender
                    la dinámica de los fenómenos meteorológicos cerca de la superficie, además
                    es una medida fundamental para determinar si las condiciones meteorológicas
                    son favorables o desfavorables para la calidad del aire, particularmente en
                    nuestro valle de Aburrá.
                </p>
            </div>
            <div class="col-xs-8 col-md-7 col-lg-7 otros" >
                <div style="text-align: right">
                    <span class="tituloRedes">Piranómetros</span>
                    <span class="circuloConteoEstaciones"><?php echo $conteoEstaciones['piranometro'];?></span>
                </div>
                <p style="text-align: justify">
                    El piranómetro es un instrumento utilizado para medir la cantidad de radiación
                    solar total que llega a la superficie, medida en cantidad de potencia por unidad
                    de área [w/m 2 ]. Cuantificar la radiación es de gran importancia para entender
                    la dinámica de los fenómenos meteorológicos cerca de la superficie, además
                    es una medida fundamental para determinar si las condiciones meteorológicas
                    son favorables o desfavorables para la calidad del aire, particularmente en
                    nuestro valle de Aburrá.
                </p>
            </div>
            <div class="col-xs-4 col-md-3 col-lg-3 otros" style="text-align: center">
                <img src="/sitio_web/application/assets/img/contenido/monitoreo/fotoPiranometro.png" class ="imagen_red">
            </div>
            <div class="hidden-xs col-md-1 col-lg-1"></div>
        </div>
        <!-- FIN-->


        <!-- INICIO YA-->

        <div id="sistemaAlertaTempranaComunitario" class= "contenedor_redes row-eq-height">
            <div class="hidden-xs col-md-1 col-lg-1"></div>
            <div class="col-xs-12 col-md-3 col-lg-3 movilVertical" style="text-align: center"><br>                
                <img src="/sitio_web/application/assets/img/contenido/monitoreo/fotoPluviometrica.png" class ="imagen_red">
            </div>
            <div class="col-xs-4 col-md-3 col-lg-3 otros" style="text-align: center">
                <img src="/sitio_web/application/assets/img/contenido/monitoreo/fotoPluviometrica.png" class ="imagen_red">
            </div>
            <div class="col-xs-12 col-md-7 col-lg-7 movilVertical" >
                <div style="text-align: left">
                    <span class="tituloRedes">Pluviómetros</span>
                    <span class="circuloConteoEstaciones"><?php echo $conteoEstaciones['pluviografica'];?></span>
                </div>
                <p style="text-align: justify">
                    Es la red más densa con la que cuenta el SIATA en la actualidad.
                    Las estaciones registran y envían en tiempo real datos de la cantidad
                    de agua que cae en un punto específico y su unidad de medida es el milímetro.
                    Se instalan dos sensores por punto para garantizar la entrega de información.
                    Por ejemplo, si el acumulado de lluvia es un milímetro, significa que ha caído
                    un litro de agua en un metro cuadrado en la superficie. Si quieres conocer más
                    sobre esta medición puedes ver en nuestro canal de Youtube el vídeo: Intensidad
                    y acumulado de lluvia.
                </p>
            </div>
            <div class="col-xs-8 col-md-7 col-lg-7 otros" >
                <div style="text-align: left">
                    <span class="tituloRedes">Pluviómetros</span>
                    <span class="circuloConteoEstaciones"><?php echo $conteoEstaciones['pluviografica'];?></span>
                </div>
                <p style="text-align: justify">
                    Es la red más densa con la que cuenta el SIATA en la actualidad.
                    Las estaciones registran y envían en tiempo real datos de la cantidad
                    de agua que cae en un punto específico y su unidad de medida es el milímetro.
                    Se instalan dos sensores por punto para garantizar la entrega de información.
                    Por ejemplo, si el acumulado de lluvia es un milímetro, significa que ha caído
                    un litro de agua en un metro cuadrado en la superficie. Si quieres conocer más
                    sobre esta medición puedes ver en nuestro canal de Youtube el vídeo: Intensidad
                    y acumulado de lluvia.
                </p>
            </div>
            <div class="hidden-xs col-md-1 col-lg-1"></div>
        </div>
        <!-- FIN-->        
        <br><br>
        <!-- INICIO YA-->
        <div class= "contenedor_redes row-eq-height">
            <div class="hidden-xs col-md-1 col-lg-1"></div>
            <div class="col-xs-12 col-md-3 col-lg-3 movilVertical" style="text-align: center">               
                <img src="/sitio_web/application/assets/img/contenido/monitoreo/fotoSirena.jpg" class ="imagen_red">
            </div>
            <div class="col-xs-12 col-md-7 col-lg-7 movilVertical" >
                <div style="text-align: right">
                    <span class="tituloRedes" style="padding: 8px 35px 8px 15px;">Alarmas (Sistema de Alerta Temprana Comunitario)</sub></span>
                    <span class="circuloConteoEstaciones"><?php echo $conteoEstaciones['sirena'];?></span>
                </div>
                <p style="text-align: justify">
                    Alarmas sonoras que son activadas frente a aumentos del nivel en río y/o quebrada.
                    Este sistema permite apoyar a los organismos gestores de riesgos en las labores de
                    evacuación de la comunidad. Consulta más información aquí.
                </p>
            </div>
            <div class="col-xs-8 col-md-7 col-lg-7 otros" >
                <div style="text-align: right">
                    <span class="tituloRedes" style="padding: 8px 35px 8px 15px;">Alarmas (Sistema de Alerta Temprana Comunitario)</span>
                    <span class="circuloConteoEstaciones"><?php echo $conteoEstaciones['sirena'];?></span>
                </div>
                <p style="text-align: justify">
                    Alarmas sonoras que son activadas frente a aumentos del nivel en río y/o quebrada.
                    Este sistema permite apoyar a los organismos gestores de riesgos en las labores de
                    evacuación de la comunidad. Consulta más información aquí.
                </p>
            </div>
            <div class="col-xs-4 col-md-3 col-lg-3 otros" style="text-align: center">
                <img src="/sitio_web/application/assets/img/contenido/monitoreo/fotoSirena.jpg" class ="imagen_red">
            </div>

            <div class="hidden-xs col-md-1 col-lg-1"></div>
        </div>
        <!-- FIN-->     

        <br>
        <br>
        <div id="antenaGOES" style="width: 100%">
            <img style="width: 100%" src="/sitio_web/application/assets/img/contenido/Titulos/sensores_remotos.jpg" alt="Sensores Remotos">
        </div>
        <br>
        <!-- INICIO YA-->
        <div id="microRadar" class= "contenedor_redes row-eq-height">
            <div class="hidden-xs col-md-1 col-lg-1"></div>
            <div class="col-xs-12 col-md-3 col-lg-3 movilVertical" style="text-align: center"><br>                
                <img src="/sitio_web/application/assets/img/contenido/monitoreo/fotoAntenaGOES.png" class ="imagen_red">
            </div>
            <div class="col-xs-4 col-md-3 col-lg-3 otros" style="text-align: center">
                <img src="/sitio_web/application/assets/img/contenido/monitoreo/fotoAntenaGOES.png" class ="imagen_red">
            </div>
            <div class="col-md-7 col-lg-7 movilVertical" >
                <div style="text-align: left">
                    <span class="tituloRedes">Antena GOES</span>
                    <span class="circuloConteoEstaciones">1</span>
                </div>
                <p style="text-align: justify">
                    Antena que permite recibir información del satélite meteorológico de la Administración
                    Nacional Oceánica y Atmosférica - NOAA, el cual brinda información sobre cobertura de
                    nubes, humedad en diferentes capas de la atmósfera, incendios forestales,
                    descargas eléctricas, aerosoles entre otros.

                </p>
            </div>
            <div class="col-xs-8 col-md-7 col-lg-7 otros" >
                <div style="text-align: left">
                    <span class="tituloRedes">Antena GOES</span>
                    <span class="circuloConteoEstaciones">1</span>
                </div>
                <p style="text-align: justify">
                    Antena que permite recibir información del satélite meteorológico de la Administración
                    Nacional Oceánica y Atmosférica - NOAA, el cual brinda información sobre cobertura de
                    nubes, humedad en diferentes capas de la atmósfera, incendios forestales,
                    descargas eléctricas, aerosoles entre otros.

                </p>
            </div>
            <div class="hidden-xs col-md-1 col-lg-1"></div>
        </div>

        <!-- FIN-->

        <!-- INICIO YA-->
        <div id="radarMeteorologico" class= "contenedor_redes row-eq-height">
            <div class="hidden-xs col-md-1 col-lg-1"></div>
            <div class="col-xs-12 col-md-3 col-lg-3 movilVertical" style="text-align: center"><br>                
                <img src="/sitio_web/application/assets/img/contenido/monitoreo/fotoMicroRadar.png" class ="imagen_red">
            </div>
            <div class="col-md-7 col-lg-7 movilVertical" >
                <div style="text-align: right">
                    <span class="tituloRedes">Micro Radar</span>
                    <span class="circuloConteoEstaciones"><?php echo $conteoEstaciones['lidar'];?></span>
                </div>
                <p style="text-align: justify">
                    Envía una onda electromagnética al zenit y recibe una respuesta que permite determinar la presencia de vapor de agua o líquida presente hasta 3.5 km de
                    altura.
                </p>
            </div>
            <div class="col-xs-8 col-md-7 col-lg-7 otros" >
                <div style="text-align: right">
                    <span class="tituloRedes">Micro Radar</span>
                    <span class="circuloConteoEstaciones"><?php echo $conteoEstaciones['lidar'];?></span>
                </div>
                <p style="text-align: justify">
                    Envía una onda electromagnética al zenit y recibe una respuesta que permite determinar la presencia de vapor de agua o líquida presente hasta 3.5 km de
                    altura.
                </p>
            </div>
            <div class="col-xs-4 col-md-3 col-lg-3 otros" style="text-align: center">
                <img src="/sitio_web/application/assets/img/contenido/monitoreo/fotoMicroRadar.png" class ="imagen_red">
            </div>
            <div class="hidden-xs col-md-1 col-lg-1"></div>
        </div>

        <!-- FIN-->




        <!-- INICIO YA-->
        <div id="radarPerfiladorVientos" class= "contenedor_redes row-eq-height">
            <div class="hidden-xs col-md-1 col-lg-1"></div>
            <div class="col-xs-12 col-md-3 col-lg-3 movilVertical" style="text-align: center"><br>                
                <img src="/sitio_web/application/assets/img/contenido/monitoreo/fotoRadarMeteorologico.png" class ="imagen_red">
            </div>
            <div class="col-xs-4 col-md-3 col-lg-3 otros" style="text-align: center">
                <img src="/sitio_web/application/assets/img/contenido/monitoreo/fotoRadarMeteorologico.png" class ="imagen_red">
            </div>            
            <div class="col-md-7 col-lg-7 movilVertical" >
                <div style="text-align: left">
                    <span class="tituloRedes">Radar Meteorológico</span>
                    <span class="circuloConteoEstaciones"><?php echo $conteoEstaciones['radar'];?></span>
                </div>
                <p style="text-align: justify">
                    El Radar meteorológico que operamos en SIATA es el primero en su clase en instalarse en el país. El Radar Tipo C se encuentra ubicado en Santa Elena y hace barridos permanentemente sobre el Valle de Aburrá y la región vecina para obtener información concerniente a las nubes y la precipitación. Cuando su onda electromagnética, que cubre aproximadamente el 90% de Antioquia, encuentra gotas de agua y otros hidrometeoros
                    como granizo o nieve, parte de dicha onda se refleja y es recibida por el radar. La intensidad que se recibe depende de la cantidad de hidrometeoros y de esta forma es posible conocer la intensidad de la precipitación y el lugar de ocurrencia.
                    Esta información es entregada a la comunidad a través del geoportal www.siata.gov.co y la aplicación SIATA. Los barridos de la información Radar se actualizan cada 5 minutos.Te invitamos a ver en nuestro canal de Youtube el vídeo: Radar Meteorológico
                </p>
            </div>
            <div class="col-xs-8 col-md-7 col-lg-7 otros" >
                <div style="text-align: left;">
                    <span class="tituloRedes">Radar Meteorológico</span>
                    <span class="circuloConteoEstaciones"><?php echo $conteoEstaciones['radar'];?></span>
                </div>
                <p style="text-align: justify">
                    El Radar meteorológico que operamos en SIATA es el primero en su clase en instalarse en el país. El Radar Tipo C se encuentra ubicado en Santa Elena y hace barridos permanentemente sobre el Valle de Aburrá y la región vecina para obtener información concerniente a las nubes y la precipitación. Cuando su onda electromagnética, que cubre aproximadamente el 90% de Antioquia, encuentra gotas de agua y otros hidrometeoros
                    como granizo o nieve, parte de dicha onda se refleja y es recibida por el radar. La intensidad que se recibe depende de la cantidad de hidrometeoros y de esta forma es posible conocer la intensidad de la precipitación y el lugar de ocurrencia.
                    Esta información es entregada a la comunidad a través del geoportal www.siata.gov.co y la aplicación SIATA. Los barridos de la información Radar se actualizan cada 5 minutos.Te invitamos a ver en nuestro canal de Youtube el vídeo: Radar Meteorológico
                </p>
            </div>

            <div class="hidden-xs col-md-1 col-lg-1"></div>
        </div>
        <!-- FIN-->
        
        <br> <br>
        <!-- INICIO-->
        <div id="radiometro" class= "contenedor_redes row-eq-height">
            <div class="hidden-xs col-md-1 col-lg-1"></div>
            <div class="col-xs-12 col-md-3 col-lg-3 movilVertical" style="text-align: center"><br>                
                <img src="/sitio_web/application/assets/img/contenido/monitoreo/fotoPerfiladorVientos.png" class ="imagen_red">
            </div>
            <div class="col-md-7 col-lg-7 movilVertical" >
                <div style="text-align: right;">
                    <span class="tituloRedes">Radar Perfilador de Vientos</span>
                    <span class="circuloConteoEstaciones"><?php echo $conteoEstaciones['radar_de_viento'];?></span>
                </div>
                <p style="text-align: justify">
                    Permite monitorear la estructura vertical de los vientos en el Valle de Aburrá, mediante
                    ondas electromagnéticas que interactúan con la humedad presente en la atmósfera;
                    registrando información desde la superficie hasta 8 km de altura. Esta información
                    permite determinar el potencial de formación de lluvias y tormentas, así como su
                    propagación.

                </p>
            </div>
            <div class="col-xs-8 col-md-7 col-lg-7 otros" >
                <div style="text-align: right;">
                    <span class="tituloRedes">Radar Perfilador de Vientos</span>
                    <span class="circuloConteoEstaciones"><?php echo $conteoEstaciones['radar_de_viento'];?></span>
                </div>
                <p style="text-align: justify">
                    Permite monitorear la estructura vertical de los vientos en el Valle de Aburrá, mediante
                    ondas electromagnéticas que interactúan con la humedad presente en la atmósfera;
                    registrando información desde la superficie hasta 8 km de altura. Esta información
                    permite determinar el potencial de formación de lluvias y tormentas, así como su
                    propagación.

                </p>
            </div>
            <div class="col-xs-4 col-md-3 col-lg-3 otros" style="text-align: center">
                <img src="/sitio_web/application/assets/img/contenido/monitoreo/fotoPerfiladorVientos.png" class ="imagen_red">
            </div>            
            <div class="hidden-xs col-md-1 col-lg-1"></div>
        </div>
        <br><br>

        <!-- FIN-->

        <!-- INICIO-->
        <div class= "contenedor_redes row-eq-height">
            <div class="hidden-xs col-md-1 col-lg-1"></div>
            <div class="col-xs-12 col-md-3 col-lg-3 movilVertical" style="text-align: center"><br>                
                <img src="/sitio_web/application/assets/img/contenido/monitoreo/fotoRadiometro.png" class ="imagen_red">
            </div>
            <div class="col-xs-4 col-md-3 col-lg-3 otros" style="text-align: center">
                <img src="/sitio_web/application/assets/img/contenido/monitoreo/fotoRadiometro.png" class ="imagen_red">
            </div>
            <div class="col-md-7 col-lg-7 movilVertical" >
                <div style="text-align: left">
                    <span class="tituloRedes">Radiómetro</span>
                    <span class="circuloConteoEstaciones"><?php echo $conteoEstaciones['radiometro'];?></span>
                </div>
                <p style="text-align: justify">
                    El radiómetro se encarga de monitorear la estructura vertical de la atmósfera, midiendo variables como temperatura, humedad y cantidad de agua en ella. Medellín fue la primera ciudad en Colombia en contar con este equipo, que es clave para el pronóstico meteorológico a corto plazo y determinante para entender los fenómenos que se generan en el Valle de Aburrá,
                    entre ellos el grado de inestabilidad atmosférica, al igual que la influencia del estado de la atmósfera en la calidad de aire.

                </p>
            </div>
            <div class="col-xs-8 col-md-7 col-lg-7 otros" >
                <div style="text-align: left">
                    <span class="tituloRedes">Radiómetro</span>
                    <span class="circuloConteoEstaciones"><?php echo $conteoEstaciones['radiometro'];?></span>
                </div>
                <p style="text-align: justify">
                    El radiómetro se encarga de monitorear la estructura vertical de la atmósfera, midiendo variables como temperatura, humedad y cantidad de agua en ella. Medellín fue la primera ciudad en Colombia en contar con este equipo, que es clave para el pronóstico meteorológico a corto plazo y determinante para entender los fenómenos que se generan en el Valle de Aburrá,
                    entre ellos el grado de inestabilidad atmosférica, al igual que la influencia del estado de la atmósfera en la calidad de aire.

                </p>
            </div>
            <div class="hidden-xs col-md-1 col-lg-1"></div>
        </div>

        <!-- FIN-->        

    </div>
    <?php $this->view('templates/header/importScripts') ?>
</body>
</html>
