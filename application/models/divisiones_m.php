<?php if(! defined('BASEPATH')) exit ('No direct script acces allowed');

	class Divisiones_m extends CI_Model{
	
		function __construct(){
			parent::__construct();
			$this->load->database();
		
		}
			
		function obtenLDivisiones(){
			$this->db->select('nombre'); //Haciendo la consulta
			$this->db->from('divisiones');

			$lDivisiones=$this->db->get(); //Vaciando el resultado
			
			if(($lDivisiones->num_rows())>0){ //Verificando si tengo datos a cargar
				$indice=1;
				foreach ($lDivisiones->result_array() as $value) {
					$aDivisiones[$indice] = $value; //Guardando mis datos en un arreglo
					print_r($aDivisiones);
					$indice=$indice+1;
				}
				return ($aDivisiones); //Regreso información al controlador
			}else{
				$mensaje_error="No hay datos que cargar";
				return ($mensaje_error);
			}//fin del else
		}
				
	} //Fin de la clase

?>


		

 