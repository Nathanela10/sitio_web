<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Modelo_investigaciones extends CI_Model {

	function __construct() 
	{
		parent::__construct();
	    $this->sitio_resource = $this->load->database ('psqlnewsiata', TRUE);
        //echo "hola";

	}
	
	function listar_investigaciones()
    {
        
        $query = $this->sitio_resource->select('autor, titulo, fecha_publicacion, publicado_en, palabras_clave, enlace');
        $query = $this->sitio_resource->from('investigaciones');
        $query = $this->sitio_resource->order_by('fecha_publicacion','desc'); 
        $query = $this->sitio_resource->get();

        $respuesta = array();
    
       if ($query->num_rows () > 0)
        {
            $respuesta['estado'] = 'OK';
            $respuesta['data'] = $query->result_array();
        }
        else
        {
            $respuesta['estado'] = 'ERROR';
            $respuesta['error'] = $this->db->error()['message'];
        }

        return $respuesta;
    }

    function listar_tesis()
    {
        
        $query = $this->sitio_resource->select('autor, titulo, fecha_publicacion, publicado_en, palabras_clave, enlace, resumen');
        $query = $this->sitio_resource->from('investigaciones');
        $query = $this->sitio_resource->where('tipo','tesis');
        $query = $this->sitio_resource->order_by('fecha_publicacion','desc'); 
        $query = $this->sitio_resource->get();

        $respuesta = array();
    
       if ($query->num_rows () > 0)
        {
            $respuesta['estado'] = 'OK';
            $respuesta['data'] = $query->result_array();
        }
        else
        {
            $respuesta['estado'] = 'ERROR';
            $respuesta['error'] = $this->db->error()['message'];
        }

        return $respuesta;
    }

    function listar_articulos()
    {
        
        $query = $this->sitio_resource->select('autor, titulo, fecha_publicacion, publicado_en, palabras_clave, enlace, resumen');
        $query = $this->sitio_resource->from('investigaciones');
        $query = $this->sitio_resource->where('tipo','articulo');
        $query = $this->sitio_resource->order_by('fecha_publicacion','desc'); 
        $query = $this->sitio_resource->get();

        $respuesta = array();
    
       if ($query->num_rows () > 0)
        {
            $respuesta['estado'] = 'OK';
            $respuesta['data'] = $query->result_array();
        }
        else
        {
            $respuesta['estado'] = 'ERROR';
            $respuesta['error'] = $this->db->error()['message'];
        }

        return $respuesta;
    }

    function buscar_investigaciones($cadena)
    {
        
        $query = $this->sitio_resource->select('autor, titulo, fecha_publicacion, publicado_en, palabras_clave, enlace');
        $query = $this->sitio_resource->from('investigaciones');
        $query = $this->sitio_resource->like('titulo', $cadena);
        $query = $this->sitio_resource->order_by('fecha_publicacion','desc'); 
        $query = $this->sitio_resource->get();

        $respuesta = array();
    
       if ($query->num_rows () > 0)
        {
            $respuesta['estado'] = 'OK';
            $respuesta['data'] = $query->result_array();
        }
        else
        {
            $respuesta['estado'] = 'ERROR';
            $respuesta['error'] = $this->db->error()['message'];
        }

        return $respuesta;
    }

   /* function eliminar_tildes($cadena)
    {

        $cadena = str_replace(
            array('??', '??', '??', '??', '??', '??', '??', '??', '??'),
            array('a', 'a', 'a', 'a', 'a', 'A', 'A', 'A', 'A'),
            $cadena
        );

        $cadena = str_replace(
            array('??', '??', '??', '??', '??', '??', '??', '??'),
            array('e', 'e', 'e', 'e', 'E', 'E', 'E', 'E'),
            $cadena );

        $cadena = str_replace(
            array('??', '??', '??', '??', '??', '??', '??', '??'),
            array('i', 'i', 'i', 'i', 'I', 'I', 'I', 'I'),
            $cadena );

        $cadena = str_replace(
            array('??', '??', '??', '??', '??', '??', '??', '??'),
            array('o', 'o', 'o', 'o', 'O', 'O', 'O', 'O'),
            $cadena );

        $cadena = str_replace(
            array('??', '??', '??', '??', '??', '??', '??', '??'),
            array('u', 'u', 'u', 'u', 'U', 'U', 'U', 'U'),
            $cadena );

        $cadena = str_replace(
            array('??', '??', '??', '??'),
            array('n', 'N', 'c', 'C'),
            $cadena
        );

        return $cadena;
    }*/

}
?>