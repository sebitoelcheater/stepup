<?php
class Contenido extends CI_Model {
	function __construct(){
      parent::__construct();
      $this->load->database();
      $this->load->library('session');
    }

    function restarStock($productos){
      foreach ($productos as $key => $value) {
        $id = $key;
        $cantidad = $value['cantidad'];
        $stock = $value['stock'];
        $data = array(
          'stock'=>$stock-$cantidad
          );
        $this->db->where('idproducto_servicio', $id);
        $this->db->update('producto_servicio', $data);
        /*
        $data = array(
           'fecha_compra' => date('Y-m-d H:i:s'),
           'usuarios_idusuarios' => (int)$this->session->userdata('idusuarios'),
           'metodo_compra_idmetodo_compra' => 1
        );

        $this->db->insert('compra', $data); 
        */
      }
    }

    function getContent($page_container){
      $this->db->from('step_contents');
      $this->db->where('page_container', $page_container);
      $contenidos = $this->db->get()->result();
      return $contenidos;
    }
    
    function updateContent($name, $page_container, $new_content){
    	$data = array('content' => $new_content);
	    $this->db->where('name', $name);
	    $this->db->where('page_container', $page_container);
        $this->db->update('step_contents', $data);
    }
}
?>