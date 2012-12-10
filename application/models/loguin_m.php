<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Loguin_m extends CI_Model{
		
	function __construct(){
		parent::__construct();
		$this->load->database();
		
	}
	
	public function validate(){

		$username = $this->security->xss_clean($this->input->post('usuarioInput'));
		$password = $this->security->xss_clean($this->input->post('passInput'));
		 		
		$this->db->where('matricula', $username);
		$this->db->where('contrasenia', $password);
				
		$query = $this->db->get('alumnos');
		$datos['valida']=TRUE;
		$datos['matricula']=$username;
		
		if($query->num_rows == 1)
		{
			$row = $query->row();
			$data = array(
					'matricula' => $row->idusuarioadmin,
					'usuario' => $row->correo,
					'validated' => true
					);
			$this->session->set_userdata($data);
			return $datos;
		}

		return false;
	}
	
	public function trae_pass($correo){
		$this->db->select('contrasenia');	 		
		$this->db->where('correo', $correo);
				
		$query = $this->db->get('alumnos');
		
		if(($query->num_rows())>0){ //Verificando si tengo datos a cargar
			foreach ($query->result_array() as $value) {
				$pass[1] = $value['contrasenia']; //Guardando mis datos en un arreglo
			}
			return ($pass[1]); //Regreso información al controlador
			}else{
				return -1;
			}//fin del else

		return false;
	}
}
?>