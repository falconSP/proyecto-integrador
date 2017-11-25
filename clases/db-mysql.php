<?php

require_once("db.php");
require_once("usuario.php");

class Mysql extends db {
	
  private $conn;

//  constructor (fijarse si hay que poner password)
  public function __construct() {
	$dsn = 'mysql:host=localhost; dbname=EcommerceDB';
	$db_username = 'root';
	$db_password = '';

	try {
		$this->conn = new PDO($dsn, $db_username, $db_password);
	} catch(PDOException $e) {
		echo $e->getMessage();
	}

	if (isset($this->conn)) {
		$sql = "CREATE SCHEMA `EcommerceDB`";
		$this->conn->prepare($sql);
		$this->conn->exec($sql);
//		echo "<p>¡Se creo la DB bla bla!</p>";
	} else {
		echo "<p>No se pudo crear la DB</p>";
	}
  }
//  fin constructor
	
    public	function guardarUsuario(Usuario $usuario) {
	
		$query = $this->conn->prepare("Insert into users values(default, :name, :email, :age, :pass)");

		$query->bindValue(":name", $usuario->getName());
    	$query->bindValue(":email", $usuario->getEmail());
		$query->bindValue(":age", $usuario->getAge());
    	$query->bindValue(":pass", $usuario->getPass());   	
		$usuario->setId($id);
		
		$id = $this->conn->lastInsertId();
    	$query->execute();

    	return $usuario;

    }
	
	public function traerTodos() {
    	$query = $this->conn->prepare("Select * from users");
    	$query->execute();

    	$arrayDeArrays = $query->fetchAll();

        $arrayDeObjetos = [];

        foreach ($arrayDeArrays as $resultado) {
          $arrayDeObjetos[] = new Usuario($resultado["name"], $resultado["email"], $resultado["age"], $resultado["pass"], $resultado["id"]);
        }

        return $arrayDeObjetos;
    }
	
	public function comprobarEmail($email) {
  		$query = $this->conn->prepare("Select * from users where email = :email");
  		$query->bindValue(":email", $email);

  		$query->execute();

      	$resultado = $query->fetch();

      	if (!$resultado) {
        	return false;
      	}

  		return new Usuario($resultado["name"], $resultado["email"], $resultado["age"], $resultado["pass"], $resultado["id"]);
  	}

}