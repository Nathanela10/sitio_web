<?php

    if ( ! defined('BASEPATH')) exit('No direct script access allowed');

?>

    <head>
        <title>SIATA - Sistema de Alerta Temprana del valle de Aburrá</title>
        <meta http-equiv="cache-control" content="max-age=0" />
        <meta http-equiv="cache-control" content="no-cache" />
        <meta http-equiv="expires" content="0" />
        <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
        <meta http-equiv="pragma" content="no-cache" />

        <meta name="keywords" content="SIATA,EAFIT,Alerta,Temprana,Area,Metropolitana,Medellin,ISAGEN,EPM" />
        <meta name="author" content="SIATA,EAFIT"/>
        <meta content="SIATA" name="author"/>
        <meta content="SIATA" name="description"/>
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        
        <link rel="shortcut icon" href="/siata_nuevo/favicon.ico"/>

        <?php $this->view('templates/header/importEstilos') ?>
        <?php $this->view('templates/header/importScripts') ?>
    </head>

    <body>
        <div class="row barraheader">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sinPadding" style="height: 100%;">
                <div class="col-xs-4 col-sm-3 col-md-2 col-lg-2" style="height: 100%">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sinPadding" style="height: 50%;background-color: #0a6f7c; z-index: 1;">
                            <a href="https://siata.gov.co/sitio_web/index.php/">
                                <img class="logoSiata" src="/sitio_web/application/assets/img/header/logo_siata.png" >
                            </a>
                            <a href="http://siata.gov.co/siata_nuevo/index.php/mapa" target="_blank">
                                <img id="visitanos" src="https://siata.gov.co/sitio_web/application/assets/img/header/visitanos.png" class="irGeoportal">
                            </a>
                        </div>
                        <div  class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sinPadding" style="height: 50%;background-color:white">
                        </div>
                    </div>
                </div>
                <div class="col-xs-8 col-sm-9 col-md-10 col-lg-10 sinPadding" style="height: 100%">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="height: 50%;background-color: #0a6f7c;">
                            <div class="hidden-xs hidden-sm col-md-8 col-lg-8 text-left sinPadding tituloSiata">
                                <span > Sistema de Alerta Temprana de Medellín y el Valle de Aburrá</span>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 text-right" style="height: 100%;">
                                <!--<img style="height: 100%;" src="/sitio_web/application/assets/img/header/logos_header.png" >-->
                                <img style="height: 100%" src="/sitio_web/application/assets/img/header/banner_header.png" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div  class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="height: 50%;background-color:white">
                            <div  class="col-xs-5 col-sm-5 col-md-2 col-lg-2 tituloSiguenos" style="text-align: right;">
                                <span> Síguenos en:</span>
                            </div>
                            <div  class="col-xs-7 col-sm-7 col-md-10 col-lg-10 listaRedesSociales">
                                <ul class="list-inline social-network social-circle">
                                    <li><a href="https://www.facebook.com/siatamedellin/" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://www.instagram.com/siatamedellin/" title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="https://www.youtube.com/user/siatamedellin" title="Youtube" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
                                    <li><a href="https://twitter.com/siatamedellin?lang=es" title="Twitter" target="_blank"><i class="fa fa-twitter" ></i></a></li>
                                    <li><a data-toggle="modal" href="#ContactoModal" title="Correo"><i class="fa fa-envelope-o" ></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
