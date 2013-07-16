<?php


class Usuario extends CI_Model {

    public $details;

    function __construct(){
      parent::__construct();
      $this->load->database();
      $this->load->library('session');
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
          'nombre'=>$this->details->username,
          'apellido'=>$this->details->password,
          'mail'=>$this->details->nombre,
          'imagen'=>$this->details->apellido,
          'logueado'=>true
          )
        );
    }

    function fill_session_data(){
      $data=array();
      $data['id'] = $this->session->userdata('id');
      $data['nombre'] = $this->session->userdata('username');
      $data['apellido'] = $this->session->userdata('password');
      $data['mail'] = $this->session->userdata('nombre');
      $data['imagen'] = $this->session->userdata('apellido');
      $data['logueado'] = $this->session->userdata('logueado');
      return $data;
    }
}
