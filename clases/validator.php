<?php
//require_once('db-mysql.php');

class Validator {
//  NO LLEVA CONSTRUCTOR!!
	public function validarLogin($data, $db){

		$errores = [];

	    if (($data['email']) == '') {
			$errores['email'] = 'Escribí el email!';

	  	} elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
			$errores['email'] = 'Escribí un email valido!';

	  	} else if ($db->comprobarEmail($data['email']) == false) { 
		  	$errores["email"] = "No existe el usuario";

	  	} else if (($data['pass']) == ''){
		  	$errores['pass'] = 'Escribí la contraseña!';

	  	} else {
			$usuario = $db->comprobarEmail($data['email']);

			if (password_verify($data["pass"], $usuario->getPass()) == false) {
				$errores["email"] = 'La información ingresada es erronea. Verifica tus datos.';
			}
		}

		return $errores;
  }
	
  public function validarContacto($data){
  		$errores = [];

  		if (trim($data['nombreContacto']) == '') {
  			$errores['nombreContacto'] = 'Escribe tu nombre.';
  		}
  		if (trim($data['mailContacto']) == '') {
  			$errores['mailContacto'] = 'Escribe tu correo.';
  		} elseif (!filter_var($data['mailContacto'], FILTER_VALIDATE_EMAIL)) {
  			$errores['mailContacto'] = 'Correo inválido.';
  		}

  		if (trim($data['asuntoContacto']) == '') {
  			$errores['asuntoContacto'] = 'Escribe un asunto.';
  		}

  	return $errores;
  }	
	
}