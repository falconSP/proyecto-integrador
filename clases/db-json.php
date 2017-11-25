<?php

require_once("db.php");


class Json extends db{
	
	private $arch;

//  constructor
	public function __construct() {
    $this->arch = "usuarios.json";
  }
//  fin constructor	
	
//  escribirla porque db tiene la esta funcion abstracta
function traerTodos(){
  $archivo = file_get_contents("usuarios.json");

    $usuariosJSON = explode(PHP_EOL, $archivo);
    array_pop($usuariosJSON);
    $usuariosFinal = [];
    foreach ($usuariosJSON as $usuario) {
      $usuariosFinal[] = json_decode($usuario, true);
    }

  return $usuariosFinal;
}

//  escribirla porque db tiene la esta funcion abstracta
public function comprobarEmail($mail){
  $usuarios = traerTodos();
  foreach ($usuarios as $unUsuario) {
    if ($unUsuario['email'] == $mail) {
      return $unUsuario;
    }
  }
  return false;
}
	
//  escribirla porque db tiene la esta funcion abstracta
  public function guardarUsuario(Usuario $usuario) {
    
  }
	
}