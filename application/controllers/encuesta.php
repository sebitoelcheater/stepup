<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Encuesta extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->helper('form');
	}
	
	public function main($aviso=0,$content='Encuestas')
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
	        $this->load->view('encuesta/main',$encuesta);
	        $this->load->view('bottom');
		}
		else
			$this->show_login();
	}

	function show_encuesta($aviso=0,$content='Encuestas'){
		$idE = $this->input->post('idE');
		$this->load->model('usuario');
		$data = $this->usuario->fill_session_data();
		$this->load->model('encuestas');
		$encuesta['preguntas'] = $this->encuestas->getPreguntas($idE);
		$encuestita = '<form action=responder_encuesta method=post>';
		$encuestita .= '<input type=hidden name=idE value='.$idE.'>';
		foreach ($encuesta['preguntas'] as $value) {
			$encuestita .= '<h3>'.$value->pregunta.'</h3>';
			if ($value->tipo==1){
				$encuestita .= '<input type="text" name=t'.$value->id.'>';
			} elseif ($value->tipo==2){
				$encuestita .= '<input type="text" name=t'.$value->id.'>';
			} elseif ($value->tipo==3){
				$opciones = $this->encuestas->getOpciones($value->id);
				foreach ($opciones as $opcion) {
					$encuestita .= '<input type="radio" name="r'.$value->id.'" value="'.$opcion->id.'"> '.$opcion->opcion.'<br>';
				}
			} elseif ($value->tipo==4){
				$opciones = $this->encuestas->getOpciones($value->id);
				$o = 0;
				foreach ($opciones as $opcion) {
					$o += 1;
					$encuestita .= '<input type="checkbox" name="c'.$value->id.'-'.$o.'" value="'.$opcion->id.'"> '.$opcion->opcion.'<br>';
				}
			}
		}
		$encuestita .= '<br><br><input type="submit" value="Enviar">';
		$encuestita .= '</form>';
		$encuesta['encuestita'] = $encuestita;
		$data['content'] = $content;
		$data['aviso'] = $aviso;
    	$this->load->view("topbar",$data);
        $this->load->view("left_profile",$data);
        $this->load->view('encuesta/encuesta',$encuesta);
        $this->load->view('bottom');
	}

	function responder_encuesta($aviso=0,$content='Encuestas'){
		$this->load->model('usuario');
		$data = $this->usuario->fill_session_data();
		$idU = $data['id'];
		$respuestas = $this->input->post(null,true);
		$this->load->model('encuestas');
		foreach ($respuestas as $key => $value) {
			if (substr_count($key, 't')==1){
				$idEP = substr($key,1,strlen($key)-1);
				$this->encuestas->setRespuesta($idEP,$idU,0,$value);
			} elseif (substr_count($key, 'r')==1) {
				$idEP = substr($key,1,strlen($key)-1);
				$this->encuestas->setRespuesta($idEP,$idU,$value,null);
			}
		}
		$data['succesful'] = true;
		$data['content'] = $content;
		$data['aviso'] = $aviso;
		$this->load->view("topbar",$data);
        $this->load->view("left_profile",$data);
        $this->load->view('encuesta/resultado',$data);
        $this->load->view('bottom');
	}

    function show_login( $show_error = 0 ) {
        $data['error'] = $show_error;
		$base_url = base_url();
		header('Location: '.$base_url.'logued_out/Step');
    }    
}