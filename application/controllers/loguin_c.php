<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	
	class Loguin_c extends CI_Controller{
    
	    function __construct(){
	        parent::__construct();
			
			$this->load->helper(array('html', 'url'));
	        $this->load->model('loguin_m'); // Load the model
			
	   	}

    function index( $msg = NULL ){
 		$data['msg'] = $msg;
        $this->load->view('loguin_v', $data);
    }
	
	
	 public function process(){
        $result = $this->loguin_m->validate();// Validate the user can login 
		if(! $result['valida']){ // Now we verify the result
           	$msg = '<font color=red>Nombre de usuario y/o contraseña incorrectos</font><br/>';
			$this->index($msg);
			
        }else{
            redirect('boligrama_c/mostrarBoligrama/'.$result['matricula']);
        }        
    } 
}
?>