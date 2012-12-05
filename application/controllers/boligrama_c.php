
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
    	$datos['UEAAnterior'] = $this->boligrama_m->traer_anterior($clave);
		$datos['UEASiguiente'] = $this->boligrama_m->traer_siguiente($clave);
		echo "<br>";print_r($datos['UEAAnterior']);
		echo "<br>";print_r($datos['UEASiguiente']);		

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

}

?>