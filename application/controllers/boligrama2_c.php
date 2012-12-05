
<?php if ( ! defined('BASEPATH') ) exit('No direct script access allowed'); 
	 
	
class Boligrama2_c extends CI_Controller {
    
    function __construct() {
        
        parent::__construct();
        
        $this->load->helper(array('html', 'url'));
        
        //$this->load->library(array('traer_catalogos_l'));
        
        $this->load->model('boligrama2_m');
        
    }


    public function mostrarBoligrama ($matricula,$clave=0){

    	$datos['licenciaturaId'] = $this->boligrama2_m->traer_boligrama_m($matricula);
		$id_lic=$this->boligrama2_m->trae_idLic($matricula);
    	$datos['UEAAnterior'] = $this->boligrama2_m->traer_anterior($clave);
		$datos['UEASiguiente'] = $this->boligrama2_m->traer_siguiente($clave);
		$datos['creditosL'] = $this->boligrama2_m->trae_creditos_licenciatura($id_lic);
		$datos['ueasCursadas'] =$this->boligrama2_m->trae_id_ueas_cursadas($matricula);
		
		$datos['creditosAlumno'] =0;
		
		foreach ($datos['ueasCursadas'] as $valor) {
			$datos['creditosAlumno'] = $datos['creditosAlumno'] + $this->boligrama2_m->trae_creditos_uea($valor);
		}
		
		$promCred=$datos['creditosL']/12;
		
		if($datos['creditosAlumno']<($promCred*1)){
			$datos['faltaTrim'] = 12;
		}
		if((($datos['creditosAlumno'])>=($promCred*1)) AND ($datos['creditosAlumno']<($datos['creditosAlumno']*2))){
			$datos['faltaTrim'] = 11;				
		}
		if((($datos['creditosAlumno'])>=($promCred*2)) AND ($datos['creditosAlumno']<($datos['creditosAlumno']*3))){
			$datos['faltaTrim'] = 10;				
		}
		if((($datos['creditosAlumno'])>=($promCred*3)) AND ($datos['creditosAlumno']<($datos['creditosAlumno']*4))){
			$datos['faltaTrim'] = 9;				
		}
		if((($datos['creditosAlumno'])>=($promCred*4)) AND ($datos['creditosAlumno']<($datos['creditosAlumno']*5))){
			$datos['faltaTrim'] = 8;				
		}
		if((($datos['creditosAlumno'])>=($promCred*5)) AND ($datos['creditosAlumno']<($datos['creditosAlumno']*6))){
			$datos['faltaTrim'] = 7;				
		}
		if((($datos['creditosAlumno'])>=($promCred*6)) AND ($datos['creditosAlumno']<($datos['creditosAlumno']*7))){
			$datos['faltaTrim'] = 6;				
		}
		if((($datos['creditosAlumno'])>=($promCred*7)) AND ($datos['creditosAlumno']<($datos['creditosAlumno']*8))){
			$datos['faltaTrim'] = 5;				
		}
		if((($datos['creditosAlumno'])>=($promCred*8)) AND ($datos['creditosAlumno']<($datos['creditosAlumno']*9))){
			$datos['faltaTrim'] = 4;				
		}
		if((($datos['creditosAlumno'])>=($promCred*9)) AND ($datos['creditosAlumno']<($datos['creditosAlumno']*10))){
			$datos['faltaTrim'] = 3;				
		}
		if((($datos['creditosAlumno'])>=($promCred*10)) AND ($datos['creditosAlumno']<($datos['creditosAlumno']*11))){
			$datos['faltaTrim'] = 2;				
		}
		if((($datos['creditosAlumno'])>=($promCred*11)) AND ($datos['creditosAlumno']<($datos['creditosAlumno']*12))){
			$datos['faltaTrim'] = 1;				
		}
		if(($datos['creditosAlumno'])>=($promCred*12)){
			$datos['faltaTrim'] = 0;				
		}

        $this->load->view('boligrama2_v', $datos);
    }
	
	public function eliminarBoligrama($matricula){
	
		$this->load->view('eliminar_boligrama_v');
		if($_POST!=NULL){
			echo "<br>mandará a llamar la función para eliminar boligrama";
			$this->boligrama2_m->elimina_boligrama($matricula);
			echo "<script languaje='javascript' type='text/javascript'>
			    window.opener.location.reload();
			    window.close();</script>";
		}
				
	}
	
	public function eliminarAlumno($matricula){
		$this->load->view('eliminar_alumno_v');
		if($_POST!=NULL){
			echo "<br>mandará a llamar la función para eliminar usuario";
			$this->boligrama2_m->elimina_alumno($matricula);
		}
	}
	
	public function insertar_ueas_cursadas($matricula, $uea){

			echo "<br>mandará a llamar la función para insertar uea cursada";
			//$this->boligrama_m->inserta_uea_cursada($matricula, $uea);

	}		

}

?>