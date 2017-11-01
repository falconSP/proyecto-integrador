<?php

$dsn = 'mysql:host=localhost;dbname=ecommerce_db;';
$db_user = 'root';
$db_pass = 'root';
$opciones = array( PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION );

try {
	$db = new PDO($dsn, $db_user, $db_pass, $opciones);
}catch( PDOException $e ){
	echo $e->getMessage();
}


?>
