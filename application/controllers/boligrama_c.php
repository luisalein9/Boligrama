
<?php if ( ! defined('BASEPATH') ) exit('No direct script access allowed'); 
	 
	
class Boligrama_c extends CI_Controller {
    
    function __construct() {
        
        parent::__construct();
        
        $this->load->helper(array('html', 'url'));
        
        //$this->load->library(array('traer_catalogos_l'));
        
        $this->load->model('boligrama_m');
        
    }

    public function mostrarBoligrama ($matricula){

    	$datos['licenciaturaId'] = $this->boligrama_m->traer_boligrama_m($matricula);

        $this->load->view('boligrama_v', $datos);
    }

}

?>