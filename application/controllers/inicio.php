<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicio extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->helper('form');
	}
	
	public function index()
	{
		//$session_id = $this->session->userdata('session_id');
		if($this->session->userdata('logueado')){
			$this->load->view("topbar");
            $this->load->view("main");
		}
		else if ($this->input->post('accion')=="login"){
			$mail = $this->input->post('mail');
			$password = $this->input->post('password');
			$this->login_user($mail,$password);
		}
		else
			$this->show_login();
	}

	function login_user($mail,$password) {
        $this->load->model('usuario');

        if($this->usuario->validate_user($mail,$password)){
            $this->load->view("topbar");
            $this->load->view("main");
        }
        else
            $this->show_login(1);
    }

    function show_login( $show_error = 0 ) {
        $data['error'] = $show_error;
        //$this->load->view('header');
        //$this->load->view('topbar_logued_out');
		//$this->load->view('signin');
		header('Location: logued_out/Step');
    }

    function logout_user() {
      $this->session->sess_destroy();
      $this->session->set_userdata( array("logueado"=>false));
      $this->index();
    }
    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */