<?php

require_once("usuario.php");


abstract class db {
//  NO LLEVA CONSTRUCTOR!!
	
  	public abstract function guardarUsuario(Usuario $usuario);
	public abstract function traerTodos();
  	public abstract function comprobarEmail($email);
	
}