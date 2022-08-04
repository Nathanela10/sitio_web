<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Modelo_estaciones extends CI_Model {

    function __construct() 
    {
        parent::__construct();
        $this->load->database();
        $this->camaras_resource = $this->load->database ('mysqlCamaras', TRUE);
        $this->calidadAire_resource = $this->load->database ('mysqlCalidadAire', TRUE);
        $this->ciudadanos_resource = $this->load->database ('psqlCiudadanosCientificos', TRUE);
    }

    function listar_estaciones()
    {
       $arrayDiscriminadoHVEstaciones = $this->listar_estaciones_HVEstaciones();
       $arrayDiscriminadoCamarasTermicas = $this->listar_estaciones_camaras();
       $arrayDiscriminadoCiudadanosCientificos = $this->listar_estaciones_calidadAire();
       $arrayDiscriminadoCalidadAire = $this->listar_estaciones_ciudadanos();
       $arrayAntenaGOES = array('antena_GOES'=> array('medellin' => 1 ));
       $arrayDiscriminadoEstaciones = $arrayDiscriminadoHVEstaciones + $arrayDiscriminadoCamarasTermicas + $arrayDiscriminadoCiudadanosCientificos + $arrayDiscriminadoCalidadAire + $arrayAntenaGOES;
       // echo var_dump($arrayDiscriminadoEstaciones);
       ksort($arrayDiscriminadoEstaciones);
       return $arrayDiscriminadoEstaciones;
    }

    function listar_estaciones_HVEstaciones()
    {
        $estaciones = array('acelerografica','sirena','ceilometro','piranometro','disdrometro','meteorologica','meteorologica_thiess','pluviografica','nivel','camara','humedad','camara','piranometro','radiometro','radar','lidar','radar_de_viento','acelerometrica');
        $query = $this->db->select('LOWER(ciudad) municipio, LOWER(red) red, total');
        $query = $this->db->from('VistaConsolidadoEstaciones');
        $query = $this->db->where('estado', 'A');
        $query = $this->db->where_in('red', $estaciones);
        $query = $this->db->get();

        $listado_estaciones = array();

        if ($query->num_rows () > 0)
        {
            foreach ($query->result () as $query_result)
            {
                if (($query_result-> red == 'meteorologica_thiess')||($query_result-> red == 'meteorologica'))
                {
                    $listado_estaciones['meteorologica'][$query_result-> municipio] = (isset($listado_estaciones['meteorologica'][$query_result-> municipio])) ? $listado_estaciones['meteorologica'][$query_result-> municipio]+(int)$query_result-> total : (int)$query_result-> total;
                }
                else
                {
                    $listado_estaciones[$query_result-> red][$query_result-> municipio] = (int)$query_result-> total;
                }

            }

            return $listado_estaciones;
        }
        else
        {
            return array();
        }
    }

    function listar_estaciones_camaras()
    {
        $query = "select LOWER(Ciudad) as municipio, count(id) as total from estaciones where nombreestacion like '%camara termica%IR%' or nombreestacion like '%camara termica% FLIR%'group by Ciudad;";
        $query = $this->camaras_resource->query($query);

        $listado_estaciones = array();

        if ($query->num_rows () > 0)
        {
            foreach ($query->result () as $query_result)
            {
                $listado_estaciones['camaras_termicas'][$this->eliminar_tildes($query_result-> municipio)] = (int)$query_result-> total;
            }

            return $listado_estaciones;
        }
        else
        {
            return array();
        }
    }


    function listar_estaciones_calidadAire()
    {
        $query = "select LOWER(ciudad) as municipio, count(codigo) as total from estacionRedAire where nombre not like '_OFF%' group by ciudad having ciudad is not null;";
        $query = $this->calidadAire_resource->query($query);

        $listado_estaciones = array();

        if ($query->num_rows () > 0)
        {
            foreach ($query->result () as $query_result)
            {
                $listado_estaciones['calidad_aire'][$this->eliminar_tildes($query_result-> municipio)] = (int)$query_result-> total;
            }

            return $listado_estaciones;
        }
        else
        {
            return array();
        }
    }


    function listar_estaciones_ciudadanos()
    {
        $query = 'SELECT LOWER("ViewEstacion"."municipio") as municipio,  COUNT(distinct("estacionSerial"."codigoSerial" )) as total FROM "ViewEstacion"
                INNER JOIN (SELECT "Estacion"."codigoSerial" as "codigoSerial" FROM "MantenimientoEstacion"
                    INNER JOIN "Estacion"
                    ON "MantenimientoEstacion"."idEstacion" = "Estacion"."idEstacion") AS "estacionSerial"
                ON "ViewEstacion"."codigoSerial" = "estacionSerial"."codigoSerial"
                GROUP BY "ViewEstacion"."municipio"
                HAVING "ViewEstacion"."municipio" IS NOT NULL';
        $query = $this->ciudadanos_resource->query($query);

        $listado_estaciones = array();

        if ($query->num_rows () > 0)
        {
            foreach ($query->result () as $query_result)
            {
                $listado_estaciones['ciudadanos_cientificos'][$this->eliminar_tildes($query_result-> municipio)] = (int)$query_result-> total;
            }

            return $listado_estaciones;
        }
        else
        {
            return array();
        }
    }

    function contar_estaciones()
    {
       $arrayHVEstaciones = $this->contar_estaciones_HVEstaciones();
       $arrayCamarasTermicas = $this->contar_estaciones_camaras();
       $arrayCiudadanosCientificos = $this->contar_estaciones_ciudadanos();
       $arrayCalidadAire = $this->contar_estaciones_calidadAire();
       $arrayEstacionesRedInterna = $this->contar_estaciones_redes_internas();
       $arrayEstaciones = $arrayHVEstaciones + $arrayCamarasTermicas + $arrayCiudadanosCientificos + $arrayCalidadAire + $arrayEstacionesRedInterna;

       return $arrayEstaciones;
    }

    function contar_estaciones_HVEstaciones()
    {
        //$estaciones = array('acelerografica','pluviografica','ceilometro','disdrometro','humedad','camara','meteorologica','nivel','piranometro','radiometro','sirena','meteorologica_thiess','radar','lidar','radar_de_viento','acelerometrica');
        $estaciones = array('ceilometro','radiometro','radar','lidar','radar_de_viento');
        $query = $this->db->select('LOWER(red) as red, SUM(total) as total');
        $query = $this->db->from('VistaConsolidadoEstaciones');
        $query = $this->db->where('estado', 'A');
        $query = $this->db->where_in('red', $estaciones);
        $query = $this->db->group_by('red');
        $query = $this->db->get();

        $listado_estaciones = array();

        if ($query->num_rows () > 0)
        {
            foreach ($query->result () as $query_result)
            {
                $listado_estaciones[$query_result-> red] = (int)$query_result-> total;
            }

            return $listado_estaciones;
        }
        else
        {
            return false;
        }
    }

    function contar_estaciones_redes_internas()
    {
        //$estaciones = array('acelerografica','pluviografica','ceilometro','disdrometro','humedad','camara','meteorologica','nivel','piranometro','radiometro','sirena','meteorologica_thiess','radar','lidar','radar_de_viento','acelerometrica');
        $estaciones = array('pluviografica', 'nivel', 'meteorologica', 'meteorologica_thiess', 'humedad', 'humedad_stevens','humedad_laderas_5te_rasp','humedad_stevens_laderas_rasp','disdrometro', 'piranometro','acelerografica','acelerometro_giroscopio','camara','sirena');
        $query = $this->camaras_resource->select('LOWER(red) as red, COUNT(codigo) as total');
        $query = $this->camaras_resource->from('estaciones');
        $query = $this->camaras_resource->where('estado', 'A');
        $query = $this->camaras_resource->where_in('red', $estaciones);
        $query = $this->camaras_resource->group_by('red');
        $query = $this->camaras_resource->get();

        $listado_estaciones = array();

        if ($query->num_rows () > 0)
        {
            foreach ($query->result () as $query_result)
            {
                $listado_estaciones[$query_result-> red] = (int)$query_result-> total;
            }

            return $listado_estaciones;
        }
        else
        {
            return false;
        }
    }

    function contar_estaciones_camaras()
    {
        $query = "select count(codigo) as total from estaciones where nombreestacion like '%camara termica%IR%' or nombreestacion like '%camara termica% FLIR%';";
        $query = $this->camaras_resource->query($query);

        $listado_estaciones = array();

        if ($query->num_rows () > 0)
        {
            $listado_estaciones['camaras_termicas'] = (int)$query->row()->total;
            return $listado_estaciones;
        }
        else
        {
            return false;
        }
    }

    function contar_estaciones_calidadAire()
    {
        $query = "select count(codigo) as total from estacionRedAire where nombre not like '_OFF%';";
        $query = $this->calidadAire_resource->query($query);

        $listado_estaciones = array();

        if ($query->num_rows () > 0)
        {
            $listado_estaciones['calidad_aire'] = (int)$query->row()->total;
            return $listado_estaciones;
        }
        else
        {
            return false;
        }
    }

    function contar_estaciones_ciudadanos()
    {
        $query = 'select count(distinct("idEstacion"))as total from "MantenimientoEstacion";';
        $query = $this->ciudadanos_resource->query($query);

        $listado_estaciones = array();

        if ($query->num_rows () > 0)
        {
            $listado_estaciones['ciudadanos_cientificos'] = (int)$query->row()->total;
            return $listado_estaciones;
        }
        else
        {
            return false;
        }
    }

    function eliminar_tildes($cadena){

        //$cadena = utf8_encode($cadena);

        $cadena = str_replace(
            array('á', 'à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä'),
            array('a', 'a', 'a', 'a', 'a', 'A', 'A', 'A', 'A'),
            $cadena
        );

        $cadena = str_replace(
            array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë'),
            array('e', 'e', 'e', 'e', 'E', 'E', 'E', 'E'),
            $cadena );

        $cadena = str_replace(
            array('í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î'),
            array('i', 'i', 'i', 'i', 'I', 'I', 'I', 'I'),
            $cadena );

        $cadena = str_replace(
            array('ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô'),
            array('o', 'o', 'o', 'o', 'O', 'O', 'O', 'O'),
            $cadena );

        $cadena = str_replace(
            array('ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü'),
            array('u', 'u', 'u', 'u', 'U', 'U', 'U', 'U'),
            $cadena );

        $cadena = str_replace(
            array('ñ', 'Ñ', 'ç', 'Ç'),
            array('n', 'N', 'c', 'C'),
            $cadena
        );

        return $cadena;
    }

}
?>