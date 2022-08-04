<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

?>

<html>
<head>
</head>

<body>
	<?php include_once("analyticstracking.php") ?>
    <div class= "row seccion">
    	<div id="reportes_ica"  style="width: 100%">
        	<img style="width: 100%" src="/sitio_web/application/assets/img/contenido/Titulos/reporte_ICA.jpg" alt="Reportes ICA - Componente 2.5 SIATA">
    	</div>		

		<h1>Reporte diario ICA - Componente 2.5 </h1>
		<p align="justify">
		En este reporte se presenta el ICA para el día anterior, es decir, desde las 00 hasta las 23:59. Si quieres comprenderlo mejor visita nuestra <a href="https://siata.gov.co/sitio_web/index.php/tutoriales" style="color: blue;text-decoration:underline">Sección tutoriales.</a></h4> <br>
		</p>
		<br>

		<div class="row">
			<div class="col-xs-12 col-md-6 col-ld-6" style="margin-bottom: 20px">
				<img style="width: 90%; margin: center;" src="https://siata.gov.co/comunicaciones/reportes_ica/ICADiario_POECA.jpg" class="img-responsive" alt="ICA diario POECA">
			</div>
		
		<div class="col-xs-12 col-md-6 col-ld-6" style="margin-bottom: 20px">
		<img  style="width: 90%; margin:center;" src="https://siata.gov.co/comunicaciones/reportes_ica/ICADiario_NoPOECA.jpg" class="img-responsive" alt="ICA diario NO POECA">
		</div>
		</div>
		
		<h1>Reporte ICA semanal</h1>
		<p align="justify">
		En este podrás ver cómo estuvo el ICA en el transcurso de la semana en cada estación; y también cómo estuvo en todas las estaciones en un día específico.
		</p>

		 <div style="text-align: center;">
			<img style="width: 100%; margin-right: auto; margin-left: auto;" src="https://siata.gov.co/comunicaciones/reportes_ica/Mapa_ICA_PM25.jpg" class="img-responsive" alt="Calidad del Aire Semanal">
		</div>
		<br>
	    <p>
	    &rarr; Visita nuestra sección tutoriales para aprender a interpretar el reporte y el manejo de nuestras plataformas <a href="https://siata.gov.co/sitio_web/index.php/tutoriales" style="color: blue;text-decoration: underline">sección tutoriales</a>
	    </p>
		<p>
		&rarr; Para conocer más sobre la gestión y recomendaciones de la calidad del aire, visita el micrositio del Área Metropolitana del Valle de Aburrá, de <a href="https://www.metropol.gov.co/ambiental/calidad-del-aire/" style="color:blue;text-decoration: underline">calidad del aire</a>
		</p>
		<br>
    </div>
    <?php $this->view('templates/header/importScripts') ?>
</body>
</html>
