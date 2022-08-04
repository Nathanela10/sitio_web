<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HojasDeVidaSATC extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
	{
        $cuenca = $this->input->get('cuenca');
        $this->load->view('templates/header/header');
        $this->load->view('templates/contenidos/menu');
	    $this->load->view('templates/contenidos/equipoSocial/hojasDeVidaSATC/'.$cuenca);
        $this->load->view('templates/footer/footer');
	}
}
