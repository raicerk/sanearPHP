<?php

class Sanear{

	#solo funciona en chrome
	public function xssproteccion($nivel){
		#nivel = 1 | Activa Proteccion
		#nivel = 0 | Desactiva Proteccion
		header("X-XSS-Protection:".$nivel." ");
	}

	protected function saneartexto($string){
		$sano = strip_tags($string);
		return $sano;
	}

	protected function sanearmail($email){
		$sano = filter_var($email,FILTER_SANITIZE_EMAIL);
		return $sano;
	}

	protected function sanearnumero($numero){
		$sano = filter_var($numero,FILTER_SANITIZE_NUMBER_INT);
		return $sano;
	}
}

class Datos extends Sanear{
	public function correo($correo){
		return Sanear::sanearmail($correo);
	}
	public function numeros($numero){
		return Sanear::sanearnumero($numero);
	}
}


?>