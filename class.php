<?php

class Sanear{

	# Funcion no compatible con Firefox
	public function xssproteccion($nivel){
		#nivel = 1 | Activa Proteccion
		#nivel = 0 | Desactiva Proteccion
		header("X-XSS-Protection:".$nivel." ");
	}

	protected function saneartextohtml($string, $cadenahtml=''){
		$sano = strip_tags($string,$cadenahtml);
		return $sano;
	}

	protected function sanearmail($mail){
		$sano = filter_var($mail,FILTER_SANITIZE_EMAIL);
		return $sano;
	}

	protected function sanearnumero($numero){
		$sano = filter_var($numero,FILTER_SANITIZE_NUMBER_INT);
		return $sano;
	}

	protected function sanearurl($url){
		$sano = filter_var($url, FILTER_SANITIZE_URL);
		return $sano;
	}
}


class Validar{
	
	public function validarmail($mail){
		$validado = filter_var($mail, FILTER_VALIDATE_EMAIL);
		return $validado;
	}
}

###################################################################################
############################ Ejemplos de Uso en Clases ############################
###################################################################################

class Datos extends Sanear{
	public function correo($correo){
		return Sanear::sanearmail($correo);
	}
	public function numeros($numero){
		return Sanear::sanearnumero($numero);
	}
	public function texto($texto, $html=""){
		return Sanear::saneartextohtml($texto, $html);
	}
	public function url($url){
		return Sanear::sanearurl($url);
	}
}


?>