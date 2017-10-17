<?php

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

function generarId (){
  $usuarios = traerTodos();

  if (count($usuarios) == 0) {
    return 1;
  }
  $elUltimo = array_pop($usuarios);
  $id = $elUltimo['id'];
  return $id + 1;
}

function comprobarEmail($mail){
  $usuarios = traerTodos();
  foreach ($usuarios as $unUsuario) {
    if ($unUsuario['email'] == $mail) {
      return $unUsuario;
    }
  }

  return false;
}


function validarLogin($data){
  $errores = [];

  if (($data['email']) == '') {
    $errores['email'] = 'Che escribí el email!';
  } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
    $errores['email'] = 'Che escribí un email valido!';
  } else if (comprobarEmail($data['email']) == false) { // Busco el email que se está queriendo loguear, si no existe, tiro error
      $errores["email"] = "No existe el usuario";
    } else {
      $usuario = comprobarEmail($data['email']);
      if (password_verify($data["pass"], $usuario["pass"]) == false) {
        $errores["email"] = "La información ingresada es erronea. Verifica tus datos.";
      }
    }
  return $errores;
}

function loguear($usuario) {
   $_SESSION['userId'] = $usuario['id'];
}

function estaLogueado() {
  return isset($_SESSION['userId']);
}
