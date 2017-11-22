<?php

require_once("usuario.php");

class Auth {
	
//  constructor
	public function __construct() {
    session_start();

		if (!isset($_SESSION["logueado"]) && isset($_COOKIE["logueado"])) {
			$_SESSION["logueado"] = $_COOKIE["logueado"];
        }
  	}
//  fin constructor	

	public function loguear(Usuario $usuario) {
		$_SESSION['userId'] = $usuario['id'];
	}

	public function estaLogueado() {
		return isset($_SESSION['userId']);
	}
	
}