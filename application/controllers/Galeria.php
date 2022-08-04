<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeria extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
	{
        $this->load->view('templates/header/header');
        $this->load->view('templates/contenidos/menu');

        $ruta = "application/assets/img/contenido/Galeria";
        if (is_dir($ruta)) {

            if ($filehandle = opendir($ruta)) {

                $array1 = array();
                $array1['imag'] = array();

                while (($file = readdir($filehandle)) !== false){
                    //echo $file;
                    if ($file != ".." & $file != "."){
                       array_push($array1 ['imag'], $file); 
                    }
                    
                }
                closedir($filehandle);
            }
        }
        //echo var_dump($array1);

	    $this->load->view('templates/contenidos/galeria', $array1);
        $this->load->view('templates/footer/footer');
	}
}
