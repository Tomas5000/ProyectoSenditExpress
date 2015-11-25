<?php
	namespace controllers;	
	use libs\Controller;

	class Operador extends Controller {

		public function __construct(){
			parent::__construct();
			$this->loadModel();
		}



		public function listarOperador(){

			$operador = $this->model->listarOperador();
			$this->view->render(explode("\\",get_class($this))[1], "listarOperador", $operador, $this->getErrores());


		}


		

		public function nuevoOperador($params=array()){
			//Llamando al metodo del modelo

			if(isset($params['idOperador']) && isset($params['nombreOp']) && isset($params['apellidosOp']) && isset($params['placasVeh']) ){
				$this->crearOperador($params);
			}
			//Renderizando la vista asociada
			
			$this->view->render(explode("\\",get_class($this))[1], "nuevoOperador",$this->getErrores());
		}

		public function crearOperador($params){
			
		    $idOperador = $params['idOperador'];
		    $nombreOp = $params['nombreOp'];
		    $apellidosOp = $params['apellidosOp'];
		    $placasVeh = $params['placasVeh'];
		    
		   
		      //if(!is_numeric($telefonos)){
		      //  $this->errores['telefonos']="Error solo se admiten Numeros";
		        
		   // }

		    if(count($this->errores) ==0 ){
		    	try{
		        	$this->model->crearOperador($idOperador, $nombreOp, $apellidosOp ,$placasVeh);
		    	}
		    	catch(\Exception $e){
					$this->errores['global']=$e->getMessage();
				}
		    }
				
		}






		
	}


?>