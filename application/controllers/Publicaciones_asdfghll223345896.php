<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Publicaciones_asdfghll223345896 extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('modelo_investigaciones');
        setlocale(LC_TIME, 'es_CO.UTF-8');
    }

    public function index()
	{
        $data['investigaciones'] = $this->modelo_investigaciones->listar_investigaciones();
        $this->load->view('templates/header/header');
        $this->load->view('templates/contenidos/menu');
	    $this->load->view('templates/contenidos/publicaciones_asdfghll223345896', $data);
        $this->load->view('templates/footer/footer');
	}

    public function buscar_investigacion()
    {
        
        $cadena = $this->input->post('cadena');
        $investigaciones = $this->modelo_investigaciones->listar_investigaciones();
        foreach ($investigaciones as $documento){ 
            $html = '<div><h2><a href="'.$documento['enlace'].'" target="_blank">'.$documento['titulo'].'</a>';
            $html += '<p>'.$documento['autor'].'</p>';
            $html += '<p><span class="fa fa-clock-o" aria-hidden="true"></span> Fecha de publicación:'. strftime("%d de %B de %Y", strtotime($documento['fecha_publicacion'])).'</p>';
            $html += '<p class="lead">Publicado en:'.$documento['publicado_en'].'</p></div><hr>';
        }

        
    }



}
?>