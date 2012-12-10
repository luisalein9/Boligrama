<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Registro_c extends CI_Controller {
		
		public function __construct(){
				
			parent::__construct();
			
			$this->load->helper(array('html', 'url'));
			$this->load->model('registro_m'); //Cargando mi modelo
			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->form_validation->set_error_delimiters('<label class="error">', '</label>');
		}
		
		function index()	{           //Cargamos vista
		
			$datos['divisiones'] = $this->registro_m->trae_divisiones();
				
			/**Validación del formulario**/			
			$this->form_validation->set_rules('matriculaInput', 'matriculaInput', 'callback_matricula');
			$this->form_validation->set_rules('passInput', 'passInput', 'required');
			$this->form_validation->set_rules('pass2Input', 'pass2Input', 'matches[passInput]|required');
			$this->form_validation->set_rules('correoInput', 'correoInput', 'required');
			$this->form_validation->set_rules('divisionesDropdown[]', 'divisionesDropdown[]', 'callback_divisionesDropdown');
			$this->form_validation->set_rules('licenciaturasDropdown[]', 'licenciaturasDropdown[]', 'callback_licenciaturasDropdown');
			$this->form_validation->set_message('required', 'Campo obligatorio');
			$this->form_validation->set_message('matches', 'Contraseñas no coinciden');
			$this->form_validation->set_message('valid_email', 'Introduce una dirección de correo válida');
					
			
			if($this->form_validation->run()){
	

				$datos2['matricula'] = $_POST['matriculaInput'];
				$datos2['pass'] = $_POST['passInput'];
				$datos2['correo'] =$_POST['correoInput'];
				$datos2['creditos'] = 0;
				$datos2['licenciatura'] = $_POST['licenciaturasDropdown'];
				$registro_exitoso=$this->registro_m->inserta_alumno($datos2);
				
				if($registro_exitoso){
            		redirect('boligrama_c/mostrarBoligrama/'.$datos2['matricula']);
					
				}
			}
			else{
				$this->load->view('registro_v',$datos);
			}
			

		} //Fin de index
		
		function licenciaturas_c($division){

			header('Content-Type: application/x-json; charset=utf-8');
			echo(json_encode($this->registro_m->trae_licenciaturas($division)));
		}

		public function matricula($str){
			if ($str == '')
			{
				$this->form_validation->set_message('matricula', 'Campo obligatorio');
				return FALSE;
			}
			if(!(is_numeric($str))){
				$this->form_validation->set_message('matricula', 'Introduce una matricula válida');
				return FALSE;				
			}
			
			return TRUE;
		}

		public function divisionesDropdown($str){
			if ($str==0){
				$this->form_validation->set_message('divisionesDropdown', 'Escoja división');
				return FALSE;
			}			
			return TRUE;
		}
		
		public function licenciaturasDropdown($str){
			if ($str==0){
				$this->form_validation->set_message('licenciaturasDropdown', 'Escoja licenciatura');
				return FALSE;
			}			
			return TRUE;			
			
		}
	}//Fin de la clase
?>