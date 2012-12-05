<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	
	class Registro_c extends CI_Controller{
    
	    function __construct(){
	        parent::__construct();
			
			$this->load->helper(array('html', 'url'));
	        $this->load->model('registro_m'); // Load the model
			
	   	}

    function index(){
 		$this->load->view('registro_v');
    }
	
}
?>