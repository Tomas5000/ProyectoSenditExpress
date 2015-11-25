<?php
namespace models;

use libs\DBConexion;

class EnvioModel {
	public $rfcRem;
	public $rfcDest;
	public $idOperador;
	public $folioEnvio;
	public $nGuia;
	public $nCajas;
	public $fRece;
	public $fAprox;
	public $subtotal;
	public $iva;
	public $total;
	public $factura;
	public $formaPago;
	public $nCuenta;
	public $estado;
	public $estOri;
	public $estDest;
	public $qPaga;
	public $qRecibe;
    public $ifeRecibe;
	public $fReal;
	
	
	

	//public function __construct()
	//{
	
	//	$this->costo_faltante = 0.0;
	
	//}

	

	public function guardar(){
		//Solicito un objeto conexion, usando el patron Singleton
		$con = DBConexion::getInstance();
		$params = array(			
			$this->rfcRem,
			$this->rfcDest,
			$this->idOperador,
			$this->folioEnvio,
			$this->nGuia,
			$this->nCajas,
			$this->fRece,
			$this->fAprox,
			$this->subtotal,
			$this->iva,
			$this->total,
			$this->factura,
			$this->formaPago,
			$this->nCuenta,
			$this->estado,
			$this->estOri,
			$this->estDest,
			$this->qPaga,
			$this->qRecibe,
			$this->ifeRecibe,
			$this->fReal,
		
			
			
			);

		$sql1 = vsprintf("INSERT INTO envio VALUES(%s, %s, %s,%s,%s, %s, %s,%s,%s, %s, %s,%s,%s, %s, %s,%s,%s, %s, %s,%s,%s);", $params);
		
		$con->executeUpdate(array($sql1));

	}


  public function listarEnvio(){

  	$con =DBConexion::getInstance();
  	if(is_null($con)){
  		throw new Exception("error",1);
  	}

  	$envio = $con ->executeQuery('SELECT * FROM envio;', null,__NAMESPACE__.'\EnvioModel');

  	return $envio;
  }

 public function crearEnvio($rfcRem, $rfcDest,$idOperador, $folioEnvio, $nGuia, $nCajas, $fRece,$fAprox,$subtotal,$iva, $total,$factura,$formaPago, $nCuenta,$estado,$estOri,$estDest,$qPaga,$qRecibe,$ifeRecibe,$fReal){
		

		$this->rfcRem=$rfcRem;	
		$this->rfcDest = $rfcDest;
		$this->idOperador = $idOperador;
		$this->folioEnvio= $folioEnvio;
		$this->nGuia =$nGuia;
		$this->nCajas = $nCajas;
		$this->fRece = $fRece;
		$this->fAprox = $fAprox;
		$this->subtotal = $subtotal;
		$this->iva =$iva;
		$this->total = $total;
		$this->factura = $factura;
		$this->formaPago = $formaPago;
		$this->nCuenta = $nCuenta;
		$this->estado =$estado;
		$this->estOri = $estOri;
		$this->estDest = $estDest;
		$this->qPaga = $qPaga;
		$this->qRecibe = $qRecibe;
		$this->ifeRecibe =$ifeRecibe;
		$this->fReal = $fReal;
	
		

		$this->guardar();
	}






}

?>