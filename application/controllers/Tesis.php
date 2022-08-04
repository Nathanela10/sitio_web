<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tesis extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('modelo_investigaciones');
    }

    public function index()
    {
        $data['investigaciones'] = $this->modelo_investigaciones->listar_tesis();
        $this->load->view('templates/header/header');
        $this->load->view('templates/contenidos/menu');
        $this->load->view('templates/contenidos/tesis', $data);
        $this->load->view('templates/footer/footer');
    }

}
?>