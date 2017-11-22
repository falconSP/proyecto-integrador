<?php
//en la linea 3 habra que modificar el link para que ande!!
require_once('funciones.php');

if(isset($_POST['crearDB'])){
	$dsn = 'mysql:host=localhost;'; // Sin db name
	$db_username = 'root';
	$db_password = ''; //habra que modificar el password dependiendo de la conexion de cada pc

	try {
		$conn = new PDO($dsn, $db_username, $db_password);
	} catch(PDOException $e) {
		echo $e->getMessage();
	}

	if (isset($conn)) {
		$sql = "CREATE SCHEMA `EcommerceDB`";
		$conn->prepare($sql);
		$conn->exec($sql);
		echo "<p>¡Se creo la DB!</p>";
	} else {
		echo "<p>No se pudo crear la DB</p>";
	}

//creamos la tabla
}elseif (isset($_POST['crearTable'])) {
	$dsn = 'mysql:host=localhost;dbname=EcommerceDB;';
	$db_username = 'root';
	$db_password = '';

	try {
		$conn = new PDO($dsn, $db_username, $db_password);
	} catch(PDOException $e) {
		echo $e->getMessage();
	}

	if (isset($conn)) {
		$sql =

		'CREATE TABLE `EcommerceDB`.`users` (
		  `id` INT NOT NULL AUTO_INCREMENT,
		  `name` VARCHAR(40) NOT NULL,
			`email` VARCHAR(40) NOT NULL,
			`age` INT NOT NULL,
			`pass` VARCHAR(100) NOT NULL,
		  PRIMARY KEY (`id`)); ';


		$conn->prepare($sql);
		$conn->exec($sql);
		echo "<p>¡Tabla creada exitosamente!</p>";
	} else {
		echo "<p>No se pudo crear la Tabla</p>";
	}
}

//  a partir de aca es para Migrar los datos del json a Mysql
elseif (isset($_POST['migrarDatos'])) {
	$dsn = 'mysql:host=localhost;dbname=EcommerceDB;';
	$db_username = 'root';
	$db_password = '';

	try {
		$conn = new PDO($dsn, $db_username, $db_password);
	} catch(PDOException $e) {
		echo $e->getMessage();
	}

	if (isset($conn)) {
//traigo los usuarios del json usando la funcion del 1er archivo de funciones y las dejo en la variable $usuarios
		$usuarios = traerTodos();

		foreach ($usuarios as $unUsuario) {

// En $sql lo que hice fue unir el string con las variables que me iba dando el foreach con la variable $usuarios para agregar individualmente a cada uno
			$sql = "USE EcommerceDB; INSERT INTO users(name, email, age, pass)
			VALUES (:name, :email, :age, :pass)";
			$stmt= $conn->prepare($sql);
			$stmt->bindValue(":name", $unUsuario['name']);
			$stmt->bindValue(":email", $unUsuario['email']);
			$stmt->bindValue(":age", $unUsuario['age']);
			$stmt->bindValue(":pass", $unUsuario['pass']);
			$stmt->execute();
		}

		echo "<p>¡Datos migrados exitosamente!</p>";
	} else {
		echo "<p>No se lograron migrar los datos</p>";
	}
}


function hayConexion(){
$dsn = 'mysql:host=localhost;dbname=EcommerceDB;';
$db_username = 'root';
$db_password = '';

try {
	$conn = new PDO($dsn, $db_username, $db_password);
} catch(PDOException $e) {
	echo $e->getMessage();
}
return $conn;
}

function Consulta(){
	$dsn = 'mysql:host=localhost;dbname=EcommerceDB;';
	$db_username = 'root';
	$db_password = '';
	$conn = new PDO($dsn, $db_username, $db_password);
	
	$query = $conn->query("SELECT * FROM users");
	
	return $query;
}
