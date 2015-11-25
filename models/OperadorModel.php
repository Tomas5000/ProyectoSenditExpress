<?php
namespace models;

use libs\DBConexion;

class OperadorModel {
	public $idOperador;
	public $nombreOp;
	public $apellidosOp;
	public $placasVeh;
	
	



	public function guardar(){
		//Solicito un objeto conexion, usando el patron Singleton
		$con = DBConexion::getInstance();
		$params = array(			
			$this->idOperador,
			$this->nombreOp,
			$this->apellidosOp,
			$this->placasVeh,
			
			
			);

		$sql1 = vsprintf("INSERT INTO operador VALUES(%s, %s, %s,%s);", $params);
		
		$con->executeUpdate(array($sql1));

	}


  public function listarOperador(){

  	$con =DBConexion::getInstance();
  	if(is_null($con)){
  		throw new Exception("error",1);
  	}

  	$operador = $con ->executeQuery('SELECT * FROM operador;', null,__NAMESPACE__.'\OperadorModel');

  	return $operador;
  }



      public function crearOperador($idOperador, $nombreOp, $apellidosOp, $placasVeh){
	
		$this->idOperador=$idOperador;
		$this->nombreOp = $nombreOp;
		$this->apellidosOp = $apellidosOp;
		$this->placasVeh = $placasVeh;
		
		
		
		
		$this->guardar();
	}











}

?>