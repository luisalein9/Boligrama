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
		$materias_lic_I = $this->boligrama2_m->traer_materias_lic($id_lic, 1);
		$materias_lic_II = $this->boligrama2_m->traer_materias_lic($id_lic, 2);
		$materias_lic_III = $this->boligrama2_m->traer_materias_lic($id_lic, 3);
		$materias_lic_IV = $this->boligrama2_m->traer_materias_lic($id_lic, 4);
		$materias_lic_V= $this->boligrama2_m->traer_materias_lic($id_lic, 5);
		$materias_lic_VI = $this->boligrama2_m->traer_materias_lic($id_lic, 6);
		$materias_lic_VII = $this->boligrama2_m->traer_materias_lic($id_lic, 7);
		$materias_lic_VIII = $this->boligrama2_m->traer_materias_lic($id_lic, 8);
		$materias_lic_IX = $this->boligrama2_m->traer_materias_lic($id_lic, 9);
		$materias_lic_X = $this->boligrama2_m->traer_materias_lic($id_lic, 10);
		$materias_lic_XI = $this->boligrama2_m->traer_materias_lic($id_lic, 11);
		$materias_lic_XII= $this->boligrama2_m->traer_materias_lic($id_lic, 12);
		

		$creditos = $this->boligrama2_m->traer_creditos($matricula);
		$idueas_cursadas=$this->boligrama2_m->traer_idueas_cursadas($matricula);
		$indice=1;
		
		foreach ($idueas_cursadas as $valor) {
			$datos_ueas_cursadas[$indice] = $this->boligrama2_m->traer_ueas($valor);
			$indice++;
		}
		
		$indice=1;
		foreach ($materias_lic_I as $valor) {
			$ueasTrimI[$indice] = $this->boligrama2_m->traer_ueas($valor['ueas_idueas']);
			$indice++;	
		}
		
		$indice=1;
		foreach ($materias_lic_II as $valor) {
			$ueasTrimII[$indice] = $this->boligrama2_m->traer_ueas($valor['ueas_idueas']);
			$indice++;	
		}

		$indice=1;
		foreach ($materias_lic_III as $valor) {
			$ueasTrimIII[$indice] = $this->boligrama2_m->traer_ueas($valor['ueas_idueas']);
			$indice++;	
		}

		$indice=1;
		foreach ($materias_lic_IV as $valor) {
			$ueasTrimIV[$indice] = $this->boligrama2_m->traer_ueas($valor['ueas_idueas']);
			$indice++;	
		}

		$indice=1;
		foreach ($materias_lic_V as $valor) {
			$ueasTrimV[$indice] = $this->boligrama2_m->traer_ueas($valor['ueas_idueas']);
			$indice++;	
		}

		$indice=1;
		foreach ($materias_lic_VI as $valor) {
			$ueasTrimVI[$indice] = $this->boligrama2_m->traer_ueas($valor['ueas_idueas']);
			$indice++;	
		}

		$indice=1;
		foreach ($materias_lic_VII as $valor) {
			$ueasTrimVII[$indice] = $this->boligrama2_m->traer_ueas($valor['ueas_idueas']);
			$indice++;	
		}

		$indice=1;
		foreach ($materias_lic_VIII as $valor) {
			$ueasTrimVIII[$indice] = $this->boligrama2_m->traer_ueas($valor['ueas_idueas']);
			$indice++;	
		}
		
		$indice=1;
		foreach ($materias_lic_IX as $valor) {
			$ueasTrimIX[$indice] = $this->boligrama2_m->traer_ueas($valor['ueas_idueas']);
			$indice++;	
		}				
		
		$indice=1;
		foreach ($materias_lic_X as $valor) {
			$ueasTrimX[$indice] = $this->boligrama2_m->traer_ueas($valor['ueas_idueas']);
			$indice++;	
		}
		
		$indice=1;
		foreach ($materias_lic_XI as $valor) {
			$ueasTrimXI[$indice] = $this->boligrama2_m->traer_ueas($valor['ueas_idueas']);
			$indice++;	
		}
		
		$indice=1;
		foreach ($materias_lic_XII as $valor) {
			$ueasTrimXII[$indice] = $this->boligrama2_m->traer_ueas($valor['ueas_idueas']);
			$indice++;	
		}		
		foreach ($datos_ueas_cursadas as $value) {
			$sumaCreditos=$sumaCreditos+$value[1]['creditos'];
		}

		$indice=1;
		foreach ($datos_ueas_cursadas as $value) {
			$ueas_cursadas[$indice]=$value[1]['nombre'];
			$indice++;
		}

        $datos = Array(
			'ueas_cursadas' => $ueas_cursadas,
			'sumaCreditos' => $sumaCreditos,
			'ueasTrimI' => $ueasTrimI,
			'ueasTrimII' => $ueasTrimII,
			'ueasTrimIII' => $ueasTrimIII,
			'ueasTrimIV' => $ueasTrimIV,
			'ueasTrimV' => $ueasTrimV,
			'ueasTrimVI' => $ueasTrimVI,
			'ueasTrimVII' => $ueasTrimVII,
			'ueasTrimVIII' => $ueasTrimVII,
			'ueasTrimIX' => $ueasTrimIX,
			'ueasTrimX' => $ueasTrimX,
			'ueasTrimXI' => $ueasTrimXI,
			'ueasTrimXII' => $ueasTrimXII
		);
		
        $this->load->view('boligrama2_v');
    }

}

?>