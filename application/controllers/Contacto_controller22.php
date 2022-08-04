<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contacto_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url', 'file');
        $this->load->library(array('session'));
    }

    function enviar_mensaje()
    {
        $nombre = $this->input->post('nombre');
        $apellido = $this->input->post('apellido');
        $correo = $this->input->post('correo');
        $asunto = $this->input->post('asunto');
        $mensaje = $this->input->post('mensaje');

        $config = Array(
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://smtp.gmail.com',
            'smtp_port' => 465,
            'smtp_user' => 'contacto@siata.gov.co',
            'smtp_pass' => 'SIATA2020*',
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'crlf'      => "\n",
            'newline'   => "\r\n",
            'wordwrap'  => TRUE
        );

        $this->load->library('email');
        $this->email->initialize($config);
        $nombre_envio = $nombre . ' ' . $apellido;
        $this->email->from($correo, $nombre_envio);
        $this->email->to('contacto@siata.gov.co');
        $asunto_envio = "[CONTACTO_SITIO] " . $asunto;
        $this->email->subject($asunto_envio);
        $this->email->message($mensaje);

        $email_send = $this->email->send();
        if($email_send)
        {
            $response = array(
                'error' => FALSE,
                'mensaje' => "Se ha enviado correctamente el mensaje"
            );
        }
        else
        {
            $response = array(
                'error' => TRUE,
                'mensaje' => "Ha ocurrido un error durante el envio. Por favor, vuelva a intentarlo mas tarde."
            );
        }
        echo json_encode($response);
    }
}
