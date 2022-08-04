<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

?>

<html>
<head>
</head>

<body>
	<?php include_once("analyticstracking.php") ?>	
	<div class= "row seccion">
	    <div id="informes_x_evento"
	         style="border:0; width:100%; padding: 1vw; align: center; text-align: left; margin: 0px; background-color: #005762;">
	        <p style="font-size: large; padding-left: 8vw; color:white; font-size: 4vw; margin: 0px;text-transform: none; " align="center">
	            Eventos de lluvia </p>
	    </div>
	    <p align="justify" style="font-size: large">
	        Aquí puedes consultar los últimos reportes de eventos de precipitación registrados en el Valle de Aburrá. Para acceder a eventos históricos puedes escribirnos a contacto@siata.gov.co  <br><br>
	    </p>

	</div>
    <?php $this->view('templates/header/importScripts') ?>
</body>
</html>
