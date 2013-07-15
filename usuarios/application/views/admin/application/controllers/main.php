<?php

class main extends CI_Controller{
	public function __construct()
	{
		parent::__construct();

		$this->load->library('session');
		$this->load->helper('url');
		$this->load->helper('form');

		if( !$this->session->userdata('logueado') ) {
			redirect('inicio/show_login');
		}
	}

	function show_main($aviso = 0,$content='home'){
		$this->load->helper('form');
		$this->load->model('usuario');
		$this->load->model('contenido');
		$data = $this->usuario->fill_session_data();
		$header['actived']=$content;
		$data['aviso'] = $aviso;
		$this->load->view('header',$header);
		$this->load->view('topbar_logued');
		$this->load->view('main');
	}

	function show_home(){
		$this->show_main(0,'home');

	}

	function show_elproyecto(){
		$this->show_main(0,'elproyecto');
	}

	function show_quienessomos(){
		$this->show_main(0,'quienessomos');
	}

	function show_noticias(){
		$this->show_main(0,'noticias');
	}

	function show_why(){
		$this->show_main(0,'why');
	}
}
?>