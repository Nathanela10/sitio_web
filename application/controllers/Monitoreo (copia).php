<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Monitoreo extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // $this->load->library(array('session'));
        $this->load->helper('url');
        $this->load->model('modelo_estaciones');
    }
    
    public function construir_tabla_estaciones()
    {
        $html_tabla_estaciones="";
        $html = $html_tabla_estaciones;
        $htmlSensores = "";

        $listaRedes = ['acelerografica','acelerometrica','calidad_aire','camara','camaras_termicas','ceilometro','ciudadanos_cientificos','disdrometro','humedad','meteorologica','nivel','piranometro','pluviografica','sirena'];


        $listaRedesEncabezado = ['acelerografica'=>'<a href="'. base_url() .'monitoreo#acelerografos">Aceler&oacute;grafos</a>', 
                                'acelerometrica'=>'<a href="'. base_url() .'monitoreo#acelerometros">Aceler&oacute;metros</a>',
                                'calidad_aire'=>'<a href="'. base_url() .'monitoreo#calidadAire">Calidad del Aire</a>',
                                'camara'=>'<a href="'. base_url() .'monitoreo#camaras">C&aacute;maras</a>',
                                'camaras_termicas'=>'<a href="'. base_url() .'monitoreo#camarasTermicas">C&aacute;maras T&eacute;rmicas</a>',
                                'ceilometro'=>'<a href="'. base_url() .'monitoreo#ceilometros">Ceil&oacute;metros</a>',
                                'ciudadanos_cientificos' =>'<a href="'. base_url() .'monitoreo#ciudadanosCientificos">Ciudadanos Cient&iacute;ficos</a>',
                                'disdrometro'=>'<a href="'. base_url() .'monitoreo#disdrometros">Disdr&oacute;metros</a>',
                                'humedad' =>'<a href="'. base_url() .'monitoreo#humedad">Humedad</a>',        
                                'meteorologica'=>'<a href="'. base_url() .'monitoreo#meteorologicas">Meteorol&oacute;gicas</a>',
                                'nivel'=>'<a href="'. base_url() .'monitoreo#nivel">Nivel</a>',
                                'piranometro'=>'<a href="'. base_url() .'monitoreo#piranometros">Piran&oacute;metros</a>',
                                'pluviografica'=>'<a href="'. base_url() .'monitoreo#pluviometros">Pluvi&oacute;metros</a>',
                                'sirena'=>'<a href="'. base_url() .'monitoreo#sistemaAlertaTempranaComunitario">Alarmas</a>'
                                ];                                

        $listaSensores=['antena_GOES','lidar','radiometro','radar','radar_de_viento'];
        $listaSensoresEncabezado=['antena_GOES'=>'<a href="'. base_url() .'monitoreo#antenaGOES">Antena GOES</a>',
        'lidar'=>'<a href="'. base_url() .'monitoreo#microRadar">Micro Radar</a>',
        'radiometro'=>'<a href="'. base_url() .'monitoreo#radiometro">Radi&oacute;metro</a>',
        'radar'=>'<a href="'. base_url() .'monitoreo#radarMeteorologico">Radar Meteorol&oacute;gico</a>',
        'radar_de_viento'=>'<a href="'. base_url() .'monitoreo#radarPerfiladorVientos">Radar Perfilador de Vientos</a>'];

        $info_estaciones = $this->modelo_estaciones->listar_estaciones();
        
        $listaMunicipios = ['barbosa','girardota','copacabana','bello','medellin','la estrella','sabaneta','itagui','envigado','caldas'];
        $listaEncabezados= ['Barbosa','Girardota','Copacabana','Bello','Medell&iacuten','La Estrella','Sabaneta','Itagu&iacute','Envigado','Caldas'];
        $html .= "<table align=\"center\" class=\"table\" style=\"border-collapse: unset; border-spacing: 5px;\"><thead>";
        
        $html .= "<tr>";
        $html .= "<td colspan=\"12\" style=\"padding: inherit;\"><img style=\"margin-bottom:-8px; padding-left: 30px;\" src=\"/sitio_web/application/assets/img/contenido/monitoreo/bannerTablaConsolidadoEstaciones.png\" width=\"99%\"></td>";


        $html .= "</tr>";


        $html .= "<tr>";
        $html .= "<th rowspan=\"2\" align=\"center\" style=\"border-radius: 50px; border: 1px solid #34C0BF; text-align:center; vertical-align: middle; background-color: #34C0BF;\"><h3 style=\"font-weight: bold; color: white;\">Red/Sensor</h3></th>";
        $html .= "<th colspan=\"12\" align=\"center\" style=\"border-radius: 25px; border: 1px solid #34C0BF; text-align:center; background-color: #34C0BF; color: white\"><h4 style=\"font-weight: bold; color: white;\">Municipio</h4></th>";
        $html .= "</tr>";
        $html .= "<tr>";

        foreach ($listaEncabezados as $municipio) {
            $html .= "<th align=\"center\" style=\"border: 1px solid #34C0BF;text-align:center; color: white; background-color: #34C0BF;\">{$municipio}</th>";             
        }  

        $html .= "<th align=\"center\" style=\"border: 1px solid #34C0BF;text-align:center; color: white; background-color: #34C0BF;\">Otros Municipios</th>"; 
        $html .= "<th align=\"center\" style=\"border: 1px solid #34C0BF;text-align:center; color: white; background-color: #34C0BF; border-top-right-radius: 25px; border-bottom-right-radius: 25px;\">Total</th>"; 

        $totalMunicipios=array('barbosa'=>0,'girardota'=>0,'copacabana'=>0,'bello'=>0,'medellin'=>0,'la estrella'=>0,'sabaneta'=>0,'itagui'=>0,'envigado'=>0,'caldas'=>0,'otrosMunicipios'=>0);

        $html .= "</tr>";
        $html .= "</thead>";
        $html .= "<tbody>";
        //foreach ($info_estaciones as $nombreRed => $info_red)
        $contadorRedes = 1;
        $contadorSensores = 1;

        foreach ($info_estaciones as $nombreRed => $info_red)            
        {
            if(in_array($nombreRed, $listaRedes))
            {
                $html .= (($contadorRedes % 2) == 1) ? "<tr style=\"background-color:#DBF0F6\">":"<tr style=\"background-color:#DDF2EF\">";

                $contadorRedes++;

                // $html .= "<tr style=\"background-color:blue\">";
                $html .= "<td align=\"center\" style=\"border-top-left-radius: 25px; border-bottom-left-radius: 25px; \">{$listaRedesEncabezado[$nombreRed]}</td>";
                
                $totalEstaciones = 0;
                $estacionesOtrosMunicipiosTemp = 0;

                foreach ($info_red as $municipio => $numeroEstaciones)
                {
                    if(in_array($municipio, $listaMunicipios))
                    {
                        $totalMunicipios[$municipio]+=$numeroEstaciones;
                    }
                    else
                    {
                       $totalMunicipios['otrosMunicipios']+=$numeroEstaciones;
                       $estacionesOtrosMunicipiosTemp+=$numeroEstaciones;
                    }
                }
                foreach ($listaMunicipios as $municipio) {
                    $valor = (isset($info_red[$municipio])) ? $info_red[$municipio] : 0;
                    $html .= "<td align=\"center\">{$valor}</td>";
                    $totalEstaciones += (int)$valor;
                }
                $html .= "<td align=\"center\">{$estacionesOtrosMunicipiosTemp}</td>";
                $totalEstaciones += $estacionesOtrosMunicipiosTemp;
                $html .= "<td align=\"center\" style=\"border-top-right-radius: 25px; border-bottom-right-radius: 25px;\">{$totalEstaciones}</td>";
                $html .= "</tr>";  
            }
            else
            {
                $htmlSensores .= (($contadorSensores % 2) == 1) ? "<tr style=\"background-color:#DDF2EF\">":"<tr style=\"background-color:#DBF0F6\">";
                $contadorSensores++;

                // $htmlSensores .= "<tr>";
                $htmlSensores .= "<td align=\"center\" style=\"border-top-left-radius: 25px; border-bottom-left-radius: 25px;\">{$listaSensoresEncabezado[$nombreRed]}</td>";
                
                $totalEstaciones = 0;
                $estacionesOtrosMunicipiosTemp = 0;

                foreach ($info_red as $municipio => $numeroEstaciones)
                {
                    if(in_array($municipio, $listaMunicipios))
                    {
                        $totalMunicipios[$municipio]+=$numeroEstaciones;
                    }
                    else
                    {
                       $totalMunicipios['otrosMunicipios']+=$numeroEstaciones;
                       $estacionesOtrosMunicipiosTemp+=$numeroEstaciones;
                    }
                }
                foreach ($listaMunicipios as $municipio) {
                    $valor = (isset($info_red[$municipio])) ? $info_red[$municipio] : 0;
                    $htmlSensores .= "<td align=\"center\">{$valor}</td>";
                    $totalEstaciones += (int)$valor;
                }
                $htmlSensores .= "<td align=\"center\">{$estacionesOtrosMunicipiosTemp}</td>";
                $htmlSensores .= "<td align=\"center\"  style=\"border-top-right-radius: 25px; border-bottom-right-radius: 25px;\">{$totalEstaciones}</td>";
                $htmlSensores .= "</tr>";  
            }             
        }

        //echo var_dump($totalMunicipios);
        $html .= "<tr style=\"background-color:#DBF0F6\">";
        $html .= "<td align=\"center\" style=\"border-top-left-radius: 25px; border-bottom-left-radius: 25px;\"><b>Sensores Remotos</b></td>";
        
        // $html .= "<td align=\"center\" style=\" border: 1px solid black;\"></td>";
        $htmlTotal = "";
        foreach ($listaMunicipios as $municipio) 
        {
            $html .= "<td align=\"center\"></td>";
            $htmlTotal .= "<td align=\"center\">{$totalMunicipios[$municipio]}</td>";
        }
        $html .= "<td align=\"center\"></td>";
        $html .= "<td align=\"center\" style=\" border-top-right-radius: 25px; border-bottom-right-radius: 25px;\"></td>";

        $html .= $htmlSensores;
        $html .= "<tr style=\"background-color:#DBF0F6\"><td align=\"center\" style=\"border-top-left-radius: 25px; border-bottom-left-radius: 25px;\"><b>Total</b></td>";
        $html .= $htmlTotal;
        $html .= "<td align=\"center\" style=\"border-top-right-radius: 25px; border-bottom-right-radius: 25px;\">{$totalMunicipios['otrosMunicipios']}</td></tr>";
        
        $html .= "</tbody></table>";

        return $html;
    }

    public function index()
	{
        $data['conteoEstaciones'] = $this->modelo_estaciones->contar_estaciones();
        $data['html_tabla_estaciones'] = $this->construir_tabla_estaciones();
        $this->load->view('templates/header/header');
        $this->load->view('templates/contenidos/menu');
	    $this->load->view('templates/contenidos/monitoreo', $data);
        $this->load->view('templates/footer/footer');
        
	}
}
