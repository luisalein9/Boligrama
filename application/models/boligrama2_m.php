<?php

    class Boligrama2_m extends CI_Model {

        function __construct(){
            
            parent::__construct();
            
            $this->load->database();
        
        }           


	    function traer_licenciatura($matricula){
	
	            $this->db->select('licenciaturas_idlicenciaturas');
	            $this->db->from('alumnos');
	            $this->db->where('matricula',$matricula);
	
				$lic=$this->db->get(); 
			
				if(($lic->num_rows())>0){ //Verificando si tengo datos a cargar
					foreach ($lic->result_array() as $value) {
						$licenciatura[1] = $value['licenciaturas_idlicenciaturas']; //Guardando mis datos en un arreglo
					 }
				
					return($licenciatura[1]);
				}else{
					return(-1);
				}//fin del else
	
	    } //Fin función

	    function traer_creditos($matricula){
	
	            $this->db->select('creditos');
	            $this->db->from('alumnos');
	            $this->db->where('matricula',$matricula);
	
				$cred=$this->db->get(); 
			
				if(($cred->num_rows())>0){ //Verificando si tengo datos a cargar
					foreach ($cred->result_array() as $value) {
						$creditos[1] = $value['creditos']; //Guardando mis datos en un arreglo
					 }
				
					return($creditos[1]);
				}else{
					return(-1);
				}//fin del else
	
	    }	//Fin función
	    
	    function traer_idueas_cursadas($matricula){
	
	            $this->db->select('ueas_idueas');
	            $this->db->from('ueas_cursadas');
	            $this->db->where('alumnos_matricula',$matricula);
	
				$ueas_c=$this->db->get(); 
			
				if(($ueas_c->num_rows())>0){ //Verificando si tengo datos a cargar
					$indice=1;
					foreach ($ueas_c->result_array() as $value) {
						$ueas_cursadas[$indice] = $value['ueas_idueas'];
						$indice++;
					 }
				
					return($ueas_cursadas);
				}else{
					return(-1);
				}//fin del else
	
	    }	//Fin función
	   
	    function traer_ueas_cursadas($iduea){
	
	            $this->db->select('nombre');
				$this->db->select('creditos');
	            $this->db->from('ueas');
	            $this->db->where('idueas',$iduea);
	
				$ueas_c=$this->db->get(); 
			
				if(($ueas_c->num_rows())>0){ //Verificando si tengo datos a cargar
					$indice=1;
					foreach ($ueas_c->result_array() as $value) {
						$ueas_cursadas[$indice] = $value;
						$indice++;
					 }
				
					return($ueas_cursadas);
				}else{
					return(-1);
				}//fin del else
	
	    }	//Fin función	   		  	
    } //Fin clase


?>