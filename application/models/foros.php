<?php


class Foros extends CI_Model {

    public $details;

    function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }

    function getMensajes($block,$blockSize){
        $first_laster = ($block-1)*$blockSize;
        // La siguiente consulta es ineficiente, ya que debe revisar todos los mensajes, agruparlos por idM y ordenarlos por fecha.
        // Puede hacerse más eficiente con un sistema que le avise a la base de datos cuál es la última respuesta registrada.
        // La desventaja es que por cada respuesta generada se deberán hacer dos inserciones en dos tablas,
        // Y deberá existir una nueva tabla que guarde los id de los mensajes frescos.
        $q = $this->db->query('SELECT * FROM step_fmensaje as m INNER JOIN (SELECT MAX(fecha) as fechaa,idM FROM (SELECT fecha,idM FROM step_frespuesta UNION SELECT fecha,id as idM FROM step_fmensaje) as tabla1 GROUP BY idM ORDER BY fechaa DESC) as r ON r.idM=m.id ORDER BY fechaa DESC  LIMIT '.$first_laster.','.$blockSize);
        //$q = $this->db->query('SELECT * FROM step_fmensaje as m INNER JOIN (SELECT fecha,idM FROM (SELECT fecha as fecha, idM FROM step_frespuesta UNION SELECT fecha,id as idM FROM step_fmensaje ORDER BY fecha) as ta GROUP BY idM ORDER BY fecha DESC) AS r ON r.idM=m.id ORDER BY id DESC LIMIT '.$first_laster.','.$blockSize);
        // Antigua: $q = $this->db->query('SELECT * FROM step_fmensaje ORDER BY id DESC LIMIT '.$first_laster.','.$blockSize);
        $resultado = $q->result();
        return $resultado;
    }

    function getRespuestas($idMmin,$idMmax){
        $this->db->from('step_frespuesta');
        if($idMmin != ''){
            return $this->db->get()->result();
        } else {
            return array();
        }
    }

    function newMensaje($idU,$titulo,$mensaje){
        $data['idU'] = $idU;
        $data['titulo'] = $titulo;
        $data['mensaje'] = $mensaje;
        $data['fecha'] = date("Y-m-d H:i:s");
        $this->db->insert('step_fmensaje',$data);
    }

    function setRespuesta($idM,$idU,$respuesta){
        $data['idM'] = $idM;
        $data['idU'] = $idU;
        $data['respuesta'] = $respuesta;
        $data['fecha'] = date("Y-m-d H:i:s");
        $this->db->insert('step_frespuesta',$data);
    }

    function hola(){
        $q = $this->db->query('SELECT * FROM usuarios');
        return $q->result();
    }

    function many_blocks(){
        $q = $this->db->query('SELECT COUNT(id) as c FROM step_fmensaje');
        return $q->result();
    }
}
