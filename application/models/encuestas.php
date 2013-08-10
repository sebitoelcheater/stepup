<?php


class Encuestas extends CI_Model {

    public $details;

    function __construct(){
      parent::__construct();
      $this->load->database();
      $this->load->library('session');
    }

    function getEncuestas(){
      $this->db->from('step_encuesta');
      $today = date("Y-m-d H:i:s"); 
      $this->db->where("fecha_f >",$today);
      $this->db->where("fecha_i <",$today);
      return $this->db->get()->result();
    }

    function getPreguntas($idE){
      $this->db->from('step_epregunta');
      $this->db->where('idE',$idE);
      return $this->db->get()->result();
    }

    function getOpciones($idEP){
      $this->db->from('step_epopcion');
      $this->db->where('idEP',$idEP);
      return $this->db->get()->result();
    }

    function setRespuesta($idEP,$idU,$idEPO,$respuesta){
      $data['idEP']=$idEP;
      $data['idU']=$idU;
      $data['idEPO']=$idEPO;
      $data['respuesta']=$respuesta;
      $today = date("Y-m-d H:i:s");
      $data['fecha'] = $today;
      return $this->db->insert('step_erespuesta',$data);
    }

    function getTipoRespuestas(){
      $this->db->from('step_etipo');
      $this->db->get()->result();
    }

    function hola(){
      $q = $this->db->query('SELECT * FROM usuarios');
      return $q->result();
    }
}
