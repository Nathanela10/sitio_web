<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TerritorioAlAireEnCasa extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
	{
        $this->load->view('templates/header/header');
        $this->load->view('templates/contenidos/menu');
	    $this->load->view('templates/contenidos/territorioAlAireEnCasa');
        $this->load->view('templates/footer/footer');
	}
}
