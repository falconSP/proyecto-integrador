<?php

class Usuario {
	
  private $id;
  private $name;
  private $email;
  private $age;
  private $pass;
  
//  constructor
  public function __construct($name, $email, $age, $pass, $id = null) {
    if ($id == null) {
      // Viene por POST
      $this->pass = password_hash($pass, PASSWORD_DEFAULT);
    }
    else {
      // Viene de la base
      $this->pass = $pass;
    }
	
	$this->name = $name;
    $this->email = $email;
    $this->age = $age;
    $this->id = $id;
  }	
//  fin constructor
  
	public function getId() {
		return $this->id;
    }
	public function setId($id) {
    	$this->id = $id;
    }
	
	
  	public function getName() {
    	return $this->name;
  	}
  	public function setName($name) {
    	$this->name = $name;
  	}
	
	
  	public function getEmail() {
    	return $this->email;
  	}
  	public function setEmail($email) {
	  	$this->email = $email;
  	}
  

  	public function getPass() {
    	return $this->pass;
  	}	
  	public function setPass($pass) {
    	$this->pass = $pass;
  	}
  
	
  	public function getAge() {
    	return $this->age;
  	}
  	public function setAge($age) {
    	$this->age = $age;
  	}
	
	public function guardarImagen($laImagen, $errores){
		if ($_FILES[$laImagen]['error'] == UPLOAD_ERR_OK) {
			
			$nombreImagen = $_FILES[$laImagen]['name'];
			
			$ext = pathinfo($nombreImagen, PATHINFO_EXTENSION);
			
			$archivoImagen = $_FILES[$laImagen]['tmp_name'];
	
			
			if ($ext == 'jpg' || $ext == 'jpeg' || $ext == 'png' || $ext == 'gif') {
				$rutaArchivo = realpath(dirname(__FILE__) . '/..') . '/images/avatares/' . $this->email . '.' . $ext;

				move_uploaded_file($archivoImagen, $rutaArchivo);
			} else {
				$errores['imagen'] = 'El formato tiene que ser JPG, JPEG, PNG o GIF';
			}
		} else {
			$errores['imagen'] = 'No se pudo subir la imagen';
		}

		return $errores;
	}
	
	
	
	
}