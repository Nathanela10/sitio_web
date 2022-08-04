<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
	{
        $this->load->view('templates/header/header');
        $this->load->view('templates/contenidos/menu');
       // $this->load->view('templateNoticias');
        //$this->load->view('noticias_nuevo');
        $this->load->view('templates/contenidos/home');
        $this->load->view('templates/footer/footer');
	}
}
