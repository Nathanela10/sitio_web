<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

?>

<html>
<head>
    <title>Sitio Web</title>
<!--        <link rel="icon" href="/favicon.ico" type="image/ico">-->
    <!--<link rel="icon" href="<?= base_url() ?>/favicon.gif" type="image/gif">-->
    <?php $this->view('templates/header/importEstilos') ?>

</head>

<body>
	<?php include_once("analyticstracking.php") ?>
    <div class= "row seccion">

    </div>

    <?php $this->view('templates/header/importScripts') ?>

</body>
</html>
