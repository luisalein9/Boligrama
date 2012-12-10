<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	
	class Loguin_c extends CI_Controller{
    
	    function __construct(){
	        parent::__construct();
			
			$this->load->helper(array('html', 'url'));
	        $this->load->model('loguin_m'); // Load the model
			$this->load->library('email');
	        			
	   	}

    function index( $msg = NULL ){
 		$data['msg'] = $msg;
        $this->load->view('loguin_v', $data);
    }
	
	
	 public function process(){
        $result = $this->loguin_m->validate();// Validate the user can login 
		if(! $result['valida']){ // Now we verify the result
           	$msg = '<label class="error">Nombre de usuario y/o contraseña incorrectos</label><br>';
			$this->index($msg);
			
        }else{
            redirect('boligrama_c/mostrarBoligrama/'.$result['matricula']);
        }        
    }

    function recuperar(){
    	if($_POST != NULL){
    			$pass=$this->loguin_m->trae_pass($_POST['correoInput']);
				if($pass != -1){
					//Configuración para mandar el correo
					$config['protocol'] = 'mail';
					$config['wordwrap'] = FALSE;				
					$config['mailtype']='html';
	 				$config_email['send_multipart'] = FALSE;  
					$this->email->initialize($config);
					$this->email->from('boliuami@gmail.com', 'BoliUAMI');
					$this->email->to($_POST['correoInput']);
					$this->email->subject('Recuperación de contraseña');
					$msj='Su contraseña de BoliUAMI es '.$pass;			
					$this->email->message($msj);				
					$this->email->send();
					echo "<script>
					alert('Tu contraseña se ha enviado a tu correo')
					window.close()</script>";
						
					//echo $this->email->print_debugger();
				}else{
					echo "<script>
					alert('El correo no existe en la base de datos')
					window.close()
					</script>";
				}    		
		}else{
        	$this->load->view('recupera_pass_v');
		}
    }
}
?>