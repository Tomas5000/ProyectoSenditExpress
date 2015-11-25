<?php
    namespace controllers;
    use libs\Controller;

class Usuario extends Controller{
	public function index(){
		//Renderizando la vista asociada
		$a = explode("\\", get_class($this))[1];
		echo $a;
		$this->errores[0] = "erroor";
		$this->view->render($a, "index",$this->getErrores());
	}
	
}
?>