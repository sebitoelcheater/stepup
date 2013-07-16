<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicio extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->helper('form');
	}
	
	public function index()
	{
		//$session_id = $this->session->userdata('session_id');
		if($this->session->userdata('logueado')==true){
			$this->main();
		}
		else if ($this->input->post('accion')=="login"){
			$mail = $this->input->post('mail');
			$password = $this->input->post('password');
			$this->login_user($mail,$password);
		}
		else if ($this->input->post('accion')=="registrar"){
			$this->new_user();
		}
		else
			$this->show_login();
	}

	function login_user($mail,$password) {
        $this->load->model('usuario');

        if($this->usuario->validate_user($mail,$password))
            $this->main();
        else
            $this->show_login(1);
    }

    function new_user(){
    	if ($this->input->post('accion')=="registrar"){
	    	$userInfo = $this->input->post(null,true);
		    if( count($userInfo) ) {
		      $this->load->model('usuario');
		      $saved = $this->usuario->new_user($userInfo);
		    }
		    if ( isset($saved) && $saved ) {
		       $this->login_user($userInfo['mail'],$userInfo['password']);
		    }
		}
    }

    function show_login( $show_error = 0 ) {
        $data['error'] = $show_error;
        //$this->load->view('header');
        //$this->load->view('topbar_logued_out');
		//$this->load->view('signin');
		$base_url = base_url();
		header('Location: '.$base_url.'logued_out/Step');
    }

    function logout_user() {
      $this->session->sess_destroy();
      $this->session->set_userdata( array("logueado"=>false));
      $this->index();
    }

    function main($aviso=0,$content='home'){
    	if($this->session->userdata('logueado')==true){
    		$this->load->model('usuario');
			$data = $this->usuario->fill_session_data();
			$header['actived']=$content;
			$data['aviso'] = $aviso;
	    	$this->load->view("topbar",$data);
	        $this->load->view("main",$data);
    	}
    	else
    		$this->show_login();
    }
    
}