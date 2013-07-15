<?php

class main extends CI_Controller{
	public function __construct()
	{
		parent::__construct();

		$this->load->library('session');
		$this->load->helper('url');
		$this->load->helper('form');


	}

	function show_main($aviso = 0,$container='home'){
		$this->load->helper('form');
		$this->load->model('usuario');
		$this->load->model('contenido');
		
		$header['actived']=$container;
		$this->load->view('header',$header);
		
		$usuario = $this->usuario->fill_session_data();
		$this->load->view('topbar_logued',$usuario);
		
		$data['container']=$container;
		$data['contenido'] = $this->contenido->getContent($container);
		$data['aviso'] = $aviso;
		$this->load->view('main',$data);
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
	
	function updateContent(){
		$this->load->model('contenido');
		$name = $this->input->post('name');
		$page_container = $this->input->post('page_container');
		$new_content = $this->input->post('content');
		$this->contenido->updateContent($name, $page_container, $new_content);
		$this->show_main(1,$page_container);
	}
}
?>