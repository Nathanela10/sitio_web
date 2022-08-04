<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articulos extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('modelo_investigaciones');
    }

    public function index()
    {
        $data['investigaciones'] = $this->modelo_investigaciones->listar_articulos();
        $this->load->view('templates/header/header');
        $this->load->view('templates/contenidos/menu');
        $this->load->view('templates/contenidos/articulos', $data);
        $this->load->view('templates/footer/footer');
    }

}
?>