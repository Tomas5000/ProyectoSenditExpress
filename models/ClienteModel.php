<?php
namespace models;

use libs\DBConexion;

class ClienteModel {
	public $rfc;
	public $nombre;
	public $apellidos;
	public $telefonos;
	public $direccion;
	public $email;
	public $ife;
	

	

	public function guardar(){
		
		$con = DBConexion::getInstance();
		$params = array(			
			$this->rfc,
			$this->nombre,
			$this->apellidos,
			$this->telefonos,
			$this->direccion,
			$this->email,
			$this->ife,
			
			);

		$sql1 = vsprintf("INSERT INTO cliente VALUES(%s, %s, %s,%s,%s, %s, %s);", $params);
		
		$con->executeUpdate(array($sql1));

	}


  public function listarCliente(){

  	$con =DBConexion::getInstance();
  	if(is_null($con)){
  		throw new Exception("error",1);
  	}

  	$cliente = $con ->executeQuery('SELECT * FROM cliente;', null,__NAMESPACE__.'\InventarioModel');

  	return $cliente;
  }


      public function crearCliente($rfc, $nombre, $apellidos,  $telefonos,$direccion, $email, $ife){
	
		$this->rfc=$rfc;
		$this->nombre = $nombre;
		$this->apellidos = $apellidos;
		$this->telefonos = $telefonos;
		$this->direccion =$direccion;
		$this->email = $email;
		$this->ife = $ife;
		
		
		
		$this->guardar();
	}











}

?>