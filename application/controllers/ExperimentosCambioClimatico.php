<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ExperimentosCambioClimatico extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
	{
        $this->load->view('templates/header/header');
        $this->load->view('templates/contenidos/menu');
        $this->load->view('templates/contenidos/estrategiasEducacion/experimentosCambioClimatico');
        $this->load->view('templates/footer/footer');
	}
}
