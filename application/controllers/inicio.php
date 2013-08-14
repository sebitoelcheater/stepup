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

    function main($aviso=0,$content='Comunidad',$block=1){
    	if($this->session->userdata('logueado')==true){
    		$this->load->model('usuario');
			$data = $this->usuario->fill_session_data();
			$data['content']=$content;
			$data['aviso'] = $aviso;
	    	$this->load->view("topbar",$data);
	        $this->load->view("left_profile",$data);

	        $this->load->model('foros');
	        $sizeBlocks = 9;
	        $foro['mensajes'] = $this->foros->getMensajes($block,$sizeBlocks);
	        $foro['respuestas'] = array();
	        if (count($foro['mensajes'])>0){
		        $lastM = $foro['mensajes'][0]->id;
		        $firstM = $foro['mensajes'][count($foro['mensajes'])-1]->id;
		        $foro['respuestas'] = $this->foros->getRespuestas($firstM,$lastM);
		    }
	        $usuarios = $this->usuario->getUsers();
	        $users = array();
	        foreach ($usuarios as $usuario) {
	        	$users[$usuario->id] = $usuario;
	        }
	        $foro['usuarios'] = $users;
	        $foro['block'] = $block;
	        $blocks = $this->foros->many_blocks();
	        $blocks = (int) (($blocks[0]->c-1)/$sizeBlocks)+1;
	        $foro['blocks'] = $blocks;
	        $this->load->view('right_main',$foro);
	        $this->load->view('bottom');
    	}
    	else
    		$this->show_login();
    }

    function new_post(){
    	$titulo = $this->input->post('titulo');
    	$mensaje = $this->input->post('mensaje');
    	$this->load->model('foros');
    	$this->load->model('usuario');
    	$id = $this->usuario->getCurrentID();
    	$this->foros->newMensaje($id,$titulo,$mensaje);
    	redirect('/inicio');
    }

    function before_new_post(){
    	if($this->session->userdata('logueado')==true){
    		$aviso = 0;
    		$this->load->model('usuario');
			$data = $this->usuario->fill_session_data();
			$content='Comunidad';
			$data['content']=$content;
			$data['aviso'] = $aviso;
	    	$this->load->view("topbar",$data);
	        $this->load->view("left_profile",$data);
	        $this->load->view('new_post');
	        $this->load->view('bottom');
    	}
    	else
    		$this->show_login();
	}

    function new_respuesta(){
    	$respuesta = $this->input->post('respuesta');
    	$idM = $this->input->post('idM');
    	$this->load->model('foros');
    	$this->load->model('usuario');
    	$idU = $this->usuario->getCurrentID();
    	$this->foros->setRespuesta($idM,$idU,$respuesta);
    	redirect('/inicio');
    }

    function go_to_block($block){
    	$this->main(0,"Comunidad",$block);
    }
    
}