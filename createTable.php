<?php


$dbhost = 'localhost:3036';
$dbuser = 'root';
$dbpass = 'rootpassword';
$conn = mysql_connect($db);

if(! $conn ){
  die('Could not connect: ' . mysql_error());
}

echo 'Connected successfully';
$sql = 'CREATE Database ecommerce_db';

// PRUEBA
//      'CREATE TABLE employee( '.
//      'id INT NOT NULL AUTO_INCREMENT, '.
//      'name VARCHAR(40) NOT NULL, '.
//      'email VARCHAR(40) NOT NULL, '.
//      'age INT NOT NULL, '.
//      'pass VARCHAR(100)'
//      'primary key ( id ))';
//       mysql_select_db('ecommerce_db');




$retval = mysql_query( $sql, $conn );


if(! $retval ){
  die('Could not create database: ' . mysql_error());
}

echo "Database ecommerce_db created successfully";

mysql_close($conn);

?>
