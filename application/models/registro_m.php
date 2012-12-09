<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registro_m extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
		
	}
	
	public function inserta_alumno($datos2){
		$datos=Array(
			'matricula' => $datos2['matricula'],
			'contrasenia' => $datos2['pass'],
			'correo' => $datos2['correo'],
			'creditos' => $datos2['creditos'],
			'licenciaturas_idlicenciaturas' => $datos2['licenciatura'][0]		
		);
		
		$this->db->insert('alumnos',$datos);
		return TRUE;
	}
	
	public function trae_divisiones(){
		$this->db->select('idDivisiones,nombre'); //Haciendo la consulta
		$this->db->from('divisiones');

		$lDivisiones=$this->db->get(); //Vaciando el resultado
		
		if(($lDivisiones->num_rows())>0){ //Verificando si tengo datos a cargar
			$indice=1;
			foreach ($lDivisiones->result_array() as $value) {
				$aDivisiones[$indice] = $value; //Guardando mis datos en un arreglo
				$indice=$indice+1;
			}
			return ($aDivisiones); //Regreso información al controlador
		}else{
			return (-1);
		}//fin del else		
		
	}
	
	public function trae_licenciaturas($division = null){
			
			if($division != NULL){
				$this->db->select('idlicenciaturas,nombre'); //Haciendo la consulta
				$this->db->from('licenciaturas');
				$this->db->where('divisiones_iddivisiones',$division);
	
				$l=$this->db->get(); //Vaciando el resultado
							
				if(($l->num_rows())>0){ //Verificando si tengo datos a cargar
					$indice=1;
					foreach ($l->result() as $lic) {
						$licenciaturas[$lic->idlicenciaturas]=$lic->nombre; //Guardando mis datos en un arreglo
						$indice++;
					}
					// alert($licenciaturas);
					return ($licenciaturas); //Regreso información al controlador
				}else{
					return (-1);
				}//fin del else		
			}
	}
}
?>