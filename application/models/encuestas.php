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

    function validate_user( $mail, $password ) {
        $this->db->from('step_usuario');
        $this->db->where('mail',$mail );
        $this->db->where( 'password', $password );
        $login = $this->db->get()->result();
        if ( is_array($login) && count($login) == 1 ) {
            // Set the users details into the $details property of this class
            $this->details = $login[0];
            // Call set_session to set the user's session vars via CodeIgniter
            $this->set_session();
            return true;
        }

        return false;
    }

    function hola(){
      $q = $this->db->query('SELECT * FROM usuarios');
      return $q->result();
    }

    function set_session() {
        $this->session->set_userdata( array(
          'id'=>$this->details->id,
          'nombre'=>$this->details->nombre,
          'apellido'=>$this->details->apellido,
          'mail'=>$this->details->mail,
          'imagen'=>$this->details->imagen,
          'logueado'=>true
          )
        );
    }

    function fill_session_data(){
      $data=array();
      $data['id'] = $this->session->userdata('id');
      $data['nombre'] = $this->session->userdata('nombre');
      $data['apellido'] = $this->session->userdata('apellido');
      $data['mail'] = $this->session->userdata('mail');
      $data['imagen'] = $this->session->userdata('imagen');
      $data['logueado'] = $this->session->userdata('logueado');
      return $data;
    }

    function new_user($userData){
      $data['nombre'] = $userData['nombre'];
      $data['apellido'] = $userData['apellido'];
      $data['mail'] = $userData['mail'];
      $data['password'] = $userData['password'];

      return $this->db->insert('step_usuario',$data);
    }
}
