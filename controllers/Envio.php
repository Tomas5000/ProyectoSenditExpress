<?php
	namespace controllers;	
	use libs\Controller;

	class Envio extends Controller {

		public function __construct(){
			parent::__construct();
			$this->loadModel();
		}



		public function listarEnvio(){

			$envio = $this->model->listarEnvio();
			$this->view->render(explode("\\",get_class($this))[1], "listarEnvio", $envio, $this->getErrores());


		}



		public function nuevoEnvio($params=array()){
			//Llamando al metodo del modelo

			if(isset($params['rfcRem']) && isset($params['rfcDest']) && isset($params['idOperador']) && isset($params['folioEnvio'])
				&& isset($params['nGuia']) && isset($params['nCajas']) && isset($params['fRece']) && isset($params['fAprox'])
				&& isset($params['subtotal'])&& isset($params['iva'])&& isset($params['total'])&& isset($params['factura'])&& isset($params['formaPago'])
				&& isset($params['nCuenta'])&& isset($params['estado'])&& isset($params['estOri'])&& isset($params['estDest'])&& isset($params['qPaga'])
				&& isset($params['qRecibe'])&& isset($params['ifeRecibe'])&& isset($params['fReal']) ){
				$this->crearEnvio($params);
			}
			//Renderizando la vista asociada
			
			$this->view->render(explode("\\",get_class($this))[1], "nuevoEnvio",$this->getErrores());
		}

		public function crearEnvio($params){
			
		    $rfcRem = $params['rfcRem'];
		    $rfcDest = $params['rfcDest'];
		    $idOperador = $params['idOperador'];
		    $folioEnvio = $params['folioEnvio'];
		    $nGuia = $params['nGuia'];
		    $nCajas = $params['nCajas'];
		    $fRece = $params['fRece'];
		    $fAprox = $params['fAprox'];
		    $subtotal = $params['subtotal'];
		    $iva = $params['iva'];
		    $total = $params['total'];
		    $factura = $params['factura'];
		    $formaPago = $params['formaPago'];
		    $nCuenta = $params['nCuenta'];
		    $estado = $params['estado'];
		    $estOri = $params['estOri'];
		    $estDest = $params['estDest'];
		    $qPaga = $params['qPaga'];
		    $qRecibe = $params['qRecibe'];   
		    $ifeRecibe = $params['ifeRecibe'];
		    $fReal = $params['fReal'];
		  

		    //if(!is_numeric($idOperador)){
		      //  $this->errores['idOperador']="Se debe ingresar un Numero";
		        
		   // }

		    if(count($this->errores) ==0 ){
		    	try{
		        	$this->model->crearEnvio($rfcRem,$rfcDest,$idOperador,$folioEnvio,$nGuia,$nCajas,$fRece,$fAprox,$subtotal,$iva, $total,$factura,$formaPago,$nCuenta,$estado,$estOri,$estDest,$qPaga,$qRecibe,$ifeRecibe,$fReal);
		    	}
		    	catch(\Exception $e){
					$this->errores['global']=$e->getMessage();
				}
		    }
				
		}


		

		
	}


?>