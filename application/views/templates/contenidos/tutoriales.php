<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

?>

<html>
<head>
    <link href="/sitio_web/application/assets/css/contenido/tutoriales.css" rel="stylesheet">

</head>

<body>
    <?php include_once("analyticstracking.php") ?>    
    <div class="row seccion">  
        <div id="geoportal" style="width: 100%">
            <img style="width: 100%" src="/sitio_web/application/assets/img/contenido/Titulos/geoportal.jpg" alt="Geoportal">
        </div>    
        
        <div>
            <br>
            <ul>
                <li><b>1 Ingreso al sitio:</b> En este espacio web se encuentra información acerca del proyecto,
                    características de las redes de monitoreo y acceder a recursos educativos.
                </li>
                <br>
                <li><b>2 Usuarios:</b> Al registrarse se pueden guardar las preferencias de visualización del geoportal,
                    también ingresar al portal de descargas para acceder a los registros históricos de nuestros sensores.
                </li>
                <br>
                <li><b>3 Geolocalización:</b> Permite encontrar la ubicación en el mapa del dispositivo de consulta, para
                    que esta opción funcione adecuadamente es necesario que la configuración -compartir ubicación- se
                    encuentre habilitada.
                </li>
                <br>
                <li><b>4 Buscador:</b> En este espacio se accede a tres tipos de búsquedas:
                    <ul>
                        <li>Ubicar un lugar en el mapa usando Google Maps</li>
                        <li>Encontrar capas en el geoportal, por ejemplo: Pluviométrica, Composición Nacional, Valle de
                            Aburrá.
                        </li>
                        <li>Encontrar estaciones por su nombre en el geoportal, por ejemplo: Estación 60. Torre SIATA, El
                            Tablazo, Laureles
                        </li>
                    </ul>
                </li>
                <br>
                <li><b>5 Contacto:</b> Acceso directo a los perfiles en redes sociales y formulario de contacto.</li>
                <br>
                <li><b>6 Menú:</b> En el menú principal se encuentra el acceso a todas las capas de información del
                    geoportal que se detallan adelante.
                </li>
                <br>
                <li><b>7 Widget de leyendas:</b> Presenta la información de convenciones de la capa que se está
                    visualizando, si hay varias capas activas se pueden rotar de las flechas << >>
                </li>
                <br>
                <li><b>8 Panel desplegable:</b> Visualización de los datos, gráficas y detalles de cada estación.</li>
                <br>
            </ul>
            <div align="center">
                <h3>Detalles Menú Capas Geoportal</h3> <br>
                <table style="font-size: inherit;" class="table:table-condensed">
                <thead>
                <tr>
                    <th style="text-align: center">Ícono&nbsp;</th>
                    <th>Capa</th>
                    <th> Descripción</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <img class="iconoTutorial"
                             src="/sitio_web/application/assets/img/contenido/Tutoriales/icono_inicio.png"
                             class="img-responsive" alt="Icono inicio usuarios SIATA">
                    </td>
                    <td>Usuario</td>
                    <td>Podrás acceder a tres opciones:
                        <ul type=square>
                            <li><i>Registrarse:</i> Si eres un usuario habitual y te gustaría guardar las preferencias de
                                visualización de nuestro geoportal, accediendo a ellas desde cualquier dispositivo de
                                escritorio.
                            </li>
                            <li><i>Iniciar sesión</i></li>
                            <li><i>Guardar preferencias de usuario:</i> Al señalar esta opción las preferencias quedarán
                                en la memoria caché de tu navegador.
                            </li>
                            <li><i>Descargar información:</i> Portal de descarga de los datos históricos de las redes de
                                monitoreo SIATA. Para datos adicionales escribir a solicitud.datos@siata.gov.co
                            </li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td><img class="iconoTutorial"
                             src="/sitio_web/application/assets/img/contenido/Tutoriales/icono_radar.png"
                             class="img-responsive" alt="Icono inicio radar SIATA"></td>
                    <td>Radar:</td>
                    <td> Aquí podrás consultar los productos derivados de la información de radar. La capa que
                        corresponde
                        al último barrido de radar que muestra donde está lloviendo en tiempo real se encuentra activa
                        de
                        manera predeterminada al ingresar.
                        <ul type=square>
                            <li><i>Acumulados:</i> Estos son derivados de la información de radar. Y son entregados en
                                diferentes periodos de tiempo. -Mensuales - Última semana - Último día - Acumulado
                                evento -
                                Acumulado últimas 6, 3 y 1 hora
                            </li>
                            <li><i>Último barrido de radar: </i> Este producto está disponible para: - Composición
                                nacional
                                (Esta información corresponde a los radares de la Aerocivil) - Reflectividad y Velocidad
                                radial.
                            </li>
                            <li><i>Animación radar:</i> Esta función también está disponible en la sección de widgets.
                            </li>
                        </ul
                    </td>
                </tr>

                <tr>
                    <td><img class="iconoTutorial"
                             src="/sitio_web/application/assets/img/contenido/Tutoriales/icono_pronostico.png"
                             class="img-responsive" alt="Icono pronostico SIATA"></td>
                    <td>Pronóstico</td>
                    <td>
                        <ul type=square>
                            <li><i> Meteorológico</i></li>
                            <li><i>Hidrológico</i></li>
                            <li><i>Animación WRF:</i> También disponible en la capa Widgets</li>
                        </ul>
                    </td>
                </tr>

                <tr>
                    <td><img class="iconoTutorial"
                             src="/sitio_web/application/assets/img/contenido/Tutoriales/icono_capas.png"
                             class="img-responsive" alt="Icono redes de monitoreo SIATA"></td>
                    <td>Redes</td>
                    <td>
                        <ul type=square>
                            <li><i> Calidad del Aire</i></li>
                            <li><i></i>Externas</i></li>
                            <li><i>Red acelerogáfica</i></li>
                            <li><i>Sensores en tierra</i></li>
                            <li><i>Sensores Remotos</i></li>
                        </ul>
                    </td>
                </tr>

                <tr>
                    <td><img class="iconoTutorial"
                             src="/sitio_web/application/assets/img/contenido/Tutoriales/icono_satelital.png"
                             class="img-responsive" alt="Icono satelite GOES"></td>
                    <td>Satelital</td>
                    <td><b>GOES 16</b>
                    </td>
                </tr>

                <tr>
                    <td><img class="iconoTutorial"
                             src="/sitio_web/application/assets/img/contenido/Tutoriales/icono_goespacial.png"
                             class="img-responsive" alt="Icono información geoespacial"></td>
                    <td>Información geoespacial</td>
                    <td>
                        <ul type=square>
                            <li><i>Cuencas red de nivel</i></li>
                            <li><i>Nacional</i></li>
                            <li><i>Departamental</i></li>
                            <li><i>CORNARE</i></li>
                            <li><i>Valle de Aburrá</i></li>
                            <li><i>Medellín</i></li>
                            <li><i>La Estrella</i></li>
                            <li><i>Bello</i></li>
                            <li><i>Sabaneta</i></li>
                        </ul>
                    </td>
                </tr>

                <tr>
                    <td><img class="iconoTutorial"
                             src="/sitio_web/application/assets/img/contenido/Tutoriales/iconoa_camaras.png"
                             class="img-responsive" alt="Icono red de cámaras"></td>
                    <td>Cámaras</td>
                    <td><b>Cámaras</b>
                    </td>
                </tr>

                <tr>
                    <td><img class="iconoTutorial"
                             src="/sitio_web/application/assets/img/contenido/Tutoriales/icono_gestionriesgo.png"
                             class="img-responsive" alt="Icono Gestión del riesgo"></td>
                    <td>Gestión del riesgo</td>
                    <td>
                        <ul type=square>
                            <li><i>AMVA-UNALMED, 2009</i></li>
                            <li><i>POMCA 2007</i></li>
                            <li><i>Estaciones (Otras Entidades)</i></li>
                            <li><i>PMGRD, DAGRD 2015</i></li>
                            <li><i>Red hídrica Medellín 2011</i></li>
                            <li><i>Red riesgos</i></li>
                            <li><i>Sismos última semana (USGS)</i></li>
                            <li><i>Índice de afectación Niña 2011</i></li>
                        </ul>
                    </td>
                </tr>

                <tr>
                    <td><img class="iconoTutorial"
                             src="/sitio_web/application/assets/img/contenido/Tutoriales/icono_convenios.png"
                             class="img-responsive" alt="Icono Convenios"></td>
                    <td>Convenios</td>
                    <td>
                        <ul type=square>
                            <li><i>Convenio Marco EPM</i></li>
                            <li><i>Convenio Marco ISAGEN</i></li>
                        </ul>
                    </td>
                </tr>

                <tr>
                    <td><img class="iconoTutorial"
                             src="/sitio_web/application/assets/img/contenido/Tutoriales/icono_clima.png"
                             class="img-responsive" alt="Icono Clima"></td>
                    <td>Clima</td>
                    <td>
                        <ul type=square>
                            <li><i>ENSO</i></li>
                            <li><i>AMO</i></li>
                            <li><i>NAO</i></li>
                            <li><i>PDO</i></li>
                        </ul>
                    </td>
                </tr>

                <tr>
                    <td><img class="iconoTutorial"
                             src="/sitio_web/application/assets/img/contenido/Tutoriales/icono_widgets.png"
                             class="img-responsive" alt="Icono Widgets"></td>
                    <td>Widgets</td>
                    <td>
                        <ul type=square>
                            <li><i>Animación GOES</i></li>
                            <li><i>Animación Radar</i></li>
                            <li><i>Animación Radar-GOES</i></li>
                            <li><i>Animación WRF</i></li>
                            <li><i>Animación de humedad simulada</i></li>
                            <li><i>Animación de potencial de riesgo de desbordamiento</i></li>
                            <li><i>Widget ajuste zoom</i></li>
                            <li><i>Widget coordenadas</i></li>
                            <li><i>Widget leyendas</i></li>
                            <li><i>Widget noticias</i></li>
                            <li><i>Widget trazador</i></li>
                        </ul>
                    </td>
                </tr>

                </tbody>
                </table>
            </div>
        </div>
        <div id="app_siata" style="width: 100%">
            <img style="width: 100%" src="/sitio_web/application/assets/img/contenido/Titulos/app_siata.jpg" alt="App SIATA">
        </div>

        <br>
        <p>
            La aplicación para celulares SIATA, es una herramienta gratuita que te permite tener a la mano información sobre
            las condiciones del estado del tiempo en el Valle de Aburrá. Está disponible para dispositivos IOS y Android.
        </p>
        <p>
            <b> 1.</b>Entra a la tienda de aplicaciones App Store o Google Play y escribe en el buscador la palabra SIATA
            <br>
            <b> 2. </b> elige este ícono y conoce todas las funcionalidades de esta aplicación.
        </p>
        <div style="text-align: center;">
            <div>
            <img src="/sitio_web/application/assets/img/contenido/Tutoriales/pantallazo_app_siata.png"
                 style="width: 50%;">
            </div>
            <br>
            <div>
                <iframe style="width: 42vw; height:31.5vw;" src="https://www.youtube.com/embed/uMIyDj7etUY" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
        <br>


        <div id="app_ciudadanos_cientificos" style="width: 100%">
            <img style="width: 100%" src="/sitio_web/application/assets/img/contenido/Titulos/app_ciudadanos_cientificos.jpg" alt="App Ciudadanos Científicos">
        </div>
        <br>
        <div>
            <img src="/sitio_web/application/assets/img/contenido/Tutoriales/app_cc.jpg" style="width: 100%;"
                 alt="App Ciudadanos Cientifícos">
            <ol>
                <li>Pantalla inicial</li>
                <li>Mapa nubes</li>
                <li>Menú principal</li>
                <li>ICA estación</li>
                <li>Detalle monitoreo</li>
            </ol>
        </div>
        <br>


        <div id="reportes_ica" style="width: 100%">
            <img style="width: 100%" src="/sitio_web/application/assets/img/contenido/Titulos/reportes_icca.jpg">
        </div>
        <br>
        <div align="center">
            <iframe style="width: 42vw;  height:31.5vw;" src="https://www.youtube.com/embed/07aBuHnHVTg" frameborder="0"
                    allowfullscreen></iframe>
        </div>
    </div>
    <?php $this->view('templates/header/importScripts') ?>
</body>
</html>