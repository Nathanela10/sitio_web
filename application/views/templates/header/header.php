<head>
    <title>SIATA - Sistema de Alerta Temprana del valle de Aburrá</title>
    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta name="google-site-verification" content="86CMQ8oWj8bisEFRVHGLZWZm6yz21WCeb70SqfOuQIg" />
    <meta http-equiv="content-type" content="text/html; utf-8">
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
    <meta http-equiv="pragma" content="no-cache" />
    <meta name="keywords" content="SIATA,EAFIT,Alerta,Temprana,Area,Metropolitana,Medellin,ISAGEN,EPM" />
    <meta name="author" content="SIATA,EAFIT"/>
    <meta content="SIATA" name="author"/>
    <?php $this->view('templates/header/importEstilos') ?>
    <link rel="shortcut icon" href="/siata_nuevo/favicon.ico"/>
</head>

    <div class="row barraheader">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sinPadding" style="height: 100%;">
            <div class="col-xs-4 col-sm-3 col-md-2 col-lg-2" style="height: 100%">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sinPadding" style="height: 50%;background-color: #0a6f7c; z-index: 1;">
                        <a href="https://siata.gov.co/sitio_web/index.php/">
                           <!-- <img class="logoSiata" src="/sitio_web/application/assets/img/header/logo_siata.png" >-->
                            <img class="logoSiata" src="/sitio_web/application/assets/img/header/siata200Challenge.png" >
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
                            <!-- <img style="height: 100%; padding: 1%" src="/sitio_web/application/assets/img/header/SIATA-Blanco.svg"> -->
                            <!-- <img style="height: 100%; padding: 1%" src="/sitio_web/application/assets/img/header/AMVA-Blanco.svg"> -->
                            <img style="height: 100%; padding: 1%" src="/sitio_web/application/assets/img/header/Logo-Web-SIATA-Claro-50px.svg">
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

            <div class="modal fade modal_box" id="ContactoModal" tabindex="-1">
            <div class="modal-dialog modal_box_registro">
                <div class="modal-content" style="background-color:#52B7C3; ">
                    <div class="modal-header" style="background-color:#52B7C3; ">
                        <button type="button" class="close push" data-dismiss="modal" aria-label="Close">
                            <img src="/sitio_web/application/assets/img/iconos/icono_cerrar.png" style="height:auto; widht:auto;"></img>
                        </button>
                        <h3 class="panel-title" style="text-transform: none; color: white">Contáctanos</h3>
                    </div>
                    <div class="modal-body" style="text-align:center;background-color:#091621;margin-top:-1px">
                        <form id="formulariocontacto" method="post">
                            <div class="form-group row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <input id="nombre_contacto" class="form-control" placeholder= "Nombre"  name="nombre_contacto"  type="text" value="">
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <input id="apellido_contacto" class="form-control" placeholder= "Apellido"  name="apellido_contacto"  type="text" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <input id="correo_contacto" class="form-control" placeholder= "Correo"  name="correo_contacto" type="email" value="" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <input id="asunto_contacto" class="form-control" placeholder= "Asunto" name="asunto_contacto">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <textarea class="form-control" id="mensaje_contacto" placeholder= "Mensaje" name="mensaje_contacto" ></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-7">
                                    <div id="div_mensaje_envio" style="display: none"></div>
                                </div>
                                <div class="col-xs-5" style="padding-right: 20px;">
                                    <input class="btn btn-lg btn-user btn-block" type="submit" value="Enviar" style="background-color:#52B7C3; color:white " >
                                </div>
                            </div>
                            <div class="row" style="width: 100%; height:1.12vw;">
                            </div>
                            <hr class= "style-two " style="height: 1px;color:white;">

                            <ul class="list-unstyled" style="color: white">
                                <li>Sistema de Alerta Temprana de Medellín y el valle de Aburrá</li>
                                <li>Carrera 48A # 10Sur-123 - Sede Investigación y desarrollo</li>
                                <li>Calle 50 # 71-147 - Torre SIATA</li>
                                <li>Teléfono: 4038870 </li>
                                <li>contacto@siata.gov.co</li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
        </div>