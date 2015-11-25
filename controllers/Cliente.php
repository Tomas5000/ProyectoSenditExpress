<?php
	namespace controllers;	
	use libs\Controller;

	class Cliente extends Controller {

		public function __construct(){
			parent::__construct();
			$this->loadModel();
		}



		public function listarCliente(){

			$cliente = $this->model->listarCliente();
			$this->view->render(explode("\\",get_class($this))[1], "listarCliente", $cliente, $this->getErrores());


		}


		public function nuevoCliente($params=array()){
			//Llamando al metodo del modelo

			if(isset($params['rfc']) && isset($params['nombre']) && isset($params['apellidos']) && isset($params['telefonos']) && isset($params['direccion']) && isset($params['email']) && isset($params['ife']) ){
				$this->crearCliente($params);
			}
			//Renderizando la vista asociada
			
			$this->view->render(explode("\\",get_class($this))[1], "nuevoCliente",$this->getErrores());
		}

		public function crearCliente($params){
			
		    $rfc = $params['rfc'];
		    $nombre = $params['nombre'];
		    $apellidos = $params['apellidos'];
		    $telefonos = $params['telefonos'];
		    $direccion = $params['direccion'];
		    $email = $params['email'];
		    $ife = $params['ife'];
		    


		      //if(!is_numeric($telefonos)){
		      //  $this->errores['telefonos']="Error solo se admiten Numeros";
		        
		   // }

		    if(count($this->errores) ==0 ){
		    	try{
		        	$this->model->crearCliente($rfc, $nombre, $apellidos ,$telefonos, $direccion, $email, $ife);
		    	}
		    	catch(\Exception $e){
					$this->errores['global']=$e->getMessage();
				}
		    }
				
		}

		
	}


?>