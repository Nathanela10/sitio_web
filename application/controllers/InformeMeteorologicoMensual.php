<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InformeMeteorologicoMensual extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
	{
        $informe = $this->input->get('informe');
        $this->load->view('templates/header/header');
        $this->load->view('templates/contenidos/menu');
	    $this->load->view('templates/contenidos/informeMeteorologicoMensual/'.$informe);
        $this->load->view('templates/footer/footer');
	}
}
