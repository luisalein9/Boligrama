
<?php if ( ! defined('BASEPATH') ) exit('No direct script access allowed'); 
	 
	
class Boligrama_c extends CI_Controller {
    
    function __construct() {
        
        parent::__construct();
        
        $this->load->helper(array('html', 'url'));
        
        //$this->load->library(array('traer_catalogos_l'));
        
        $this->load->model('boligrama_m');
        
    }


    public function mostrarBoligrama ($matricula,$clave=0){

    	$datos['licenciaturaId'] = $this->boligrama_m->traer_boligrama_m($matricula);
		$id_lic=$this->boligrama_m->trae_idLic($matricula);
    	$datos['UEAAnterior'] = $this->boligrama_m->traer_anterior($clave);
		$datos['UEASiguiente'] = $this->boligrama_m->traer_siguiente($clave);
		$datos['creditosL'] = $this->boligrama_m->trae_creditos_licenciatura($id_lic);
		$datos['ueasCursadas'] =$this->boligrama_m->trae_id_ueas_cursadas($matricula);
		
		$datos['creditosAlumno'] =0;
		
		foreach ($datos['ueasCursadas'] as $valor) {
			$datos['creditosAlumno'] = $datos['creditosAlumno'] + $this->boligrama_m->trae_creditos_uea($valor);
		}
		
		// echo "<br>";print_r($datos['UEAAnterior']);
		// echo "<br>";print_r($datos['UEASiguiente']);		

        $this->load->view('boligrama_v', $datos);
    }
	
	public function eliminarBoligrama($matricula){
	
		$this->load->view('eliminar_boligrama_v');
		if($_POST!=NULL){
			echo "<br>mandará a llamar la función para eliminar boligrama";
			$this->boligrama_m->elimina_boligrama($matricula);
		}
				
	}
	
	public function eliminarAlumno($matricula){
		$this->load->view('eliminar_alumno_v');
		if($_POST!=NULL){
			echo "<br>mandará a llamar la función para eliminar usuario";
			$this->boligrama_m->elimina_alumno($matricula);
		}
	}
	
	public function insertar_ueas_cursadas($matricula, $uea){

			echo "<br>mandará a llamar la función para insertar uea cursada";
			//$this->boligrama_m->inserta_uea_cursada($matricula, $uea);

	}		

}

?>