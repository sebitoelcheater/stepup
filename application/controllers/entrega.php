<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Entrega extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->helper('form');
	}
	
	public function main($aviso=0,$content='Entregas')
	{
		//$session_id = $this->session->userdata('session_id');
		if($this->session->userdata('logueado')==true){
			$this->load->model('usuario');
			$data = $this->usuario->fill_session_data();
			$this->load->model('encuestas');
			$encuesta['encuestas'] = $this->encuestas->getEncuestas();
			$data['content'] = $content;
			$data['aviso'] = $aviso;
	    	$this->load->view("topbar",$data);
	        $this->load->view("left_profile",$data);
	        $this->load->view('bottom');
		}
		else
			$this->show_login();
	}

    function show_login( $show_error = 0 ) {
        $data['error'] = $show_error;
		$base_url = base_url();
		header('Location: '.$base_url.'logued_out/Step');
    }    
}