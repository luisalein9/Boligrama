<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Divisiones_c extends CI_Controller {
	 
	function __construct(){
        parent::__construct();
        $this->load->helper(array('html', 'url'));
        $this->load->model('divisiones_m'); // Load the model
    }


	public function index(){
		$this->load->view('divisiones_v');	
		
		$lDivisiones=$this->Divisiones_m->obtenLDivisiones();
		print_r($lDivisiones);
	}	
}	