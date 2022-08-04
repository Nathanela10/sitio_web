<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

?>

<html>
    <body>
        <div class="row seccion">
            <?php include_once("analyticstracking.php") ?>  
            <!-- Titulo -->
            <h1>Estos fueron los datos meteorológicos más sobresalientes del 2020 para el Valle de Aburrá.</h1>
            <!-- Fecha -->
            <p><span class="fa fa-clock-o"></span> Fecha de publicación: 28 de diciembre de 2020</p>
            <br>
            <!-- Autor -->
            <p class="lead"> by <a href="https://twitter.com/siatamedellin?lang=es">@siatamedellin</a></p>

            <p style="text-align: justify;" >
                Te contamos, en datos, cuáles fueron los sucesos más sobresalientes de 2020 para el Valle de Aburrá, según los registros 
                captados por los sensores instalados en el territorio y posteriormente analizados por nuestro equipo de Meteorología. 
            </p>
            <h3>¡Se estaba cayendo el cielo!</h3>
            <p style="text-align: justify;" >
                El 28 de Octubre de 2020, se registró un evento extremo que generó altas intensidades de lluvia y gran aporte de granizo, 
                de acuerdo a valores históricos de la Red de Disdrómetros.
            </p>
                
            <p><b>Mayor acumulado de granizo en el año:</b> 12.34 mm.</p>
            <p><b>Disdrómetro:</b> Escuela Rural Yarumalito - Medellín (San Antonio de Prado).</p>
            <p><b>Hora:</b> Desde las 12:00 p.m.</p>
            <p><b>Duración:</b> 1 hora, aproximadamente.</p>
            <p><b>Mayor intensidad de precipitación minutal:</b> 161 mm/h a las 12:19 pm.</p>
            <p style="text-align: justify;" >
                Este evento superó el acumulado máximo de precipitación sólida registrado en esta estación desde el momento de su instalación.
            </p>
            <br>
            <div style="text-align: center;">
                        <img style=" width: 35%;margin-left: auto;margin-right: auto;"
                            src="/sitio_web/application/assets/img/contenido/Noticias/Noticia 5_Granizo.png"
                            class="img-responsive" alt="">
            </div>
            <br><br>
            <p style="text-align: justify;" >
                El evento también fue detectado por el algoritmo de identificación de granizo. Este algoritmo usa datos del radar meteorológico, 
                para calcular la probabilidad de ocurrencia de granizo, asociada a la mayor intensidad de precipitación registrada en una zona 
                (izquierda), luego se muestran las zonas que alcanzaron una probabilidad de granizo superior a 80% (derecha).  Los colores más 
                rojos indican una mayor probabilidad de tener granizo en superficie, que  luego se corrobora con los datos del sensor.
            </p>
            <br>
            <div style="text-align: center;">
                        <img style=" width: 35%;margin-left: auto;margin-right: auto;"
                            src="/sitio_web/application/assets/img/contenido/Noticias/Noticia 5_Ocurrencia de Granizo.png"
                            class="img-responsive" alt="">
            </div>
            <br>
            <h3>Noviembre, el mes con más registros de granizo. </h3>
            <p><b>Disdrómetro con más registros en el mes:</b> Metro La Estrella - La Estrella (Límites con Sabaneta e Itagüí).</p>
            <p><b>Acumulado total del mes:</b> 18.64 mm.</p>
            <h3>¿Dónde cae más granizo en el Valle de Aburrá?</h3>
            <p style="text-align: justify;" >
                El disdrómetro ubicado en la vereda Yarumalito en San Antonio de Prado, Medellín, registró los mayores acumulados durante 
                6 meses, lo que indica que este corregimiento de Medellín es de las zonas más expuestas a granizadas en el Valle de Aburrá.
            </p>
            <br>
            <div style="text-align: center;">
                        <img style=" width: 50%;margin-left: auto;margin-right: auto;"
                            src="/sitio_web/application/assets/img/contenido/Noticias/Noticia 5_Acumulado de granizo.png"
                            class="img-responsive" alt="">
            </div>
            <br>
            <h3>Variabilidad de la temperatura durante el año</h3>
            <br>
            <div class="row">
                <div class="col-xs-6">
                    <p><b>Día más cálido del año:</b> 18 de febrero.</p>
                    <p><b>Lugar:</b> Girardota</p>
                    <p><b>Temperatura máxima registrada:</b> 33°C.</p>
                    <p><b>Hora:</b> 3:10 p.m. </p>
                </div>
                <div class="col-xs-6">
                    <p><b>Día más cálido del año:</b> 13 de octubre.</p>
                    <p><b>Lugar:</b> Santa Elena, Medellín.</p>
                    <p><b>Temperatura mínima registrada:</b> 7°C.</p>
                    <p><b>Hora:</b> 7:28 a.m.</p>
                </div>
            </div>
            <h3>¿Te despertó el calor?</h3>
            <ul style="text-align: justify;">
                <li>
                    El 8 de abril a las 5:00 a.m. se presentaron temperaturas superiores a los 21°C en varias de las estaciones ubicadas en 
                    la base del Valle de Aburrá, lo que hace de esta madrugada, la más cálida del año.
                </li>
                <li>
                    Se registraron temperaturas máximas, más altas, en el primer semestre del año, siendo particularmente cálido el mes de mayo
                     respecto a los últimos años, según el comportamiento de la estación AMVA, ubicada en el centro de Medellín.
                </li>
                <li>
                    19 días superaron los 29°C y presentaron menos del 25% de humedad, estas fueron condiciones críticas para la intensificación 
                    en la propagación de incendios de cobertura vegetal.
                </li>
                <li>
                    El día con combinación térmica más seca y cálida fue el 5 de marzo en el cual se alcanzaron 31.1°C y un porcentaje de humedad
                     relativa del 13.5%.
                </li>
                <li>
                    El día más frío, húmedo y con menor cantidad de radiación incidente durante el año fue el 3 de junio, durante el cual no 
                    se superaron los 20.7°C y la humedad relativa no descendió del 69%.
                </li>
                <li>
                    Según datos del piranómetro de torre SIATA:
                    <ul>
                        <li>El mes con mayor cantidad recibida hasta el momento ha sido marzo.</li>
                        <li>El día con mayor energía acumulada se dio el 22 de marzo con 27.6 MJ/m<sup>2</sup>.</li>
                    </ul>
                </li>
            </ul>
            <h3>Registro de descargas eléctricas en 2020</h3>
            <ul style="text-align: justify;" >
                <li>10.534 descargas eléctricas cayeron en todo el Valle de Aburrá, durante 2020 (datos registrados por el sensor GML - Geostationary 
                    Lightning Mapper, a bordo de GOES East).
                </li>
                <li>La Estrella es el municipio más propenso a descargas eléctricas, con 20 descargas por km2, en comparación a Medellín con 12 
                    descargas/km<sup>2</sup>.
                </li>
                <li>Según el mapa de densidad de descargas eléctricas, la ladera occidental del valle es la que registró mayor acumulado de 
                    descargas, sin embargo, se incluye también la zona fronteriza entre Medellín y Envigado.
                </li>
                <br>
                <div style="text-align: center;">
                        <img style=" width: 30%;margin-left: auto;margin-right: auto;"
                            src="/sitio_web/application/assets/img/contenido/Noticias/Noticia 5_ Mapa densidad de descargas.png"
                            class="img-responsive" alt="">
                </div>
                <br>
                <li>De 263 tormentas registradas desde el 1 de enero hasta el 21 de diciembre, 185 fueron eléctricas.</li>
                <li>El 18 de octubre, entre las 2:16 p.m. y las 3:23 p.m. fue el día con mayor cantidad de descargas eléctricas en el
                     Valle de Aburrá. 1049 en total. 
                </li>
            </ul>
            <h3>¿Cómo estuvo la lluvia?</h3>
            <p style="text-align: justify;" > La distribución de la lluvia en 2020 fue diferente, con un primer semestre relativamente seco (mayo) y un segundo semestre más 
                lluvioso de lo normal (julio y noviembre), sin embargo, los acumulados fueron los esperados para el año.
            </p>
            <br>
            <div class="row">
                <div class="col-xs-2"></div>
                <div class="col-xs-4">
                    <div style="text-align: center;">
                        <img style=" width: 70%;margin-left: auto;margin-right: auto;"
                            src="/sitio_web/application/assets/img/contenido/Noticias/Noticia 5_Mapa_LluviaAnual_mm_Diciembre_SIATA.png"
                            class="img-responsive" alt="">
                    </div>
                </div>
                <div class="col-xs-4">
                    <div style="text-align: center;">
                        <img style=" width: 68%;margin-left: auto;margin-right: auto;"
                            src="/sitio_web/application/assets/img/contenido/Noticias/Noticia 5_Mapa_LluviaAnual_por_Diciembre_SIATA.png"
                            class="img-responsive" alt="">
                    </div>
                </div>
                <div class="col-xs-2"></div>
            </div>
            <br>
            <h3>Temperatura a nivel global y fenómeno de la Niña</h3>
            <ul style="text-align: justify;" >
                <li>* Récord de temperatura superficial planetario: las clasificaciones oficiales no se han publicado aún, pero según la NASA, 
                    es probable que la temperatura promedio de la superficie de la Tierra en 2020 sea similar al 2016, significando esto que 
                    puede ser el año más caluroso registrado hasta el momento. Sorprendentemente, este récord de calor en 2020 se produciría 
                    durante un mínimo en el ciclo solar y en un año en el que se formó un evento moderado de La Niña. El enfriamiento de la 
                    superficie del Pacífico tropical durante los eventos de La Niña generalmente causa un ligero enfriamiento global, al igual 
                    que el mínimo del ciclo solar. El calor récord de 2020 en estas circunstancias es una demostración de cuán poderosas se han 
                    vuelto las causas humanas del calentamiento global.
                </li>
                <li>* Récord de temperatura del aire: en 2020 también se produjo el registro confiable de temperatura del aire más alto de todos 
                    los tiempos. Este se registró en el Valle de la muerte en California con 54.4°C el 16 de agosto a las 3:41 de la tarde.
                </li>
                <br>
                <sub><b>Datos tomados de: </b><a href= "https://yaleclimateconnections.org/2020/12/the-top-10-weather-and-climate-events-of-a-record-setting-year/">https://yaleclimateconnections.org/2020/12/the-top-10-weather-and-climate-events-of-a-record-setting-year/</a></sub>
            </ul>
            <br>
            <h3>Ciclones tropicales</h3>
            <p> La temporada de huracanes del Atlántico de 2020 produjo:</p>
            <ul style="text-align: justify;" >
                <li>30 tormentas con nombre (Registro más alto).</li>
                <li>13 huracanes, 6 huracanes  mayores (segundos registros más altos), 3 huracanes importantes.</li>
                <li>Con lo que resultó en una temporada con una actividad que dobla el promedio actual que es de 12 tormentas con nombre, 6 huracanes
                     y 3 huracanes importantes.
                </li>
            </ul>
            <p style="text-align: justify;" >
                La temporada 2020 fue notable no solo por su número récord de tormentas con nombre (después de entrar en el alfabeto griego en la
                 fecha ridículamente temprana del 18 de septiembre), sino también por su número récord de tormentas que se intensificaron rápidamente (10).
            </p>
            <ul style="text-align: justify;" >
                <li>Dos huracanes catastróficos de categoría 4 azotaron en noviembre a América Central y supusieron afectaciones en Colombia, 
                    principalmente en las Islas de San Andrés y Providencia: el huracán Iota, la última tormenta de categoría 5 registrada en el
                     Atlántico, que causó destrucción del 98% de la infraestructura de Providencia, y lluvias torrenciales en diferentes partes del
                      país, incluida Antioquia; el huracán Eta, el ciclón tropical más mortífero del mundo en 2020, con al menos 274 personas en la 
                      lista de muertos o desaparecidos.
                </li>
                <li>Este año también se presentó el Súper tifón Goni, el ciclón tropical que tocó tierra más fuerte jamás registrado. Esto sucedió 
                    cerca de Bato, Isla Catanduanes, Filipinas, el 1 de noviembre con vientos sostenidos de 313 km/hora y una presión central de 884 mb.
                </li>
            </ul>
            <br>
            <div style="text-align: center;">
                        <img style=" width: 40%;margin-left: auto;margin-right: auto;"
                            src="/sitio_web/application/assets/img/contenido/Noticias/Noticia 5_Huracan.png"
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