<?php if ( ! defined('BASEPATH') ) exit('No direct script access allowed'); 
	 
	
class Boligrama2_c extends CI_Controller {
    
    function __construct() {
        
        parent::__construct();
        
        $this->load->helper(array('html', 'url'));
        $this->load->model('boligrama2_m');
    }

    public function index ($matricula){
    		
		$sumaCreditos=0;
		
    	$id_lic= $this->boligrama2_m->traer_licenciatura($matricula);
		$creditos = $this->boligrama2_m->traer_creditos($matricula);
		$idueas_cursadas=$this->boligrama2_m->traer_idueas_cursadas($matricula);
		$indice=1;
		
		foreach ($idueas_cursadas as $valor) {
			$ueas_cursadas[$indice] = $this->boligrama2_m->traer_ueas_cursadas($valor);
			$indice++;
		}
		//print_r($creditos); echo "<br>";
		//print_r($idueas_cursadas);echo "<br>";
		//print_r($ueas_cursadas);echo "<br>";
		
		foreach ($ueas_cursadas as $value) {
			print_r($value[1]['creditos']); echo "<br>";
			$sumaCreditos=$sumaCreditos+$value[1]['creditos'];
		}
		echo "<br>";
		print_r($sumaCreditos);echo "<br>";
        
        $this->load->view('boligrama2_v');
    }

}

?>