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
    $errores['email'] = 'Escribí el email!';
	  
  } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
    $errores['email'] = 'Escribí un email valido!';
	  
  } else if (comprobarEmail($data['email']) == false) { // Busco el email que se está queriendo loguear, si no existe, tiro error
      $errores["email"] = "No existe el usuario";
	  
  } else if (($data['pass']) == ''){
	  $errores['pass'] = 'Escribí la contraseña!';
  
  } else {
    $usuario = comprobarEmail($data['email']);
	
    if (password_verify($data["pass"], $usuario["pass"]) == false) {
        $errores["email"] = 'La información ingresada es erronea. Verifica tus datos.';
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

// Recibe dos parámetros, el nombre el input de la imagen y el array de errores
	function guardarImagen($laImagen, $errores){
		if ($_FILES[$laImagen]['error'] == UPLOAD_ERR_OK) {
			// Capturo el nombre de la imagen, para obtener la extensión
			$nombreImagen = $_FILES[$laImagen]['name'];
			// Obtengo la extensión de la imagen
			$ext = pathinfo($nombreImagen, PATHINFO_EXTENSION);
			// Capturo el archivo temporal
			$archivoImagen = $_FILES[$laImagen]['tmp_name'];

			// Pregunto si la extensión es la deseada
			if ($ext == 'jpg' || $ext == 'jpeg' || $ext == 'png' || $ext == 'gif') {
				// Armo la ruta donde queda gurdada la imagen
				$rutaArchivo = dirname(__FILE__) . '/images/avatares/' . $_POST['email'] . '.' . $ext;

				// Subo la imagen definitivamente
				move_uploaded_file($archivoImagen, $rutaArchivo);
			} else {
				$errores['imagen'] = 'El formato tiene que ser JPG, JPEG, PNG o GIF';
			}
		} else {
			// Genero error si no se puede subir
			$errores['imagen'] = 'No se pudo subir la imagen';
		}

		return $errores;
	}

  function validarContacto($data){
  		$errores = [];

  		if (trim($data['nombreContacto']) == '') {
  			$errores['nombreContacto'] = 'Escribe tu nombre.';
  		} elseif (trim(count($data['nombreContacto'])) <= 6){
  			$errores['nombreContacto'] = 'Escribe tu nombre y apellido.';
  		}
  //		} elseif (is_numeric(trim($data['nombreContacto']))){
  //			$errores['nombreContacto'] = 'Tu nombre no puede contener números.';
  //		}


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
