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
        $q = $this->db->query('SELECT * FROM step_fmensaje ORDER BY id DESC LIMIT '.$first_laster.','.$blockSize);
        return $q->result();
    }

    function getRespuestas($idMmin,$idMmax){
        $this->db->from('step_frespuesta');
        if($idMmin != ''){
            $this->db->where('idM >=',$idMmin);
            $this->db->where('idM <=',$idMmax);
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
}
